function toggleAnswer(answerId) {
  const answerElement = document.getElementById(answerId);
  answerElement.classList.toggle('show');
}

function displayCurrentDate() {
  const dateElement = document.getElementById('currentDate');
  if (!dateElement) return;

  const now = new Date();
  const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  const formattedDate = now.toLocaleDateString('en-US', options);
  dateElement.textContent = formattedDate;
}

document.addEventListener("DOMContentLoaded", () => {
  initNavigation();
  initDropdownMenus();
  initTooltips();
  //initLessonFunctionality();
  updateProgressBars();
  initFilters();
  displayCurrentDate();
  initEnrollmentActions(); // Enrollment Actions - Approve/Decline/View - Dashboard Page
  initLeaderboard(); //Leaderboard Time Range and Activity Filtering - Dashboard Page - Top Performer Section
  initEnrollmentManager(); // View All Enrollment Request Manager
  initNotificationTabs(); //Notification All/Unread Tab
  initPerformerTable(); //Top Performer
  initLessonFooterToggle(); //Expand Lesson Footer
  initLessonListModule(); //Dynamic Lesson List + Lesson Details + Overview/Detailed Mode
  initViewDetailsHandler(); //View Details Button Functionality - Overview - High Level view
  initDetailCardTabs(); //Tab Switching for Detail Cards -Profile Section Page
  initMetricCounters(); //Metric Counters Animation - Profile-Section Page
  initKeyboardFocus();
  initNotifications(); // function for Notification Section
  initProfilePhotoManager(); // function to change profile in Profile Section
  initEditableSections(); // function to edit each section in Profile Section
  initSectionsManager(); // Function to create section in Pupil Management
  initStudentsTable(); // Function to display and filter the pupil progress analytics - Analytics Page
  initAssessments(); // Function para idisplay ang test results sa Assessment Tab sa Pupil page
});

/* ===========================
   1. Navigation and Dropdowns
=========================== */
function initNavigation() {
  const navLinks = document.querySelectorAll('.teacher-nav a');
  const sections = document.querySelectorAll('.content-section');
  navLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      navLinks.forEach(a => a.classList.remove('active'));
      this.classList.add('active');
      sections.forEach(section => section.classList.add('d-none'));
      const targetSection = document.getElementById(this.dataset.section);
      if (targetSection) targetSection.classList.remove('d-none');
    });
  });
}


/* ===========================
   2. Dropdown Menus
=========================== */
function initDropdownMenus() {
  const navIcons = document.querySelectorAll(".nav-icon");
  const dropdownMenus = document.querySelectorAll(".dropdown-menu");

  navIcons.forEach(icon => {
    icon.addEventListener("click", function (event) {
      event.preventDefault();
      event.stopPropagation();
      const dropdownMenu = this.closest(".dropdown")?.querySelector(".dropdown-menu");
      if (!dropdownMenu) return;
      dropdownMenus.forEach(menu => {
        if (menu !== dropdownMenu) menu.classList.remove("show");
      });
      dropdownMenu.classList.toggle("show");
    });
  });

  document.addEventListener("click", () => {
    dropdownMenus.forEach(menu => menu.classList.remove("show"));
  });

  dropdownMenus.forEach(menu => {
    menu.addEventListener("click", e => e.stopPropagation());
  });
}


/* ===========================
   3. Tooltips
=========================== */
function initTooltips() {
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));
}

/* ===========================
   Lessons Section
=========================== */
/*function initLessonFunctionality() {
  const lessonsContainer = document.getElementById('lessonsContainer');
  const lessonDetailContainer = document.getElementById('lessonDetailContainer');
  const backButton = document.getElementById('backButton');
  const lessonItems = document.querySelectorAll('.lesson-item');
  const tabButtons = document.querySelectorAll('.tab-button');
  const tabContents = document.querySelectorAll('.tab-content');
  const lessonTitle = document.getElementById('lessonTitle');

  // === Overview & Detailed Toggle Elements ===
  const overviewBtn = document.getElementById('overviewModeBtn');
  const detailedBtn = document.getElementById('detailedModeBtn');
  const highLevel = document.querySelector('.high-level-detail');
  const lowLevel = document.querySelector('.low-level-detail');

  // === Ensure the high-level (overview) is visible by default ===
  if (highLevel) highLevel.classList.remove('d-none');
  if (lowLevel) lowLevel.classList.add('d-none');
  if (overviewBtn) overviewBtn.classList.add('active');
  if (detailedBtn) detailedBtn.classList.remove('active');

  // === Lesson Detail Toggle Logic ===
  if (!lessonDetailContainer) return;
  lessonDetailContainer.style.display = 'none';

  lessonItems.forEach(item => {
    item.addEventListener('click', function() {
      const lessonId = this.getAttribute('data-lesson-id');
      const titles = {
        1: "Lesson 1: Introduction to Fractions",
        2: "Lesson 2: Adding and Subtracting Fractions",
        3: "Lesson 3: Multiplying Fractions",
        4: "Lesson 4: Dividing Fractions",
        5: "Lesson 5: Equivalent Fractions"
      };
      lessonTitle.textContent = titles[lessonId] || "Lesson Title";
      lessonsContainer.style.display = 'none';
      lessonDetailContainer.style.display = 'block';
      lessonItems.forEach(i => i.classList.remove('active'));
      this.classList.add('active');
    });
  });

  backButton.addEventListener('click', function() {
    lessonDetailContainer.style.display = 'none';
    lessonsContainer.style.display = 'block';
    lessonItems.forEach(i => i.classList.remove('active'));
  });

  tabButtons.forEach(button => {
    button.addEventListener('click', function() {
      const tabId = this.getAttribute('data-tab');
      tabButtons.forEach(btn => btn.classList.remove('active'));
      tabContents.forEach(content => content.classList.remove('active'));
      this.classList.add('active');
      document.getElementById(tabId).classList.add('active');
    });
  });

  // === Overview/Detailed Toggle Logic ===
  if (overviewBtn && detailedBtn && highLevel && lowLevel) {
    overviewBtn.addEventListener('click', () => {
      overviewBtn.classList.add('active');
      detailedBtn.classList.remove('active');
      highLevel.classList.remove('d-none');
      lowLevel.classList.add('d-none');
    });

    detailedBtn.addEventListener('click', () => {
      detailedBtn.classList.add('active');
      overviewBtn.classList.remove('active');
      lowLevel.classList.remove('d-none');
      highLevel.classList.add('d-none');
    });
  }
}*/


/* ===========================
   4. Progress Bars
=========================== */
function updateProgressBars() {
  const progressBars = document.querySelectorAll('.progress-bar');
  progressBars.forEach(bar => {
    const percentage = parseInt(bar.getAttribute('aria-valuenow'));
    bar.classList.remove('critical', 'warning', 'success');
    if (percentage < 30) bar.classList.add('critical');
    else if (percentage < 70) bar.classList.add('warning');
    else bar.classList.add('success');
  });
}

/* ===========================
   5. Pupil Management - Filters
=========================== */
function initFilters() {
  const searchInput = document.getElementById('pupil-search');
  const statusFilter = document.getElementById('pupilStatusFilter');
  const sortFilter = document.getElementById('pupilSort');
  const resetBtn = document.querySelector('.reset-btn');
  const tableBody = document.getElementById('userTableBody');
  const noResultsDiv = document.getElementById('noResults');
  const originalRows = Array.from(tableBody.querySelectorAll('tr'));

  // ===== Filter & Search Logic =====
  function applyFilters() {
    const searchTerm = searchInput.value.toLowerCase().trim();
    const selectedStatus = statusFilter.value;
    const sortOrder = sortFilter.value;

    // Filter rows
    let filteredRows = originalRows.filter(row => {
      const name = row.querySelector('[data-label="Name"]').textContent.toLowerCase();
      const status = row.dataset.active === 'true' ? 'active' : 'inactive';
      return (
        name.includes(searchTerm) &&
        (selectedStatus === 'all' || selectedStatus === status)
      );
    });

    // Sort rows
    filteredRows.sort((a, b) => {
      const nameA = a.querySelector('[data-label="Name"]').textContent.trim().toLowerCase();
      const nameB = b.querySelector('[data-label="Name"]').textContent.trim().toLowerCase();

      switch (sortOrder) {
        case 'asc':
          return nameA.localeCompare(nameB);
        case 'desc':
          return nameB.localeCompare(nameA);
        case 'newest':
          return b.rowIndex - a.rowIndex;
        case 'oldest':
          return a.rowIndex - b.rowIndex;
        default:
          return 0;
      }
    });

    // Render filtered rows
    tableBody.innerHTML = '';
    if (filteredRows.length > 0) {
      noResultsDiv.style.display = 'none';
      filteredRows.forEach(row => tableBody.appendChild(row));
    } else {
      noResultsDiv.style.display = 'block';
    }
  }

  // ===== Reset Filters =====
  resetBtn.addEventListener('click', () => {
    searchInput.value = '';
    statusFilter.value = 'all';
    sortFilter.value = 'asc';
    tableBody.innerHTML = '';
    originalRows.forEach(row => tableBody.appendChild(row));
    noResultsDiv.style.display = 'none';
  });

  // ===== Event Listeners =====
  searchInput.addEventListener('input', applyFilters);
  statusFilter.addEventListener('change', applyFilters);
  sortFilter.addEventListener('change', applyFilters);
}


/* ===========================
   6. Enrollment Actions - Approve/Decline/View - Dashboard Page
=========================== */
function initEnrollmentActions() {
  const container = document.querySelector('.enrollments-list');
  const fallbackContainer = document.body;
  const actionsContainer = container || fallbackContainer;

  actionsContainer.addEventListener('click', function(e) {
    const button = e.target.closest('button[data-action]');
    if (!button) return;
    const action = button.getAttribute('data-action');
    const pupilName = button.getAttribute('data-pupil') || 'the student';
    let type, title, message;
    switch (action) {
      case 'approve':
        type = 'success';
        title = 'Enrollment Approved';
        message = `${pupilName}'s enrollment has been approved!`;
        break;
      case 'decline':
        type = 'error';
        title = 'Enrollment Declined';
        message = `${pupilName}'s enrollment has been declined.`;
        break;
      case 'view':
        type = 'info';
        title = 'View Request';
        message = `Viewing enrollment details for ${pupilName}.`;
        break;
      default:
        return;
    }
    showToast(type, title, message);
  });
}


/* ===========================
   7. Leaderboard Time Range and Activity Filtering
=========================== */
function initLeaderboard() {
  const timeRangeFilter = document.getElementById('timeRangeFilter');        // today/week/month
  const activityFilter = document.getElementById('timeRangeFilter-1');       // all/quiz/lesson/games
  const mainLeaderboard = document.getElementById('mainLeaderboard');
  const contextEl = document.querySelector('.top-performers-context span');
  const clearAllBtn = document.querySelector('.clear-all');

  if (!timeRangeFilter || !activityFilter || !mainLeaderboard) return;

  const meta = {
    today: { title: "Today", total: 28 },
    week: { title: "This Week", total: 42 },
    month: { title: "This Month", total: 112 },
  };

  // ==============================
  // Update Leaderboard (Top 5)
  // ==============================
  function updateMainView() {
    const range = timeRangeFilter.value;
    const activity = activityFilter.value;
    const allItems = mainLeaderboard.querySelectorAll('.top-pupil-item');
    let visibleCount = 0;

    allItems.forEach(item => {
      const inRange = item.dataset.range === range;
      const matchesActivity = activity === 'all' || (item.dataset.activity === activity);
      if (inRange && matchesActivity && visibleCount < 5) {
        item.classList.remove('d-none');
        visibleCount++;
      } else {
        item.classList.add('d-none');
      }
    });

    if (contextEl) {
      const total = meta[range]?.total || 0;
      contextEl.textContent = `Top 5 of ${total} students`;
    }
  }

  // ==============================
  // Reset Filters
  // ==============================
  function resetFilters() {
    timeRangeFilter.value = 'today';
    activityFilter.value = 'all';
    updateMainView();
  }

  // ==============================
  // Event Listeners
  // ==============================
  timeRangeFilter.addEventListener('change', updateMainView);
  activityFilter.addEventListener('change', updateMainView);
  clearAllBtn.addEventListener('click', resetFilters);

  // Initialize default view
  updateMainView();
}

   
/* ===========================
    8. View All Enrollment Request Manager
=========================== */
function initEnrollmentManager() { 
  const searchInput = document.getElementById("searchInputEnrollment");
  const sortSelect = document.getElementById("sortSelectEnrollment");
  const clearBtn = document.getElementById("clearAllFilter");
  const selectAllCheckbox = document.getElementById("selectAll");
  const batchApproveBtn = document.getElementById("batchApproveBtn");
  const batchDeclineBtn = document.getElementById("batchDeclineBtn");
  const itemsContainer = document.querySelector(".enrollment-list");
  const items = Array.from(document.querySelectorAll(".enrollment-item"));
  const noResultsMsg = document.querySelector(".no-results");
  const countApprove = document.getElementById("selectedCountApprove");
const countDecline = document.getElementById("selectedCountDecline");

  if (!searchInput || !sortSelect || !itemsContainer) return;

  // -----------------------------
  // Hide batch buttons on load
  // -----------------------------
  batchApproveBtn.style.display = "none";
  batchDeclineBtn.style.display = "none";

  // -----------------------------
  // Auto-update selected count
  // -----------------------------
  function updateSelectedCount() {
  const count = document.querySelectorAll(".select-item:checked").length;

  if (countApprove) countApprove.textContent = `(${count})`;
  if (countDecline) countDecline.textContent = `(${count})`;

  // Show/hide based on count
  if (count > 0) {
    batchApproveBtn.style.display = "inline-flex";
    batchDeclineBtn.style.display = "inline-flex";
  } else {
    batchApproveBtn.style.display = "none";
    batchDeclineBtn.style.display = "none";
  }
}

  // -----------------------------
  // Search
  // -----------------------------
  searchInput.addEventListener("input", () => {
    const query = searchInput.value.toLowerCase().trim();
    let visibleCount = 0;

    items.forEach(item => {
      const name = item.querySelector(".pupil-details h5").textContent.toLowerCase();
      const lrn = item.querySelector(".pupil-details p").textContent.toLowerCase();
      const match = name.includes(query) || lrn.includes(query);
      item.style.display = match ? "" : "none";
      if (match) visibleCount++;
    });

    noResultsMsg.style.display = visibleCount === 0 ? "block" : "none";
  });

  // -----------------------------
  // Sort
  // -----------------------------
  sortSelect.addEventListener("change", () => {
    const sortBy = sortSelect.value;
    const sortedItems = [...items];

    if (sortBy === "newest") {
      sortedItems.sort((a, b) =>
        new Date(b.querySelector(".submission-time").dataset.timestamp) -
        new Date(a.querySelector(".submission-time").dataset.timestamp)
      );
    } else if (sortBy === "oldest") {
      sortedItems.sort((a, b) =>
        new Date(a.querySelector(".submission-time").dataset.timestamp) -
        new Date(b.querySelector(".submission-time").dataset.timestamp)
      );
    } else if (sortBy === "name-asc") {
      sortedItems.sort((a, b) => {
        const nameA = a.querySelector(".pupil-details h5").textContent.toLowerCase();
        const nameB = b.querySelector(".pupil-details h5").textContent.toLowerCase();
        return nameA.localeCompare(nameB);
      });
    } else if (sortBy === "name-desc") {
      sortedItems.sort((a, b) => {
        const nameA = a.querySelector(".pupil-details h5").textContent.toLowerCase();
        const nameB = b.querySelector(".pupil-details h5").textContent.toLowerCase();
        return nameB.localeCompare(nameA); // Z–A
      });
    }

    itemsContainer.innerHTML = "";
    sortedItems.forEach(item => itemsContainer.appendChild(item));
  });

  // -----------------------------
  // Clear filters
  // -----------------------------
  clearBtn.addEventListener("click", () => {
    searchInput.value = "";
    sortSelect.value = "newest";
    selectAllCheckbox.checked = false;

    items.forEach(item => {
      item.style.display = "";
      item.querySelector(".select-item").checked = false;
    });

    updateSelectedCount();
    noResultsMsg.style.display = "none";
  });

  // -----------------------------
  // Select All
  // -----------------------------
  selectAllCheckbox.addEventListener("change", () => {
    const allChecked = selectAllCheckbox.checked;
    document.querySelectorAll(".select-item").forEach(chk => chk.checked = allChecked);
    updateSelectedCount();
  });

  // -----------------------------
  // Individual checkbox changes
  // -----------------------------
  document.querySelectorAll(".select-item").forEach(chk => {
    chk.addEventListener("change", () => {
      const totalChecked = document.querySelectorAll(".select-item:checked").length;
      selectAllCheckbox.checked = totalChecked === items.length;
      updateSelectedCount();
    });
  });

  // -----------------------------
  // Individual approve/decline
  // -----------------------------
  document.querySelectorAll(".btn-to-approve, .btn-to-decline").forEach(btn => {
    btn.addEventListener("click", () => {
      const action = btn.dataset.action;
      const pupilItem = btn.closest(".enrollment-item");
      const statusBadge = pupilItem.querySelector(".enrollment-status-badge");

      if (action === "approve") {
        statusBadge.textContent = "Approved";
        statusBadge.classList.remove("bg-warning", "text-dark");
        statusBadge.classList.add("bg-success", "text-light");
      } else if (action === "decline") {
        statusBadge.textContent = "Declined";
        statusBadge.classList.remove("bg-warning", "text-dark");
        statusBadge.classList.add("bg-danger", "text-light");
      }
    });
  });

  // -----------------------------
  // Batch approve/decline
  // -----------------------------
  function handleBatchAction(action) {
    const selected = document.querySelectorAll(".select-item:checked");

    if (selected.length === 0) {
      showToast('error', 'Action Failed', 'Please select at least one request first.');
      return;
    }

    selected.forEach(chk => {
      const item = chk.closest(".enrollment-item");
      const badge = item.querySelector(".enrollment-status-badge");

      if (action === "approve") {
        badge.textContent = "Approved";
        badge.classList.remove("bg-warning", "text-dark");
        badge.classList.add("bg-success", "text-light");
        showToast('success', 'Enrollment Approved', 'Student name enrollment request has been approved');
      } else {
        badge.textContent = "Declined";
        badge.classList.remove("bg-warning", "text-dark");
        badge.classList.add("bg-danger", "text-light");
          showToast('error', 'Enrollment Declined', 'Student name enrollment request has been declined');
      }
    });

    updateSelectedCount();
  }

  batchApproveBtn.addEventListener("click", () => handleBatchAction("approve"));
  batchDeclineBtn.addEventListener("click", () => handleBatchAction("decline"));

  // Initial update on load
  updateSelectedCount();
}


// =============================================================
// 9. Notifications Tab Switcher (All / Unread)
// =============================================================
function initNotificationTabs() {
  const allBtn = document.getElementById('tabAll');
  const unreadBtn = document.getElementById('tabUnread');
  const list = document.getElementById('notificationList');

  // Ensure elements exist before running logic
  if (!allBtn || !unreadBtn || !list) return;

  allBtn.addEventListener('click', () => {
    allBtn.classList.add('active');
    unreadBtn.classList.remove('active');
    list.querySelectorAll('.notif-item').forEach(item => {
      item.style.display = '';
    });
  });

  unreadBtn.addEventListener('click', () => {
    unreadBtn.classList.add('active');
    allBtn.classList.remove('active');
    list.querySelectorAll('.notif-item').forEach(item => {
      item.style.display = item.classList.contains('unread') ? '' : 'none';
    });
  });
}


// =============================================================
//  10. Top Performer Search & Sort Module
// =============================================================
function initPerformerTable() {
  const searchInput = document.getElementById('performerSearchInput');
  const sortSelect = document.getElementById('performerSort');
  const tbody = document.getElementById('performerTableBody');
  const noResultsDiv = document.getElementById('noAtRiskResults');

  // Safety check to avoid errors if elements aren't on the current page
  if (!searchInput || !sortSelect || !tbody) return;

  // =====================================================
  // Search Filter Functionality (with No Results Message)
  // =====================================================
  searchInput.addEventListener('input', function () {
    const filter = this.value.toLowerCase();
    const rows = tbody.querySelectorAll('tr');
    let hasMatch = false;

    rows.forEach(row => {
      const nameCell = row.cells[1]?.textContent.toLowerCase() || '';
      const match = nameCell.includes(filter);
      row.style.display = match ? '' : 'none';
      if (match) hasMatch = true;
    });

    // Toggle "No matching results" message
    if (noResultsDiv) {
      if (hasMatch) {
        noResultsDiv.classList.add('d-none');
      } else {
        noResultsDiv.classList.remove('d-none');
      }
    }
  });

  // =====================================================
  // Sorting Functionality (Ready for Backend Integration)
  // =====================================================
  sortSelect.addEventListener('change', function () {
    const sortBy = this.value;
    const rows = Array.from(tbody.querySelectorAll('tr'));

    rows.sort((a, b) => {
      if (sortBy === 'score') {
        return b.querySelector('[data-score]').dataset.score - a.querySelector('[data-score]').dataset.score;
      } else if (sortBy === 'improvement') {
        return b.querySelector('[data-improvement]').dataset.improvement - a.querySelector('[data-improvement]').dataset.improvement;
      } else if (sortBy === 'attempts') {
        return b.querySelector('[data-attempts]').dataset.attempts - a.querySelector('[data-attempts]').dataset.attempts;
      }
      return 0;
    });

    rows.forEach((row, index) => {
      const rankCell = row.querySelector('td:first-child');
      if (rankCell) rankCell.textContent = index + 1; // update rank
      tbody.appendChild(row);
    });
  });
}

/* ===========================
   11. Expand / Collapse Lesson Footer
=========================== */
function initLessonFooterToggle() {
  const lessonFooters = document.querySelectorAll('.lesson-footer');
  if (!lessonFooters.length) return;

  lessonFooters.forEach(footer => {
    footer.addEventListener('click', () => {
      const card = footer.closest('.lesson-card'); // current card only
      const list = card.querySelector('.quarter-lesson-list');
      const noContent = card.querySelector('#noContent'); // new empty state div
      const icon = footer.querySelector('.bi-chevron-down');
      const isExpanded = footer.classList.contains('active');

      // Collapse all within this card
      const allFootersInCard = card.querySelectorAll('.lesson-footer');
      allFootersInCard.forEach(f => {
        f.classList.remove('active');
        const i = f.querySelector('.bi-chevron-down');
        if (i) i.style.transform = 'rotate(0deg)';
        const l = card.querySelector('.quarter-lesson-list');
        const n = card.querySelector('#noContent');
        if (l) l.style.display = 'none';
        if (n) n.style.display = 'none';
      });

      // Toggle the clicked footer
      if (!isExpanded) {
        footer.classList.add('active');
        if (list && list.children.length > 0) {
          list.style.display = 'block';
        } else if (noContent) {
          // show "no lessons uploaded" message
          noContent.style.display = 'block';
        }
        if (icon) icon.style.transform = 'rotate(180deg)';
      } else {
        footer.classList.remove('active');
        if (list) list.style.display = 'none';
        if (noContent) noContent.style.display = 'none';
        if (icon) icon.style.transform = 'rotate(0deg)';
      }
    });
  });
}


/* =============================================================
   12. Dynamic Lesson List + Lesson Details + Overview/Detailed Mode
   ============================================================= */
function initLessonListModule() {
  // const lessonsData = {
  //   1: [
  //     { id: 1, title: "Lesson 1: Introduction to Fractions", desc: "Learn basics of fractions.", completion: 45 },
  //     { id: 2, title: "Lesson 2: Adding and Subtracting Fractions", desc: "Master adding and subtracting fractions.", completion: 80 },
  //     { id: 3, title: "Lesson 3: Multiplying Fractions", desc: "Learn how to multiply fractions.", completion: 20 },
  //     { id: 4, title: "Lesson 4: Dividing Fractions", desc: "Understand how to divide fractions.", completion: 60 },
  //   ],
  //   2: [
  //     { id: 5, title: "Lesson 5: Decimals", desc: "Convert between decimals and fractions.", completion: 70 },
  //     { id: 6, title: "Lesson 6: Place Value", desc: "Understand decimal places and rounding.", completion: 55 },
  //   ],
  //   3: [
  //     { id: 7, title: "Lesson 7: Geometry Basics", desc: "Identify types of shapes and angles.", completion: 90 },
  //     { id: 8, title: "Lesson 8: Area and Perimeter", desc: "Calculate the area of rectangles.", completion: 65 },
  //   ],
  //   4: [
  //     { id: 9, title: "Lesson 9: Measurement", desc: "Explore metric units of length.", completion: 40 },
  //     { id: 10, title: "Lesson 10: Data and Graphs", desc: "Interpret data using bar graphs.", completion: 75 },
  //   ]
  // };

  const lessonsContainer = document.getElementById('lessonsContainer');
  const lessonDetailContainer = document.getElementById('lessonDetailContainer');
  const lessonTitle = document.getElementById('lessonTitle');
  const backButton = document.getElementById('backButton');
  const lessonsList = document.getElementById('lessonLists');
  const quarterButtons = document.querySelectorAll('.quarter-btn');
  const searchInput = document.getElementById('search-lessonInput');
  const sortSelect = document.getElementById('lesson-sortSelect');

  // === Overview & Detailed Toggle Elements ===
  const overviewBtn = document.getElementById('overviewModeBtn');
  const detailedBtn = document.getElementById('detailedModeBtn');
  const highLevel = document.querySelector('.high-level-detail');
  const lowLevel = document.querySelector('.low-level-detail');

  // === Ensure the high-level (overview) is visible by default ===
  if (highLevel) highLevel.classList.remove('d-none');
  if (lowLevel) lowLevel.classList.add('d-none');
  if (overviewBtn) overviewBtn.classList.add('active');
  if (detailedBtn) detailedBtn.classList.remove('active');

  // === Overview/Detailed Toggle Logic ===
  if (overviewBtn && detailedBtn && highLevel && lowLevel) {
    overviewBtn.addEventListener('click', () => {
      overviewBtn.classList.add('active');
      detailedBtn.classList.remove('active');
      highLevel.classList.remove('d-none');
      lowLevel.classList.add('d-none');
    });

    detailedBtn.addEventListener('click', () => {
      detailedBtn.classList.add('active');
      overviewBtn.classList.remove('active');
      lowLevel.classList.remove('d-none');
      highLevel.classList.add('d-none');
    });
  }

  let activeQuarter = 1;
  if (!lessonsList || !lessonDetailContainer) return;

  // === Hide detail view by default ===
  lessonDetailContainer.style.display = 'none';

  /* ---------- Render Lessons ---------- */
  function renderLessons() {
    const searchTerm = searchInput.value.toLowerCase();
    let lessons = [...lessonsData[activeQuarter]];

    // Filter
    lessons = lessons.filter(lesson =>
      lesson.title.toLowerCase().includes(searchTerm) ||
      lesson.desc.toLowerCase().includes(searchTerm)
    );

    // Sort
    const sortValue = sortSelect.value;
    lessons.sort((a, b) => {
      if (sortValue === 'title-asc') return a.title.localeCompare(b.title);
      if (sortValue === 'title-desc') return b.title.localeCompare(a.title);
      if (sortValue === 'completion-asc') return a.completion - b.completion;
      if (sortValue === 'completion-desc') return b.completion - a.completion;
      return 0;
    });

    // Render lessons
    if (lessons.length === 0) {
      lessonsList.innerHTML = `<div class="text-center text-muted p-4">No matching results found.</div>`;
      return;
    }

    lessonsList.innerHTML = lessons.map(lesson => `
      <div class="lesson-item" data-lesson-id="${lesson.id}">
        <div class="lesson-header">
          <h4>${lesson.title} <span class="rounded-pill badge new-lesson-badge" style="font-size: 10px;">New</span></h4>
        </div>
        <p class="lesson-description">${lesson.desc}</p>
        <div class="mt-2 progress-container">
          <div class="d-flex justify-content-between align-items-center mb-1">
            <span class="progress-label">Student Completion</span>
            <span class="progress-percentage">${lesson.completion}%</span>
          </div>
          <div class="progress-bar-container">
            <div class="progress-bar" style="width: ${lesson.completion}%"></div>
          </div>
          <div class="mt-1 progress-stats">
            <small class="text-muted">${Math.round(lesson.completion / 2)} of 40 students completed</small>
          </div>
        </div>
      </div>
    `).join('');

    attachLessonClickHandlers();
  }

  /* ---------- Quarter switching ---------- */
  quarterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      quarterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeQuarter = btn.getAttribute('data-quarter');
      renderLessons();
    });
  });

  /* ---------- Search and Sort ---------- */
  searchInput.addEventListener('input', renderLessons);
  sortSelect.addEventListener('change', renderLessons);

  /* ---------- Click handler for lessons ---------- */
  function attachLessonClickHandlers() {
    const lessonItems = document.querySelectorAll('.lesson-item');
    lessonItems.forEach(item => {
      item.addEventListener('click', () => {
        const lessonId = parseInt(item.getAttribute('data-lesson-id'));
        const selectedLesson = Object.values(lessonsData)
          .flat()
          .find(lesson => lesson.id === lessonId);

        if (selectedLesson) {
          lessonTitle.textContent = selectedLesson.title;
          lessonsContainer.style.display = 'none';
          lessonDetailContainer.style.display = 'block';
        }
      });
    });
  }

  /* ---------- Back button ---------- */
  backButton.addEventListener('click', () => {
    lessonDetailContainer.style.display = 'none';
    lessonsContainer.style.display = 'block';
  });

  /* ---------- Initialize ---------- */
  renderLessons();
}

// ✅ Initialize after page load
document.addEventListener("DOMContentLoaded", initLessonListModule);



/* =============================================================
   13. View Details Button Functionality - Overview - High Level view
   ============================================================= */
function initViewDetailsHandler() {
  const viewDetailButtons = document.querySelectorAll('.view-details-btn');

  if (!viewDetailButtons.length) return; 

  viewDetailButtons.forEach((btn, index) => {
    btn.addEventListener('click', () => {
      const quarterNumber = index + 1; 

      const overviewBtn = document.getElementById('overviewModeBtn');
      const detailedBtn = document.getElementById('detailedModeBtn');
      const highLevel = document.querySelector('.high-level-detail');
      const lowLevel = document.querySelector('.low-level-detail');
      const quarterButtons = document.querySelectorAll('.quarter-btn');

      // Step 1: Switch to detailed (low-level) view
      if (overviewBtn && detailedBtn && highLevel && lowLevel) {
        detailedBtn.classList.add('active');
        overviewBtn.classList.remove('active');
        highLevel.classList.add('d-none');
        lowLevel.classList.remove('d-none');
      }

      // Step 2: Activate the selected quarter
      quarterButtons.forEach(b => b.classList.remove('active'));
      const targetQuarterBtn = document.querySelector(`.quarter-btn[data-quarter="${quarterNumber}"]`);
      if (targetQuarterBtn) targetQuarterBtn.classList.add('active');

      // Step 3: Trigger the lesson rendering for that quarter
      if (typeof renderLessonsGlobal === 'function') {
        renderLessonsGlobal(quarterNumber);
      } else {
        if (targetQuarterBtn) targetQuarterBtn.click(); // fallback
      }

      // Step 4: Smooth scroll to detailed view
      const detailedView = document.querySelector('.low-level-detail');
      if (detailedView) {
        detailedView.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
}


// ===========================
// 14. Tab Switching for Detail Cards -Profile Section Page
// ===========================
function initDetailCardTabs() {
  const tabButtons = document.querySelectorAll('.nav-tabs-custom .nav-link');
  const tabContents = document.querySelectorAll('.teacher-detail-card .tab-content');

  if (!tabButtons.length || !tabContents.length) return;

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      tabButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const tab = btn.getAttribute('data-tab');
      tabContents.forEach(c => {
        if (c.id === tab) {
          c.classList.remove('d-none');
          c.classList.add('show', 'active');
        } else {
          c.classList.add('d-none');
          c.classList.remove('show', 'active');
        }
      });

      // Scroll into view on small screens
      if (window.innerWidth < 720) {
        const detailCard = document.querySelector('.teacher-detail-card');
        if (detailCard) detailCard.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
}

// ===========================
// 15. Metric Counters Animation
// ===========================
function initMetricCounters() {
  const metricEls = document.querySelectorAll('.teacher-metric .value');
  if (!metricEls.length) return;

  metricEls.forEach(el => {
    const rawTarget = el.getAttribute('data-target') || el.textContent || '0';
    let isPercent = el.textContent.trim().includes('%');
    let isYears = el.textContent.trim().toLowerCase().includes('yrs');
    const target = parseFloat(rawTarget) || 0;
    const duration = 900; // ms
    let start = null;

    function step(ts) {
      if (!start) start = ts;
      const progress = Math.min((ts - start) / duration, 1);
      const val = Math.floor(progress * target);

      if (isPercent) el.textContent = val + '%';
      else if (isYears) el.textContent = val + ' yrs';
      else el.textContent = val;

      if (progress < 1) requestAnimationFrame(step);
      else {
        // ensure exact final value
        if (isPercent) el.textContent = target + '%';
        else if (isYears) el.textContent = target + ' yrs';
        else el.textContent = target;
      }
    }

    setTimeout(() => requestAnimationFrame(step), 220);
  });
}

// ===========================
// Accessibility for Keyboard
// ===========================
function initKeyboardFocus() {
  const navLinks = document.querySelectorAll('.nav-tabs-custom .nav-link');
  navLinks.forEach(btn => btn.setAttribute('tabindex', '0'));
}


// ================================
// 16. Change Photo - Profile Section
// ===============================
function initProfilePhotoManager() {

    // Prevent duplicate bindings
    if (window._profileListenersAttached) return;
    window._profileListenersAttached = true;

    const changePhotoBtn = document.getElementById('changePhotoBtn');
    const photoUploadModal = document.getElementById('photoUploadModal');
    const closePhotoModal = document.getElementById('closePhotoModal');
    const cancelUpload = document.getElementById('cancelUpload');
    const uploadButton = document.getElementById('uploadButton');
    const photoInput = document.getElementById('photoInput');
    const fileNameLabel = document.getElementById('fileNameLabel');
    const previewImage = document.getElementById('previewImage');
    const teacherPhoto = document.getElementById('teacherPhoto');
    const fileInputWrapper = document.getElementById('fileInputWrapper');
    const photoPlaceholder = document.querySelector('.photo-placeholder');

    if (!changePhotoBtn ||
        !photoUploadModal ||
        !closePhotoModal ||
        !cancelUpload ||
        !uploadButton ||
        !photoInput ||
        !fileNameLabel ||
        !previewImage ||
        !teacherPhoto ||
        !fileInputWrapper ||
        !photoPlaceholder) return;

    let currentFile = null;

    changePhotoBtn.addEventListener('click', function() {
        photoUploadModal.style.display = 'flex';
        resetModal();
    });

    closePhotoModal.addEventListener('click', closeModal);
    cancelUpload.addEventListener('click', closeModal);

    function closeModal() {
        photoUploadModal.style.display = 'none';
        resetModal();
    }

    photoInput.addEventListener('change', function() {
        const file = this.files[0];
        if (!file) return resetFileState();

        if (!file.type.startsWith('image/')) return resetFile("Please select a valid image file.");
        if (file.size > 5 * 1024 * 1024) return resetFile("File exceeds 5MB limit.");

        fileNameLabel.textContent = file.name;
        currentFile = file;

        const reader = new FileReader();
        reader.onload = e => {
            previewImage.src = e.target.result;
            previewImage.style.display = 'block';
            photoPlaceholder.style.display = 'none';
        };
        reader.readAsDataURL(file);
    });

    fileInputWrapper.addEventListener('click', function(e) {
        if (e.target !== photoInput) photoInput.click();
    });

    uploadButton.addEventListener('click', function() {
        if (!currentFile) {
            showToast('error', 'Invalid input', 'Please select an image file.');
            return;
        }

        uploadButton.classList.add('loading');
        uploadButton.disabled = true;

        const reader = new FileReader();
        reader.onload = e => {
            teacherPhoto.src = e.target.result;
            closeModal();
            setTimeout(() => {
                showToast('success', 'Profile Updated', 'Profile photo updated successfully!');
                uploadButton.classList.remove('loading');
                uploadButton.disabled = false;
            }, 400);
        };
        reader.readAsDataURL(currentFile);
    });

    photoUploadModal.addEventListener('click', function(e) {
        if (e.target === photoUploadModal) closeModal();
    });

    function resetModal() {
        previewImage.src = "";
        previewImage.style.display = "none";
        photoPlaceholder.style.display = "flex";
        fileNameLabel.textContent = "Choose an image";
        photoInput.value = "";
        currentFile = null;
        uploadButton.classList.remove("loading");
        uploadButton.disabled = false;
    }

    function resetFile(message) {
        alert(message);
        resetFileState();
    }

    function resetFileState() {
        fileNameLabel.textContent = "Choose a file";
        photoInput.value = "";
        currentFile = null;
    }
}



// =======================================
// 17. Notification System - Notification Page
// =======================================
function initNotifications() {
    const notifications = document.querySelectorAll('.notification-item');
    const filterButtons = document.querySelectorAll('.teacher-filter-btn');
    const markButtons = document.querySelectorAll('.teacher-action-btn-mark');
    const deleteButtons = document.querySelectorAll('.teacher-action-btn-delete');
    const markAllReadBtn = document.querySelector('.teacher-btn-action:first-child');
    const clearAllConfirmBtn = document.getElementById('confirmClear');
    const clearAllModal = new bootstrap.Modal(document.getElementById('clearAllModal'));
    const notificationList = document.querySelector('.teacher-notifications-list');

    if (!notifications.length) return;

    // --- Animation delays ---
    notifications.forEach((item, index) => {
        item.style.animationDelay = `${index * 0.05}s`;
    });

    // --- Filter buttons ---
    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const showUnread = this.textContent.includes('Unread');

            notifications.forEach(notification => {
                notification.style.display = showUnread
                    ? notification.classList.contains('notification-unread') ? 'flex' : 'none'
                    : 'flex';
            });
        });
    });

    // --- Mark as read ---
    markButtons.forEach(button => {
        button.addEventListener('click', function () {
            const notificationItem = this.closest('.notification-item');
            notificationItem.classList.remove('notification-unread');
            
            // Remove unread dot
            const dot = notificationItem.querySelector('.unread-dot');
            if (dot) dot.remove();
            
            this.classList.add('active');
            this.innerHTML = '<i class="bi bi-check"></i>';
            
            updateNotificationStats();
            toastManager.show('Notification marked as read', 'success');
        });
    });

    // --- Delete notification ---
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const notificationItem = this.closest('.notification-item');
            notificationItem.style.opacity = '0';
            notificationItem.style.transform = 'translateY(-20px)';
            notificationItem.style.transition = 'opacity 0.3s ease, transform 0.3s ease';

            setTimeout(() => {
                notificationItem.remove();
                updateNotificationStats();
                toastManager.show('Notification deleted', 'info');
            }, 300);
        });
    });

    // --- Mark All Read ---
    if (markAllReadBtn) {
        markAllReadBtn.addEventListener('click', function () {
            notifications.forEach(notification => {
                notification.classList.remove('notification-unread');
                
                // Remove unread dot
                const dot = notification.querySelector('.unread-dot');
                if (dot) dot.remove();
                
                const markBtn = notification.querySelector('.teacher-action-btn-mark');
                if (markBtn) {
                    markBtn.classList.add('active');
                    markBtn.innerHTML = '<i class="bi bi-check"></i>';
                }
            });

            updateNotificationStats();
            showToast('info', 'Notification System', 'All notifications marked as read');
        });
    }

    // --- Clear All using modal ---
    if (clearAllConfirmBtn) {
        clearAllConfirmBtn.addEventListener('click', function () {
            notificationList.innerHTML = '<div class="text-center p-4">No notifications to display.</div>';
            updateNotificationStats();
            showToast('info', 'Notification System', 'All notifications cleared');
            clearAllModal.hide();
        });
    }

    // --- Stats updater function ---
    function updateNotificationStats() {
        const total = document.querySelectorAll('.notification-item').length;
        const unread = document.querySelectorAll('.notification-item.notification-unread').length;
        const read = total - unread;

        const statValues = document.querySelectorAll('.teacher-stat-value');
        if (statValues.length >= 3) {
            statValues[0].textContent = total;
            statValues[1].textContent = unread;
            statValues[2].textContent = read;
        }

        // Update filter numbers
        const allFilter = document.querySelector('.teacher-filter-btn:first-child');
        const unreadFilter = document.querySelector('.teacher-filter-btn:last-child');

        if (allFilter) allFilter.textContent = `All (${total})`;
        if (unreadFilter) unreadFilter.textContent = `Unread (${unread})`;
    }
}


/* ===========================
   18. Create Section - Pupil Management
=========================== */
function initEditableSections() {
    // Handle all sections with class .editable-section
    document.querySelectorAll('.editable-section').forEach(section => {
        const editBtn = section.querySelector('.edit-profile-btn');
        const cancelBtn = section.querySelector('.cancel-edit-btn');
        const saveBtn = section.querySelector('.save-changes-btn');
        const editActions = section.querySelector('.teacher-edit-actions');
        const viewValues = section.querySelectorAll('.view-value');
        const editInputs = section.querySelectorAll('.edit-input');
        const icons = section.querySelectorAll('.value > svg');
        icons.forEach(icon => icon.style.display = 'none');

        // Skip if any required element is missing
        if (!editBtn || !editActions || !cancelBtn || !saveBtn) return;

        // Store original values
        const originalDisplay = {};
        const originalInput = {};

        viewValues.forEach(el => {
            const field = el.dataset.field;
            if (field) originalDisplay[field] = el.textContent.trim();
        });

        editInputs.forEach(el => {
            const field = el.dataset.field;
            if (field) originalInput[field] = el.value;
        });

        // Helper: Format DOB for display (only used in Personal section)
        function formatDobForDisplay(dateString) {
            if (!dateString) return '';
            const date = new Date(dateString);
            if (isNaN(date)) return dateString;
            return date.toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }

        // Switch to Edit Mode
        function enterEditMode() {
            editBtn.style.display = 'none';
            editActions.style.display = 'flex';

            viewValues.forEach(el => el.style.display = 'none');
            editInputs.forEach(el => {
                const field = el.dataset.field;
                if (field) {
                    el.value = originalInput[field] || '';
                }
                el.style.display = 'block';
            });

            // Hide icons in Personal section (they are direct siblings of .view-value)
            const icons = section.querySelectorAll('.value > svg');
            icons.forEach(icon => icon.style.display = 'none');
        }

        // Switch to View Mode
        function exitEditMode() {
            editBtn.style.display = 'inline-block';
            editActions.style.display = 'none';

            viewValues.forEach(el => el.style.display = 'inline');
            editInputs.forEach(el => el.style.display = 'none');

            // Show icons again
            const icons = section.querySelectorAll('.value > svg');
            icons.forEach(icon => icon.style.display = 'block');
        }

        // Edit button
        editBtn.addEventListener('click', enterEditMode);

        // Cancel
        cancelBtn.addEventListener('click', () => {
            // Restore original display text
            viewValues.forEach(el => {
                const field = el.dataset.field;
                if (field && originalDisplay[field] !== undefined) {
                    el.textContent = originalDisplay[field];
                }
            });
            exitEditMode();
        });

        // Save
        saveBtn.addEventListener('click', () => {
            // Update view values from inputs
            editInputs.forEach(input => {
                const field = input.dataset.field;
                if (!field) return;

                let newValue = input.value.trim();
                const viewEl = section.querySelector(`.view-value[data-field="${field}"]`);
                if (!viewEl) return;

                // Special handling for DOB
                let displayValue = newValue;
                if (field === 'dob') {
                    displayValue = formatDobForDisplay(newValue);
                }

                // Update stored values
                originalInput[field] = newValue;
                originalDisplay[field] = displayValue;

                // Update the view
                if (field === 'subject' || field === 'employmentStatus' || field === 'schedule') {
                    // These have badge styling — preserve the class
                    viewEl.className = `badge badge-${field === 'subject' ? 'warning' : 'success'} view-value`;
                }
                viewEl.textContent = displayValue;
            });

            // Show success
            if (typeof showToast === 'function') {
                showToast('success', 'Saved', 'Changes saved successfully.');
            }

            exitEditMode();
        });
    });
}


/* ===========================
   19. Edit Personal Information - Profile section
=========================== */
let globalPupils = []; 

function initSectionsManager(fetchedSections = [], fetchedPupils = []) {
    const createSectionBtn = document.getElementById('createSectionBtn');
    const createSectionModalEl = document.getElementById('createSectionModal');
    const createSectionModal = createSectionModalEl ? new bootstrap.Modal(createSectionModalEl) : null;
    const createSectionForm = document.getElementById('createSectionForm');
    const createSectionSubmit = document.getElementById('createSectionSubmit');
    const yourSectionsContainer = document.getElementById('sectionsContainer');
    const sectionsGrid = document.getElementById('sectionsGrid');
    const showAllBtn = document.getElementById('showAllBtn');
    const viewCardsBtn = document.getElementById('viewCardsBtn');
    const viewListBtn = document.getElementById('viewListBtn');
    const userTableBody = document.getElementById('userTableBody');

    const pupilSearchInput = document.getElementById('pupil-search');
    const pupilStatusFilter = document.getElementById('pupilStatusFilter');
    const pupilSort = document.getElementById('pupilSort');
    const resetFiltersBtn = document.querySelector('#advancedFilters .reset-btn');

    if (!createSectionBtn || !createSectionForm || !sectionsGrid || !userTableBody) return;

    

    // -------------------------------
    // Data
    // -------------------------------
    let sections = [...fetchedSections];  // sections array including newly created
    let pupils = [...fetchedPupils];      // copy of fetched pupils
    let currentSelectedSection = null;
    let isShowingAll = false;
    let currentView = 'cards';

    globalPupils = pupils;

    console.log(globalPupils);

    // -------------------------------
    // Helpers
    // -------------------------------
    function generateEnrollmentCode(length = 6) {
        const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        return Array.from({ length }, () => chars[Math.floor(Math.random() * chars.length)]).join('');
    }

    function formatDate(date) {
        return `${String(date.getMonth() + 1).padStart(2,'0')}/${String(date.getDate()).padStart(2,'0')}/${date.getFullYear()}`;
    }

    function createSectionCard(section) {
        const card = document.createElement('div');
        card.className = 'pupil-section-card';
        card.dataset.subject = section.subject;

        card.innerHTML = `
            <div class="pupil-section-header">
                <div>
                    <h6 class="pupil-section-title">${section.section_name}</h6>
                    <!-- <div class="pupil-section-school mt-2 d-flex align-items-center gap-2">
                        <svg class="bi bi-building" width="1em" height="1em" fill="currentColor"><use href="#icon-building"/></svg>
                         <span>${section.section_name}</span> 
                    </div> -->
                    <div class="pupil-section-school-year mt-1 d-flex align-items-center gap-2">
                        <svg class="bi bi-calendar4" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"></path>
                        </svg>
                        <span>${section.school_year}</span>
                    </div>
                </div>
                <span class="enrolled-count">${section.noEnrolled} enrolled</span>
            </div>

            <div class="enrollment-code-container">
                <div>
                    <div class="enrollment-code-label">Enrollment Code</div>
                    <div class="enrollment-code">${section.enrollment_code}</div>
                </div>
                <button class="copy-icon" data-code="${section.enrollment_code}" title="Copy to clipboard">
                    <svg class="bi bi-copy" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"></path>
                    </svg>
                </button>
            </div>

            <div class="section-created">
                Created: ${section.created_at.split("T")[0]}
                <span class="selected-badge" style="display:none;">Selected</span>
            </div>
        `;
        return card;
    }

    function updateSectionsDisplay() {
        const showAll = isShowingAll || sections.length <= 3;
        const toShow = showAll ? sections : sections.slice(0,3);

        sectionsGrid.innerHTML = '';

        toShow.forEach(section => {
            const card = createSectionCard(section);
            sectionsGrid.appendChild(card);

            // Copy code
            const copyBtn = card.querySelector('.copy-icon');
            copyBtn.addEventListener('click', e => {
                e.stopPropagation();
                navigator.clipboard.writeText(copyBtn.dataset.code);
                showToast('success', 'Copied', 'Enrollment code copied!');
            });

            // Select card
            card.addEventListener('click', () => {
                document.querySelectorAll('.pupil-section-card').forEach(c => {
                    c.classList.remove('selected');
                    c.querySelector('.selected-badge').style.display = 'none';
                });

                if (currentSelectedSection === section.name) {
                    currentSelectedSection = null;
                    filterStudents(null);
                } else {
                    card.classList.add('selected');
                    card.querySelector('.selected-badge').style.display = 'inline-block';
                    currentSelectedSection = section.name;
                    filterStudents(section.name);
                }
            });

            if (currentSelectedSection === section.name) {
                card.classList.add('selected');
                card.querySelector('.selected-badge').style.display = 'inline-block';
            }
        });

        sectionsGrid.className = 'sections-grid ' + currentView + '-view';
        showAllBtn.style.display = sections.length > 3 ? 'block' : 'none';
        if (sections.length > 3) {
            showAllBtn.textContent = isShowingAll ? 'Show Less' : 'Show All Sections';
        }
    }

    let currentPage = 1;
    const pageSize = 10; // how many pupils per page

    function renderPupilsTable(filteredPupils) {
        const totalPupils = filteredPupils.length;
        const totalPages = Math.ceil(totalPupils / pageSize);
        
        if (currentPage > totalPages) currentPage = totalPages || 1;

        const start = (currentPage - 1) * pageSize;
        const end = start + pageSize;
        const pupilsToShow = filteredPupils.slice(start, end);

        userTableBody.innerHTML = '';
        pupilsToShow.forEach(pupil => {
            const status = pupil.active_status === 1 ? 'Active' : 'Inactive';

            // Mask LRN → shows first 4 digits only
            const maskedLRN = pupil.LRN
                ? "*".repeat(pupil.LRN.length - 3) + pupil.LRN.slice(-3)
                : "***";

            // Mask Email → shows first 2 letters + ***
            const maskedEmail = pupil.email
                ? pupil.email.replace(/(.{2}).+(@.+)/, "$1***$2")
                : "***";
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td></td>
                <td data-label="Profile">
                    <img class="img-fluid pupil-avatar" width="200" height="200" src="${pupil.thumbnail || '/path/to/default.png'}">
                </td>
                <td data-label="Name">${pupil.fullname}</td>
                <td data-label="LRN">${maskedLRN}</td>
                <td data-label="Grade">Grade 4</td>
                <!--<td data-label="Age">${pupil.age}</td>-->
                <td data-label="Status">
                    <span class="status-badge status-${status.toLowerCase()}">${status}</span>
                </td>
                <td data-label="Email">${maskedEmail}</td>
                <td data-label="Section">${pupil.section_name}</td>
                <td data-label="Enrollment Date">${new Date(pupil.enrollment_date).toLocaleDateString()}</td>
                <td data-label="Actions">
                    <button class="btn action-btn view" title="View Profile" data-bs-toggle="modal" data-bs-target="#viewPupilModal" data-id="${pupil.user_id}">
                        <svg class="bi bi-eye" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                        </svg>
                    </button>
                </td>
            `;
            userTableBody.appendChild(tr);
        });

        // Update pagination numbers
        document.getElementById('startCount').textContent = start + 1;
        document.getElementById('endCount').textContent = Math.min(end, totalPupils);
        document.getElementById('totalCount').textContent = totalPupils;

        const pagination = document.getElementById('pupilListPagination');
        pagination.innerHTML = '';

        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = 'page-item' + (currentPage === 1 ? ' disabled' : '');
        prevLi.innerHTML = `<a class="page-link" href="#">Previous</a>`;
        prevLi.addEventListener('click', e => { e.preventDefault(); if (currentPage > 1) { currentPage--; renderPupilsTable(filteredPupils); } });
        pagination.appendChild(prevLi);

        // Page numbers
        for (let i = 1; i <= totalPages; i++) {
            const li = document.createElement('li');
            li.className = 'page-item' + (i === currentPage ? ' active' : '');
            li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
            li.addEventListener('click', e => { e.preventDefault(); currentPage = i; renderPupilsTable(filteredPupils); });
            pagination.appendChild(li);
        }

        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = 'page-item' + (currentPage === totalPages ? ' disabled' : '');
        nextLi.innerHTML = `<a class="page-link" href="#">Next</a>`;
        nextLi.addEventListener('click', e => { e.preventDefault(); if (currentPage < totalPages) { currentPage++; renderPupilsTable(filteredPupils); } });
        pagination.appendChild(nextLi);
    }

    function filterStudents(sectionName = null) {
        userTableBody.innerHTML = '';

        let filteredPupils = sectionName 
            ? pupils.filter(p => p.section_name === sectionName)
            : [...pupils];

        // Filter by status
        const statusValue = pupilStatusFilter?.value;
        if (statusValue && statusValue !== 'all') {
            filteredPupils = filteredPupils.filter(p => {
                const status = p.active_status === 1 ? 'active' : 'inactive';
                return status === statusValue;
            });
        }

        // Filter by search
        const searchTerm = pupilSearchInput?.value.toLowerCase().trim();
        if (searchTerm) {
            filteredPupils = filteredPupils.filter(p => 
                p.fullname.toLowerCase().includes(searchTerm) ||
                p.LRN.toLowerCase().includes(searchTerm) ||
                (p.section_name && p.section_name.toLowerCase().includes(searchTerm))
            );
        }

        // Sort
        if (pupilSort) {
            switch (pupilSort.value) {
                case 'asc':
                    filteredPupils.sort((a,b) => a.fullname.localeCompare(b.fullname));
                    break;
                case 'desc':
                    filteredPupils.sort((a,b) => b.fullname.localeCompare(a.fullname));
                    break;
                case 'newest':
                    filteredPupils.sort((a,b) => new Date(b.enrollment_date) - new Date(a.enrollment_date));
                    break;
                case 'oldest':
                    filteredPupils.sort((a,b) => new Date(a.enrollment_date) - new Date(b.enrollment_date));
                    break;
            }
        }

        // No results
        if (!filteredPupils.length) {
            document.getElementById('noResults').style.display = 'block';
        } else {
            document.getElementById('noResults').style.display = 'none';
        }

        // Render pupils
        filteredPupils.forEach(pupil => {
            const status = pupil.active_status === 1 ? 'Active' : 'Inactive';
            const tr = document.createElement('tr');
            tr.dataset.section = pupil.section_name;
            tr.dataset.active = pupil.active_status === 1;
        });

        window.currentFilteredPupils = filteredPupils;
        currentPage = 1; // reset page on new filter
        renderPupilsTable(filteredPupils);

        document.getElementById('endCount').textContent = filteredPupils.length;
        document.getElementById('totalCount').textContent = pupils.length;
    }



    // -------------------------------
    // Events
    // -------------------------------
    createSectionBtn.addEventListener('click', () => {
        if (createSectionModal) createSectionModal.show();
    });


    // Search input
    pupilSearchInput?.addEventListener('input', () => filterStudents(currentSelectedSection));

    // Status filter
    pupilStatusFilter?.addEventListener('change', () => filterStudents(currentSelectedSection));

    // Sort
    pupilSort?.addEventListener('change', () => filterStudents(currentSelectedSection));

    // Reset button
    resetFiltersBtn?.addEventListener('click', () => {
        pupilSearchInput.value = '';
        pupilStatusFilter.value = 'all';
        pupilSort.value = 'asc';
        filterStudents(currentSelectedSection);
    });


    createSectionSubmit.addEventListener('click', () => {
        if (!createSectionForm.checkValidity()) {
            createSectionForm.classList.add('was-validated');
            return;
        }

        const schoolName = document.getElementById('schoolName').value;
        const schoolYear = document.getElementById('schoolYear').value;
        const name = document.getElementById('sectionName').value;
        const subject = document.getElementById('pupil-subject').value;

        const newSection = {
            schoolName,
            schoolYear,
            name,
            subject,
            code: generateEnrollmentCode(),
            date: formatDate(new Date())
        };

        sections.push(newSection);
        fetchedSections.push(newSection); // keep fetched in sync
        isShowingAll = false;

        updateSectionsDisplay();
        filterStudents(null); // refresh pupil table
        yourSectionsContainer.classList.add('show');

        createSectionForm.reset();
        createSectionForm.classList.remove('was-validated');
        if (createSectionModal) createSectionModal.hide();

        showToast('success', 'Saved', 'Section created successfully!');
    });

    createSectionForm.addEventListener('submit', e => e.preventDefault());

    viewCardsBtn?.addEventListener('click', () => {
        currentView = 'cards';
        updateSectionsDisplay();
    });

    viewListBtn?.addEventListener('click', () => {
        currentView = 'list';
        updateSectionsDisplay();
    });

    showAllBtn?.addEventListener('click', () => {
        isShowingAll = !isShowingAll;
        updateSectionsDisplay();
    });

    if (sections.length) yourSectionsContainer.classList.add('show');

    const exportBtn = document.getElementById('exportBtn');

    exportBtn?.addEventListener('click', () => {
      const dataToExport = window.currentFilteredPupils || [];
      if (!dataToExport.length) return showToast('info', 'No Data', 'No pupils to export');

      const exportData = dataToExport.map(p => ({
          "Full Name": p.fullname,
          "LRN": p.LRN,
          "Age": p.age,
          "Gender": p.gender,
          "Email": p.email,
          "Status": p.active_status === 1 ? "Active" : "Inactive",
          "Enrollment Date": new Date(p.enrollment_date).toLocaleDateString(),
          "Section": p.section_name
      }));

      const ws = XLSX.utils.json_to_sheet(exportData);
      const wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, ws, "Pupils");
      XLSX.writeFile(wb, "Pupils.xlsx");
  });


    updateSectionsDisplay();
    filterStudents(null);
}

function maskEmail(email) {
    if (!email) return "-";
    const [user, domain] = email.split("@");

    return user[0] + "***@" + domain;
}

function maskLRN(lrn) {
    if (!lrn) return "-";
    const last3 = lrn.slice(-3);
    return "*********" + last3; 
}

window.fillPupilModal = function(pupil) {

    //console.log('raw pupil data: ',pupil);
    document.getElementById("pupilProfileImg").src = pupil.thumbnail;
    document.getElementById("pupilProfileName").textContent = pupil.fullname;
    //document.getElementById("pupilProfileLRN").textContent = "LRN: " + pupil.LRN;
    document.getElementById("pupilProfileLRN").textContent = 
    "LRN: " + maskLRN(pupil.LRN);

    document.getElementById("badgeSection").textContent = pupil.section_name;
    document.getElementById("badgeBirthDate").textContent = pupil.birth_date.split("T")[0];
    document.getElementById("badgeAge").textContent = pupil.age + " Y/O";
    document.getElementById("badgeGender").textContent = pupil.gender;
    

    //document.getElementById("pupilEmail").textContent = pupil.email;
    document.getElementById("pupilEmail").textContent = maskEmail(pupil.email);
    document.getElementById("pupilEnrollmentDate").textContent =
        new Date(pupil.enrollment_date).toLocaleDateString();

    populateStars(pupil.total_stars || 0);
    initAssessments(pupil.pupil_tests || NULL);

   // CSS variables
    const rootStyles = getComputedStyle(document.documentElement);
    const successColor = rootStyles.getPropertyValue('--success-color').trim();
    const warningColor = rootStyles.getPropertyValue('--warning-color').trim();
    const dangerColor = rootStyles.getPropertyValue('--danger-color').trim();

    // Performance Summary
    // Avg. Mastery
    document.getElementById("avgMasteryValue").textContent = Math.round(pupil.avg_mastery) + "%";
    document.getElementById("avgMasteryTrend").textContent = (pupil.avg_mastery_change >= 0 ? "▲ " : "▼ ") + Math.abs(pupil.avg_mastery_change) + "%";
    document.getElementById("avgMasteryStatus").textContent = pupil.mastery_status;
    document.getElementById("avgMasteryStatus").style.color =
        pupil.mastery_status === "Improving" ? successColor :
        pupil.mastery_status === "Slight Dip" ? warningColor :
        dangerColor;

    // Engagement
    document.getElementById("engagementValue").textContent = pupil.engagement_sessions;
    document.getElementById("engagementTrend").textContent = (pupil.engagement_change >= 0 ? "▲ " : "▼ ") + Math.abs(pupil.engagement_change || 0);
    document.getElementById("engagementStatus").textContent = pupil.engagement_status;
    document.getElementById("engagementStatus").style.color =
        pupil.engagement_status === "Active" ? successColor :
        pupil.engagement_status === "Slight Dip" ? warningColor :
        dangerColor;

    // Avg. Session
    document.getElementById("avgSessionValue").textContent = Math.round(pupil.avg_session_minutes) + " min";
    document.getElementById("avgSessionTrend").textContent = (pupil.avg_session_minutes_change >= 0 ? "▲ " : "▼ ") + Math.abs(pupil.avg_session_minutes_change || 0) + " min";
    document.getElementById("avgSessionStatus").textContent = pupil.avg_session_status;
    document.getElementById("avgSessionStatus").style.color =
        pupil.avg_session_status === "Slight Dip" ? warningColor :
        pupil.avg_session_status === "Improving" ? successColor :
        dangerColor;

    // Badges
    document.getElementById("badgesValue").textContent = pupil.badges_earned;
    document.getElementById("badgesTrend").textContent = (pupil.badges_change >= 0 ? "▲ " : "▼ ") + Math.abs(pupil.badges_change || 0);
    document.getElementById("badgesStatus").textContent = pupil.badges_status;
    document.getElementById("badgesStatus").style.color =
        pupil.badges_status === "Motivated" ? successColor :
        pupil.badges_status === "Slight Dip" ? warningColor :
        dangerColor;
    
    // Populate Recent Activity
    const recentActivityContainer = document.getElementById("recent-activities");
    if (!recentActivityContainer) return;

    // Clear previous items
    recentActivityContainer.innerHTML = "";

    if (pupil.recent_activity && pupil.recent_activity.length > 0) {
        pupil.recent_activity.forEach(notif => {
            // Determine badge color based on type
            let badgeClass = "bg-secondary"; // default
            if (notif.type.includes("achievement")) badgeClass = "bg-warning";
            else if (notif.type === "activity" || notif.type === "completed") badgeClass = "bg-success";
            else if (notif.type === "alert" || notif.type === "warning") badgeClass = "bg-danger";

            // Format date/time nicely
            const notifDate = new Date(notif.created_at);
            const now = new Date();
            const timeDiff = Math.floor((now - notifDate) / (1000 * 60 * 60 * 24));
            let timeText = timeDiff === 0 ? "Today" : timeDiff === 1 ? "Yesterday" : notifDate.toLocaleDateString();

            // Create HTML
            const div = document.createElement("div");
            div.className = "pupil-activity-item";

            div.innerHTML = `
                <span class="me-2 badge ${badgeClass}">${notif.type.replace("_"," ")}</span>
                <div class="pupil-activity-content">
                    <p class="pupil-activity-title">${notif.message}</p>
                    <p class="text-muted pupil-activity-timestamp small">${timeText}</p>
                </div>
            `;

            recentActivityContainer.appendChild(div);
        });
    } else {
        recentActivityContainer.innerHTML = `<p class="text-muted small mb-0">No recent activity</p>`;
    }

    // Populate Learning Progress
    const learningProgressContainer = document.getElementById("learningProgressContainer");

    if (learningProgressContainer && pupil.subject_progress && pupil.subject_progress.length > 0) {
        // Remove previous subject progress items (but keep the insight banner)
        learningProgressContainer.querySelectorAll(".subject-progress-item").forEach(el => el.remove());

        pupil.subject_progress.forEach(subj => {
            let barClass = "progress-bar-warning"; // default
            let trendHTML = '';
            let statusText = subj.status;

            if (subj.status === "Above class avg" || subj.status === "Top performer" || subj.status === "On track") {
                barClass = "progress-bar-success";
                trendHTML = `<span class="trend up">▲ ${Math.round(subj.progress_percent - subj.class_avg)}%</span>`;
            } else if (subj.status === "Below class avg") {
                barClass = "progress-bar-warning";
                trendHTML = `<span class="trend down">▼ ${Math.round(subj.class_avg - subj.progress_percent)}%</span>`;
            }

            const div = document.createElement("div");
            div.className = "mb-4 subject-progress-item";

            div.innerHTML = `
                <div class="d-flex justify-content-between mb-1">
                    <span class="fw-medium learning-subject">${subj.subject_name}</span>
                    <span class="fw-bold learning-score">${subj.progress_percent.toFixed(0)}% ${trendHTML}</span>
                </div>
                <div class="progress">
                    <div class="progress-bar ${barClass}" style="width:${subj.progress_percent.toFixed(0)}%;"></div>
                </div>
                <small class="text-muted mt-1">${statusText} • Class avg (${subj.class_avg.toFixed(0)}%)</small>
            `;

            // Insert before insight banner
            const insightBanner = learningProgressContainer.querySelector(".insight-banner");
            if (insightBanner) {
                learningProgressContainer.insertBefore(div, insightBanner);
            } else {
                learningProgressContainer.appendChild(div);
            }
        });
    }

    // Generate dynamic insight text
    function generateInsight(subjectProgress) {
        if (!subjectProgress || !subjectProgress.length) return "No data available.";

        const strong = [];
        const moderate = [];
        const weak = [];
        const noProgress = [];

        subjectProgress.forEach(subj => {
            const p = subj.progress_percent;

            if (p === 0) {
                noProgress.push(subj.subject_name);
            } else if (p >= 50) {
                strong.push(subj.subject_name);
            } else if (p >= 30) {
                moderate.push(subj.subject_name);
            } else {
                weak.push(subj.subject_name);
            }
        });

        let insightText = "";

        if (strong.length > 0) {
            insightText += `Strong performance in ${strong.join(" & ")}. `;
        }

        if (moderate.length > 0) {
            insightText += `${moderate.join(" & ")} are progressing but need more practice. `;
        }

        if (weak.length > 0) {
            insightText += `${weak.join(" & ")} require focused support to improve. `;
        }

        if (noProgress.length > 0) {
            insightText += `${noProgress.join(" & ")} show no progress and the pupil needs motivation to improve.`;
        }

        return insightText.trim();
    }

    // Initialize the radar chart with pupil data
    if (window.initRadarChartForPupil && typeof window.initRadarChartForPupil === 'function') {
        window.initRadarChartForPupil(pupil);
    }


    // Populate the insight banner
    const insightBanner = document.getElementById("pupilInsight");
    if (insightBanner) {
        insightBanner.innerHTML = `<strong>Insight:</strong> ${generateInsight(pupil.subject_progress)}`;
    }

};

function populateStars(totalStars) {
    const container = document.querySelector('.stars-grid');
    const starLabel = document.getElementById("starLable");
    if (!container || !starLabel) return;

    // ⭐ Update label
    if (totalStars <= 0) {
        starLabel.innerHTML = `<span>No stars yet</span>`;
    } else {
        starLabel.innerHTML = `<span>${totalStars} ${totalStars === 1 ? "star" : "stars"} earned</span>`;
    }

    container.innerHTML = ""; // Clear grid

    const maxDisplay = 80;

    // If totalStars ≤ 80 → normal display
    const starCount = Math.min(totalStars, maxDisplay);

    // Render normal stars
    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.className = "text-warning star-item";
        star.innerHTML = `
            <svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 
                3.356.83 4.73c.078.443-.36.79-.746.592L8 
                13.187l-4.389 2.256z"></path>
            </svg>
        `;
        container.appendChild(star);
    }

    // ⭐⭐ If more than 80, display "more-star" version
    if (totalStars > maxDisplay) {
        const extra = totalStars - maxDisplay;

        const moreStar = document.createElement('div');
        moreStar.className = "text-warning star-item more-star";

        moreStar.innerHTML = `
            <svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <span class="more-badge">${extra}+</span>
        `;

        container.appendChild(moreStar);
    }
}


//  View button
  document.addEventListener("click", (e) => {
      const btn = e.target.closest(".action-btn.view");
      if (!btn) return;

      const pupilId = parseInt(btn.dataset.id);
      const pupil = globalPupils.find(p => p.user_id === pupilId);

      if (!pupil) return;

      fillPupilModal(pupil);
  });

  // const students = [
  //   {id:1, name:"Juan Dela Cruz", section:"Grade 7-A", avg:"92.5%", progress:75, lastScore:"95%", time:24.5, badges:12, status:"Excellent", trend:"up", subject:"Mathematics", lastActivityDate:"2025-11-20"},
  //   {id:2, name:"Maria Garcia", section:"Grade 7-B", avg:"88.3%", progress:75, lastScore:"90%", time:18.2, badges:10, status:"Good", trend:"up", subject:"English", lastActivityDate:"2025-11-15"},
  //   {id:3, name:"Pedro Santos", section:"Grade 7-A", avg:"85.7%", progress:67, lastScore:"88%", time:21.3, badges:8, status:"Good", trend:"up", subject:"Science", lastActivityDate:"2025-10-05"},
  //   {id:4, name:"Ana Reyes", section:"Grade 8-C", avg:"94.2%", progress:86, lastScore:"96%", time:19.8, badges:15, status:"Excellent", trend:"up", subject:"Mathematics", lastActivityDate:"2025-09-02"},
  //   {id:5, name:"Carlos Rivera", section:"Grade 7-B", avg:"96.8%", progress:83, lastScore:"98%", time:22.1, badges:18, status:"Excellent", trend:"up", subject:"Science", lastActivityDate:"2025-11-10"},
  //   {id:6, name:"Sofia Martinez", section:"Grade 7-A", avg:"78.5%", progress:58, lastScore:"75%", time:15.4, badges:5, status:"Needs Attention", trend:"down", subject:"English", lastActivityDate:"2025-11-22"},
  //   {id:7, name:"Miguel Santos", section:"Grade 8-C", avg:"72.3%", progress:50, lastScore:"70%", time:12.7, badges:4, status:"Needs Attention", trend:"flat", subject:"Filipino", lastActivityDate:"2025-06-18"},
  //   {id:8, name:"Isabella Cruz", section:"Grade 7-B", avg:"90.1%", progress:80, lastScore:"92%", time:20.5, badges:11, status:"Excellent", trend:"up", subject:"English", lastActivityDate:"2025-11-02"}
  // ];

/* ===========================
   Student Performance Analytics - Analytics Page
=========================== */
function initStudentsTable(pupils) {


  const tbody = document.getElementById('studentsTbody');

  const students = pupils.map(p => {
    const progress = Math.round(p.overall_progress_percent); // overall progress
    let status;
    if (progress >= 80) status = 'Excellent';
    else if (progress >= 50) status = 'Good';
    else status = 'Attention';

    return {
      id: p.user_id,
      name: p.fullname,
      section: p.section_name,
      avg: Number(p.avg_mastery).toFixed(2) + '%',
      progress: progress,
      lastScore: p.engagement_sessions,
      time: p.avg_session_minutes, 
      badges: p.badges_earned,
      status: status, // derived from progress
      trend: p.avg_mastery_change > 0 ? 'up' : (p.avg_mastery_change < 0 ? 'down' : 'flat'),
      subject: p.subject_progress?.[0]?.subject_name || '',
      lastActivityDate: p.recent_activity?.[0]?.created_at || ''
    };
  });

  function renderRow(s) {
    const progressWidth = Math.max(6, Math.min(100, s.progress));
    const pillClass = s.status === 'Excellent' ? 'excellent' : (s.status === 'Good' ? 'good' : 'attention');
    
    // ✅ Standardized trend icons
    let trendIcon;
    if (s.status === 'Excellent') {
        trendIcon = `<svg class="bi bi-graph-up trend-icon progress-trend-up" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
        </svg>`;
    } else if (s.status === 'Attention') {
        trendIcon = `<svg class="bi bi-graph-down trend-icon progress-trend-down" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 11.887a.5.5 0 0 0 .07-.704l-4.5-5.5a.5.5 0 0 0-.74-.037L7.06 8.233 3.404 3.206a.5.5 0 0 0-.808.588l4 5.5a.5.5 0 0 0 .758.06l2.609-2.61 4.15 5.073a.5.5 0 0 0 .704.07Z"/>
        </svg>`;
    } else { // flat
        trendIcon = `<svg class="trend-icon progress-trend-flat" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
          <line x1="4" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="2"/>
        </svg>`;
    }


    function formatMinutes(mins) {
      const hours = Math.floor(mins / 60);
      const minutes = Math.round(mins % 60);
      return hours > 0 ? `${hours}h ${minutes}m` : `${minutes}m`;
  }
    

    const progressBar = `
      <div class="d-flex align-items-center">
        <div class="progress-track" aria-hidden="true">
          <div class="progress-fill" style="width:${progressWidth}%;"></div>
        </div>
        <div class="progress-label tiny ms-2">${s.progress}%</div>
      </div>
    `;

    const statusPill = `<span class="pill ${pillClass}">${escapeHtml(s.status)}</span>`;

    return `
      <tr data-section="${escapeHtml(s.section)}"
          data-time="${s.time}"
          data-status="${escapeHtml(s.status)}"
          data-name="${escapeHtml(s.name)}"
          data-avg="${escapeHtml(s.avg)}"
          data-lastactivity="${escapeHtml(s.lastActivityDate)}">
        
        <td></td>
        <td data-label="Student">${escapeHtml(s.name)}</td>
        <td data-label="Section">${escapeHtml(s.section)}</td>
        <td data-label="Avg. Score" style="font-weight:700">${escapeHtml(s.avg)}</td>
        <td data-label="Progress">${progressBar}</td>
        
        <td data-label="Time Spent" class="time-text">${formatMinutes(s.time)}</td>
        <td data-label="Badges"><span class="tiny"><svg class="bi bi-award" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
      <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"></path>
      <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"></path>
    </svg> ${s.badges}</span></td>
        <td data-label="Status">${statusPill}</td>
        <td data-label="Trend">${trendIcon}</td>
      </tr>
    `;
  }

  function renderAllRows(){
    tbody.innerHTML = students.map(s => renderRow(s)).join('');
  }
  renderAllRows();

  function escapeHtml(str){
    if(str == null) return '';
    return String(str).replace(/[&<>"']/g, function(m){ return {'&':'&amp;','<':'<','>':'>','"':'&quot;',"'":'&#39;'}[m]; });
  }

  function startOfWeek(date){
    const d = new Date(date);
    const day = d.getDay();
    const diff = (day + 6) % 7;
    const res = new Date(d);
    res.setHours(0,0,0,0);
    res.setDate(d.getDate() - diff);
    return res;
  }
  function startOfMonth(date){
    const d = new Date(date);
    return new Date(d.getFullYear(), d.getMonth(), 1, 0,0,0,0);
  }
  function startOfQuarter(date){
    const d = new Date(date);
    const q = Math.floor(d.getMonth()/3);
    return new Date(d.getFullYear(), q*3, 1, 0,0,0,0);
  }
  function startOfYear(date){
    const d = new Date(date);
    return new Date(d.getFullYear(), 0, 1, 0,0,0,0);
  }

  function isWithinRange(dateString, rangeType){
    if(!rangeType) return true;
    if(!dateString) return false;
    const date = new Date(dateString + 'T00:00:00');
    if(isNaN(date)) return false;
    const now = new Date();
    now.setHours(0,0,0,0);
    switch(rangeType){
      case 'week':
        return date >= startOfWeek(now);
      case 'month':
        return (date.getMonth() === now.getMonth() && date.getFullYear() === now.getFullYear());
      case 'quarter':
        return (Math.floor(date.getMonth()/3) === Math.floor(now.getMonth()/3) && date.getFullYear() === now.getFullYear());
      case 'year':
        return (date.getFullYear() === now.getFullYear());
      default:
        return true;
    }
  }

  let currentPage = 1;
  const rowsPerPage = 5;

  function renderRowsWithPagination() {
      const tbody = document.getElementById('studentsTbody');
      const rows = Array.from(tbody.querySelectorAll('tr')).filter(row => row.style.display !== 'none');
      const totalRows = rows.length;
      const totalPages = Math.ceil(totalRows / rowsPerPage);
      
      if (currentPage > totalPages) currentPage = totalPages || 1;
      
      const startIndex = (currentPage - 1) * rowsPerPage;
      const endIndex = startIndex + rowsPerPage;

      // Hide all rows first
      rows.forEach(row => row.style.display = 'none');

      // Show only current page rows
      rows.slice(startIndex, endIndex).forEach(row => row.style.display = '');

      // Update counts
      document.getElementById('startCount-2').textContent = totalRows ? startIndex + 1 : 0;
      document.getElementById('endCount-2').textContent = Math.min(endIndex, totalRows);
      document.getElementById('totalCount-2').textContent = totalRows;

      // Render pagination
      const paginationUl = document.querySelector('.pagination-container ul.pagination');
      paginationUl.innerHTML = '';

      const prevLi = document.createElement('li');
      prevLi.className = 'page-item' + (currentPage === 1 ? ' disabled' : '');
      prevLi.innerHTML = `<a class="page-link" href="#">Previous</a>`;
      prevLi.addEventListener('click', e => { e.preventDefault(); if (currentPage > 1) { currentPage--; renderRowsWithPagination(); }});
      paginationUl.appendChild(prevLi);

      for (let i = 1; i <= totalPages; i++) {
          const li = document.createElement('li');
          li.className = 'page-item' + (i === currentPage ? ' active' : '');
          li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
          li.addEventListener('click', e => { e.preventDefault(); currentPage = i; renderRowsWithPagination(); });
          paginationUl.appendChild(li);
      }

      const nextLi = document.createElement('li');
      nextLi.className = 'page-item' + (currentPage === totalPages ? ' disabled' : '');
      nextLi.innerHTML = `<a class="page-link" href="#">Next</a>`;
      nextLi.addEventListener('click', e => { e.preventDefault(); if (currentPage < totalPages) { currentPage++; renderRowsWithPagination(); }});
      paginationUl.appendChild(nextLi);
  }


  const searchInput = document.getElementById('searchInput');
  const subjectFiltering = document.getElementById('pupilSubjectFilter');
  const sectionFilter = document.getElementById('sectionFilter');
  const perfFilter = document.getElementById('performanceFilter');
  const timeRangeFilter = document.getElementById('pupilTimeRangeFilter');
  const sortByName = document.getElementById('sortByName');
  const clearFilters = document.getElementById('resetFilters');

  function filterRows() {
    const q = searchInput.value.trim().toLowerCase();
    const subject = subjectFiltering.value;
    const section = sectionFilter.value;
    const perf = perfFilter.value;
    const timeRange = timeRangeFilter.value;
    const sortBy = sortByName.value;

    const rows = Array.from(tbody.querySelectorAll('tr'));
    let visibleRows = [];

    rows.forEach(row => {
      const name = (row.dataset.name || '').toLowerCase();
      const subj = row.dataset.subject || '';
      const sect = row.dataset.section || '';
      const avg = (row.dataset.avg || '').toLowerCase();
      const status = row.dataset.status || '';
      const dateStr = row.dataset.lastactivity || '';

      let matchesSearch = q === '' || name.includes(q) || subj.toLowerCase().includes(q) || sect.toLowerCase().includes(q) || avg.includes(q);
      let matchesSubject = subject === '' || subj === subject;
      let matchesSection = section === '' || sect === section;
      let matchesPerf = perf === '' || status === perf;
      let matchesTime = isWithinRange(dateStr, timeRange);

      const visible = matchesSearch && matchesSubject && matchesSection && matchesPerf && matchesTime;
      row.style.display = visible ? '' : 'none';
      if (visible) visibleRows.push(row);
    });

    // 👇 Sorting logic (only added part)
    if (sortBy === 'asc') {
      visibleRows.sort((a, b) => (a.dataset.name || '').localeCompare(b.dataset.name || ''));
    } else if (sortBy === 'desc') {
      visibleRows.sort((a, b) => (b.dataset.name || '').localeCompare(a.dataset.name || ''));
    } else if (sortBy === 'oldest') {
      visibleRows.sort((a, b) => new Date(a.dataset.lastactivity) - new Date(b.dataset.lastactivity));
    } else if (sortBy === 'newest') {
      visibleRows.sort((a, b) => new Date(b.dataset.lastactivity) - new Date(a.dataset.lastactivity));
    }

    visibleRows.forEach(row => tbody.appendChild(row));

    const noResultsDiv = document.getElementById('noResultsFound');
    if (noResultsDiv) {
      noResultsDiv.style.display = visibleRows.length === 0 ? 'block' : 'none';
    }

    currentPage = 1; // Reset to first page after filtering
    renderRowsWithPagination();
  }

  // 👇 Added sortByName to event listeners
  [searchInput, subjectFiltering, sectionFilter, perfFilter, timeRangeFilter, sortByName].forEach(el => {
    el.addEventListener('input', filterRows);
    el.addEventListener('change', filterRows);
  });

  clearFilters.addEventListener('click', () => {
    searchInput.value = '';
    subjectFiltering.value = '';
    sectionFilter.value = '';
    perfFilter.value = '';
    timeRangeFilter.value = '';
    sortByName.value = '';
    filterRows();
    searchInput.focus();
  });

  filterRows();

  searchInput.addEventListener('keydown', (e) => {
    if(e.key === 'Escape'){
      searchInput.value = '';
      filterRows();
    }
  });
}


/* ===========================
   Assessment Tab - View Pupil Modal -Teacher Side
=========================== */
function initAssessments(pupilTests = []) {
    let currentPage = 1;
    const itemsPerPage = 3;
    let filteredData = [...pupilTests];

    const $ = (id) => document.getElementById(id);

    const searchInput = $('searchTest');
    const subjectFilter = $('testSubjectFilter');
    const quarterFilter = $('testQuarterFilter');
    const fromDate = $('fromDate');
    const clearFiltersBtn = $('testClearFilter');
    const testCardsContainer = $('testCardsContainer');
    const startCount = $('startCount-3');
    const endCount = $('endCount-3');
    const totalCount = $('totalCount-3');
    const paginationNav = document.getElementById('testPagination');

    if (!testCardsContainer) return;

    function init() {
        renderTestCards();
        updatePagination();
        updateResultsCount();

        searchInput?.addEventListener('input', handleFilterChange);
        subjectFilter?.addEventListener('change', handleFilterChange);
        quarterFilter?.addEventListener('change', handleFilterChange);

        // Add listener for sort select
        const sortDate = $('sortDate');
        sortDate?.addEventListener('change', handleFilterChange);

        clearFiltersBtn?.addEventListener('click', clearAllFilters);
        paginationNav?.addEventListener('click', handlePaginationClick);
    }

    function handleFilterChange() {
        filteredData = pupilTests.filter(test => {
            const searchTerm = (searchInput?.value || '').toLowerCase().trim();

            if (searchTerm &&
                !test.title.toLowerCase().includes(searchTerm) &&
                !test.subject.toLowerCase().includes(searchTerm) &&
                !test.type.toLowerCase().includes(searchTerm)) {
                return false;
            }

            if (subjectFilter?.value && subjectFilter.value !== '' &&
                test.subject.toLowerCase() !== subjectFilter.value.toLowerCase()) return false;

            if (quarterFilter?.value && quarterFilter.value !== '' &&
                parseInt(test.quarter) !== parseInt(quarterFilter.value)) return false;

            return true;
        });


        // SORT AFTER FILTERING
        const sortDate = $('sortDate');
        if (sortDate?.value) {
            filteredData.sort((a, b) => {
                const dateA = new Date(a.date).getTime();
                const dateB = new Date(b.date).getTime();
                return sortDate.value === 'asc' ? dateA - dateB : dateB - dateA;
            });
        }

        currentPage = 1;
        renderTestCards();
        updatePagination();
        updateResultsCount();
    }

    function clearAllFilters() {
        searchInput.value = '';
        subjectFilter.value = '';
        quarterFilter.value = '';
        fromDate.value = '';
        filteredData = [...pupilTests];
        currentPage = 1;
        renderTestCards();
        updatePagination();
        updateResultsCount();
    }

    function renderTestCards() {
        testCardsContainer.innerHTML = '';
        if (filteredData.length === 0) {
            testCardsContainer.innerHTML = `<div class="col-12 text-center py-5 text-muted">
                No results found<br><small>Try adjusting your search or filter criteria</small>
            </div>`;
            return;
        }

        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, filteredData.length);

        for (let i = startIndex; i < endIndex; i++) {
            testCardsContainer.appendChild(createTestCard(filteredData[i]));
        }
    }

    function createTestCard(test) {
        const card = document.createElement('div');
        card.className = 'test-card';

        // Pass/Needs Improvement/Fail logic
        let statusBadgeClass = '';
        let statusText = '';
        if (test.grade >= 75) { statusBadgeClass = 'status-passed'; statusText = 'Passed'; }
        else if (test.grade >= 50) { statusBadgeClass = 'status-needs-review'; statusText = 'Needs Improvement'; }
        else { statusBadgeClass = 'status-failed'; statusText = 'Fail'; }

        const typeTagClass = test.type.toUpperCase() === 'PRE' ? 'tag-pretest' : 'tag-posttest';
        const subjectTagClass = `tag-${test.subject.toLowerCase()}`;
        const quarterTagClass = `tag-q${test.quarter}`;

        const formattedDate = new Date(test.date).toLocaleDateString('en-US');

        card.innerHTML = `
            <div class="test-header">
                <div class="test-title"><span>${test.title}</span></div>
                <div class="test-tags">
                    <span class="tag ${typeTagClass}">${test.type}</span>
                    <span class="tag ${subjectTagClass}">${test.subject}</span>
                    <span class="tag ${quarterTagClass}">Q${test.quarter}</span>
                </div>
            </div>
            <div class="test-meta">
                <div class="text-muted test-meta-item">
                    <svg class="bi bi-calendar4" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"></path>
                    </svg>
                    <span>${formattedDate}</span>
                </div>
            </div>
            <div class="test-stats">
                <div class="stat-item">
                    <div class="stat-label">Status</div>
                    <span class="test-status-badge ${statusBadgeClass}">${statusText}</span>
                </div>
                <div class="stat-item">
                    <div class="stat-label">Scores</div>
                    <div class="stat-value-small">${test.grade}%</div>
                    <div class="score-details">${test.score} correct</div>
                </div>
                <div class="stat-item">
                    <div class="stat-label">Attempts</div>
                    <div class="stat-value-small">${test.attempt_number} ${test.attempt_number === 1 ? 'time' : 'times'}</div>
                </div>
            </div>
        `;
        return card;
    }

    function updatePagination() {
        if (!paginationNav) return;

        const totalPages = Math.ceil(filteredData.length / itemsPerPage);
        let paginationHTML = '';

        paginationHTML += `<li class="page-item ${currentPage <= 1 ? 'disabled' : ''}">
            <a class="page-link" href="#">Previous</a></li>`;

        const startPage = Math.max(1, currentPage - 2);
        const endPage = Math.min(totalPages, startPage + 4);

        for (let i = startPage; i <= endPage; i++) {
            paginationHTML += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#">${i}</a></li>`;
        }

        paginationHTML += `<li class="page-item ${currentPage >= totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#">Next</a></li>`;

        paginationNav.innerHTML = paginationHTML;
    }

    function getLocalDateOnly(dateString) {
        const d = new Date(dateString); // parse ISO or input date
        return new Date(d.getFullYear(), d.getMonth(), d.getDate()); // local midnight
    }

    function handlePaginationClick(e) {
        if (!e.target.classList.contains('page-link')) return;
        e.preventDefault();

        const text = e.target.textContent.trim();
        const totalPages = Math.ceil(filteredData.length / itemsPerPage);

        if (text === 'Previous' && currentPage > 1) currentPage--;
        else if (text === 'Next' && currentPage < totalPages) currentPage++;
        else if (!isNaN(parseInt(text))) currentPage = parseInt(text);

        renderTestCards();
        updatePagination();
        updateResultsCount();
    }

    function updateResultsCount() {
        const start = filteredData.length === 0 ? 0 : (currentPage - 1) * itemsPerPage + 1;
        const end = Math.min(currentPage * itemsPerPage, filteredData.length);
        const total = filteredData.length;

        startCount.textContent = start;
        endCount.textContent = end;
        totalCount.textContent = total;
    }

    init();
}




// ===========================
// Initialize all tab & metric scripts
// ===========================
document.addEventListener('DOMContentLoaded', () => {
  initDetailCardTabs();
  initMetricCounters();
  initKeyboardFocus();
    initProfilePhotoManager();
    initEditableSections();
    initSectionsManager();
    initStudentsTable();
    initAssessments();
    initNotifications();
});


