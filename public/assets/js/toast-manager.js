// MQUESTADMINSIDE/public/assets/js/toast-manager.js

/** 
 * Displays a toast notification using Bootstrap Icons (SVG)
 * @param {string} type - 'success', 'error', or 'info'
 * @param {string} title - Toast title
 * @param {string} message - Toast message
 */
function showToast(type, title, message) {
    const toastContainer = document.getElementById('global-toast-container');
    if (!toastContainer) {
        console.error('Toast container #toast-container not found!');
        return;
    }

    // ✅ SVG Icons (Bootstrap Icons)
    const iconMap = {
        success: `
            <svg class="bi bi-check-circle" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
            </svg>
        `,
        error: `
            <svg class="bi bi-exclamation-circle" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
            </svg>
        `,
        info: `
            <svg class="bi bi-info-circle" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
            </svg>
        `
    };

    const iconSvg = iconMap[type] || iconMap.info;

    // Create toast element
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.innerHTML = `
        <div class="toast-icon">
            ${iconSvg}
        </div>
        <div class="toast-content">
            <div class="toast-title">${title}</div>
            <div class="toast-message">${message}</div>
        </div>
        <button class="toast-close" aria-label="Close">&times;</button>
    `;

    toastContainer.appendChild(toast);

    // Trigger show animation
    setTimeout(() => toast.classList.add('show'), 10);

    // Auto-hide timeout
    const autoHideTimer = setTimeout(() => {
        hideToast(toast);
    }, 5000);

    // Close button
    const closeBtn = toast.querySelector('.toast-close');
    closeBtn.addEventListener('click', () => {
        clearTimeout(autoHideTimer);
        hideToast(toast);
    });
}

// ================================
// Handle "Send Login Reminder" Button Click
// ================================
document.addEventListener('click', function (e) {
  // Check if clicked element (or its parent) is the message button
  const messageButton = e.target.closest('.action-btn.message');
  if (!messageButton) return;

  // Get student info from data attributes (set by Laravel/Blade)
  const studentId = messageButton.dataset.studentId;
  const studentName = messageButton.dataset.studentName;

  // Validate data
  if (!studentId || !studentName) {
    showToast('error', 'Action Failed', 'Student information is missing.');
    return;
  }

  // Show loading state on button
  const originalContent = messageButton.innerHTML;
  messageButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';
  messageButton.disabled = true;

  // Simulate API call (replace with real fetch() when connected to Laravel)
  setTimeout(() => {
    // Restore button
    messageButton.innerHTML = originalContent;
    messageButton.disabled = false;

    // ✅ Use your existing showToast function
    showToast(
      'success',
      'Reminder Sent',
      `A login reminder has been sent to ${studentName}.`
    );
  }, 800);
});



// ================================
// Handle "Add Task" Button Click in Add Task Modal
// ================================
document.addEventListener('click', function (e) {
    const saveTaskBtn = e.target.closest('#saveTaskBtn');
    if (!saveTaskBtn) return;

    const taskTitleInput = document.getElementById('taskTitle');
    if (!taskTitleInput?.value.trim()) {
        showToast('error', 'Validation Error', 'Task title cannot be empty.');
        return;
    }

    showToast('success', 'Success', 'Task Added Successfully!');

    const modalEl = document.getElementById('addTaskModal');
    const modal = bootstrap.Modal.getInstance(modalEl);
    if (modal) {
        modal.hide(); // ✅ Bootstrap will auto-remove backdrop & restore scroll
    }

    // Optional: Reset form
    document.getElementById('addTaskForm')?.reset();
});



// ================================
// Handle "Save Profile" → Show Confirmation Modal
// ================================
document.addEventListener('click', function (e) {
    const saveProfileBtn = e.target.closest('#saveProfileBtn');
    if (!saveProfileBtn) return;

    // Optional: Basic validation
    const firstName = document.getElementById('admin-firstName')?.value.trim();
    if (!firstName) {
        showToast('error', 'Validation Error', 'First name is required.');
        return;
    }

    // Show confirmation modal
    const confirmModalEl = document.getElementById('saveProfileChanges');
    if (confirmModalEl && window.bootstrap) {
        const confirmModal = new bootstrap.Modal(confirmModalEl);
        confirmModal.show();
    }
});

// ================================
// Handle "Yes, Save Changes" in Confirmation Modal
// ================================
document.addEventListener('click', function (e) {
    if (!e.target.matches('#confirmProfileChanges')) return;

    // ✅ Show success toast
    showToast('success', 'Success', 'Profile Updated Successfully!');

    // Close confirmation modal
    const confirmModalEl = document.getElementById('saveProfileChanges');
    if (confirmModalEl && window.bootstrap) {
        bootstrap.Modal.getInstance(confirmModalEl)?.hide();
    }

    // Close main Edit Profile modal
    const editModalEl = document.getElementById('editAdminProfileModal');
    if (editModalEl && window.bootstrap) {
        bootstrap.Modal.getInstance(editModalEl)?.hide();
    }

    // Clean up backdrop & body styles (safety net)
    setTimeout(() => {
        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
        document.body.classList.remove('modal-open');
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
    }, 300);
});


/**
 * Helper to hide and remove toast
 */
function hideToast(toast) {
    toast.classList.remove('show');
    setTimeout(() => {
        if (toast.parentNode) toast.remove();
    }, 300);
}

