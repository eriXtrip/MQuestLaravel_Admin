// MQUESTADMINLARAVEL/public/assets/js/script.js

document.addEventListener("DOMContentLoaded", function () {
  // ==========================================================
  // 1. Helper: Get Element Safely
  // ==========================================================
  function $(selector) {
    return document.querySelector(selector);
  }
  function $$(selector) {
    return document.querySelectorAll(selector);
  }

  // ==========================================================
  // 2. Sidebar Toggle & Responsive Logic
  // ==========================================================
  const toggleButton = $("#toggle");
  const sidebar = $(".sidebar");
  const mainContent = $(".main-content");

  function setSidebarDefault() {
    const isMobile = window.innerWidth <= 768;
    if (isMobile) {
      sidebar.classList.remove("active");
      sidebar.classList.add("hidden");
      mainContent.classList.add("full-width");
    } else {
      sidebar.classList.remove("hidden");
      sidebar.classList.remove("active");
      mainContent.classList.remove("full-width");
    }
  }

  toggleButton?.addEventListener("click", function () {
    const isMobile = window.innerWidth <= 768;
    if (isMobile) {
      sidebar.classList.toggle("active");
    } else {
      sidebar.classList.toggle("hidden");
      mainContent.classList.toggle("full-width");
    }
  });

  document.addEventListener("click", function (event) {
    const isClickInsideSidebar = sidebar?.contains(event.target);
    const isClickToggle = toggleButton?.contains(event.target);
    const isMobile = window.innerWidth <= 768;

    if (!isClickInsideSidebar && !isClickToggle && isMobile && sidebar?.classList.contains("active")) {
      sidebar.classList.remove("active");
    }
  });

  window.addEventListener("load", setSidebarDefault);
  window.addEventListener("resize", setSidebarDefault);

  // ==========================================================
  // 3. Activity Log & Filtering
  // ==========================================================
  document.querySelectorAll('.activity-log-item').forEach(item => {
        item.addEventListener('click', function (e) {
          // Prevent toggle if clicking inside details
          if (e.target.closest('.detail-label')) return;

          this.classList.toggle('expanded');
          const details = this.querySelector('.activity-details');
          details.style.display = details.style.display === 'block' ? 'none' : 'block';
        });
      });

  const searchInput = $("#searchActivity");
  const filterType = $("#filterActType");
  const filterDate = $("#filterDate");
  const items = $$(".activity-log-item");

  function filterActivities() {
    const searchValue = searchInput?.value.toLowerCase() || "";
    const typeValue = filterType?.value || "";
    const dateValue = filterDate?.value || "";
    const now = new Date();

    items.forEach(item => {
      const searchContent = item.getAttribute("data-search")?.toLowerCase() || "";
      const itemType = item.getAttribute("data-category");
      const timestampStr = item.getAttribute("data-timestamp");
      const logDate = timestampStr ? new Date(timestampStr) : null;

      if (dateValue && (!logDate || isNaN(logDate.getTime()))) {
        item.style.display = "none";
        return;
      }

      let matchesDate = true;
      if (dateValue && logDate) {
        const diffInDays = (now - logDate) / (1000 * 60 * 60 * 24);
        switch (dateValue) {
          case "today": matchesDate = diffInDays < 1; break;
          case "7d": matchesDate = diffInDays <= 7; break;
          case "30d": matchesDate = diffInDays <= 30; break;
          case "this-month":
            matchesDate = logDate.getMonth() === now.getMonth() && logDate.getFullYear() === now.getFullYear();
            break;
        }
      }

      const matchesSearch = !searchValue || searchContent.includes(searchValue);
      const matchesType = !typeValue || itemType === typeValue;

      item.style.display = (matchesSearch && matchesType && matchesDate) ? "list-item" : "none";
    });

    const visibleItems = [...items].filter(item => item.style.display !== "none");
    $("#noResults").style.display = visibleItems.length === 0 ? "block" : "none";
  }

  searchInput?.addEventListener("input", filterActivities);
  filterType?.addEventListener("change", filterActivities);
  filterDate?.addEventListener("change", filterActivities);
  filterActivities();

  // ==========================================================
  // 4. Sidebar Link Active State
  // ==========================================================
  $$(".sidebar-link").forEach(link => {
    link.addEventListener("click", function () {
      $$(".sidebar-link").forEach(l => l.classList.remove("active"));
      this.classList.add("active");
    });
  });

  // ==========================================================
  // 5. Dropdown Menus
  // ==========================================================
  $$(".nav-icon").forEach(ele => {
    ele.addEventListener("click", function (event) {
      event.preventDefault();
      event.stopPropagation();
      const dropdownMenu = this.closest(".dropdown")?.querySelector(".dropdown-menu");
      if (!dropdownMenu) return;

      $$(".dropdown-menu").forEach(menu => {
        if (menu !== dropdownMenu) menu.classList.remove("show");
      });
      dropdownMenu.classList.toggle("show");
    });
  });

  document.addEventListener("click", () => {
    $$(".dropdown-menu").forEach(menu => menu.classList.remove("show"));
  });

  // ==========================================================
  // 6. Dashboard Navigation
  // ==========================================================
  $$(".nav-link").forEach(link => {
    link.addEventListener("click", function () {
      $$(".nav-link").forEach(nav => nav.classList.remove("active"));
      this.classList.add("active");

      $$(".dashboard-section").forEach(section => section.classList.remove("active-section"));
      const section = $(`#${this.getAttribute("data-section")}`);
      if (section) section.classList.add("active-section");
    });
  });

  // ==========================================================
  // 7. Bootstrap Tooltips
  // ==========================================================
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));

  // ==========================================================
  // 8. Date & Time Updater
  // ==========================================================
  function updateDateTime() {
    const now = new Date();
    const formattedDate = now.toLocaleDateString("en-US", { weekday: "long", year: "numeric", month: "long", day: "numeric" });
    const formattedTime = now.toLocaleTimeString();
    $("#current-date-today").innerText = formattedDate;
  }
  updateDateTime();
  setInterval(updateDateTime, 1000);

  // ==========================================================
  // 9. Quarter Tab Navigation
  // ==========================================================
  const quarters = ["Quarter 1", "Quarter 2", "Quarter 3", "Quarter 4"];
  let currentQuarterIndex = 0;
  const display = $("#quarter-display");
  const nextBtn = $("#next-quarter");
  const prevBtn = $("#prev-quarter");

  function updateQuarterDisplay() {
    if (display) display.textContent = quarters[currentQuarterIndex];
  }

  nextBtn?.addEventListener("click", () => {
    currentQuarterIndex = (currentQuarterIndex + 1) % quarters.length;
    updateQuarterDisplay();
  });
  prevBtn?.addEventListener("click", () => {
    currentQuarterIndex = (currentQuarterIndex - 1 + quarters.length) % quarters.length;
    updateQuarterDisplay();
  });
  updateQuarterDisplay();

  const quarterTabs = document.querySelectorAll(".quarter-tab");
  const lessonItems = document.querySelectorAll(".lesson-item");

  quarterTabs.forEach(tab => {
    tab.addEventListener("click", function () {
      const quarterId = this.getAttribute("data-quarter");
      quarterTabs.forEach(t => t.classList.remove("active"));
      lessonItems.forEach(item => item.classList.remove("active"));
      this.classList.add("active");
      const targetLesson = document.getElementById(quarterId);
      if (targetLesson) {
        targetLesson.classList.add("active");
        const collapseElement = bootstrap.Collapse.getInstance(targetLesson.querySelector(".collapse"));
        if (collapseElement) collapseElement.hide();
      }
    });
  });

    
// ==========================================================
// 10. User Management
// ==========================================================
function $(selector) {
  return document.querySelector(selector);
}

function filterUsers() {
  const searchInput = document.getElementById("searchInput")?.value.toLowerCase() || "";
  const filterType = document.getElementById("filterType")?.value || "";
  const filterStatus = document.getElementById("filterStatus")?.value || "";
  const rows = document.querySelectorAll("#userTableBody tr");
  const noResults = document.getElementById("noResultsUser");

  let matchCount = 0;

  rows.forEach(row => {
    const name = row.cells[1]?.textContent.toLowerCase() || "";
    const type = row.cells[3]?.textContent.trim() || "";
    const grade = row.cells[4]?.textContent.toLowerCase() || "";
    const status = row.cells[5]?.textContent.trim() || "";

    const matchesSearch =
      name.includes(searchInput) ||
      type.toLowerCase().includes(searchInput) ||
      grade.includes(searchInput);

    const matchesType = filterType === "" || type === filterType;
    const matchesStatus = filterStatus === "" || status === filterStatus;

    if (matchesSearch && matchesType && matchesStatus) {
      row.style.display = "";
      matchCount++;
    } else {
      row.style.display = "none";
    }
  });

  // Toggle "no results" message visibility
  if (noResults) {
    noResults.style.display = matchCount === 0 ? "block" : "none";
  }
}

// Attach event listeners
document.getElementById("searchInput")?.addEventListener("input", filterUsers);
document.getElementById("filterType")?.addEventListener("change", filterUsers);
document.getElementById("filterStatus")?.addEventListener("change", filterUsers);

// Run filter on load
filterUsers();

// ==========================================================
// Export Users to CSV
// ==========================================================
document.getElementById("exportBtn")?.addEventListener("click", function () {
  const rows = document.querySelectorAll("#userTableBody tr");
  let csv = ['Online,Name,Type,"Grade / Class",Status,"Last Seen"'];

  rows.forEach(row => {
    if (row.style.display === "none") return;
    const isOnline = row.getAttribute("data-active") === "true" ? "Yes" : "No";
    const name = row.cells[1]?.innerText || "";
    const type = row.cells[2]?.innerText || "";
    const grade = row.cells[3]?.innerText || "";
    const status = row.cells[4]?.innerText || "";
    const lastSeen = row.cells[5]?.innerText || "";
    csv.push(`"${isOnline}","${name}","${type}","${grade}","${status}","${lastSeen}"`);
  });

  const csvContent = csv.join("\n");
  const blob = new Blob([csvContent], { type: "text/csv" });
  const url = URL.createObjectURL(blob);
  const a = document.createElement("a");
  a.href = url;
  a.download = "mquest_users_export.csv";
  a.click();
});

    

  // ==========================================================
  // 11. Dashboard Tabs
  // ==========================================================
  document.querySelectorAll(".sidebar-link").forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelectorAll(".sidebar-link").forEach(l => l.classList.remove("active-link"));
      this.classList.add("active-link");
      document.querySelectorAll(".content-section").forEach(section => section.classList.add("d-none"));
      document.getElementById(this.getAttribute("data-section")).classList.remove("d-none");
    });
  });


  // ==========================================================
  // 12. Games & Templates
  // ==========================================================
  let matchingCount = 0;
  let flashcardCount = 0;
  let spellCount = 0;
  let speakCount = 0;
  let imageQuizCount = 0;

  // ✅ Global WeakMap to safely store real File objects (not stringified)
  const choiceFileMap = new WeakMap();

  // ================== ADD CHOICE FOR IMAGE QUIZ ==================
  function addChoice(container, select, letter) {
    const div = document.createElement("div");
    div.classList.add("choice-item");
    div.dataset.letter = letter;

    div.innerHTML = `
      <div class="choice-header">
        <div class="choice-badge">${letter}</div>
        <button class="btn-remove-choice" title="Remove this choice">
          <svg class="bi bi-dash" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"></path>
          </svg>
        </button>
      </div>
      <div class="choice-type-toggle">
        <button class="choice-type-btn active" data-type="text" title="Text Choice">
          <svg class="bi bi-type" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
            <path d="m2.244 13.081.943-2.803H6.66l.944 2.803H8.86L5.54 3.75H4.322L1 13.081h1.244zm2.7-7.923L6.34 9.314H3.51l1.4-4.156zm9.146 7.027h.035v.896h1.128V8.125c0-1.51-1.114-2.345-2.646-2.345-1.736 0-2.59.916-2.666 2.174h1.108c.068-.718.595-1.19 1.517-1.19.971 0 1.518.52 1.518 1.464v.731H12.19c-1.647.007-2.522.8-2.522 2.058 0 1.319.957 2.18 2.345 2.18 1.06 0 1.716-.43 2.078-1.011zm-1.763.035c-.752 0-1.456-.397-1.456-1.244 0-.65.424-1.115 1.408-1.115h1.805v.834c0 .896-.752 1.525-1.757 1.525"></path>
          </svg>
        </button>
        <button class="choice-type-btn" data-type="image" title="Upload Image">
          <svg class="bi bi-image" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"></path>
            <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12"></path>
          </svg>
        </button>
      </div>
      <div class="choice-input">
        <input type="text" class="form-control text-input" placeholder="Enter choice text">
        <div class="image-input" style="display: none; margin-top: 0.75rem; position: relative;">
          <div class="image-wrapper">
            <img src="" class="choice-image-preview" alt="Choice image" style="display: none; max-width: 100%; height: 80px; border-radius: 6px; object-fit: cover; border: 1px solid #e5e7eb;">
            <button class="btn btn-remove-image" type="button" title="Remove image" style="display: none;">
              <svg class="bi bi-x" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    `;

    container.appendChild(div);

    // Hidden file input
    const hiddenFileInput = document.createElement("input");
    hiddenFileInput.type = "file";
    hiddenFileInput.accept = "image/*";
    hiddenFileInput.classList.add("choice-image-input");
    hiddenFileInput.style.display = "none";
    div.appendChild(hiddenFileInput);

    // Add to correct answer dropdown
    const opt = document.createElement("option");
    opt.value = letter;
    opt.textContent = `Option ${letter}`;
    select.appendChild(opt);

    const textBtn = div.querySelector('[data-type="text"]');
    const imageBtn = div.querySelector('[data-type="image"]');
    const textInput = div.querySelector('.text-input');
    const imageInputDiv = div.querySelector('.image-input');
    const imagePreview = imageInputDiv.querySelector('.choice-image-preview');
    const removeBtn = div.querySelector('.btn-remove-choice');
    const removeImageButton = imageInputDiv.querySelector('.btn-remove-image');

    // ✅ Handle file selection properly
    hiddenFileInput.addEventListener('change', () => {
      if (hiddenFileInput.files?.[0]) {
        const file = hiddenFileInput.files[0];
        choiceFileMap.set(imagePreview, file); // 🔐 Save actual file
        const reader = new FileReader();
        reader.onload = (e) => {
          imagePreview.src = e.target.result;
          imagePreview.style.display = 'block';
          removeImageButton.style.display = 'flex';
        };
        reader.readAsDataURL(file);
      } else {
        imagePreview.src = '';
        imagePreview.style.display = 'none';
        removeImageButton.style.display = 'none';
        choiceFileMap.delete(imagePreview);
      }
    });

    // ✅ Remove image button
    removeImageButton.addEventListener('click', (e) => {
      e.stopPropagation();
      hiddenFileInput.value = '';
      imagePreview.src = '';
      imagePreview.style.display = 'none';
      removeImageButton.style.display = 'none';
      choiceFileMap.delete(imagePreview);
    });

    function toggleType(type) {
      if (type === 'text') {
        textBtn.classList.add('active');
        imageBtn.classList.remove('active');
        textInput.style.display = 'block';
        imageInputDiv.style.display = 'none';
      } else {
        textBtn.classList.remove('active');
        imageBtn.classList.add('active');
        textInput.style.display = 'none';
        imageInputDiv.style.display = 'block';
        setTimeout(() => hiddenFileInput.click(), 100);
      }
    }

    textBtn.addEventListener('click', () => toggleType('text'));
    imageBtn.addEventListener('click', () => toggleType('image'));

    // ✅ Remove choice button
    removeBtn.addEventListener('click', () => {
      const letterToRemove = div.dataset.letter;
      div.remove();
      const optionToRemove = Array.from(select.options).find(opt => opt.value === letterToRemove);
      if (optionToRemove) optionToRemove.remove();
      reassignChoiceLetters(container, select);
    });
  }


    // ✅ Reassign letters after deletion
    function reassignChoiceLetters(container, select) {
      const choices = Array.from(container.querySelectorAll('.choice-item'));
      const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');

      // Clear current options
      select.innerHTML = `<option value="">-- Select Correct Option --</option>`;

      // Reassign letters and update UI
      choices.forEach((choiceDiv, index) => {
        const newLetter = letters[index];
        choiceDiv.dataset.letter = newLetter;
        choiceDiv.querySelector('.choice-badge').textContent = newLetter;

        // Add option back to dropdown
        const opt = document.createElement("option");
        opt.value = newLetter.toLowerCase();
        opt.textContent = `Option ${newLetter}`;
        opt.dataset.choiceId = newLetter;
        select.appendChild(opt);
      });
    }
    
  const gameSelect = $("#gameSelect");
  const templates = document.querySelectorAll(".game-template");

  gameSelect?.addEventListener("change", function () {
    templates.forEach(t => t.style.display = "none");
    const selected = this.value;
    if (selected) {
      document.getElementById(selected + "-game").style.display = "block";
    }
  });
    
  // Remove item with event delegation
document.addEventListener("click", function (e) {
  if (e.target.closest(".delete-gameItem-btn")) {
    const btn = e.target.closest(".delete-gameItem-btn");
    const itemGroup = btn.closest(".item-group");
    if (itemGroup) itemGroup.remove();
  }
});
    
  function addMatching() {
    const container = $("#matching-container");
      matchingCount++;
      
    const div = document.createElement("div");
    div.classList.add("item-group", "position-relative");
    div.innerHTML = `
<div class="game-header">
    <h6 class="game-item-title">Item ${matchingCount}</h6>
    <button class="delete-gameItem-btn" title="Delete this item" aria-label="Delete this item">
      <svg class="bi bi-trash3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995z"/>
          </svg>
    </button>
</div>
      <div class="mb-3 matching-container-item">
    <div class="field-label-wrapper"><label class="form-label">Term</label></div><input class="form-control" type="text" />
</div>
<div class="matching-container-item">
    <div class="field-label-wrapper"><label class="form-label">Definition</label></div><textarea class="form-control"></textarea>
</div>
    `;
    container.appendChild(div);
  }

  function addFlashcard() {
    const container = $("#flashcard-container");
      flashcardCount++;
    const div = document.createElement("div");
    div.classList.add("item-group");
    div.innerHTML = `
<div class="game-header">
    <h6 class="game-item-title">Item ${flashcardCount}</h6>
    <button class="delete-gameItem-btn" title="Delete this item" aria-label="Delete this item">
      <svg class="bi bi-trash3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995z"/>
          </svg>
    </button>
</div>
      <div class="mb-2 matching-container-item">
    <div class="field-label-wrapper"><label class="form-label">Front</label></div><input class="form-control" type="text" />
</div>
<div class="matching-container-item">
    <div class="field-label-wrapper"><label class="form-label">Back</label></div><textarea class="form-control"></textarea>
</div>
    `;
    container.appendChild(div);
  }


  function addSpelling() {
    const container = $("#spelling-container");
      spellCount++;
    const div = document.createElement("div");
    div.classList.add("item-group");
    div.innerHTML = `
<div class="game-header">
    <h6 class="game-item-title">Item ${spellCount}</h6>
    <button class="delete-gameItem-btn" title="Delete this item" aria-label="Delete this item">
      <svg class="bi bi-trash3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995z"/>
          </svg>
    </button>
</div>
      <div class="row g-3 fillblank-row">
    <div class="col-12 phrase"><label class="fw-semibold d-flex form-label"><span class="badge me-2 phrase-badge">1</span> First Phrase (before blank) </label><input class="form-control first-phrase" type="text" placeholder="e.g. The capital of France is" /></div>
    <div class="col-12 col-md-6 phrase"><label class="fw-semibold d-flex form-label"><span class="badge me-2 phrase-badge">2</span> Correct Answer (max 11 chars) </label>
        <div class="input-group flex-nowrap"><input class="form-control form-control answer-input" type="text" maxlength="11" placeholder="Paris" /><span class="bg-light input-group-text input-group-text border-start-0 small char-counter max-char">0/11</span></div>
        <div class="text-muted form-text small"><span>Answer is case-insensitive when played. Max 11 characters.</span></div>
    </div>
    <div class="col-12 col-md-6 phrase"><label class="fw-semibold d-flex form-label"><span class="badge me-2 phrase-badge">3</span> Last Phrase (after blank) </label><input class="form-control phrase last-phrase" type="text" placeholder="e.g. , known for its art." /></div>
    <div class="col-12 phrase">
        <label class="fw-semibold d-flex form-label">
            <span class="badge me-2 phrase-badge">4</span> Definition (optional)
        </label>
        <textarea class="form-control definition-input" rows="2" placeholder="e.g. The capital city of France, famous for the Eiffel Tower and art museums."></textarea>
        <div class="text-muted form-text small">
            <span>Shown to students after answering correctly (optional).</span>
        </div>
    </div>
</div>

        <div class="bg-light border rounded-2 p-3 mt-4">
    <h6 class="text-secondary d-flex align-items-center mb-2 live-preview"><svg class="bi bi-eye me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
        </svg> Live Preview </h6>
    <p class="fst-italic text-dark mb-0 preview-text">“The capital of France is <strong class="text-underline">_____</strong> , known for its art.”</p>
</div>
    `;
    container.appendChild(div);
      
      // === Real-time Behaviors ===
      const firstInput = div.querySelector('.first-phrase');
      const answerInput = div.querySelector('.answer-input');
      const lastInput = div.querySelector('.last-phrase');
      const counter = div.querySelector('.char-counter');
      const previewText = div.querySelector('.preview-text');

      function updatePreview() {
        const first = firstInput.value.trim();
        const answer = answerInput.value.trim() || "_____";
        const last = lastInput.value.trim();
        previewText.innerHTML = `“${first} <strong class="text-underline">${answer}</strong> ${last}”`.trim().replace(/\s+/g, ' ');
      }

      function updateCounter() {
        const len = answerInput.value.length;
        counter.textContent = `${len}/11`;
        counter.classList.toggle('text-danger', len > 9);
        counter.classList.toggle('fw-bold', len > 9);
      }

      firstInput.addEventListener('input', updatePreview);
      answerInput.addEventListener('input', () => {
        updateCounter();
        updatePreview();
      });
      lastInput.addEventListener('input', updatePreview);

      updatePreview();
      updateCounter();
  }

  function addSpeak() {
    const container = $("#speak-container");
      speakCount++;
    const div = document.createElement("div");
    div.classList.add("item-group");
    div.innerHTML = `
<div class="game-header">
    <h6 class="game-item-title">Item ${speakCount}</h6>
    <button class="delete-gameItem-btn" title="Delete this item" aria-label="Delete this item">
      <svg class="bi bi-trash3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995z"/>
          </svg>
    </button>
</div>
<div class="speech-text-form">
<label class="form-label">Word or Sentence</label>
      <input type="text" class="form-control mb-2" placeholder="Say 'Good Morning'">
</div
    `;
    container.appendChild(div);
  }

  function addImageQuiz() {
    const container = $("#imagequiz-container");
      imageQuizCount++;
      
    const div = document.createElement("div");
    div.classList.add("item-group");
    div.innerHTML = `
    <div class="game-header">
        <h6 class="game-item-title">Item ${imageQuizCount}</h6>
        <button class="delete-gameItem-btn" title="Delete this item" aria-label="Delete this item">
          <svg class="bi bi-trash3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995z"/>
              </svg>
        </button>
    </div>
          <div class="form-group form-group-wrapper mb-2"><label class="form-label"><svg class="bi bi-image" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"></path>
                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12"></path>
                </svg> Question Image </label>
          <!-- Compact Upload Area -->
              <div class="compact-upload-area d-flex align-items-center gap-2">
                <div class="upload-preview-wrapper">
                  <img src="" class="preview-image-compact" alt="Preview">
                  <div class="upload-placeholder"><svg class="bi bi-image" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"></path>
        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12"></path>
    </svg></div>
                </div>
                <div class="upload-actions">
                  <button type="button" class="btn btn-outline-secondary btn-sm compact-upload-btn">
                    <svg class="bi bi-upload" me-1 xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"></path>
    </svg> Upload Image
                  </button>
                  <button type="button" class="btn btn-outline-secondary btn-sm compact-change-btn">
                    <svg class="bi bi-arrow-repeat" me-1 xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
        <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
        <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"></path>
    </svg> Change Image
                  </button>
                </div>
              </div>

              <!-- Hidden file input -->
              <input type="file" class="d-none question-image-input" accept="image/*">
        </div>
        <div class="form-group form-group-wrapper"><label class="form-label"><svg class="bi bi-question-circle" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"></path>
                </svg> Question </label><input class="form-control question-input" type="text" placeholder="What is shown in this image?" /></div>
        <div class="form-group form-group-wrapper">
            <div class="choices-section">
                <div class="choices-header"><svg class="bi bi-list-ul" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"></path>
                    </svg><span> Choices (Min: 2, Max: 6) </span></div>
                <div class="choices-wrapper"></div><button class="btn-add-choice" type="button"><svg class="bi bi-plus me-1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                    </svg> Add Option </button>
            </div>
        </div>
        <div class="form-group form-group-wrapper"><label class="form-label"><svg class="bi bi-check-circle" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"></path>
                </svg> Correct Answer </label><select class="form-control correct-select">
                <option value>-- Select Correct Option --</option>
            </select>
        </div>
    `;
      
    container.appendChild(div);
      
      const removeBtn = div.querySelector(".delete-gameItem-btn");
      const compactUploadBtn = div.querySelector('.compact-upload-btn');
      const changeImageBtn = div.querySelector('.compact-change-btn');
      const previewImageCompact = div.querySelector('.preview-image-compact');
      const uploadPlaceholder = div.querySelector('.upload-placeholder');
      const fileInput = div.querySelector('.question-image-input');
      const choicesWrapper = div.querySelector(".choices-wrapper");
      const addChoiceBtn = div.querySelector(".btn-add-choice");
      const correctSelect = div.querySelector(".correct-select");

      // Initially hide Change button
      changeImageBtn.style.display = 'none';

      // Handle upload button click
      compactUploadBtn.addEventListener('click', () => {
        fileInput.click();
      });

      // Handle change image button
      changeImageBtn.addEventListener('click', () => {
        fileInput.click();
      });

      // Handle file selection
      fileInput.addEventListener('change', () => {
        if (fileInput.files?.[0]) {
          // Create a temporary local URL for the image file
          const imageURL = URL.createObjectURL(fileInput.files[0]);

          previewImageCompact.src = imageURL;
          previewImageCompact.style.display = 'block';
          uploadPlaceholder.style.display = 'none';
          compactUploadBtn.style.display = 'none';
          changeImageBtn.style.display = 'inline-block';

          // ✅ Keep the file reference for upload later
          previewImageCompact.dataset.fileName = fileInput.files[0].name;
          previewImageCompact.dataset.fileObject = fileInput.files[0];
        }
      });

      // Delete item
      removeBtn.addEventListener("click", () => {
        if (confirm("Delete this quiz item?")) {
          div.remove();
          imageQuizCount--;
        }
      });

      // Add initial 2 choices
      addChoice(choicesWrapper, correctSelect, 'A');
      addChoice(choicesWrapper, correctSelect, 'B');

      // Add choice button
      addChoiceBtn.addEventListener("click", () => {
        const count = choicesWrapper.children.length;
        if (count >= 6) {
          alert("You can add a maximum of 6 choices.");
          return;
        }
        const next = String.fromCharCode(65 + count);
        addChoice(choicesWrapper, correctSelect, next);
        addChoiceBtn.disabled = count + 1 >= 6;
      });
  }
    
    // Attach Reset functionality
document.querySelectorAll(".reset-btn").forEach(btn => {
  btn.addEventListener("click", function () {
    const target = this.getAttribute("data-target");
    const container = document.getElementById(target);

    if (confirm("Are you sure you want to reset all items?")) {
      container.innerHTML = ""; // clear all

      // Re-add default template depending on which container it is
      switch (target) {
        case "matching-container":
          matchingCount = 0; // reset counter
          addMatching();
          break;
        case "flashcard-container":
          addFlashcard();
          break;
        case "spelling-container":
          addSpelling();
          break;
        case "speak-container":
          addSpeak();
          break;
        case "imagequiz-container":
          addImageQuiz();
          break;
      }
    }
  });
});
    
    

    // Bind buttons to functions
$("#addMatchingBtn").addEventListener("click", addMatching);
$("#addFlashcardBtn").addEventListener("click", addFlashcard);
//$("#addFillBlankBtn").addEventListener("click", addFillBlank);
$("#addSpellingBtn").addEventListener("click", addSpelling);
$("#addSpeakBtn").addEventListener("click", addSpeak);
$("#addImageQuizBtn").addEventListener("click", addImageQuiz);
    
  // Add first default set for each game
  addMatching();
  addFlashcard();
  //addFillBlank();
  addSpelling();
  addSpeak();
  addImageQuiz();
});



// =============================================================
// 12. At-Risk Students Table
// =============================================================
document.addEventListener('DOMContentLoaded', () => {

  function getAtRiskStudents() {
    const students = [];

    document.querySelectorAll('#userTableBody-1 tr[data-active]').forEach(row => {
      const nameCell = row.querySelector('[data-student], [data-name]');
      const name = nameCell?.dataset.student || nameCell?.dataset.name || 'Unknown';

      const lastActive = parseInt(row.querySelector('[data-last-active]')?.dataset.lastActive || '0', 10);
      const completionRate = parseInt(row.querySelector('[data-rate]')?.dataset.rate || '0', 10);
      const subjectCell = row.querySelector('[data-subject]');
      const subject = subjectCell?.dataset.subject || 'General';
      const quarter = subjectCell?.dataset.quarter || 'Q1';
      const sessionTime = parseInt(row.querySelector('[data-session-time]')?.dataset.sessionTime || '0', 10);

      // Determine at-risk or warning status
      const isAtRisk = lastActive > 14 || completionRate < 60;
      const isWarning = (lastActive > 7 && lastActive <= 14) || (completionRate >= 60 && completionRate < 80);

      if (isAtRisk || isWarning) {
        students.push({
          name,
          lastActive,
          completionRate,
          subject,
          quarter,
          sessionTime,
          status: isAtRisk ? 'At Risk' : 'Warning',
        });
      }
    });

    return students;
  }

  function renderAtRiskTable(students) {
  const tbody = document.getElementById('userTableBody-1');
  const noResults = document.getElementById('noAtRiskResults');
  if (!tbody) return;

  // Hide/show the "No results" message
  if (students.length === 0) {
    tbody.innerHTML = ''; // clear table
    if (noResults) noResults.style.display = 'block';
    return;
  } else {
    if (noResults) noResults.style.display = 'none';
  }

    tbody.innerHTML = students.map(s => {
      const statusBadge =
        s.status === 'At Risk'
          ? `<span class="badge bg-danger text-white rounded-pill px-2 py-1">${s.status}</span>`
          : `<span class="badge bg-warning text-dark rounded-pill px-2 py-1">${s.status}</span>`;

      return `
        <tr data-active="true">
          <td></td>
          <td data-label="Name">${s.name}</td>
          <td data-label="Last Active">${s.lastActive} day${s.lastActive !== 1 ? 's' : ''} ago</td>
          <td data-label="Progress">${s.completionRate}%</td>
          <td data-label="Subject">${s.subject} ${s.quarter}</td>
          <td data-label="Avg. Session">${s.sessionTime}m</td>
          <td data-label="Status">${statusBadge}</td>
          <td data-label="Actions">
            <button class="btn action-btn message" title="Send a Message">
              <svg class="bi bi-envelope" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
              </svg>
            </button>
          </td>
        </tr>`;
    }).join('');
  }

  // =============================================================
  // 🔹 Sorting Function
  // =============================================================
  function sortAtRisk(students) {
    const sortValue = document.getElementById('atRiskSort')?.value || '';

    return students.slice().sort((a, b) => {
      switch (sortValue) {
        case 'name-asc': return a.name.localeCompare(b.name);
        case 'name-desc': return b.name.localeCompare(a.name);
        case 'last-active-desc': return b.lastActive - a.lastActive;
        case 'last-active-asc': return a.lastActive - b.lastActive;
        case 'progress-desc': return b.completionRate - a.completionRate;
        case 'progress-asc': return a.completionRate - b.completionRate;
        case 'session-asc': return a.sessionTime - b.sessionTime;
        case 'session-desc': return b.sessionTime - a.sessionTime;
        default: return 0;
      }
    });
  }

  // =============================================================
  // 🔹 Filter + Sort Integration
  // =============================================================
  function filterAtRisk() {
    const quarter = document.getElementById('atRiskQuarterFilter')?.value || '';
    const subject = document.getElementById('atRiskSubjectFilter')?.value || '';
    const search = document.getElementById('searchInput-1')?.value.toLowerCase().trim() || '';

    let filtered = allStudents.filter(s => {
      const matchQuarter = quarter === 'All Quarter' || !quarter || s.quarter === quarter;
      const matchSubject = subject === 'All Subjects' || !subject || s.subject === subject;
      const matchSearch = s.name.toLowerCase().includes(search) || s.subject.toLowerCase().includes(search);
      return matchQuarter && matchSubject && matchSearch;
    });

    filtered = sortAtRisk(filtered);
    renderAtRiskTable(filtered);
  }

  // =============================================================
  // 🔹 CSV Export
  // =============================================================
  function exportAtRiskCSV(students) {
    //if (!students.length) return alert('No data available for export.');

    const csvContent = [
      ['Name', 'Last Active (days ago)', 'Progress (%)', 'Subject', 'Quarter', 'Avg. Session (min)', 'Status'],
      ...students.map(s => [
        s.name,
        s.lastActive,
        s.completionRate,
        s.subject,
        s.quarter,
        s.sessionTime,
        s.status
      ])
    ].map(row => row.join(',')).join('\n');

    const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
    const url = URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.href = url;
    link.download = 'At-Risk-Students.csv';
    link.click();
    URL.revokeObjectURL(url);
  }

  // =============================================================
  // 🔹 Clear All Filters Function
  // =============================================================
  function clearAtRiskFilters() {
    document.getElementById('searchInput-1').value = '';
    document.getElementById('atRiskQuarterFilter').selectedIndex = 0;
    document.getElementById('atRiskSubjectFilter').selectedIndex = 0;
    document.getElementById('atRiskSort').selectedIndex = 0;

    renderAtRiskTable(allStudents); // reset table
  }

  // =============================================================
  // 🔹 Initialization & Event Binding
  // =============================================================
  const allStudents = getAtRiskStudents();
  renderAtRiskTable(allStudents);

  ['atRiskQuarterFilter', 'atRiskSubjectFilter', 'searchInput-1', 'atRiskSort'].forEach(id => {
    document.getElementById(id)?.addEventListener('input', filterAtRisk);
  });

  document.getElementById('exportBtn-2')?.addEventListener('click', () => {
    exportAtRiskCSV(allStudents);
  });

  document.getElementById('clearFiltersBtn')?.addEventListener('click', clearAtRiskFilters);

});




// =============================================================
// 13. Profile-Section Change Password
// =============================================================
// Toggle password visibility
function setupPasswordToggles() {
  const toggleButtons = [
    { btn: 'toggleCurrentPassword', input: 'currentPassword' },
    { btn: 'toggleNewPassword', input: 'newPassword' },
    { btn: 'toggleConfirmPassword', input: 'confirmPassword' }
  ];

  toggleButtons.forEach(({ btn, input }) => {
    const button = document.getElementById(btn);
    const inputEl = document.getElementById(input);
    if (!button || !inputEl) return;

    button.addEventListener('click', () => {
      const type = inputEl.type === 'password' ? 'text' : 'password';
      inputEl.type = type;
      // Optional: toggle eye icon (not implemented here)
    });
  });
}

// Password strength checker (returns score 0–4)
function getPasswordStrength(password) {
  let score = 0;
  if (password.length >= 8) score++;
  if (/[a-z]/.test(password)) score++;
  if (/[A-Z]/.test(password)) score++;
  if (/\d/.test(password)) score++;
  if (/[^A-Za-z0-9]/.test(password)) score++;
  return Math.min(score, 4);
}

// Update strength UI
function updatePasswordStrength(password) {
  const strengthBar = document.getElementById('passwordStrength');
  const strengthText = document.getElementById('strengthText');
  const meterContainer = document.getElementById('passwordStrengthMeter');

  if (!password) {
    meterContainer.style.display = 'none';
    return;
  }

  meterContainer.style.display = 'block';
  const score = getPasswordStrength(password);
  let width = 0, text = '', className = '';

  if (score <= 1) {
    width = 25; text = 'Too weak'; className = 'weak';
  } else if (score === 2) {
    width = 50; text = 'Weak'; className = 'weak';
  } else if (score === 3) {
    width = 75; text = 'Medium'; className = 'medium';
  } else {
    width = 100; text = 'Strong'; className = 'strong';
  }

  strengthBar.className = `progress-bar ${className}`;
  strengthBar.style.width = `${width}%`;
  strengthBar.setAttribute('aria-valuenow', width);
  strengthText.textContent = text;
}

// Show or hide inline error
function showPasswordError(message = '') {
  const errorEl = document.getElementById('passwordError');
  if (message) {
    errorEl.textContent = message;
    errorEl.style.display = 'block';
  } else {
    errorEl.style.display = 'none';
    errorEl.textContent = '';
  }
}

// Validate form (returns boolean)
function validatePasswordForm() {
  const current = document.getElementById('currentPassword').value;
  const newPassword = document.getElementById('newPassword').value;
  const confirm = document.getElementById('confirmPassword').value;
  const changeBtn = document.getElementById('changePasswordBtn');

  // Reset error
  showPasswordError();

  // 1. All fields required
  if (!current || !newPassword || !confirm) {
    changeBtn.disabled = true;
    return false;
  }

  // 2. Old ≠ New
  if (current === newPassword) {
    showPasswordError('New password must be different from current password.');
    changeBtn.disabled = true;
    return false;
  }

  // 3. New = Confirm
  if (newPassword !== confirm) {
    showPasswordError('New password and confirmation do not match.');
    changeBtn.disabled = true;
    return false;
  }

  // 4. Password strength (at least "Medium" = score ≥ 3)
  if (getPasswordStrength(newPassword) < 3) {
    showPasswordError('Password is too weak. Use at least 8 characters with uppercase, lowercase, number, and symbol.');
    changeBtn.disabled = true;
    return false;
  }

  // All valid
  changeBtn.disabled = false;
  return true;
}

// Real-time validation on input
document.addEventListener('input', function (e) {
  const targetId = e.target.id;
  if (targetId === 'newPassword') {
    updatePasswordStrength(e.target.value);
    validatePasswordForm();
  } else if (targetId === 'confirmPassword' || targetId === 'currentPassword') {
    validatePasswordForm();
  }
});

// Handle "Change Password" click
document.addEventListener('click', function (e) {
  if (!e.target.matches('#changePasswordBtn')) return;
  if (!validatePasswordForm()) return;

  const btn = e.target;
  const originalBtnText = btn.innerHTML;
  btn.innerHTML = '<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> Saving...';
  btn.disabled = true;

  setTimeout(() => {
    btn.innerHTML = originalBtnText;
    btn.disabled = false;

    showToast('success', 'Success', 'Password changed successfully!');

    const modalEl = document.getElementById('changePasswordModal');
    const modal = bootstrap.Modal.getInstance(modalEl);

    if (modal) {
      // Listen for when modal is fully hidden
      const handleHidden = () => {
        // Clean up just in case (safety net)
        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
        document.body.classList.remove('modal-open');
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';

        modalEl.removeEventListener('hidden.bs.modal', handleHidden);
      };

      modalEl.addEventListener('hidden.bs.modal', handleHidden);
      modal.hide();
    } else {
      // Fallback: manual cleanup
      document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
      document.body.classList.remove('modal-open');
      document.body.style.overflow = '';
      document.body.style.paddingRight = '';
    }

    // Reset form
    document.getElementById('changePasswordForm').reset();
    updatePasswordStrength('');
    showPasswordError();
  }, 300);
});

// Initialize on DOM ready
document.addEventListener('DOMContentLoaded', setupPasswordToggles);




// =============================================================
// 14. Profile Picture Modal Logic
// =============================================================
let currentRotation = 0; // Track rotation in degrees
const MAX_FILE_SIZE = 2 * 1024 * 1024; // 2MB
const DEFAULT_IMAGE_SRC = 'photo-1755541516453-201559bec161.jpg'; // fallback image

// Handle file selection
document.getElementById('profilePictureInput')?.addEventListener('change', function (e) {
  const file = e.target.files[0];
  const preview = document.getElementById('previewImage');

  if (!file) {
    preview.src = DEFAULT_IMAGE_SRC;
    currentRotation = 0;
    applyRotation(preview);
    return;
  }

  if (!file.type.match('image.*')) {
    showToast('error', 'Invalid File', 'Please select an image file (JPEG, PNG, etc.).');
    this.value = '';
    return;
  }

  if (file.size > MAX_FILE_SIZE) {
    showToast('error', 'File Too Large', 'Image must be under 2MB.');
    this.value = '';
    return;
  }

  const reader = new FileReader();
  reader.onload = function (event) {
    preview.src = event.target.result;
    currentRotation = 0;
    applyRotation(preview);
  };
  reader.readAsDataURL(file);
});

// Rotate left
document.getElementById('rotateLeftBtn')?.addEventListener('click', () => {
  currentRotation = (currentRotation - 90) % 360;
  applyRotation(document.getElementById('previewImage'));
});

// Rotate right
document.getElementById('rotateRightBtn')?.addEventListener('click', () => {
  currentRotation = (currentRotation + 90) % 360;
  applyRotation(document.getElementById('previewImage'));
});

// Remove image
document.getElementById('removePictureBtn')?.addEventListener('click', () => {
  document.getElementById('profilePictureInput').value = '';
  const preview = document.getElementById('previewImage');
  preview.src = DEFAULT_IMAGE_SRC;
  currentRotation = 0;
  applyRotation(preview);
});

// Apply rotation
function applyRotation(imgElement) {
  imgElement.style.transform = `rotate(${currentRotation}deg)`;
}

// Save Changes
document.getElementById('saveAdminPictureBtn')?.addEventListener('click', function () {
  const fileInput = document.getElementById('profilePictureInput');
  const btn = this;
  const originalText = btn.innerHTML;

  btn.innerHTML = '<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> Saving...';
  btn.disabled = true;

  setTimeout(() => {
    btn.innerHTML = originalText;
    btn.disabled = false;
    showToast('success', 'Success', 'Profile picture updated successfully!');

    const modalEl = document.getElementById('adminProfilePictureModal');
    const modal = bootstrap.Modal.getInstance(modalEl);

    if (modal) {
      const handleHidden = () => {
        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
        document.body.classList.remove('modal-open');
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
        modalEl.removeEventListener('hidden.bs.modal', handleHidden);
      };
      modalEl.addEventListener('hidden.bs.modal', handleHidden);
      modal.hide();
    } else {
      document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
      document.body.classList.remove('modal-open');
      document.body.style.overflow = '';
      document.body.style.paddingRight = '';
    }

    fileInput.value = '';
    currentRotation = 0;
  }, 800);
});



// =============================================================
// 15. Create Lesson (Dynamic Lesson Template)
// =============================================================
document.addEventListener("DOMContentLoaded", () => {
    const createBtn = document.getElementById("createLessonBtn");
    const lessonTemplate = document.getElementById("lessonTemplate");
    const container = lessonTemplate?.parentElement; // place new templates here
    
    // Dialog elements
    const dialog = document.getElementById("createOptionsDialog");
    const startFromDraftBtn = document.getElementById("startFromDraftBtn");
    const startBlankBtn = document.getElementById("startBlankBtn");
    const cancelBtn = document.getElementById("cancelCreateBtn");

    if (!createBtn) return; // safety check

    // Show dialog when create button is clicked
    createBtn.addEventListener("click", () => {
        if (dialog) {
            dialog.style.display = 'flex';
        } else {
            // Fallback: if dialog doesn't exist, just create blank lesson
            createBlankLesson();
        }
    });

    // =============== FIX: START FROM DRAFT OPTION ===============
    if (startFromDraftBtn) {
        startFromDraftBtn.addEventListener("click", () => {
            if (dialog) dialog.style.display = 'none';
            
            const draftInfo = getDraftInfo();
            
            if (!draftInfo || !draftInfo.exists) {
                showToast('info', 'No Draft Found', 'Starting a blank lesson instead.');
                const newLesson = createBlankLesson();
                return;
            }
            
            // Create new lesson and load the draft
            const newLesson = createBlankLesson();
            
            // Small delay to ensure new lesson template is loaded, then call loadLessonDraft
            setTimeout(() => {
                loadLessonDraft();
                showToast('success', 'Draft Loaded', `"${draftInfo.title}" draft loaded successfully.`);
                
                // Show delete button for loaded draft
                const deleteDraftBtn = newLesson.querySelector(".delete-draft-btn");
                if (deleteDraftBtn) {
                    deleteDraftBtn.style.display = 'inline-block';
                }
            }, 300);
        });
    }

    // =============== FIX: START BLANK OPTION ===============
    if (startBlankBtn) {
      startBlankBtn.addEventListener("click", () => {
          if (dialog) dialog.style.display = 'none';
          
          // Just create a blank lesson without any questions
          const newLesson = createBlankLesson();
          
          // Hide delete draft button for blank lessons
          setTimeout(() => {
              const deleteDraftBtn = newLesson.querySelector(".delete-draft-btn");
              if (deleteDraftBtn) {
                  deleteDraftBtn.style.display = 'none';
              }
          }, 100);
          
          // Optional: Show info if draft exists
          const draftInfo = getDraftInfo();
          if (draftInfo && draftInfo.exists) {
              showToast('info', 'Draft Available', 
                  `You have a draft: "${draftInfo.title}". Use "Start from Draft" to load it.`);
          }
      });
  }

    // Cancel option
    if (cancelBtn) {
        cancelBtn.addEventListener("click", () => {
            if (dialog) dialog.style.display = 'none';
        });
    }

    // Close dialog when clicking outside
    if (dialog) {
        dialog.addEventListener("click", (e) => {
            if (e.target === dialog) {
                dialog.style.display = 'none';
            }
        });
    }

    // =============== DRAFT MANAGEMENT FUNCTIONS ===============
    async function saveLessonToSession(status = 'draft') {
        try {
            const data = await getLessonData(status);
            data.saved_at = Date.now(); // timestamp
            data.status = status;
            
            localStorage.setItem('lessonDraft', JSON.stringify(data));
            
            console.log('✅ Lesson saved to localStorage:', data);
            showToast('success', 'Lesson Saved', status === 'draft' ? 'Draft saved locally!' : 'Lesson saved!');
            
            // Show delete draft button when draft is saved
            showDeleteDraftButton();
            
            return data; // Return data for potential use
        } catch (err) {
            console.error('❌ Failed to save lesson to localStorage:', err);
            showToast('error', 'Save Failed', 'Failed to save lesson. Please try again.');
            throw err; // Re-throw for error handling
        }
    }

    // Function to show/hide delete draft button based on whether draft exists
    function updateDeleteDraftButtonVisibility() {
        const savedData = localStorage.getItem('lessonDraft');
        const deleteDraftButtons = document.querySelectorAll('.delete-draft-btn');
        
        if (deleteDraftButtons.length > 0) {
            if (savedData) {
                try {
                    const data = JSON.parse(savedData);
                    const oneWeek = 7 * 24 * 60 * 60 * 1000;
                    const now = Date.now();
                    
                    // Only show if draft exists and isn't expired
                    if (data.saved_at && now - data.saved_at <= oneWeek) {
                        deleteDraftButtons.forEach(btn => {
                            btn.style.display = 'inline-block';
                        });
                    } else {
                        // Clear expired draft
                        localStorage.removeItem('lessonDraft');
                        deleteDraftButtons.forEach(btn => {
                            btn.style.display = 'none';
                        });
                    }
                } catch (e) {
                    // If error parsing, clear and hide
                    localStorage.removeItem('lessonDraft');
                    deleteDraftButtons.forEach(btn => {
                        btn.style.display = 'none';
                    });
                }
            } else {
                deleteDraftButtons.forEach(btn => {
                    btn.style.display = 'none';
                });
            }
        }
    }

    // Function to show delete draft button
    function showDeleteDraftButton() {
        const deleteDraftButtons = document.querySelectorAll('.delete-draft-btn');
        deleteDraftButtons.forEach(btn => {
            btn.style.display = 'inline-block';
        });
    }

    // Function to hide delete draft button
    function hideDeleteDraftButton() {
        const deleteDraftButtons = document.querySelectorAll('.delete-draft-btn');
        deleteDraftButtons.forEach(btn => {
            btn.style.display = 'none';
        });
    }

    // Enhanced delete draft function
    function deleteDraft(lessonElement = null) {
        if (confirm('Are you sure you want to delete this draft? This action cannot be undone.')) {
            localStorage.removeItem('lessonDraft');
            
            // Hide all delete buttons
            hideDeleteDraftButton();
            
            // Remove the lesson element if provided
            if (lessonElement && lessonElement.remove) {
                lessonElement.remove();
            }
            
            showToast('success', 'Draft Deleted', 'Your draft has been successfully deleted.');
            return true;
        }
        return false;
    }

    // Function to check if draft exists and is valid
    function checkDraftExists() {
        const savedData = localStorage.getItem('lessonDraft');
        if (!savedData) return false;
        
        try {
            const data = JSON.parse(savedData);
            const oneWeek = 7 * 24 * 60 * 60 * 1000;
            const now = Date.now();
            
            // Check if draft exists and isn't expired
            return data.saved_at && now - data.saved_at <= oneWeek;
        } catch (e) {
            return false;
        }
    }

    // Function to get draft info
    function getDraftInfo() {
        const savedData = localStorage.getItem('lessonDraft');
        if (!savedData) return null;
        
        try {
            const data = JSON.parse(savedData);
            const oneWeek = 7 * 24 * 60 * 60 * 1000;
            const now = Date.now();
            
            if (data.saved_at && now - data.saved_at <= oneWeek) {
                return {
                    exists: true,
                    title: data.lesson_title || 'Untitled Draft',
                    savedAt: new Date(data.saved_at).toLocaleString(),
                    expiresAt: new Date(data.saved_at + oneWeek).toLocaleString(),
                    data: data
                };
            } else {
                localStorage.removeItem('lessonDraft'); // Clean up expired
                return { exists: false, expired: true };
            }
        } catch (e) {
            return { exists: false, error: true };
        }
    }

    // =============== MAIN LOAD LESSON DRAFT FUNCTION ===============
    function loadLessonDraft() {
        const savedData = localStorage.getItem('lessonDraft');

        // Log raw savedData from localStorage
        // console.log("Raw savedData from localStorage:", savedData);

        if (!savedData) {
            console.log("No lesson draft found.");
            return;
        }

        let data;
        try {
            data = JSON.parse(savedData);
        } catch (error) {
            console.error("Failed to parse lessonDraft:", error);
            return;
        }

        // Log parsed data object
        console.log("Parsed lessonDraft object:", data);

        const oneWeek = 7 * 24 * 60 * 60 * 1000;
        const now = Date.now();

        // Remove expired or invalid drafts
        if (!data.saved_at || now - data.saved_at > oneWeek) {
            localStorage.removeItem('lessonDraft');
            console.log("Draft expired or invalid, removed from localStorage.");
            return;
        }

        // Populate lesson basic info
        document.getElementById('lesson-title').value = data.lesson_title || '';
        document.getElementById('lesson-description').value = data.lesson_description || '';
        document.getElementById('selected-quarter-input').value = data.selected_quarter || '';
        document.getElementById('selected-subject-input').value = data.selected_subject || '';

        // Populate pretest questions
        if (data.pretest_questions?.length) {
            //console.log("Restoring pretest questions:", data.pretest_questions);
            
            // Store the data
            localStorage.setItem('lessonData', JSON.stringify(data));
            
            // Wait for everything to be ready
            setTimeout(() => {
                // The function should be available now
                if (window.loadQuestionsFromLocalStorage) {
                    window.loadQuestionsFromLocalStorage();
                } else {
                    console.error("Function not found in window object");
                    // Try calling it directly from the prequizBuilder module
                    if (window.prequizBuilder && window.prequizBuilder.loadQuestionsFromLocalStorage) {
                        window.prequizBuilder.loadQuestionsFromLocalStorage();
                    }
                }
            }, 500); // Longer delay to ensure all scripts loaded
        }

        // Populate posttest questions
        if (data.posttest_questions?.length) {
            //console.log("Restoring posttest questions:", data.posttest_questions);
            
            // Store the data
            localStorage.setItem('lessonData', JSON.stringify(data));
            
            // Wait for everything to be ready
            setTimeout(() => {
                // The function should be available now
                if (window.loadQuestions2FromLocalStorage) {
                    window.loadQuestions2FromLocalStorage();
                } else {
                    console.error("Function not found in window object");
                    // Try calling it directly from the prequizBuilder module
                    if (window.prequizBuilder && window.prequizBuilder.loadQuestionsFromLocalStorage) {
                        window.prequizBuilder.loadQuestions2FromLocalStorage();
                    }
                }
            }, 500); // Longer delay to ensure all scripts loaded
        }
    

        // =============== LOAD ALL GAMES ===============
        if (data.games) {
            console.log("Restoring games:", data.games);
            
            // Load with delays to ensure DOM is ready
            setTimeout(() => {
                if (data.games.matching?.length) {
                    loadMatchingGame(data.games.matching);
                }
            }, 1000);
            
            setTimeout(() => {
                if (data.games.flashcard?.length) {
                    loadFlashcardGame(data.games.flashcard);
                }
            }, 1100);
            
            setTimeout(() => {
                if (data.games.spelling?.length) {
                    loadSpellingGame(data.games.spelling);
                }
            }, 1200);
            
            setTimeout(() => {
                if (data.games.speak?.length) {
                    loadSpeakGame(data.games.speak);
                }
            }, 1300);
            
            setTimeout(() => {
                if (data.games.imagequiz?.length) {
                    loadImageQuizGame(data.games.imagequiz);
                }
            }, 1400);
        }

        // Populate uploads
        if (data.uploads) {
            console.log("Restoring uploads (titles only):", data.uploads);
            
            // PPT/PDF Title and Subtitle
            if (data.uploads.ppt) {
                const pptTitle = document.getElementById('file-title');
                const pptSubtitle = document.getElementById('file-title-1');
                if (pptTitle) pptTitle.value = data.uploads.ppt.title || '';
                if (pptSubtitle) pptSubtitle.value = data.uploads.ppt.subtitle || '';
                
                // Also show filename in display area
                const fileName = document.getElementById('fileName');
                const fileSize = document.getElementById('fileSize');
                const fileNameDisplay = document.getElementById('fileNameDisplay');
                if (fileName && data.uploads.ppt.name) {
                    fileName.textContent = data.uploads.ppt.name;
                    if (fileSize) fileSize.textContent = 'Previously uploaded';
                    if (fileNameDisplay) fileNameDisplay.style.display = 'block';
                }
            }
            
            // Video Title and Subtitle
            if (data.uploads.videos) {
                const videoTitle = document.getElementById('file-title-2');
                const videoSubtitle = document.getElementById('video-title');
                if (videoTitle) videoTitle.value = data.uploads.videos.title || '';
                if (videoSubtitle) videoSubtitle.value = data.uploads.videos.subtitle || '';
                
                // Show video placeholder
                const videoPreview = document.getElementById('videoPreview');
                if (videoPreview && data.uploads.videos.name) {
                    videoPreview.style.display = 'block';
                    videoPreview.innerHTML = `
                        <div style="padding: 20px; text-align: center; color: #666;">
                            <p><strong>Video loaded from draft</strong></p>
                            <p>${data.uploads.videos.name}</p>
                            <p><em>Re-upload video to preview</em></p>
                        </div>
                        <div class="video-controls"><button id="playPauseBtn">Play</button></div>
                    `;
                }
            }
            
            // Video URL
            if (data.uploads.video_url) {
                const urlInput = document.getElementById('urlInput');
                if (urlInput) urlInput.value = data.uploads.video_url || '';
                
                // If URL has title/subtitle, set them (they might share the same fields as file video)
                if (data.uploads.video_url_title) {
                    const urlTitleInput = document.getElementById('file-title-2');
                    if (urlTitleInput && !urlTitleInput.value) {
                        urlTitleInput.value = data.uploads.video_url_title;
                    }
                }
                if (data.uploads.video_url_subtitle) {
                    const urlSubtitleInput = document.getElementById('video-title');
                    if (urlSubtitleInput && !urlSubtitleInput.value) {
                        urlSubtitleInput.value = data.uploads.video_url_subtitle;
                    }
                }
            }
        }

        // Populate badges
        if (data.badges) {
            console.log("Restoring badges:", data.badges);
            Object.keys(data.badges).forEach(type => applyBadge(type, data.badges[type]));
        }

        console.log("Lesson draft fully loaded from localStorage.");
    }


    // =============== GAME LOADING FUNCTIONS ===============

    function loadMatchingGame(items) {
        if (!items || !items.length) return;
        
        const container = document.getElementById('matching-container');
        if (!container) {
            console.error("Matching container not found!");
            return;
        }
        
        console.log("Loading matching game items:", items.length);
        
        // Clear container first
        container.innerHTML = '';
        matchingCount = 0;
        
        items.forEach((item) => {
            // Use existing addMatching function
            addMatching();
            
            // Get the last added item (vanilla JS)
            const matchingGroups = container.querySelectorAll('.item-group');
            const lastItem = matchingGroups[matchingGroups.length - 1];
            
            if (!lastItem) {
                console.error("Could not find last item!");
                return;
            }
            
            console.log("Populating item with:", item);
            
            // Use vanilla JS to populate data
            const inputs = lastItem.querySelectorAll('input[type="text"]');
            const textareas = lastItem.querySelectorAll('textarea');
            
            console.log("Found inputs:", inputs.length);
            console.log("Found textareas:", textareas.length);
            
            if (inputs.length > 0) {
                inputs[0].value = item.term || '';
            }
            if (textareas.length > 0) {
                textareas[0].value = item.definition || '';
            }
        });
    }

    function loadFlashcardGame(items) {
        if (!items || !items.length) return;
        
        const container = document.getElementById('flashcard-container');
        if (!container) {
            console.error("Flashcard container not found!");
            return;
        }
        
        console.log("Loading flashcard items:", items.length);
        
        // Clear container first
        container.innerHTML = '';
        flashcardCount = 0;
        
        items.forEach((item) => {
            // Use existing addFlashcard function
            addFlashcard();
            
            // Get the last added item
            const flashcardGroups = container.querySelectorAll('.item-group');
            const lastItem = flashcardGroups[flashcardGroups.length - 1];
            
            if (!lastItem) return;
            
            // Populate with data
            const inputs = lastItem.querySelectorAll('input[type="text"]');
            const textareas = lastItem.querySelectorAll('textarea');
            
            if (inputs.length > 0) {
                inputs[0].value = item.front || '';
            }
            if (textareas.length > 0) {
                textareas[0].value = item.back || '';
            }
        });
    }

    function loadSpellingGame(items) {
        if (!items || !items.length) return;
        
        const container = document.getElementById('spelling-container');
        if (!container) {
            console.error("Spelling container not found!");
            return;
        }
        
        console.log("Loading spelling items:", items.length);
        
        // Clear container first
        container.innerHTML = '';
        spellCount = 0;
        
        items.forEach((item) => {
            // Use existing addSpelling function
            addSpelling();
            
            // Get the last added item
            const spellingGroups = container.querySelectorAll('.item-group');
            const lastItem = spellingGroups[spellingGroups.length - 1];
            
            if (!lastItem) return;
            
            // Populate with data using vanilla JS
            const firstPhrase = lastItem.querySelector('.first-phrase');
            const answerInput = lastItem.querySelector('.answer-input');
            const lastPhrase = lastItem.querySelector('.last-phrase');
            const definitionInput = lastItem.querySelector('.definition-input');
            const charCounter = lastItem.querySelector('.char-counter');
            const previewText = lastItem.querySelector('.preview-text');
            
            if (firstPhrase) firstPhrase.value = item.first || '';
            if (answerInput) answerInput.value = item.answer || '';
            if (lastPhrase) lastPhrase.value = item.last || '';
            if (definitionInput) definitionInput.value = item.definition || '';
            
            // Trigger the update functions
            if (answerInput && charCounter && previewText) {
                // Update counter
                const len = answerInput.value.length;
                charCounter.textContent = `${len}/11`;
                charCounter.classList.toggle('text-danger', len > 9);
                charCounter.classList.toggle('fw-bold', len > 9);
                
                // Update preview
                const first = firstPhrase ? firstPhrase.value.trim() : '';
                const answer = answerInput.value.trim() || "_____";
                const last = lastPhrase ? lastPhrase.value.trim() : '';
                previewText.innerHTML = `"${first} <strong class="text-underline">${answer}</strong> ${last}"`.trim().replace(/\s+/g, ' ');
            }
        });
    }

    function loadSpeakGame(items) {
        if (!items || !items.length) return;
        
        const container = document.getElementById('speak-container');
        if (!container) {
            console.error("Speak container not found!");
            return;
        }
        
        console.log("Loading speak prompts:", items.length);
        
        // Clear container first
        container.innerHTML = '';
        speakCount = 0;
        
        items.forEach((item) => {
            // Use existing addSpeak function
            addSpeak();
            
            // Get the last added item
            const speakGroups = container.querySelectorAll('.item-group');
            const lastItem = speakGroups[speakGroups.length - 1];
            
            if (!lastItem) return;
            
            // Populate with data
            const input = lastItem.querySelector('.speech-text-form input');
            if (input) {
                input.value = item.prompt || '';
            }
        });
    }

    function loadImageQuizGame(items) {
        if (!items || !items.length) return;
        
        const container = document.getElementById('imagequiz-container');
        if (!container) {
            console.error("Image quiz container not found!");
            return;
        }
        
        console.log("Loading image quiz items:", items.length);
        
        // Clear container first
        container.innerHTML = '';
        imageQuizCount = 0;
        
        items.forEach((item) => {
            // Use existing addImageQuiz function
            addImageQuiz();
            
            // Get the last added item
            const imageQuizGroups = container.querySelectorAll('.item-group');
            const lastItem = imageQuizGroups[imageQuizGroups.length - 1];
            
            if (!lastItem) return;
            
            // Populate with data
            const questionInput = lastItem.querySelector('.question-input');
            const correctSelect = lastItem.querySelector('.correct-select');
            
            if (questionInput) questionInput.value = item.question || '';
            if (correctSelect && item.correct) correctSelect.value = item.correct;
            
            // Handle image if exists
            if (item.imageUrl) {
                const previewImage = lastItem.querySelector('.preview-image-compact');
                const uploadPlaceholder = lastItem.querySelector('.upload-placeholder');
                
                if (previewImage && uploadPlaceholder) {
                    previewImage.src = item.imageUrl;
                    previewImage.style.display = 'block';
                    uploadPlaceholder.style.display = 'none';
                }
            }
            
            // Populate choices
            const choicesWrapper = lastItem.querySelector('.choices-wrapper');
            if (choicesWrapper) {
                choicesWrapper.innerHTML = ''; // Clear existing choices
                
                if (item.choices && item.choices.length) {
                    item.choices.forEach((choice, index) => {
                        const choiceDiv = document.createElement('div');
                        choiceDiv.className = 'choice-item d-flex align-items-center mb-1';
                        choiceDiv.innerHTML = `
                            <input type="text" class="form-control choice-input" value="${choice || ''}" placeholder="Option ${String.fromCharCode(65 + index)}">
                            <button type="button" class="btn btn-sm btn-outline-danger ms-1 remove-choice">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                </svg>
                            </button>
                        `;
                        choicesWrapper.appendChild(choiceDiv);
                        
                        // Add event listener for remove button
                        const removeBtn = choiceDiv.querySelector('.remove-choice');
                        removeBtn.addEventListener('click', function() {
                            choiceDiv.remove();
                            updateCorrectAnswerDropdown(lastItem);
                        });
                    });
                    
                    // Update correct answer dropdown
                    updateCorrectAnswerDropdown(lastItem);
                }
            }
        });
    }

    // Helper function to update correct answer dropdown for image quiz
    function updateCorrectAnswerDropdown(container) {
        const choices = container.querySelectorAll('.choice-input');
        const select = container.querySelector('.correct-select');
        
        if (!select) return;
        
        // Clear existing options except the first one
        while (select.options.length > 1) {
            select.remove(1);
        }
        
        // Add new options based on choices
        choices.forEach((choice, index) => {
            const letter = String.fromCharCode(65 + index);
            const option = document.createElement('option');
            option.value = letter;
            option.textContent = `Option ${letter}: ${choice.value || '(empty)'}`;
            select.appendChild(option);
        });
    }

    // =============== REMOVE FUNCTIONS ===============
    function removeMatchingItem(button) {
        const item = button.closest('.matching-item');
        if (item) item.remove();
    }

    function removeFlashcardItem(button) {
        const item = button.closest('.flashcard-item');
        if (item) item.remove();
    }

    function removeSpellingItem(button) {
        const item = button.closest('.spelling-item');
        if (item) item.remove();
    }

    function removeSpeakItem(button) {
        const item = button.closest('.speak-item');
        if (item) item.remove();
    }

    function removeImageQuizItem(button) {
        const item = button.closest('.imagequiz-item');
        if (item) item.remove();
    }

    // =============== FUNCTION TO CREATE A BLANK LESSON ===============
    function createBlankLesson() {
        if (!lessonTemplate || !container) {
            showToast('error', 'Error', 'Unable to create lesson. Template not found.');
            return null;
        }
        
        // Clone the template deeply (with child nodes)
        const newLesson = lessonTemplate.cloneNode(true);

        // Reset attributes & content for a fresh empty template
        newLesson.removeAttribute("id"); // avoid duplicate ID
        
        // Clear all form fields
        newLesson.querySelectorAll("input, textarea, select").forEach(el => {
            if (el.type === 'checkbox' || el.type === 'radio') {
                el.checked = false;
            } else {
                el.value = "";
            }
        });
        
        // Clear all text content areas
        newLesson.querySelectorAll(".lesson-content, .lesson-text, .question-card").forEach(el => {
            el.textContent = "";
            el.innerHTML = "";
        });
        
        // Clear game containers
        newLesson.querySelectorAll("#matching-container, #flashcard-container, #spelling-container, #speak-container, #imagequiz-container").forEach(el => {
            el.innerHTML = "";
        });
        
        // Clear file upload displays
        newLesson.querySelectorAll("#fileNameDisplay, #videoPreview").forEach(el => {
            el.style.display = 'none';
            el.innerHTML = '';
        });

        // Optional: Add a unique class for tracking
        newLesson.classList.add("new-lesson-template");

        // Wire up the publish button
        const publishBtn = newLesson.querySelector(".publish-btn");
        if (publishBtn) {
            publishBtn.addEventListener("click", () => {
                newLesson.remove();
            });
        }
        
        // Wire up the save draft button
        const saveDraftBtn = newLesson.querySelector(".save-draft-btn");
        if (saveDraftBtn) {
            saveDraftBtn.addEventListener("click", async (e) => {
                e.preventDefault();
                try {
                    await saveLessonToSession('draft');
                } catch (error) {
                    console.error("Failed to save draft:", error);
                }
            });
        }
        
        // Wire up the delete draft button
        const deleteDraftBtn = newLesson.querySelector(".delete-draft-btn");
        if (deleteDraftBtn) {
            deleteDraftBtn.addEventListener("click", () => {
                deleteDraft(newLesson);
            });
        }

        // Insert the new lesson after the last one
        container.appendChild(newLesson);

        // Update delete button visibility
        updateDeleteDraftButtonVisibility();

        // Smoothly scroll to the newly created template
        newLesson.scrollIntoView({ behavior: "smooth", block: "start" });
        
        showToast('success', 'New Lesson', 'Blank lesson template created.');
        
        // Return the new lesson element for further manipulation
        return newLesson;
    }
});


// ======================================================
// 16. Independent Tab Function for Lesson Section
// ======================================================
function switchTab(evt, tabId) {
  const tabSection = document.getElementById("lessonSection");
  if (!tabSection) return;

  // Get all tab buttons and remove "active"
  const tabButtons = tabSection.querySelectorAll(".tab-button");
  tabButtons.forEach(btn => btn.classList.remove("active"));

  // Get all tab contents and remove "active"
  const tabContents = tabSection.querySelectorAll(".tab-content");
  tabContents.forEach(content => content.classList.remove("active"));

  // Add active class to clicked button and target tab
  evt.currentTarget.classList.add("active");
  const targetTab = document.getElementById(tabId);
  if (targetTab) targetTab.classList.add("active");

  // Optional: Animate the indicator bar
  const indicator = tabSection.querySelector(".tab-indicator");
  if (indicator) {
    const activeBtn = evt.currentTarget;
    indicator.style.width = `${activeBtn.offsetWidth}px`;
    indicator.style.left = `${activeBtn.offsetLeft}px`;
  }
}

// Initialize indicator on load
document.addEventListener("DOMContentLoaded", () => {
  const activeBtn = document.querySelector("#lessonSection .tab-button.active");
  const indicator = document.querySelector("#lessonSection .tab-indicator");
  if (activeBtn && indicator) {
    indicator.style.width = `${activeBtn.offsetWidth}px`;
    indicator.style.left = `${activeBtn.offsetLeft}px`;
  }
});



// =============================================================
// 17. Lesson Creation – Default Quarter Selection
// =============================================================

/* -------------------------------------------------------------
   Global variable – accessible from any script:
   window.currentQuarter   →  "quarter1" … "quarter4"
   ------------------------------------------------------------- */
window.currentQuarter = "quarter1";

/* -------------------------------------------------------------
   Helper – update global + hidden input + fire event
   ------------------------------------------------------------- */
function updateCurrentQuarter(quarter) {
  window.currentQuarter = quarter;

  const hiddenInput = document.getElementById('selected-quarter-input');
  if (hiddenInput) hiddenInput.value = quarter;

  // Let other scripts react
  window.dispatchEvent(new CustomEvent('quarterChanged', { detail: quarter }));
}

/* -------------------------------------------------------------
   DOM ready
   ------------------------------------------------------------- */
document.addEventListener("DOMContentLoaded", () => {
  const quarterButtons   = document.querySelectorAll(".quarter-btn");
  const progressFill     = document.getElementById("quarterProgress");
  const progressLabel    = document.getElementById("progressLabel");
  const setDefaultButton = document.getElementById("setDefaultQuarterBtn");
  const defaultLabel     = document.getElementById("defaultQuarterLabel");

  const defaultKey = "defaultQuarter";

  const quarterProgress = {
    quarter1: { width: "13%",   label: "3 out of 8 Lessons" },
    quarter2: { width: "37.5%", label: "4 out of 8 Lessons" },
    quarter3: { width: "63%",   label: "2 out of 8 Lessons" },
    quarter4: { width: "88%",   label: "6 out of 8 Lessons" },
  };

  /* ---------------------------------------------------------
     1. Load saved default (if any)
     --------------------------------------------------------- */
  const savedDefault = localStorage.getItem(defaultKey);
  const startQuarter = savedDefault || "quarter1";

  // Initialise UI + globals
  updateCurrentQuarter(startQuarter);
  setActiveQuarter(startQuarter, true);          // true = skip toast on load
  setDefaultState(startQuarter);
  setButtonState(!!savedDefault);

  /* ---------------------------------------------------------
     2. Click a quarter button
     --------------------------------------------------------- */
  quarterButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      const selected = btn.dataset.quarter;
      setActiveQuarter(selected);
      setButtonState(false);          // reset "Set Default" button
    });
  });

  /* ---------------------------------------------------------
     3. "Set Current as Default" button
     --------------------------------------------------------- */
  setDefaultButton.addEventListener("click", () => {
    const active = document.querySelector(".quarter-btn.active");
    if (!active) return;

    const q = active.dataset.quarter;
    localStorage.setItem(defaultKey, q);
    updateCurrentQuarter(q);
    setButtonState(true);
    setDefaultState(q);
    showToast('success', 'Saved', `${active.textContent} set as default quarter.`);
  });

  /* ---------------------------------------------------------
     Core UI functions
     --------------------------------------------------------- */
  function setActiveQuarter(quarter, skipToast = false) {
    // UI
    quarterButtons.forEach(b => b.classList.remove("active"));
    const btn = document.querySelector(`[data-quarter="${quarter}"]`);
    if (btn) btn.classList.add("active");

    const prog = quarterProgress[quarter] || quarterProgress.quarter1;
    progressFill.style.width   = prog.width;
    progressLabel.textContent = prog.label;

    // Keep globals in sync
    updateCurrentQuarter(quarter);

    // Toast (except on page-load)
    if (!skipToast) {
      showToast('info', 'Quarter Selected', `You selected ${btn.textContent}.`);
    }
  }

  function setButtonState(isSaved) {
    if (isSaved) {
      setDefaultButton.textContent = "Default Saved";
      setDefaultButton.classList.add("saved");
    } else {
      setDefaultButton.textContent = "Set Current as Default";
      setDefaultButton.classList.remove("saved");
    }
  }

  function setDefaultState(quarter) {
    const name = document.querySelector(`[data-quarter="${quarter}"]`).textContent;
    defaultLabel.innerHTML = `Default Quarter: <strong>${name}</strong>`;
  }
});



// =============================================================
// 18. Profile Section- View All Task Filtering (Status & Priority)
// =============================================================
document.addEventListener('DOMContentLoaded', () => {
  const statusSelect = document.getElementById('taskStatusFilter');
  const prioritySelect = document.getElementById('taskPriorityFilter');
  const clearBtn = document.getElementById('clearTaskFilters');
  const taskList = document.getElementById('taskList');
  const noTasksMessage = document.getElementById('noTasksMessage');

  if (!statusSelect || !prioritySelect || !taskList) return; // Prevent errors if elements are missing

  function getTasks() {
    return Array.from(taskList.querySelectorAll('.list-group-item'));
  }

  function normalize(val) {
    return ('' + (val || '')).trim().toLowerCase();
  }

  function filterTasks() {
    const selectedStatus = normalize(statusSelect.value);
    const selectedPriority = normalize(prioritySelect.value);

    let visibleCount = 0;

    getTasks().forEach(task => {
      const taskStatus = normalize(task.dataset.status);
      const taskPriority = normalize(task.dataset.priority);

      const statusMatch = (selectedStatus === 'all' || taskStatus === selectedStatus);
      const priorityMatch = (selectedPriority === 'all' || taskPriority === selectedPriority);

      if (statusMatch && priorityMatch) {
        task.classList.remove('task-hidden');
        visibleCount++;
      } else {
        task.classList.add('task-hidden');
      }
    });

    // Toggle "No tasks" message
    if (noTasksMessage) {
      noTasksMessage.style.display = visibleCount === 0 ? 'block' : 'none';
    }
  }

  // Event listeners
  statusSelect.addEventListener('change', filterTasks);
  prioritySelect.addEventListener('change', filterTasks);
  clearBtn?.addEventListener('click', () => {
    statusSelect.value = 'all';
    prioritySelect.value = 'all';
    filterTasks();
  });

  // Initial run
  filterTasks();
});




// =============================================================
// 19. Profile Section - Recent Activity Search & Filtering
// =============================================================
document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("searchInput");
  const filterSelect = document.getElementById("activityFilter");
  const clearBtn = document.getElementById("clearActFilters");
  const activities = document.querySelectorAll(".timeline-item");
  const noActivityMsg = document.getElementById("noActResults");

  if (!searchInput || !filterSelect || !activities.length) return; // Safety check

  function filterActivities() {
    const searchText = searchInput.value.toLowerCase();
    const filterValue = filterSelect.value;
    let visibleCount = 0;

    activities.forEach(item => {
      const type = item.dataset.type;
      const text = item.textContent.toLowerCase();

      const matchesSearch = text.includes(searchText);
      const matchesFilter = filterValue === "all" || type === filterValue;

      if (matchesSearch && matchesFilter) {
        item.style.display = "";
        visibleCount++;
      } else {
        item.style.display = "none";
      }
    });

    // Show "no activity" message
    if (noActivityMsg) {
      noActivityMsg.style.display = visibleCount === 0 ? "block" : "none";
    }
  }

  // Event listeners
  searchInput.addEventListener("input", filterActivities);
  filterSelect.addEventListener("change", filterActivities);
  clearBtn.addEventListener("click", () => {
    searchInput.value = "";
    filterSelect.value = "all";
    filterActivities();
  });

  // Initial load
  filterActivities();





// =============================================================
// 20. Lesson Editor - Publish & Draft Handling
// =============================================================
// document.addEventListener("DOMContentLoaded", () => {
//   // --- Publish Lesson (with confetti modal) ---
//   const publishBtn = document.querySelector('.publish-btn');
//   const modalEl = document.getElementById('publishSuccessModal');

//   if (publishBtn && modalEl) {
//     const modal = new bootstrap.Modal(modalEl);

//     function fireConfetti() {
//       const modalRect = modalEl.querySelector('.modal-content').getBoundingClientRect();
//       const x = (modalRect.left + modalRect.width / 2) / window.innerWidth;
//       const y = (modalRect.top + modalRect.height / 2) / window.innerHeight;

//       if (typeof confetti !== 'undefined') {
//         confetti({
//           particleCount: 60,
//           angle: 90,
//           spread: 60,
//           startVelocity: 30,
//           decay: 0.92,
//           gravity: 0.5,
//           ticks: 120,
//           origin: { x, y },
//           colors: ['#28a745', '#198754', '#20c997', '#ffffff'],
//           scalar: 0.8,
//           disableForReducedMotion: true
//         });
//       }
//     }

//     publishBtn.addEventListener('click', () => {
//       // TODO: Replace with actual publish API call
//       console.log('Publishing lesson...');

//       setTimeout(() => {
//         modal.show();
//         modalEl.addEventListener('shown.bs.modal', fireConfetti, { once: true });
//       }, 200);
//     });
//   }

//   // --- Save As Draft (trigger your toast) ---
//   const saveDraftBtn = document.querySelector('.save-draft-btn');
//   if (saveDraftBtn) {
//     saveDraftBtn.addEventListener('click', () => {
//       showToast('info', 'Lesson Draft', 'Lesson saved as draft');
//     });
//   }
});
