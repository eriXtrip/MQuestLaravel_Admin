 // Predefined colors for categories
  const predefinedColors = [
    { name: 'Purple', value: '#6f42c1' },
    { name: 'Blue', value: '#2196F3' },
    { name: 'Cyan', value: '#0dcaf0' },
    { name: 'Green', value: '#4CAF50' }, 
    { name: 'Yellow', value: '#FFC107' },
    { name: 'Orange', value: '#fd7e14' },
    { name: 'Red', value: '#dc3545' },
    { name: 'Pink', value: '#d63384' },
    { name: 'Indigo', value: '#6610f2' },
    { name: 'Teal', value: '#20c997' },
    { name: 'Gray', value: '#607D8B' }
  ];

  let categories = [
    { id: 1, name: 'Mathematics', color: '#FFC107' },
    { id: 2, name: 'Science', color: '#4CAF50' },
    { id: 3, name: 'English', color: '#2196F3' },
    { id: 4, name: 'Filipino', color: '#607D8B' }
  ];

  let tasks = [
    {
      id: 1,
      title: "Team Meeting",
      description: "Discuss Q4 goals and project timelines.",
      date: "2025-10-27",
      categoryId: 3,
      status: "Pending",
      priority: "High"
    },
    {
      id: 2,
      title: "Client Proposal",
      description: "Finalize and send the client proposal document.",
      date: "2025-10-28",
      categoryId: 1,
      status: "In Progress",
      priority: "Medium"
    },
    {
      id: 3,
      title: "Dentist Appointment",
      description: "Annual dental checkup.",
      date: "2025-10-30",
      categoryId: 2,
      status: "Completed",
      priority: "Low"
    },
    {
      id: 4,
      title: "Project Deadline",
      description: "Submit final project deliverables.",
      date: "2025-11-05",
      categoryId: 4,
      status: "Pending",
      priority: "High"
    }
  ];

  // DOM Elements
  const taskManagerPanel = document.getElementById('taskManagerPanel');
  const openTaskManagerBtn = document.getElementById('openTaskManager');
  const closeTaskManagerBtn = document.getElementById('closeTaskManager');
  const taskForm = document.getElementById('taskForm');
  const categoryModal = document.getElementById('taskCategoryModal');
  const manageCategoriesBtn = document.getElementById('manageCategoriesBtn');
  const categoryList = document.getElementById('categoryList');
  const colorPicker = document.getElementById('colorPicker');
  const newCategoryName = document.getElementById('newCategoryName');
  const addCategoryBtn = document.getElementById('addCategoryBtn');
  const detailTitle = document.getElementById('detailTitle');
  const detailDescription = document.getElementById('detailDescription');
  const detailDate = document.getElementById('detailDate');
  const detailCategory = document.getElementById('detailCategory');
  const detailStatus = document.getElementById('detailStatus');
  const detailPriority = document.getElementById('detailPriority');
  const taskDetailModal = document.getElementById('taskDetailModal');

  let currentDate = new Date();
  renderCalendar(currentDate);
  renderCategorySelect(); // ✅ Populate category dropdown
  updateCurrentDate();

  const today = new Date().toISOString().split('T')[0];
  document.getElementById('taskDate').value = today;

  // Event Listeners
  openTaskManagerBtn?.addEventListener('click', () => {
    taskManagerPanel.classList.add('open');
  });

  closeTaskManagerBtn?.addEventListener('click', () => {
    taskManagerPanel.classList.remove('open');
  });

  document.addEventListener('click', (e) => {
    if (!taskManagerPanel.contains(e.target) && e.target !== openTaskManagerBtn) {
      taskManagerPanel.classList.remove('open');
    }
  });

  manageCategoriesBtn?.addEventListener('click', () => {
    const modal = new bootstrap.Modal(categoryModal);
    modal.show();
    renderCategories();
    renderColorPicker();
  });

  taskForm?.addEventListener('submit', (e) => {
    e.preventDefault();

    const title = document.getElementById('taskTitle').value;
    const date = document.getElementById('taskDate').value;
    const categoryId = parseInt(document.getElementById('taskCategory').value);
    const status = document.getElementById('taskStatus').value;
    const priority = document.getElementById('taskPriority').value;
    const description = document.getElementById('taskDescription-1').value || '';

    const newTask = {
      id: tasks.length + 1,
      title,
      description,
      date,
      categoryId,
      status,
      priority
    };

    tasks.push(newTask);
    taskForm.reset();
    document.getElementById('taskDate').value = today;
    renderCalendar(currentDate);
    renderCategorySelect();

    showToast('success', 'Success', 'Task created successfully!');
  });

  addCategoryBtn?.addEventListener('click', () => {
    const name = newCategoryName.value.trim();
    if (!name) {
      showToast('error', 'Validation Error', 'Please enter a category name');
      return;
    }
    if (categories.some(cat => cat.name.toLowerCase() === name.toLowerCase())) {
      showToast('error', 'Validation Error', 'Category name already exists');
      return;
    }
    const selectedColor = document.querySelector('.color-option.selected');
    if (!selectedColor) {
      showToast('error', 'Validation Error', 'Please select a color');
      return;
    }
    const color = selectedColor.dataset.color;
    const newCategory = {
      id: categories.length > 0 ? Math.max(...categories.map(c => c.id)) + 1 : 1,
      name: name,
      color: color
    };
    categories.push(newCategory);
    newCategoryName.value = '';
    if (selectedColor) selectedColor.classList.remove('selected');
    renderCategories();
    renderColorPicker();
    renderCategorySelect();
      
    showToast('success', 'Success', 'Category added successfully!');
  });

  colorPicker?.addEventListener('click', (e) => {
    if (e.target.classList.contains('color-option')) {
      document.querySelectorAll('.color-option.selected').forEach(el => el.classList.remove('selected'));
      e.target.classList.add('selected');
    }
  });

  categoryList?.addEventListener('click', (e) => {
    if (e.target.closest('.delete-category')) {
      const categoryId = parseInt(e.target.closest('.delete-category').dataset.categoryId);
      const isUsed = tasks.some(task => task.categoryId === categoryId);
      if (isUsed) {
        showToast('error', 'Action Failed', 'Cannot delete category. It is used by existing tasks.');
        return;
      }
      categories = categories.filter(cat => cat.id !== categoryId);
      renderCategories();
      renderColorPicker();
      renderCategorySelect();
      showToast('success', 'Success', 'Category deleted successfully!');
    }
  });

  document.getElementById('prevMonth')?.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
  });

  document.getElementById('nextMonth')?.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
  });

  // Functions
  function renderCategorySelect() {
    const select = document.getElementById('taskCategory');
    select.innerHTML = '';
    categories.forEach(category => {
      const option = document.createElement('option');
      option.value = category.id;
      option.textContent = category.name;
      select.appendChild(option);
    });
  }

  function renderCategories() {
    categoryList.innerHTML = '';
    categories.forEach(category => {
      const categoryItem = document.createElement('div');
      categoryItem.className = 'd-flex justify-content-between align-items-center py-2';
      categoryItem.innerHTML = `
        <div class="d-flex align-items-center">
          <div class="me-2" style="width: 20px; height: 20px; background-color: ${category.color}; border-radius: 50%;"></div>
          <span>${category.name}</span>
        </div>
        <button class="btn btn-sm btn-outline-danger delete-category" data-category-id="${category.id}">
          <svg class="bi bi-trash3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"></path>
</svg>
        </button>
      `;
      categoryList.appendChild(categoryItem);
    });
  }

  function renderColorPicker() {
    colorPicker.innerHTML = '';
    const usedColors = categories.map(cat => cat.color);
    predefinedColors.forEach(color => {
      if (usedColors.includes(color.value)) return;
      const colorOption = document.createElement('div');
      colorOption.className = 'color-option d-inline-block me-2 mb-2';
      colorOption.style.width = '32px';
      colorOption.style.height = '32px';
      colorOption.style.borderRadius = '50%';
      colorOption.style.backgroundColor = color.value;
      colorOption.style.cursor = 'pointer';
      colorOption.style.border = '2px solid #dee2e6';
      colorOption.dataset.color = color.value;
      colorPicker.appendChild(colorOption);
    });
  }

  function renderCalendar(date) {
    const year = date.getFullYear();
    const month = date.getMonth();
    const monthNames = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"];
    document.getElementById('currentMonth').textContent = `${monthNames[month]} ${year}`;

    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const prevMonthDays = new Date(year, month, 0).getDate();
    const gridElement = document.getElementById('calendarGrid');
    gridElement.innerHTML = '';

    ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'].forEach(day => {
      const header = document.createElement('div');
      header.className = 'calendar-day-header';
      header.textContent = day;
      gridElement.appendChild(header);
    });

    for (let i = firstDay - 1; i >= 0; i--) {
      const dayElement = document.createElement('div');
      dayElement.className = 'calendar-day other-month';
      dayElement.innerHTML = `<div class="day-number">${prevMonthDays - i}</div>`;
      gridElement.appendChild(dayElement);
    }

    for (let day = 1; day <= daysInMonth; day++) {
      const dayElement = document.createElement('div');
      dayElement.className = 'calendar-day';
      dayElement.innerHTML = `<div class="day-number">${day}</div>`;
      const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
      const dayTasks = tasks.filter(task => task.date === dateStr);
      dayTasks.forEach(task => {
        const category = categories.find(cat => cat.id === task.categoryId);
        if (category) {
          const indicator = document.createElement('span');
          indicator.className = 'task-indicator';
          indicator.style.backgroundColor = category.color;
          indicator.title = task.title;
          indicator.dataset.taskId = task.id;
          dayElement.appendChild(indicator);
        }
      });
      dayElement.addEventListener('click', () => {
        if (dayTasks.length > 0) showTaskDetail(dayTasks[0]);
      });
      gridElement.appendChild(dayElement);
    }

    const totalCells = 42;
    const daysAdded = firstDay + daysInMonth;
    const nextMonthDays = totalCells - daysAdded;
    for (let day = 1; day <= nextMonthDays; day++) {
      const dayElement = document.createElement('div');
      dayElement.className = 'calendar-day other-month';
      dayElement.innerHTML = `<div class="day-number">${day}</div>`;
      gridElement.appendChild(dayElement);
    }
  }

  function showTaskDetail(task) {
    detailTitle.textContent = task.title;
    detailDescription.textContent = task.description || 'No description provided.';
    const date = new Date(task.date);
    detailDate.textContent = date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });

    const category = categories.find(cat => cat.id === task.categoryId);
    if (category) {
      detailCategory.textContent = category.name;
      detailCategory.className = 'badge px-2 py-1 rounded';
      detailCategory.style.backgroundColor = category.color + '20';
      detailCategory.style.color = category.color;
    }

    detailStatus.textContent = task.status;
    detailStatus.className = `badge px-2 py-1 rounded status-task-${task.status.toLowerCase().replace(' ', '-')}`;

    detailPriority.textContent = task.priority;
    detailPriority.className = `badge px-2 py-1 rounded priority-${task.priority.toLowerCase()}`;
    
    const modal = new bootstrap.Modal(taskDetailModal);
    modal.show();
  }

  function updateCurrentDate() {
    const now = new Date();
    document.getElementById('current-date-today').textContent = now.toLocaleDateString('en-US', {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    });
  }

  // Initial render
  renderCategorySelect();