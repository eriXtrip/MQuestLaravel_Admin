<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MQuest-AdminSide</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,800&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <div class="py-4 container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-4 admin-profile-header">
                    <div class="container admin-profile-container"><img class="img-fluid admin-profile-avatar" alt="Admin Profile Picture" width="1080" height="1080" src="assets/img/photo-1755541516453-201559bec161.jpg" data-bs-toggle="modal" data-bs-target="#profilePictureModal">
                        <h3 class="fw-bold">Maria Santos</h3>
                        <p class="lead mb-1">Content Administrator</p>
                        <p class="opacity-75">MQuest E-Learning Platform</p>
                    </div>
                </div>
                <div class="container admin-content-container">
                    <div class="row">
                        <div class="mb-4 col-12">
                            <!-- Overview Stats -->
                            <div class="row g-4">
                                <div class="col-md-3 col-sm-6">
                                    <div class="card stat-card">
                                        <div class="text-center card-body">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book">
                                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title">127</h5>
                                            <p class="text-muted mb-0 card-text">Lessons Created</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card stat-card">
                                        <div class="text-center card-body">
                                            <div class="mb-3 mx-auto stat-icon bg-students"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title">30</h5>
                                            <p class="text-muted mb-0 card-text">Users</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card stat-card">
                                        <div class="text-center card-body">
                                            <div class="mb-3 mx-auto stat-icon bg-activity"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up">
                                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title">30</h5>
                                            <p class="text-muted mb-0 card-text">Avg. Completion Rate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card stat-card">
                                        <div class="text-center card-body">
                                            <div class="mb-3 mx-auto stat-icon bg-rating"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-star">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title">30</h5>
                                            <p class="text-muted mb-0 card-text">Avg. Lesson Rating</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- Personal Information -->
                            <div class="admin-profile-section">
                                <div class="admin-section-header">
                                    <h3 class="admin-section-title">Personal Information</h3>
                                    <div class="admin-section-actions" data-bs-toggle="modal" data-bs-target="#editAdminProfileModal"></div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-4 fw-bold admin-personal-label"><span>Full Name</span></div>
                                    <div class="col-md-8 d-flex align-items-center admin-personal-details"><span class="flex-grow-1 editable-field" id="fullName">Maria Santos Dela Cruz</span></div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-4 fw-bold admin-personal-label"><span>Email Address</span></div>
                                    <div class="col-md-8 d-flex align-items-center admin-personal-details"><span class="flex-grow-1 editable-field" id="fullName-1">mariasantos@gmail.com</span></div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-4 fw-bold admin-personal-label"><span>Phone Number</span></div>
                                    <div class="col-md-8 d-flex align-items-center admin-personal-details"><span class="flex-grow-1 editable-field" id="fullName-2">+63945754458</span></div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-4 fw-bold admin-personal-label"><span>Role</span></div>
                                    <div class="col-md-8 d-flex align-items-center admin-personal-details"><span class="flex-grow-1 editable-field" id="fullName-3">Content Administrator</span></div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-4 fw-bold admin-personal-label"><span>Location</span></div>
                                    <div class="col-md-8 d-flex align-items-center admin-personal-details"><span class="flex-grow-1 editable-field" id="fullName-4">Pilar, Sorsogon City</span></div>
                                </div>
                            </div>

                            <!-- Performance Analytics Chart Section -->
                            <div class="admin-profile-section">
                                <div class="admin-section-header">
                                    <h3 class="admin-section-title">Performance Analytics</h3>
                                    <div class="profile-section-actions">
                                        <select class="form-select-sm form-select" id="analyticsPeriod" style="width:auto;">
                                            <option value="7">Last 7 Days</option>
                                            <option value="30" selected="">Last 30 Days</option>
                                            <option value="90">Last 90 Days</option>
                                            <option value="365">Last Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="chart-container2"><canvas id="analyticsPerformanceChart"></canvas></div>
                                <div class="row text-center mt-4">
                                    <div class="col-md-4">
                                        <div class="bg-light rounded p-3">
                                            <h4 class="text-primary mb-1">98%</h4>
                                            <p class="text-muted mb-0">Content Accuracy</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="bg-light rounded p-3">
                                            <h4 class="text-success mb-1">4.7/5.0</h4>
                                            <p class="text-muted mb-0">Avg. Rating</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="bg-light rounded p-3">
                                            <h4 class="text-warning mb-1">12</h4>
                                            <p class="text-muted mb-0">New Feedback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Activity Section -->
                            <div class="admin-profile-section">
                                <div class="admin-section-header">
                                    <h3 class="admin-section-title"> Recent Activity </h3>
                                    <div class="profile-section-actions"><button class="btn btn-secondary btn-sm view-all-admin-recent-acts" data-bs-toggle="modal" data-bs-target="#activityModal">View All</button></div>
                                </div>
                                <div class="activity-timeline list-group">
                                    <div class="timeline-item list-group-item list-group-item-action">
                                        <h6 class="fw-bold">Published New Science Lesson</h6>
                                        <p class="text-muted mb-1">"The Water Cycle for Grade 4 Students" - Approved and published</p><small class="text-muted">June 14, 2023 at 3:22 PM</small>
                                    </div>
                                    <div class="timeline-item list-group-item list-group-item-action">
                                        <h6 class="fw-bold">Updated Math Curriculum</h6>
                                        <p class="text-muted mb-1">Revised 5 lessons in the Multiplication module based on feedback</p><small class="text-muted">June 12, 2023 at 10:15 AM</small>
                                    </div>
                                    <div class="timeline-item list-group-item list-group-item-action">
                                        <h6 class="fw-bold">Completed Training</h6>
                                        <p class="text-muted mb-1">Finished "Interactive Content for Young Learners" certification course</p><small class="text-muted">June 8, 2023 at 4:30 PM</small>
                                    </div>
                                    <div class="timeline-item list-group-item list-group-item-action">
                                        <h6 class="fw-bold">Reviewed Student Feedback</h6>
                                        <p class="text-muted mb-1">Analyzed 127 feedback responses for Q2 lessons</p><small class="text-muted">June 5, 2023 at 2:18 PM</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="admin-profile-section">
                                <div class="admin-section-header">
                                    <h3 class="admin-section-title">Profile Actions</h3>
                                </div>
                                <div class="d-grid gap-2 admin-profile-actions">
                                    <!-- Edit Profile Button -->
                                    <button class="btn btn-secondary justify-content-center admin-edit-profile" data-bs-target="#editAdminProfileModal" data-bs-toggle="modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pencil-square me-2">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"></path>
                                        </svg>Edit Profile 
                                    </button>
                                    <!-- Change Password Button-->
                                    <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-lock me-2">
                                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"></path>
                                        </svg>Change Password 
                                    </button>
                                    <!-- Change Profile Picture Button -->
                                    <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#adminProfilePictureModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-image me-2" style="font-size: 16px;">
                                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"></path>
                                            <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12"></path>
                                        </svg>Update Profile Picture 
                                    </button>
                                    <!-- Download Report Button -->
                                    <button class="btn btn-outline-success" id="downloadReportBtn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download me-2">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                        </svg>Download Activity Report 
                                    </button>
                                    <!-- Account Settings Button -->
                                    <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#settingsModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-gear me-2">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                        </svg>Account Settings 
                                    </button>
                                </div>
                            </div>
                            <!-- Upcoming Task Section-->
                            <div class="admin-profile-section">
                                <div class="admin-section-header">
                                    <h3 class="admin-section-title">Upcoming Task</h3>
                                    <div class="section-actions">
                                        <button class="btn btn-secondary btn-sm add-tasks" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus">
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                            </svg> Add Task
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3 list-group task-list-group">
                                    <div class="d-flex justify-content-between align-items-center list-group-item list-group-item-action">
                                        <div>
                                            <h6 class="mb-1">Review Q3 Science Curriculum</h6><small class="text-muted">Due: June 25, 2023</small>
                                        </div><span class="badge rounded-pill bg-warning task-badge" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-title="Due in 3 days">3 days</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center list-group-item list-group-item-action">
                                        <div>
                                            <h6 class="mb-1">Create Math Quiz for Module 5</h6><small class="text-muted">Due: June 20, 2023</small>
                                        </div><span class="badge rounded-pill bg-info task-badge" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-title="Due today">Today</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center list-group-item list-group-item-action">
                                        <div>
                                            <h6 class="mb-1">Attend Content Team Meeting</h6><small class="text-muted">Due: June 18, 2023</small>
                                        </div><span class="badge rounded-pill bg-primary task-badge" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-title="Due in 2 days">2 days</span>
                                    </div>
                                </div>
                                <button class="btn btn-secondary w-100 justify-content-center view-all-tasks" data-bs-toggle="modal" data-bs-target="#tasksModal">View All Tasks</button>
                            </div>

                            <!-- Performance Metrics Section -->
                            <div class="mb-4 admin-profile-section">
                                <div class="admin-section-header">
                                    <h3> Performance Metrics </h3>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2" style="font-size: 0.75rem;"><span>Lesson Completion Rate</span><span>89%</span></div>
                                    <div class="progress">
                                        <div class="bg-success progress-bar" role="progressbar" style="width:89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2" style="font-size: 0.75rem;"><span>Student Satisfaction</span><span>50%</span></div>
                                    <div class="progress">
                                        <div class="bg-warning progress-bar" role="progressbar" style="width:50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2" style="font-size: 0.75rem;"><span>Content Accuracy</span><span>98%</span></div>
                                    <div class="progress">
                                        <div class="bg-success progress-bar" role="progressbar" style="width:98%;" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2" style="font-size: 0.75rem;"><span>Timeliness</span><span>30%</span></div>
                                    <div class="progress">
                                        <div class="bg-danger progress-bar" role="progressbar" style="width:30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h6 class="mb-3">Performance Rating</h6>
                                    <div class="text-center">
                                        <div class="text-warning mb-2 display-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-star-fill me-2">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-star-fill me-2">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-star-fill me-2">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-star me-2">
                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-star">
                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                            </svg>
                                        </div>
                                        <p class="mb-0" style="font-size: 0.75rem;">4/5 - Exceeds Expectations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Task Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="addTaskModal" aria-labelledby="addTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Add New Task</h5><button class="btn-close btn-close-white" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body admin-profile-modal-body">
                    <form id="addTaskForm">
                        <div class="mb-3"><label class="form-label" for="taskTitle">Task Title</label><input class="form-control form-control form-control form-control form-select-sm" type="text" id="taskTitle" placeholder="Enter task title"></div>
                        <div class="mb-3"><label class="form-label" for="taskDescription">Description</label><textarea class="form-control form-control form-control form-control form-select-sm" id="taskDescription" placeholder="Enter task description" rows="3"></textarea></div>
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="form-label" for="taskDueDate">Due Date</label><input class="form-control form-control form-control form-control form-select-sm" id="taskDueDate" type="date"></div>
                            <div class="col-md-6"><label class="form-label" for="taskStatus">Status</label>
                                <select class="form-select form-select-sm form-select form-select form-select" id="taskStatus">
                                    <option value="pending">Pending</option>
                                    <option value="in-progress">In Progress</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="form-label" for="taskCategory">Category</label>
                                <select class="form-select form-select-sm form-select form-select form-select" id="taskCategory">
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Science">Science</option>
                                    <option value="English">English</option>
                                    <option value="Filipino">Filipino</option>
                                    <option value="Values Education">Values Education</option>
                                    <option value="Meeting">Meeting</option>
                                    <option value="Training">Training</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="taskPriority">Priority</label>
                                <select class="form-select form-select-sm form-select form-select form-select" id="taskPriority">
                                    <option value="Low">Low</option>
                                    <option value="Medium" selected="">Medium</option>
                                    <option value="High">High</option>
                                    <option value="Urgent">Urgent</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer admin-profile-footer"><button class="btn btn-secondary btn-sm" data-bs-dismiss="modal" type="button">Cancel</button><button class="btn btn-secondary btn-sm admin-add-task" id="saveTaskBtn" type="button">Add Task</button></div>
            </div>
        </div>
    </div>

    <!-- All Tasks Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="tasksModal" aria-labelledby="tasksModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h5 class="modal-title" id="tasksModalLabel">All Tasks</h5><button class="btn-close btn-close-white" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body admin-profile-modal-body">
                    <div class="mb-3">
                        <div>
                            <h6>Task List</h6>
                            <div class="mt-2 task-controls">
                                <div class="left-side-filter-group">
                                    <select class="form-select-sm form-select" id="taskStatusFilter" style="width:auto;" aria-label="Filter by status">
                                        <option value="all">All Status</option>
                                        <option value="pending">Pending</option>
                                        <option value="in-progress">In Progress</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                    <select class="form-select-sm form-select" id="taskPriorityFilter" style="width:auto;" aria-label="Filter by priority">
                                        <option value="all">All Priorities</option>
                                        <option value="low">Low</option>
                                        <option value="medium">Medium</option>
                                        <option value="high">High</option>
                                        <option value="urgent">Urgent</option>
                                    </select>
                                    <button class="btn btn-outline-secondary btn-clear" id="clearTaskFilters" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                            <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                        </svg>&nbsp;Clear All
                                    </button>
                                </div>
                                <button class="btn btn-secondary btn-sm add-task-btn" data-bs-target="#addTaskModal" data-bs-toggle="modal"><i class="fas fa-plus"></i>&nbsp;Add Task</button>
                            </div>
                        </div>
                    </div>
                    <div id="taskList" class="list-group task-list-group" style="max-height:65vh;overflow-y:auto;padding:0.75rem 1rem;">
                        <div class="d-flex justify-content-between align-items-center list-group-item list-group-item-action" data-status="pending" data-priority="medium">
                            <div>
                                <h6 class="mb-1">Review Q3 Science Curriculum</h6><small class="text-muted">Due: June 25, 2023</small>
                                <div class="mt-2 small"><span class="badge me-2 badge-sub-science">Science</span><span class="badge me-2 status-task-pending">Pending</span><span class="badge priority-medium">Medium Priority</span></div>
                            </div><span class="badge rounded-pill bg-warning badge-days">3 days</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center list-group-item list-group-item-action" data-status="in-progress" data-priority="high">
                            <div>
                                <h6 class="mb-1">Create Math Quiz for Module 5</h6><small class="text-muted">Due: June 20, 2023</small>
                                <div class="mt-2 small"><span class="badge me-2 badge-sub-math">Mathematics</span><span class="badge me-2 status-task-in-progress">In Progress</span><span class="badge priority-high">High Priority</span></div>
                            </div><span class="badge rounded-pill bg-danger badge-days">Today</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center list-group-item list-group-item-action" data-status="pending" data-priority="medium">
                            <div>
                                <h6 class="mb-1">Attend Content Team Meeting</h6><small class="text-muted">Due: June 18, 2023</small>
                                <div class="mt-2 small"><span class="badge me-2 badge-personal">Personal</span><span class="badge me-2 status-task-pending">Pending</span><span class="badge priority-medium">Medium Priority</span></div>
                            </div><span class="badge rounded-pill bg-warning badge-days">2 days</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center list-group-item list-group-item-action" data-status="completed" data-priority="low">
                            <div>
                                <h6 class="mb-1">Update English Reading Materials</h6><small class="text-muted">Due: June 22, 2023</small>
                                <div class="mt-2 small"><span class="badge me-2 badge-sub-english">English</span><span class="badge me-2 status-task-completed">Completed</span><span class="badge priority-low">Low Priority</span></div>
                            </div><span class="badge rounded-pill bg-success badge-days">6 days</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center list-group-item list-group-item-action" data-status="completed" data-priority="urgent">
                            <div>
                                <h6 class="mb-1">Review Student Feedback for Q2</h6><small class="text-muted">Due: June 17, 2023</small>
                                <div class="mt-2 small"><span class="badge me-2 badge-sub-filipino">Analysis</span><span class="badge me-2 status-task-completed">Completed</span><span class="badge priority-urgent">Urgent</span></div>
                            </div><span class="badge rounded-pill bg-danger badge-days">1 day</span>
                        </div>
                    </div>
                    <div class="text-center text-muted p-4" id="noTasksMessage" style="display:none;"><span>No tasks found.</span></div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- View Activities Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="activityModal" aria-labelledby="activityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h5 class="modal-title" id="activityModalLabel">All Activity</h5><button class="btn-close btn-close-white" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body admin-profile-modal-body">
                    <div class="d-flex justify-content-between align-items-center mb-3 search-filter-row">
                        <div class="d-flex flex-grow-1 align-items-center me-md-3 mb-2 mb-md-0 admin-search-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search admin-search-icon">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                            </svg>
                            <input type="text" id="searchInput" class="form-control searchActivity form-select-sm" placeholder="Search activity...">
                        </div>
                        <div class="d-flex flex-wrap gap-2 admin-right-filter-control">
                            <select class="form-select-sm me-2 form-select" id="activityFilter" style="width:auto;">
                                <option value="all">All Activities</option>
                                <option value="lessons">Uploaded Lessons</option>
                                <option value="quizzes">Quizzes</option>
                                <option value="videos">Upload Video</option>
                                <option value="pdf">Uploaded PDF/PPT</option>
                                <option value="games">Games</option>
                            </select>
                            <button class="btn btn-outline-secondary btn-clear" id="clearActFilters" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                    <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                </svg>&nbsp;Clear All
                            </button>
                        </div>
                    </div>
                    <div class="activity-timeline list-group">
                        <div class="timeline-item list-group-item list-group-item-action" data-type="lessons">
                            <h6 class="fw-bold">Published New Science Lesson</h6>
                            <p class="text-muted mb-1">"The Water Cycle for Grade 4 Students" - Approved and published</p><small class="text-muted">June 14, 2023 at 3:22 PM</small>
                        </div>
                        <div class="timeline-item list-group-item list-group-item-action" data-type="quizzes">
                            <h6 class="fw-bold">Updated Math Curriculum</h6>
                            <p class="text-muted mb-1">Revised 5 lessons in the Multiplication module based on feedback</p><small class="text-muted">June 12, 2023 at 10:15 AM</small>
                        </div>
                        <div class="timeline-item list-group-item list-group-item-action" data-type="pdf">
                            <h6 class="fw-bold">Completed Training</h6>
                            <p class="text-muted mb-1">Finished "Interactive Content for Young Learners" certification course</p><small class="text-muted">June 8, 2023 at 4:30 PM</small>
                        </div>
                        <div class="timeline-item list-group-item list-group-item-action" data-type="games">
                            <h6 class="fw-bold">Reviewed Student Feedback</h6>
                            <p class="text-muted mb-1">Analyzed 127 feedback responses for Q2 lessons</p><small class="text-muted">June 5, 2023 at 2:18 PM</small>
                        </div>
                        <div class="timeline-item list-group-item list-group-item-action" data-type="lessons">
                            <h6 class="fw-bold">Created New English Module</h6>
                            <p class="text-muted mb-1">Developed "Reading Comprehension Strategies" for Grade 4</p><small class="text-muted">May 30, 2023 at 11:45 AM</small>
                        </div>
                        <div class="timeline-item list-group-item list-group-item-action" data-type="videos">
                            <h6 class="fw-bold">Attended Workshop</h6>
                            <p class="text-muted mb-1">Participated in "Gamification in Education" workshop</p><small class="text-muted">May 25, 2023 at 2:00 PM</small>
                        </div>
                    </div>
                    <div class="text-center text-muted p-4" id="noActResults" style="display:none;"><span>No matching activities found.</span></div>
                </div>
                <div class="modal-footer admin-profile-footer"><button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button><button class="btn btn-secondary export-activity-log" id="exportActivityBtn" type="button">Export Activity Log</button></div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Information Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="editAdminProfileModal" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5><button class="btn-close btn-close-white" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body admin-profile-modal-body">
                    <form id="editProfileForm">
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="form-label" for="firstName">First Name</label><input class="form-control form-control" type="text" id="admin-firstName" value="Maria"></div>
                            <div class="col-md-6"><label class="form-label" for="lastName">Last Name</label><input class="form-control form-control" type="text" id="admin-lastName" value="Santos Dela Cruz"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="form-label" for="profileEmail">Email Address</label><input class="form-control form-control" type="email" id="admin-profileEmail" value="maria.santos@quest.edu.ph"></div>
                            <div class="col-md-6"><label class="form-label" for="profilePhone">Phone Number</label><input class="form-control form-control" type="text" id="admin-profilePhone" value="+63 917 123 4567"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="form-label" for="department">Role</label><input class="form-control form-control" type="text" id="admin-role" value="Manila, Philippines"></div>
                            <div class="col-md-6"><label class="form-label" for="location">Location</label><input class="form-control form-control" type="text" id="admin-location" value="Manila, Philippines"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer admin-profile-footer"><button class="btn btn-secondary btn-sm" data-bs-dismiss="modal" type="button">Cancel</button><button class="btn btn-secondary btn-sm admin-save-profile" id="saveProfileBtn" type="button" data-bs-toggle="modal" data-bs-target="#saveProfileChanges">Save Profile</button></div>
            </div>
        </div>
    </div>

    <!-- Confirm Profile Information Changes Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="saveProfileChanges" aria-labelledby="confirmProfileModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content admin-profile-modal-content modal-">
                <div class="modal-header admin-profile-modal-header">
                    <h6 class="modal-title">Confirm Changes?</h6><button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body m-3 admin-profile-modal-body">
                    <p class="mb-0" style="font-size: 0.75rem;">Are you sure you want to save these profile changes? This action cannot be undone.</p>
                </div>
                <div class="modal-footer admin-profile-footer"><button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn btn-secondary btn-sm admin-saved-changes" id="confirmProfileChanges" type="button">Yes, Save Changes</button></div>
            </div>
        </div>
    </div>

    <!-- Change Password Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="changePasswordModal" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5><button class="btn-close btn-close-white" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body admin-profile-modal-body">
                    <form id="changePasswordForm">
                        <div class="mb-3"><label class="form-label" for="currentPassword">Current Password</label>
                            <div class="input-group flex-nowrap">
                                <input class="form-control form-control" type="password" id="currentPassword" placeholder="Enter current password">
                                <button class="btn btn-outline-secondary btn-sm" id="toggleCurrentPassword" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3"><label class="form-label" for="newPassword">New Password</label>
                            <div class="input-group flex-nowrap">
                                <input class="form-control form-control" type="password" id="newPassword" placeholder="Enter new password">
                                <button class="btn btn-outline-secondary btn-sm" id="toggleNewPassword" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3"><label class="form-label" for="confirmPassword">Confirm New Password</label>
                            <div class="input-group flex-nowrap">
                                <input class="form-control form-control" type="password" id="confirmPassword" placeholder="Confirm new password">
                                <button class="btn btn-outline-secondary btn-sm" id="toggleConfirmPassword" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3 password-strength-meter" id="passwordStrengthMeter">
                            <div class="progress" style="height:5px;">
                                <div id="passwordStrength" class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width:0%;"></div>
                            </div><small class="form-text text-muted" id="passwordHelp"> Password strength: <span id="strengthText">Too weak</span></small>
                        </div>
                        <div class="text-danger mb-3" id="passwordError" style="display: none; font-size: 0.75rem; min-height: 1.5em;"></div>
                    </form>
                </div>
                <div class="modal-footer admin-profile-footer"><button class="btn btn-secondary btn-sm" data-bs-dismiss="modal" type="button">Cancel</button><button class="btn btn-secondary btn-sm admin-change-pass" id="changePasswordBtn" type="button">Change Password</button></div>
            </div>
        </div>
    </div>

    <!-- Change Profile Picture Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="adminProfilePictureModal" aria-labelledby="profilePictureModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h5 class="modal-title" id="profilePictureModalLabel">Update Profile Picture</h5><button class="btn-close btn-close-white" aria-label="Close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body text-center admin-profile-modal-body">
                    <div class="mb-3"><img class="rounded-circle mb-3" alt="Profile Preview" id="previewImage" src="assets/img/photo-1755541516453-201559bec161.jpg" style="width:150px;height:150px;object-fit:cover;"></div>
                    <div class="mb-3"><input type="file" accept="image/*" class="form-control" id="profilePictureInput">
                        <div class="form-text details-requirements"><span>Recommended size: 300x300 pixels. Max file size: 2MB.</span></div>
                    </div>
                    <div class="d-flex justify-content-center gap-2 upload-img-controls">
                        <button class="btn btn-outline-secondary btn-sm" id="rotateLeftBtn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                            </svg> Rotate Left 
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" id="rotateRightBtn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-clockwise">
                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"></path>
                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"></path>
                            </svg> Rotate Right 
                        </button>
                        <button class="btn btn-outline-danger btn-sm" id="removePictureBtn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trash">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                            </svg> Remove 
                        </button>
                    </div>
                </div>
                <div class="modal-footer admin-profile-footer"><button class="btn btn-secondary btn-sm" data-bs-dismiss="modal" type="button">Cancel</button><button class="btn btn-secondary btn-sm save-profile-pic-changes" id="saveAdminPictureBtn" type="button">Save Changes</button></div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3 toast-container" id="global-toast-container" style="z-index: 9999;"></div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0/dist/chartjs-plugin-datalabels.min.js"></script>
    <script src="{{ asset('assets/js/allchart.js') }}"></script>
    <script src="{{ asset('assets/js/file&Videothumbnail.js') }}"></script>
    <script src="{{ asset('assets/js/postquizBuilder.js') }}"></script>
    <script src="{{ asset('assets/js/prequizBuilder.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/confetti.browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/taskManager.js') }}"></script>
    <script src="{{ asset('assets/js/toast-manager.js') }}"></script>
</body>

</html>