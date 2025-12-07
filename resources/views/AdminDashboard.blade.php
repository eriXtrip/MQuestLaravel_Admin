<!-- MQUESTADMINLARAVEL/resources/views/AdminDashbord.blade.php -->

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MQuest-AdminSide</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/Login_Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,800&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    
</head>

<body>
    <div class="wrapper">
        <nav class="sidebar hidden open">

            <!-- Sidebar Navigation -->
            <div class="w-100 sidebar-content">
                <div class="d-flex w-100 h-100 flex-column justify-content-center scrollbar-container"><a class="text-decoration-none text-center d-flex justify-content-center align-items-center gap-1 py-2 sidebar-brand" href="#"><span class="text-uppercase fs-5 fw-bold text-black p-2 me-3 align-middle">MQUEST</span></a>
                    <p class="text-center text-muted mb-3 mx-2 sidebar-subtitle" style="font-size: 16px;">A Matatag E-Learning Application</p>
                    <ul class="list-unstyled position-relative w-100 sidebar-nav" id="sidebarMenu">
                        <li class="text-muted sidebar-header" style="width: 24px;color: var(--bs-emphasis-color);">Menu</li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link nav-link active-link" href="#" data-section="dashboardSection"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-grid" style="font-family: Poppins, sans-serif;">
                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
                                </svg><span class="text-decoration-none align-middle">Dashboard</span></a></li>
                        <li class="sidebar-item">
                            <a id="curriculumLink"
                                class="text-decoration-none sidebar-link nav-link"
                                data-bs-toggle="collapse"
                                data-bs-target="#subject-list"
                                aria-expanded="false"
                                role="button"
                                aria-controls="subject-list"
                                data-section="lessonSection">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-bookmark">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                                </svg>
                                <span class="text-decoration-none align-middle">Curriculum &amp; Lessons</span>
                            </a>

                            <ul class="list-unstyled sidebar-dropdown collapse" id="subject-list" data-bs-parent="#sidebarMenu">
                                <li class="dropdown-item"><a class="sidebar-link nav-link" href="#" data-subject="English">English</a></li>
                                <li class="dropdown-item"><a class="sidebar-link nav-link" href="#" data-subject="Science">Science</a></li>
                                <li class="dropdown-item"><a class="sidebar-link nav-link" href="#" data-subject="Math">Mathematics</a></li>
                                <li class="dropdown-item"><a class="sidebar-link nav-link" href="#" data-subject="Filipino">Filipino</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link nav-link" href="#" data-section="userSection"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                </svg><span class="text-decoration-none align-middle">User Management</span></a></li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link nav-link" href="#" data-section="activitylogSection"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock-history">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"></path>
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"></path>
                                </svg><span class="text-decoration-none align-middle">Activity Log</span></a></li>
                        <!-- <li class="sidebar-header" style="width: 24px;color: var(--bs-emphasis-color);">General</li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link" href="dashboardMenu1" data-bs-toggle="collapse" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-gear">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                </svg><span class="text-decoration-none align-middle">Settings</span></a></li>
                        <li class="sidebar-item"><a class="text-decoration-none sidebar-link" href="dashboardMenu1" data-bs-toggle="collapse" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-question-circle">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"></path>
                                </svg><span class="text-decoration-none align-middle">Help</span></a></li> -->
                    </ul>
                </div>
                <div class="p-4 mt-auto sidebar-item sidebar-footer border-top">
                    <div class="d-flex align-items-center"><img class="rounded-circle img-fluid me-2 admin-img" id="sidebarProfile" width="200" height="200" src="assets/img/8.png">
                        <div class="d-flex flex-column admin-profile">
                            <h6 class="fw-semibold mb-1" id="adminName">Loading...</h6><small class="text-muted mb-1 fw-medium" id="adminEmail">Loading...</small><small class="text-muted">Administrator</small>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="content-area" class="main-content full-width">
            <nav class="d-flex justify-content-between align-items-center p-4 navbar-main navbar navbar-expand navbar-light"><span class="fs-4 d-flex align-items-center sidebar-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-justify active" id="toggle">
                        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"></path>
                    </svg></span>
                <form class="d-sm-inline-block ps-4" inline="true">
                    <div class="input-group-navbar input-group search-bar" style="display:none;"><input class="form-control" type="text" placeholder="Search here..." aria-label="Search"><button class="btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                            </svg></button></div>
                </form>

                <!-- Notification & Profile Dropdown -->
                <div class="navbar-collapse collapse">
                    <div class="ms-auto navbar-align navbar-nav">
                        <div class="position-relative d-flex me-2 nav-item dropdown">
                            <!-- <a class="d-flex align-items-center nav-link nav-icon dropdown-toggle bell" style="display:none;" id="element" aria-expanded="false" data-bs-toggle="dropdown">
                                <div class="position-relative" style="display: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bell">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6"></path>
                                    </svg><span class="indicator">4</span>
                                </div>
                            </a> -->
                            <div class="p-0 dropdown-menu-lg dropdown-menu dropdown-menu-end" data-bs-popper="static">
                                <div class="text-start position-relative w-100 p-3 dropdown-menu-header"><span>3 New Notifications</span></div>
                                <div class="d-flex list-group g-5 notification-list"><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/1.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">15m ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/10.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">30m ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/11.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">1hr ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/9.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">1hr ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="#">
                                        <div class="list-group-item">
                                            <div class="align-items-center g-0 row">
                                                <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="assets/img/12.png"></div>
                                                <div class="ps-2 col-10">
                                                    <div class="p-0 dropdown-header fw-500"><span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span></div>
                                                    <div><span class="text-muted mt-1 small">1hr ago</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div><a class="text-decoration-none" href="#">
                                    <div class="text-center position-relative w-100 dropdown-menu-footer"><span>Show All Notifications</span></div>
                                </a>
                            </div>
                            <div class="nav-item dropdown nav-item-user"><span class="d-inline-block d-sm-none nav-icon"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="rounded-circle" width="200" height="200" style="height: 28px; width: 28px; object-fit: cover;" src="assets/img/8.png"></a></span><span class="d-none d-sm-inline-block nav-icon"><a class="nav-link dropdown-toggle" href="#" aria-expanded="false" role="button" data-bs-toggle="dropdown"><img id="profileLarge" class="rounded-circle img-fluid me-1 profile" width="32" height="32" alt="Profile"><span style="font-size: 14px;" id="adminName2">Loading...</span></a></span>
                                <div class="dropdown-menu dropdown-menu3 dropdown-menu-end" data-bs-popper="static" style="width:180px;"><a class="dropdown-item" href="#" type="button" style="display:none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                        </svg><span>Profile</span></a><a class="dropdown-item" href="#" type="button" style="display:none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-moon-fill">
                                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278"></path>
                                        </svg><span>Dark Mode</span></a>
                                    <hr class="dropdown-divider"><a class="dropdown-item" href="#" id="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-right">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"></path>
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                                        </svg><span>Sign out</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Section-->
            <div class="p-3 dashboard-content content-section" id="dashboardSection">
                <div class="admin-header">
                    <div class="header-content">
                        <div class="greeting-section">
                            <div class="datetime-badge"><span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-calendar4">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"></path>
                                    </svg></span><span id="current-date-today">Loading...</span></div>
                            <h1 class="greeting-title">Good Day, Admin!</h1>
                            <p class="greeting-subtitle">Manage lessons, users &amp; quizzes with ease.</p>
                        </div>
                    </div>
                    <div class="header-actions" style="display:none;"><button class="btn btn-sm open-task-btn" id="openTaskManager" title="Open Task Manager"><i class="bi bi-calendar-check"></i> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list-task me-2">
                                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z"></path>
                                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z"></path>
                                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z"></path>
                            </svg>Tasks </button>
                    </div>
                </div>
                <div class="align-items-stretch mb-2 row g-3">
                    <div class="col-12 col-lg-8">

                        <!-- Overview Section -->
                        <div class="h-100 overview-section">
                            <div class="overview-header">
                                <h4 class="text-muted">Overview</h4>
                            </div>
                            <div class="row g-3 g-md-3">
                                <div class="col-6 col-lg-3">
                                    <div class="card stat-card-2">
                                        <div class="text-center card-body-2">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book">
                                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title-2">{{ $lessonsCount ?? 0 }}</h5>
                                            <p class="text-muted mb-0 card-text-2">Lessons Uploaded</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="card stat-card-2">
                                        <div class="text-center card-body-2">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-backpack2" viewBox="0 0 16 16">
                                                    <path d="M4.04 7.43a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14"/>
                                                    <path fill-rule="evenodd" d="M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10z"/>
                                                    <path d="M6 2.341V2a2 2 0 1 1 4 0v.341c2.33.824 4 3.047 4 5.659v1.191l1.17.585a1.5 1.5 0 0 1 .83 1.342V13.5a1.5 1.5 0 0 1-1.5 1.5h-1c-.456.607-1.182 1-2 1h-7a2.5 2.5 0 0 1-2-1h-1A1.5 1.5 0 0 1 0 13.5v-2.382a1.5 1.5 0 0 1 .83-1.342L2 9.191V8a6 6 0 0 1 4-5.659M7 2v.083a6 6 0 0 1 2 0V2a1 1 0 0 0-2 0M3 13.5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5V8A5 5 0 0 0 3 8zm-1-3.19-.724.362a.5.5 0 0 0-.276.447V13.5a.5.5 0 0 0 .5.5H2zm12 0V14h.5a.5.5 0 0 0 .5-.5v-2.382a.5.5 0 0 0-.276-.447L14 10.309Z"/>
                                                </svg>
                                                </div>
                                            <h5 class="fw-bold card-title-2">{{ $pupilsCount ?? 0 }}</h5>
                                            <p class="text-muted mb-0 card-text-2">pupils enrolled</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="card stat-card-2">
                                        <div class="text-center card-body-2">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                                                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
                                                </svg>
                                                </div>
                                            <h5 class="fw-bold card-title-2">{{ $teachersCount ?? 0 }}</h5>
                                            <p class="text-muted mb-0 card-text-2">teachers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="card stat-card-2">
                                        <div class="text-center card-body-2">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up">
                                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title-2">{{ $activeRatePercent }}%</h5>
                                            <p class="text-muted mb-0 card-text-2">active today</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-6 col-lg-3">
                                    <div class="card stat-card-2">
                                        <div class="text-center card-body-2">
                                            <div class="mb-3 mx-auto stat-icon bg-lessons"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock">
                                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                                </svg></div>
                                            <h5 class="fw-bold card-title-2">42m</h5>
                                            <p class="text-muted mb-0 card-text-2">Avg. session time</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <!-- Gender Distribution Section -->
                        <div class="h-100 gender-chart-section">
                            <div class="gender-header">
                                <h4 class="text-muted gender-title">Gender Ratio</h4>
                            </div>
                            <div class="donut-container"><canvas id="genderDoughnutChart" class="doughnut-chart"></canvas></div>
                        </div>
                    </div>
                </div>
                
                <!-- Subjects Section -->
                <div class="h-100 mb-2 subjects-section">
                    <div class="subjects-header">
                        <h4 class="subject">Subjects</h4>
                        <div class="quarter-nav">
                            <span id="prev-quarter" class="quarter-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-chevron-left">
                                    <path fill-rule="evenodd"
                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </span>
                            <span id="quarter-display" class="quarter active">Quarter 1</span>
                            <span id="next-quarter" class="quarter-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-chevron-right">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="row g-3" id="subjects-container">
                        @foreach($subjectSummaries as $subject)
                            @if(is_array($subject) && isset($subject['subject_name'], $subject['subject_id'], $subject['quarter']))
                                @php
                                    $users = $usersBySubject[$subject['subject_id']] ?? [];
                                    $visibleUsers = array_slice($users, 0, 4);
                                    $extraCount = max(0, count($users) - 4);
                                @endphp

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 subject-card-wrapper"
                                    data-quarter="{{ $subject['quarter'] }}">
                                    <div class="card subject-card">
                                        <div class="card-header subject-{{ strtolower($subject['subject_name']) }}">
                                            <h6>{{ $subject['subject_name'] }}</h6>
                                            <span>{{ $subject['total_lessons'] ?? 0 }}<span>/8 Lessons</span></span>
                                        </div>

                                        <div class="card-body">
                                            <div class="avatar-group">
                                                @foreach($visibleUsers as $user)
                                                    @if(is_array($user) && isset($user['first_name'], $user['last_name']))
                                                        <img class="img-fluid"
                                                            width="200"
                                                            height="200"
                                                            src="{{ $user['avatar_thumbnail'] ?? 'assets/img/default-avatar.png' }}"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="bottom"
                                                            title="{{ $user['first_name'] }} {{ $user['last_name'] }}">
                                                    @endif
                                                @endforeach

                                                @if($extraCount > 0)
                                                    <div class="avatar-more"><span>+{{ $extraCount }}</span></div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <div class="footer-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                                    viewBox="0 0 16 16" class="bi bi-people footer-icon btn-view-students" data-subject-id="{{ $subject['subject_id'] }}" data-bs-toggle="modal" data-bs-target="#studentsModal">
                                                    <path
                                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4">
                                                    </path>
                                                </svg>

                                                <svg class="bi bi-folder" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Class Performance Chart Section -->
                <div class="mb-2 performanceCompletion-section">
                    <div class="mb-4 row">
                        <div class="col-lg-4">
                            <div class="h-100 line-chart-container">
                                <div class="line-chart-header">
                                    <h4 class="text-muted">Class Performace</h4>
                                    <div class="line-chart-filter">
                                        <select class="form-select-sm form-select" id="line-chart-subject-filter">
                                            <option value="all" selected="">All Subject</option>
                                            <option value="math">Mathematics</option>
                                            <option value="english">English</option>
                                            <option value="science">Science</option>
                                            <option value="filipino">Filipino</option>
                                        </select>
                                        <select class="form-select-sm form-select" id="line-chart-quarter-filter">
                                            <option value="q1" selected="">Quarter 1</option>
                                            <option value="q2">Quarter 2</option>
                                            <option value="q3">Quarter 3</option>
                                            <option value="q4">Quarter 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="line-chart-body"><canvas id="performanceChart"></canvas></div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- Lesson Completion Chart -->
                            <div class="h-100 lessonCompletion-section">
                                <div class="lessonCompletion-header">
                                    <h4 class="text-muted">Lesson Completion Overview</h4>
                                    <div class="d-flex gap-2 completion-filter">
                                        <select class="form-select-sm form-select" id="completionFilterQuarter">
                                            <option value="" selected="">All Quarter </option>
                                            <option value="1">Quarter 1</option>
                                            <option value="2">Quarter 2</option>
                                            <option value="3">Quarter 3</option>
                                            <option value="4">Quarter 4</option>
                                        </select>
                                        <select class="form-select-sm form-select" id="completionFilterSub">
                                            <option value="" selected="">All Subjects</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="p-0">
                                    <div class="completion-container"><canvas id="adminCompletionChart"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lesson-data">
                    <div data-quarter="Q1" data-subject="Mathematics">
                        <div data-lesson="Lesson 1" data-rate="85"></div>
                        <div data-lesson="Lesson 2" data-rate="92"></div>
                        <div data-lesson="Lesson 3" data-rate="78"></div>
                        <div data-lesson="Lesson 4" data-rate="88"></div>
                        <div data-lesson="Lesson 5" data-rate="90"></div>
                        <div data-lesson="Lesson 6" data-rate="82"></div>
                        <div data-lesson="Lesson 7" data-rate="87"></div>
                        <div data-lesson="Lesson 8" data-rate="89"></div>
                    </div>
                    <div data-quarter="Q1" data-subject="Science">
                        <div data-lesson="Lesson 1" data-rate="76"></div>
                        <div data-lesson="Lesson 2" data-rate="81"></div>
                        <div data-lesson="Lesson 3" data-rate="72"></div>
                        <div data-lesson="Lesson 4" data-rate="79"></div>
                        <div data-lesson="Lesson 5" data-rate="85"></div>
                        <div data-lesson="Lesson 6" data-rate="77"></div>
                        <div data-lesson="Lesson 7" data-rate="80"></div>
                        <div data-lesson="Lesson 8" data-rate="83"></div>
                    </div>
                    <div data-quarter="Q1" data-subject="English">
                        <div data-lesson="Lesson 1" data-rate="90"></div>
                        <div data-lesson="Lesson 2" data-rate="93"></div>
                        <div data-lesson="Lesson 3" data-rate="88"></div>
                        <div data-lesson="Lesson 4" data-rate="91"></div>
                        <div data-lesson="Lesson 5" data-rate="89"></div>
                        <div data-lesson="Lesson 6" data-rate="92"></div>
                        <div data-lesson="Lesson 7" data-rate="94"></div>
                        <div data-lesson="Lesson 8" data-rate="90"></div>
                    </div>
                    <div data-quarter="Q1" data-subject="Filipino">
                        <div data-lesson="Lesson 1" data-rate="91"></div>
                        <div data-lesson="Lesson 2" data-rate="92"></div>
                        <div data-lesson="Lesson 3" data-rate="90"></div>
                        <div data-lesson="Lesson 4" data-rate="88"></div>
                        <div data-lesson="Lesson 5" data-rate="89"></div>
                        <div data-lesson="Lesson 6" data-rate="89"></div>
                        <div data-lesson="Lesson 7" data-rate="67"></div>
                        <div data-lesson="Lesson 8" data-rate="95"></div>
                    </div>
                    <div data-quarter="Q2" data-subject="Mathematics">
                        <div data-lesson="Lesson 1" data-rate="88"></div>
                        <div data-lesson="Lesson 2" data-rate="85"></div>
                        <div data-lesson="Lesson 3" data-rate="80"></div>
                        <div data-lesson="Lesson 4" data-rate="86"></div>
                        <div data-lesson="Lesson 5" data-rate="89"></div>
                        <div data-lesson="Lesson 6" data-rate="84"></div>
                        <div data-lesson="Lesson 7" data-rate="87"></div>
                        <div data-lesson="Lesson 8" data-rate="90"></div>
                    </div>
                    <div data-quarter="Q2" data-subject="Science">
                        <div data-lesson="Lesson 1" data-rate="82"></div>
                        <div data-lesson="Lesson 2" data-rate="79"></div>
                        <div data-lesson="Lesson 3" data-rate="75"></div>
                        <div data-lesson="Lesson 4" data-rate="80"></div>
                        <div data-lesson="Lesson 5" data-rate="84"></div>
                        <div data-lesson="Lesson 6" data-rate="78"></div>
                        <div data-lesson="Lesson 7" data-rate="81"></div>
                        <div data-lesson="Lesson 8" data-rate="83"></div>
                    </div>
                    <div data-quarter="Q2" data-subject="English">
                        <div data-lesson="Lesson 1" data-rate="92"></div>
                        <div data-lesson="Lesson 2" data-rate="94"></div>
                        <div data-lesson="Lesson 3" data-rate="91"></div>
                        <div data-lesson="Lesson 4" data-rate="93"></div>
                        <div data-lesson="Lesson 5" data-rate="90"></div>
                        <div data-lesson="Lesson 6" data-rate="92"></div>
                        <div data-lesson="Lesson 7" data-rate="95"></div>
                        <div data-lesson="Lesson 8" data-rate="91"></div>
                    </div>
                    <div data-quarter="Q2" data-subject="Filipino">
                        <div data-lesson="Lesson 1" data-rate="99"></div>
                        <div data-lesson="Lesson 2" data-rate="97"></div>
                        <div data-lesson="Lesson 3" data-rate="96"></div>
                        <div data-lesson="Lesson 4" data-rate="97"></div>
                        <div data-lesson="Lesson 5" data-rate="98"></div>
                        <div data-lesson="Lesson 6" data-rate="87"></div>
                        <div data-lesson="Lesson 7" data-rate="80"></div>
                        <div data-lesson="Lesson 8" data-rate="50"></div>
                    </div>
                </div>
                <!-- At Risk Pupil Table -->
                <div class="user-main-card-list card">
                    <div class="card-header list-header">
                        <div class="mb-3 at-risk-header">
                            <h4 class="text-muted">At-Risk Pupils</h4>
                        </div>
                        <div class="controls-row">
                            <div class="d-flex control-left">
                                <div class="search-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search search-icon">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                                    </svg><input type="text" id="searchInput-1" class="form-control searchName-input" placeholder="Search by name, class, type..">
                                </div>
                            </div>
                            <div class="control-right">
                                <div class="filter-select" style="display: none;">
                                    <select id="atRiskQuarterFilter" class="form-select">
                                        <option value="" selected="">All Quarter</option>
                                        <option value="Q1">Quarter 1</option>
                                        <option value="Q2">Quarter 2</option>
                                        <option value="Q3">Quarter 3</option>
                                        <option value="Q4">Quarter 4</option>
                                    </select>
                                </div>
                                <div class="filter-select">
                                    <select id="atRiskSubjectFilter" class="form-select">
                                        <option value="" selected="">All Subjects</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="English">English</option>
                                        <option value="Science">Science</option>
                                        <option value="Filipino">Filipino</option>
                                    </select>
                                </div>
                                <div class="filter-select">
                                    <select class="w-auto form-select" id="atRiskSort">
                                        <option value="" selected="">Sort By</option>
                                        <option value="name-asc">Name (A–Z)</option>
                                        <option value="name-desc">Name (Z–A)</option>
                                        <option value="last-active-desc">Last Active (desc)</option>
                                        <option value="last-active-asc"> Last Active (asc)</option>
                                        <option value="session-asc"> Avg. Session (asc)</option>
                                        <option value="session-desc">Avg. Session (desc)</option>
                                    </select>
                                </div>
                                <button class="btn btn-outline-secondary btn-clear" id="clearFiltersBtn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                        <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                    </svg>
                                    <span>Clear All</span>
                                </button>
                                <button class="btn btn-outline-primary btn-export" id="exportBtn-2" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                    </svg>
                                    <span>Export as CVS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 table-responsive table-list-users">
                        <div>
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>LASt ACTIVE</th>
                                        <th>progress</th>
                                        <th>subject</th>
                                        <th>avg. session</th>
                                        <th>status</th>
                                        <!-- <th>actions</th> -->
                                    </tr>
                                </thead>
                                <tbody id="userTableBody-1">
                                    <!-- <tr data-active="true">
                                        <td></td>
                                        <td data-label="Name" data-student="Maria Santos">Maria Santos</td>
                                        <td data-label="Last Active" data-last-active="18">18 days ago</td>
                                        <td data-label="Progress" data-rate="25">25%</td>
                                        <td data-label="Subject" data-quarter="Q1" data-subject="Mathematics">Mathematics Q1</td>
                                        <td data-label="Avg. Session" data-session-time="5">5m</td>
                                        <td data-label="Status"><span class="text-white bg-danger rounded-pill px-2 py-1 badge">At Risk</span></td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn message" title="Send Login Reminder" data-student-id="101" data-student-name="Juan Dela Cruz">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-active="false">
                                        <td></td>
                                        <td data-label="Name" data-name="Richard Bilan">Richard Bilan</td>
                                        <td data-label="Last Active" data-last-active="12">12 days ago</td>
                                        <td data-label="Progress" data-rate="38">38%</td>
                                        <td data-label="Subject" data-quarter="Q1" data-subject="Science">Science Q1</td>
                                        <td data-label="Avg. Session" data-session-time="12">12m</td>
                                        <td data-label="Status"><span class="text-white bg-danger rounded-pill px-2 py-1 badge">At Risk</span></td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn message" title="Send a Message">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-active="true">
                                        <td></td>
                                        <td data-label="Name" data-name="Wendee Diane Llona">Wendee Diane Llona</td>
                                        <td data-label="Last Active" data-last-active="20">20 days ago</td>
                                        <td data-label="Progress" data-rate="50">50%</td>
                                        <td class="Subject" data-label="Grade / Class" data-quarter="Q2" data-subject="English">English Q1</td>
                                        <td data-label="Avg. Session" data-session-time="8">8m</td>
                                        <td data-label="Status"><span class="text-white bg-danger rounded-pill px-2 py-1 badge">At Risk</span></td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn message" title="Send a Message">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center text-muted p-4" id="noAtRiskResults" style="display:none;"><span>No At-Risk Pupils found.</span></div>
                    <!-- Pagination -->
                    <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                        <div class="text-muted small"><span> Showing </span><span id="startCount-1">1</span><span> to </span><span id="endCount-1">3</span><span> of </span><span id="totalCount-1">50</span></div>
                        <nav aria-label="User list pagination">
                            <ul class="mb-0 pagination pagination-sm">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="d-none at-risk-data">
                    <div data-student="Juan Dela Cruz" data-last-active="18" data-session-time="5">
                        <div data-quarter="Q1" data-subject="Mathematics">
                            <div data-rate="25"></div>
                        </div>
                    </div>
                    <div data-student="Maria Santos" data-last-active="12" data-session-time="12">
                        <div data-quarter="Q1" data-subject="Science">
                            <div data-rate="38"></div>
                        </div>
                    </div>
                    <div data-student="Pedro Reyes" data-last-active="20" data-session-time="8">
                        <div data-quarter="Q1" data-subject="English">
                            <div data-rate="50"></div>
                        </div>
                    </div>
                    <div data-student="Ana Lim" data-last-active="5" data-session-time="40">
                        <div data-quarter="Q1" data-subject="Mathematics">
                            <div data-rate="30"></div>
                        </div>
                    </div>
                </div>
                <div id="chartTooltip" class="tooltip-custom"></div>
            </div>
            
            <!-- User Management Section -->
            <div class="d-none p-3 user-management-container content-section" id="userSection">
                <div class="user-page-header">
                    <h1 class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                        </svg>User Management</h1>
                    <p>Manage teachers and pupils, filter, search, and export user list.</p>
                </div>
                <div class="user-main-card-list card">
                    <div class="card-header list-header">
                        <div class="controls-row">
                            <div class="control-left">
                                <div class="search-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search search-icon">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                                    </svg><input type="text" id="searchInput" class="form-control searchName-input" placeholder="Search by name, class, type..">
                                </div>
                            </div>
                            <div class="control-right">
                                <div class="filter-select">
                                    <select id="filterType" class="form-select">
                                        <option value="" selected="">All types</option>
                                        <option value="Teacher">Teacher</option>
                                        <option value="Pupil">Pupil</option>
                                    </select>
                                </div>
                                <div class="filter-select">
                                    <select id="filterStatus" class="form-select">
                                        <option value="" selected="">All status</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="filter-select">
                                    <select id="filterDate" class="form-select">
                                        <option value="" selected="">All time</option>
                                        <option value="24d">Last 24 hours</option>
                                        <option value="7d">Last 7 days</option>
                                        <option value="30d">Last 30 days</option>
                                    </select>
                                </div>
                                <button class="btn btn-outline-primary btn-export" id="exportBtn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                    </svg><span>Export as CVS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 table-responsive table-list-users">
                        <div>
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>Type</th>
                                        <th>School</th>
                                        <th>Status</th>
                                        <th>Last seen</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tbody id="userTableBody">
                                    <!-- <tr data-active="true">
                                        <td data-label="Online"><div class="status-dot online"></div></td>
                                        <td data-label="Name">Maria Santos</td>
                                        <td data-label="Email">m******s@gmail.com</td>
                                        <td data-label="Type"><span class="text-success bg-success-subtle user-badge badge">Teacher</span></td>
                                        <td data-label="Grade / Class">Grade 4 - Section B</td>
                                        <td data-label="Status"><span class="status-badge status-active">Active</span></td>
                                        <td data-label="Last Seen">Now</td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn view" title="View Profile">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye" data-bs-toggle="modal" data-bs-target="#viewProfile">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-active="false">
                                        <td data-label="Online"><div class="status-dot offline"></div></td>
                                        <td data-label="Name">Richard Bilan</td>
                                        <td data-label="Email">r******n@gmail.com</td>
                                        <td data-label="Type"><span class="text-info bg-info-subtle user-badge badge">Pupil</span></td>
                                        <td data-label="Grade / Class">Grade 4 - Section A</td>
                                        <td data-label="Status"><span class="status-badge status-inactive">Inactive</span></td>
                                        <td data-label="Last Seen">5 hrs ago</td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn view" title="View Profile">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-active="true">
                                        <td data-label="Online"><div class="status-dot online"></div></td>
                                        <td data-label="Name">Wendee Diane Llona</td>
                                        <td data-label="Email">w********a@gmail.com</td>
                                        <td data-label="Type"><span class="text-success bg-success-subtle user-badge badge">Pupil</span></td>
                                        <td data-label="Grade / Class">Grade 3 - Section A</td>
                                        <td data-label="Status"><span class="status-badge status-active">Active</span></td>
                                        <td data-label="Last Seen">5 mins ago</td>
                                        <td data-label="Actions">
                                            <button class="btn action-btn view" title="View Profile">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center text-muted p-4" id="noResultsUser" style="display:none;"><span> No data matched your search.</span></div>
                    <!-- Pagination -->
                    <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                        <div class="text-muted small"><span> Showing </span><span id="startCount">1</span><span> to </span><span id="endCount">3</span><span> of </span><span id="totalCount">50</span><span> users </span></div>
                        <nav aria-label="User list pagination">
                            <ul class="mb-0 pagination pagination-sm">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Activity Log Section -->
            <div class="d-none p-3 activity-log-container content-section" id="activitylogSection">
                <div class="user-page-header">
                    <h1 class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock-history">
                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"></path>
                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"></path>
                        </svg>Activity Log</h1>
                    <p>Track file uploads, logins, user activity, and content changes across MQuest.</p>
                </div>
                <div class="user-main-card-list card">
                    <div class="card-header list-header">
                        <div class="controls-row">
                            <div class="control-left">
                                <div class="search-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search search-icon">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                                    </svg><input type="text" id="searchActivity" class="form-control searchName-input"  placeholder="Search here..."></div>
                            </div>
                            <div class="control-right">
                                <div class="activity-log-types"><select id="filterDate-1" class="form-select">
                                        <option value="" selected="">All time</option>
                                        <option value="today">Today</option>
                                        <option value="7d">Last 7 Days</option>
                                        <option value="30d">Last 30 Days</option>
                                        <option value="this-month">This month</option>
                                    </select></div>
                                <div class="activity-log-types"><select id="filterActType" class="form-select">
                                        <option value="" selected="">All types</option>
                                        <option value="lesson_material">Lesson &amp; Materials</option>
                                        <option value="quiz">Quiz</option>
                                        <option value="login_access">Logins &amp; Access</option>
                                        <option value="achievement">Achievement</option>
                                        <option value="deletion">Deleted Items</option>
                                    </select></div><button class="btn btn-outline-primary btn-export" id="exportBtn-1" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                    </svg><span>Export as CVS</span></button>
                            </div>
                        </div>
                    </div>
                    <ul id="activityList" class="activity-list">
                        <!-- <li class="activity-log-item" data-type="material-upload" data-search="uploaded shapes intro pdf admin" data-user="admin" data-category="lesson_material" data-timestamp="2025-09-02T15:30:00Z">
                            <div class="activity-log-header">
                                <div class="activity-log-icon lesson activity-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-folder">
                                        <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"></path>
                                    </svg></div>
                                <div class="activity-content"><span>Uploaded&nbsp;<strong>"Shapes_Intro.pdf"</strong></span><span class="bg-primary badge user-role">Admin</span></div>
                                <div class="activity-time"><span class="data-timestamp-display">2 mins ago</span></div>
                            </div>
                        </li> -->
                    </ul>
                    <div class="text-center text-muted p-4" id="noResults" style="display:none;"><span> No matching activities found.</span></div>
                    <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                        <div class="text-muted small"><span> Showing </span><span id="startCount-2">1</span><span> to </span><span id="endCount-2">3</span><span> of </span><span id="totalCount-2">50</span></div>
                        <nav aria-label="User list pagination">
                            <ul class="mb-0 pagination pagination-sm" id="activityPagination">
                                <!-- JS will dynamically insert page items here -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Lesson Template -->
            <div class="d-none subject-section content-section" id="lessonSection">
                <div class="ms-1 tab-container main-tab"><button class="btn active tab-button" type="button" onclick="switchTab(event, &#39;tab1&#39;)">Create</button><button class="btn tab-button" type="button" onclick="switchTab(event, &#39;tab2&#39;)">Lessons</button><button class="btn tab-button" type="button" onclick="switchTab(event, &#39;tab3&#39;)">People</button>
                    <div class="tab-indicator"></div>
                </div>
                <div id="tab1" class="tab-content active">
                    <div class="p-3 subject-box">
                        <div class="mb-2 col" id="subjectDisplay" style="height: 15rem; position: relative; width: 100%;">
                            <div class="mb-2 card math-subject-card">
                                <div class="subject-title">
                                    <h3>Mathematics 4</h3>
                                </div>
                            </div>
                        </div>
                        <div class="quarter-container">
                            <div class="quarter-header">
                                <div>
                                    <h2>Academic Quarter</h2><small>Manage the current and default quarter for lesson creation</small>
                                </div>
                            </div>
                            <div class="quarters row g-2">
                                <div class="col-6 col-md-3"><button class="quarter-btn" data-quarter="quarter1">Quarter 1</button></div>
                                <div class="col-6 col-md-3"><button class="quarter-btn" data-quarter="quarter2">Quarter 2</button></div>
                                <div class="col-6 col-md-3"><button class="quarter-btn" data-quarter="quarter3">Quarter 3</button></div>
                                <div class="col-6 col-md-3"><button class="quarter-btn" data-quarter="quarter4">Quarter 4</button></div>
                            </div>
                            <div class="quarter-progress-container">
                                <div class="progress-bar-bg">
                                    <div class="progress-bar-fill" id="quarterProgress"></div>
                                </div>
                                <div class="progress-label" id="progressLabel"><span class="small">3 out of 8 Lessons</span></div>
                            </div>
                            <div class="default-info">
                                <div id="defaultQuarterLabel" style="font-size:0.75rem;color:var(--text-light);"><span> Default Quarter: </span><strong>None</strong></div><button class="btn btn-secondary" id="setDefaultQuarterBtn" type="button">Set Current as Default</button>
                            </div>
                        </div>
                        <div class="mb-2 form-container lesson-container" id="lessonTemplate">
                            <h2 class="p-2">Create Lesson</h2>
                            <section class="main-container-lesson">
                                <h6><span>1&nbsp;</span>Lesson Title</h6>
                                <form>
                                    <div class="form-group lesson-title-wrapper"><input type="text" id="lesson-title" placeholder=" " required=""><label for="lesson-title">Lesson Title</label></div>
                                    <div class="form-group lesson-title-wrapper"><textarea id="lesson-description" placeholder=" " required=""></textarea><label for="lesson-description">Lesson Description</label></div>
                                </form>
                            </section>
                            <!-- Pretest -->
                            <section class="main-container-lesson">
                                <h6><span>2</span>Pre Test</h6>
                                <p class="text-muted mb-2">Create a pretest with 5–10 questions (True/False, Multiple Choice, Fill in the Blank).</p>
                                <div id="quiz-container"></div>
                                <div class="mb-3 quiz"><label class="form-label" for="questionType">Choose Question Type</label>
                                    <select class="mb-2 form-select" id="questionType">
                                        <option value="" selected="">Select Type</option>
                                        <option value="truefalse">True / False</option>
                                        <option value="multiple">Multiple Choice</option>
                                        <option value="fillblank">Fill in the Blank</option>
                                    </select>
                                    <button class="btn mb-3 addQuestion-btn" id="add-question-btn" type="button" onclick="addQuestion()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle me-2">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                        </svg>Add Question
                                    </button>
                                </div>
                            </section>
                            <!-- Games Builder -->
                            <section class="main-container-lesson">
                                <h6><span>3</span>Games Builder (Optional)</h6>
                                <p class="text-muted mb-2">Create a game activity with 5–10 items …</p>

                                <div class="mb-3 quiz">
                                    <label class="form-label" for="gameSelect">Choose a Game Type</label>
                                    <select class="mb-2 form-select" id="gameSelect">
                                        <option value="" selected>Select Type</option>
                                        <option value="matching">Matching</option>
                                        <option value="flashcard">Flash Card</option>
                                        <option value="spelling">Spelling</option>
                                        <option value="speak">Speak</option>
                                        <option value="imagequiz">Image Quiz</option>
                                    </select>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="matching-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Matching Game</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="matching-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="matching-container"></div>
                                    <button class="btn mb-3 add-game" id="addMatchingBtn" type="button">Add Another Pair</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="flashcard-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Flashcard Game</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="flashcard-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="flashcard-container"></div>
                                    <button class="btn mb-3 add-game" id="addFlashcardBtn" type="button">Add Another Card</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="spelling-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Fill-in-the-Blank</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="spelling-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="spelling-container"></div>
                                    <button class="btn mb-3 add-game" id="addSpellingBtn" type="button">Add Another Word</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="speak-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Speech</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="speak-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="speak-container"></div>
                                    <button class="btn mb-3 add-game" id="addSpeakBtn" type="button">Add Another Prompt</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="imagequiz-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Image Quiz</h5>
                                        <button class="btn btn-sm reset-btn" type="button" data-target="imagequiz-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="imagequiz-container"></div>
                                    <button class="btn mb-3 add-game" id="addImageQuizBtn" type="button">Add Another Image Quiz</button>
                                </div>
                            </section>

                            <!-- ==================== BADGE SECTION (hidden by default) ==================== -->
                            <section class="main-container-lesson badge-section" id="badgeSection" style="display:none;">
                                <div class="left-panel">
                                    <div class="badge-card">
                                        <h5>Badge Details</h5>
                                        <div class="form-group badge-form-group">
                                            <label class="form-label">Badge Title</label>
                                            <input id="badgeTitle" class="input-field" type="text" value="Excellence" />
                                        </div>
                                        <div class="form-group badge-form-group">
                                            <label class="form-label">Subtitle</label>
                                            <input id="badgeSubtitle" class="input-field" type="text" value="Achievement Award" />
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <!-- ICON SELECTOR -->
                                            <div class="col-md-6">
                                                <div class="badge-card">
                                                    <h5>Select Icon</h5>
                                                    <div class="icon-selector">
                                                        <div class="icon-option" data-icon="ribbon" data-label="Award"><ion-icon name="ribbon-outline"></ion-icon><span>Award</span></div>
                                                        <div class="icon-option" data-icon="shield" data-label="Shield"><ion-icon name="shield-outline"></ion-icon><span>Shield</span></div>
                                                        <div class="icon-option selected" data-icon="star" data-label="Star"><ion-icon name="sparkles-outline"></ion-icon><span>Star</span></div>
                                                        <div class="icon-option" data-icon="flash"  data-label="Zap"><ion-icon name="flash-outline"></ion-icon><span>Zap</span></div>
                                                        <div class="icon-option" data-icon="trophy" data-label="Trophy"><ion-icon name="trophy-outline"></ion-icon><span>Trophy</span></div>
                                                        <div class="icon-option" data-icon="bulb"  data-label="Bulb"><ion-icon name="bulb-outline"></ion-icon><span>Bulb</span></div>
                                                        <div class="icon-option" data-icon="flask"  data-label="Flask"><ion-icon name="flask-outline"></ion-icon><span>Flask</span></div>
                                                        <div class="icon-option" data-icon="planet"  data-label="Planet"><ion-icon name="planet-outline"></ion-icon><span>Planet</span></div>
                                                        <div class="icon-option" data-icon="bonfire"  data-label="Bonfire"><ion-icon name="bonfire-outline"></ion-icon><span>Bonfire</span></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- BACKGROUND COLOR ONLY -->
                                            <div class="col-md-6">
                                                <div class="badge-card">
                                                    <h5>Color Palette</h5>
                                                    <div class="color-picker">
                                                        <span class="color-label">Background Color</span>
                                                        <input id="bgColor" class="color-input" type="color" value="#ec4899" />
                                                        <input id="bgColorValue" class="color-value" type="text" value="#ec4899" />
                                                    </div>

                                                    <div class="quick-presets">
                                                        <div class="preset-button selected" style="background-color:#3b82f6;" data-color="#3b82f6"><span>Blue</span></div>
                                                        <div class="preset-button" style="background-color:#10b981;" data-color="#10b981"><span>Green</span></div>
                                                        <div class="preset-button" style="background-color:#f59e0b;" data-color="#f59e0b"><span>Orange</span></div>
                                                        <div class="preset-button" style="background-color:#ef4444;" data-color="#ef4444"><span>Red</span></div>
                                                        <div class="preset-button" style="background-color:#8b5cf6;" data-color="#8b5cf6"><span>Purple</span></div>
                                                        <div class="preset-button" style="background-color:#ec4899;" data-color="#ec4899"><span>Pink</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RIGHT PANEL – PREVIEW + SPECS -->
                                <div class="right-panel">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="badge-card">
                                                    <h5>Preview</h5>
                                                    <div class="preview-container">
                                                        <div id="previewBadge" class="badge-preview">
                                                            <div class="badge-icon"><ion-icon id="previewIcon" name="star-outline"></ion-icon></div>
                                                            <div class="badge-title"><span id="previewTitle">Excellence</span></div>
                                                            <div class="badge-subtitle"><span id="previewSubtitle">Achievement Award</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="badge-card">
                                                    <h5>Badge Specifications</h5>
                                                    <div class="specifications">
                                                        <div class="spec-row"><span class="spec-label">Title:</span><span id="specTitle">Excellence</span></div>
                                                        <div class="spec-row"><span class="spec-label">Subtitle:</span><span id="specSubtitle">Achievement Award</span></div>
                                                        <div class="spec-row"><span class="spec-label">Icon:</span><span id="specIcon">Star</span></div>
                                                        <div class="spec-row"><span class="spec-label">Background:</span>
                                                            <span class="spec-value">
                                                                <span id="specBgColorIndicator" class="color-indicator" style="background-color:#ec4899;"></span>
                                                                <span id="specBgColor">#ec4899</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="main-container-lesson">
                                <div class="row">
                                    <div class="mb-3 col-12 col-md-6">
                                        <h6><span>4</span>Upload Learning Material</h6>
                                        <p class="text-muted">Select a PowerPoint or PDF file (.ppt or .pptx) to upload.&nbsp;</p>
                                        <div class="mt-3 container">
                                            <div class="mb-3 drop-zone upload-container" id="dropZone">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-upload">
                                                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z"></path>
                                                </svg>
                                                <p class="mb-0">Drop files here</p><small class="text-muted">Files Supported: PDF, PPT, PPTX</small><br><label class="btn-upload" for="fileInput">Choose File</label><br><small class="text-muted">Maximum size: 100MB</small><input type="file" id="fileInput" class="file-input" accept=".ppt,.pptx">
                                            </div>
                                            <div class="mb-3 file-info" id="fileNameDisplay">
                                                <p id="fileName" class="file-name">Paragraph</p>
                                                <p id="fileSize" class="file-size">Paragraph</p>
                                            </div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title" placeholder=" " required=""><label for="file-title">Title</label></div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-1" placeholder=" " required=""><label for="file-title-1">Subtitle</label></div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <h6><span>5</span>Upload Video/s</h6>
                                        <p class="text-muted mb-2">Select a video file (e.g., .mp4, .mov, .webm) to upload.&nbsp;</p>
                                        <div class="mt-3 container">
                                            <div class="mb-3 drop-zone upload-container" id="dropZone2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-upload">
                                                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z"></path>
                                                </svg>
                                                <p class="mb-0">Drop video here</p><small class="text-muted">Files Supported: MP4, MOV, WEBM&nbsp;</small><br><label class="btn-upload" for="videoInput">Choose File</label><br><small class="text-muted">Maximum size: 1GB</small><input type="file" id="videoInput" class="video-input" accept="video/*">
                                            </div>
                                            <div id="videoPreview" class="video-preview"><video id="previewVideo" controls=""></video>
                                                <div class="video-controls"><button id="playPauseBtn">Play</button></div>
                                            </div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-2" placeholder=" " required=""><label for="file-title-2">Title</label></div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="video-title" placeholder=" " required=""><label for="video-title">Subtitle</label></div>
                                            <div class="upload-url-container">
                                                <h4><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-link-45deg me-2">
                                                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"></path>
                                                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"></path>
                                                    </svg>Or Add a Video URL
                                                </h4>
                                                <div class="url-input-group"><input type="url" id="urlInput" class="url-input" placeholder="https://shareprojectdikename.com/csv-file"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Post Test -->
                            <section class="main-container-lesson">
                                <h6><span>6</span>Post Test</h6>
                                <p class="text-muted mb-2">Create a pretest with 5–10 questions (True/False, Multiple Choice, Fill in the Blank).</p>
                                <div id="quiz-container2"></div>
                                <div class="mb-3 quiz"><label class="form-label" for="questionType2">Choose Question Type</label>
                                    <select class="mb-2 form-select" id="questionType2">
                                        <option value="" selected="">Select Type</option>
                                        <option value="truefalse">True / False</option>
                                        <option value="multiple">Multiple Choice</option>
                                        <option value="fillblank">Fill in the Blank</option>
                                    </select>
                                    <button class="btn mb-3 addQuestion-btn" id="add-question-btn2" type="button" onclick="addQuestion2()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle me-2">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                        </svg>Add Question
                                    </button>
                                </div>
                            </section>
                            <div class="p-4 tip-box">
                                <h6 class="text-muted tip-title">Tips</h6>
                                <ul class="list-unstyled text-muted tip-list">
                                    <li>Keep quizzes short.</li>
                                    <li>Keep videos under 5 minutes and compress large video files.</li>
                                    <li>Use clear file names (e.g., Lesson_1_Intro.pdf).</li>
                                    <li>Use PDFs for handouts, not Word docs.</li>
                                    <li>Add a title and description and check spelling before publishing.</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-start gap-3 flex-md-row p-4">
                                <button class="btn me-2 publish-btn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle me-2">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"></path>
                                    </svg>Publish Lesson
                                </button>
                                <button class="btn btn-outline-secondary save-draft-btn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-save me-2">
                                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1z"></path>
                                    </svg>Save As Draft
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="create">
                        <button class="btn floating-create-btn" id="createLessonBtn" type="button" aria-label="Create Lesson">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Lesson Tabs -->
                <div id="tab2" class="tab-content">
                    <div class="p-3 lesson-main-container">
                        <div class="mb-3 quarter-tabs row g-2" id="quarterTabs">
                            <div class="col-6 col-md-3">
                                <div class="quarter-tab active" data-quarter="Q1"><span>Quarter 1</span></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="quarter-tab" data-quarter="Q2"><span>Quarter 2</span></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="quarter-tab" data-quarter="Q3"><span>Quarter 3</span></div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="quarter-tab" data-quarter="Q4"><span>Quarter 4</span></div>
                            </div>
                        </div>
                        <div id="lessonMenu" class="lesson-menu">
                            <!-- Lessons will be dynamically added here -->
                        </div>
                    </div>
                </div>
                <!-- People Tab-->
                <div id="tab3" class="tab-content">
                    <div class="p-3 people-main-container">
                        <!-- Teachers -->
                        <div class="mb-4 teacher-ab" id="teachersContainer"></div>

                        <!-- Pupils -->
                        <div class="student-ab" id="pupilsContainer"></div>
                    </div>
                </div>
            </div>

            <!-- Task Manager -->
            <div id="taskManagerPanel" class="task-manager-panel">
                <div class="panel-header">
                    <h5 class="m-0">My Tasks</h5>
                    <button class="btn btn-sm close-task-manager" id="closeTaskManager" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                        </svg>
                    </button>
                </div>
                <div class="panel-body">
                    <div class="mb-4 calendar-container">
                        <div class="d-flex justify-content-between align-items-center mb-3 calendar-header">
                            <h6 class="mb-0">Calendar</h6>
                            <div class="calendar-control">
                                <button class="btn me-1" id="prevMonth">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-caret-left">
                                        <path d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"></path>
                                    </svg>
                                </button><span id="currentMonth" class="fw-medium">October 2025</span>
                                <button class="btn ms-1" id="nextMonth">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-caret-right">
                                        <path d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div id="calendarGrid" class="calendar-grid"></div>
                    </div>
                    <!-- Create New Task -->
                    <div class="create-task-form">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Create New Task</h6>
                            <button class="btn btn-link btn-sm p-0" id="manageCategoriesBtn" title="Manage categories" style="color: #131150;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-gear">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                </svg>
                            </button>
                        </div>
                        <form id="taskForm" class="task-form">
                            <div class="mb-3"><label class="form-label" for="taskTitle">Task Title</label><input class="form-control p-2 form-control form-select-sm" type="text" id="taskTitle" placeholder="Enter task title"></div>
                            <div class="mb-3"><label class="form-label" for="taskDescription-1">Description</label><textarea class="form-control p-2 form-control form-select-sm" id="taskDescription-1" placeholder="Enter task description" rows="3"></textarea></div>
                            <div class="row mb-3">
                                <div class="col-md-6"><label class="form-label" for="taskDueDate">Due Date</label><input class="form-control p-2 form-control form-select-sm" id="taskDate" type="date"></div>
                                <div class="col-md-6"><label class="form-label" for="taskStatus">Status</label>
                                    <select class="form-select form-select-sm p-2 form-select" id="taskStatus" name="taskStatus">
                                        <option value="Pending">Pending</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6"><label class="form-label" for="taskCategory">Category</label>
                                    <select class="form-select form-select-sm p-2 form-select" id="taskCategory" name="taskCategory">
                                        <option value="1">Mathematics</option>
                                        <option value="2">Science</option>
                                        <option value="3">English</option>
                                        <option value="4">Filipino</option>
                                        <option value="5">Personal</option>
                                        <option value="6">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6"><label class="form-label" for="taskPriority">Priority</label>
                                    <select class="form-select form-select-sm p-2 form-select" id="taskPriority" name="taskPriority">
                                        <option value="Low">Low</option>
                                        <option value="Medium" selected="">Medium</option>
                                        <option value="High">High</option>
                                        <option value="Urgent">Urgent</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-secondary w-100 justify-content-center btn-add-task" type="submit">Add Task</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Enrolled Pupils -->
    <div class="modal fade" role="dialog" tabindex="-1" id="studentsModal">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h4 class="modal-title" style="font-size: 18px;">Enrolled Students</h4><button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal" style="font-size: 12px;"></button>
                </div>
                <div class="modal-body m-3 modal-student-list admin-profile-modal-body">
                    <div class="student-card">
                        <div class="student-info"><img class="img-fluid" width="200" height="200" src="assets/img/7.png">
                            <div class="student-details"><strong>juanDC</strong>
                                <p class="text-muted mb-0">LRN:&nbsp;<span>1235 **** 9456</span></p>
                            </div>
                            <div class="student-actions"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- View Student Profile - User Management -->
    <div class="modal fade" role="dialog" tabindex="-1" id="viewProfile" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button></div>
                <div class="modal-body p-0 mb-0">
                    <div class="rounded-0 border-0 profile-container">
                        <div class="position-relative profile-header">
                            <div class="profile-pic-container"><img class="img-fluid profile-pic" width="200" height="200" src="assets/img/7.png"></div>
                            <div class="text-white profile-title">
                                <h1>Emma Watsons</h1><span class="bg-success badge">Pupil</span>
                                <p>Grade 4</p>
                            </div>
                            <div class="mt-4 row">
                                <div class="col-sm-6">
                                    <div class="info-item">
                                        <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-calendar">
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                                            </svg><span>Joined since</span></div>
                                        <div class="info-item-value" id="createdAt"><span>January 15, 2022</span></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock">
                                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                            </svg><span>Last Active</span></div>
                                        <div class="info-item-value" id="lastActive"><span>Active Now</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-body">
                            <div class="mb-3 row g-3">
                                <div class="col-lg-6">
                                    <h3 class="section-title">Personal Information</h3>
                                    <div class="info-grid row g-2">
                                        <div class="col-12">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                                    </svg><span> Email</span></div>
                                                <div class="info-item-value" id="email"><span>emma.johnson@example.com</span></div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-6">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                                    </svg><span>&nbsp;Phone</span></div>
                                                <div class="info-item-value" ><span>+1 (555) 123-4567</span></div>
                                            </div>
                                        </div> -->
                                        <div class="col-6">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cake">
                                                        <path d="m7.994.013-.595.79a.747.747 0 0 0 .101 1.01V4H5a2 2 0 0 0-2 2v3H2a2 2 0 0 0-2 2v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a2 2 0 0 0-2-2h-1V6a2 2 0 0 0-2-2H8.5V1.806A.747.747 0 0 0 8.592.802l-.598-.79ZM4 6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v.414a.911.911 0 0 1-.646-.268 1.914 1.914 0 0 0-2.708 0 .914.914 0 0 1-1.292 0 1.914 1.914 0 0 0-2.708 0A.911.911 0 0 1 4 6.414zm0 1.414c.49 0 .98-.187 1.354-.56a.914.914 0 0 1 1.292 0c.748.747 1.96.747 2.708 0a.914.914 0 0 1 1.292 0c.374.373.864.56 1.354.56V9H4zM1 11a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.793l-.354.354a.914.914 0 0 1-1.293 0 1.914 1.914 0 0 0-2.707 0 .914.914 0 0 1-1.292 0 1.914 1.914 0 0 0-2.708 0 .914.914 0 0 1-1.292 0 1.914 1.914 0 0 0-2.708 0 .914.914 0 0 1-1.292 0L1 11.793zm11.646 1.854a1.915 1.915 0 0 0 2.354.279V15H1v-1.867c.737.452 1.715.36 2.354-.28a.914.914 0 0 1 1.292 0c.748.748 1.96.748 2.708 0a.914.914 0 0 1 1.292 0c.748.748 1.96.748 2.707 0a.914.914 0 0 1 1.293 0Z"></path>
                                                    </svg><span>&nbsp;Date of Birth</span></div>
                                                <div class="info-item-value" id="bday"><span>March 8, 2017</span></div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-6">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-geo-alt">
                                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"></path>
                                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                                                    </svg><span>Address</span></div>
                                                <div class="info-item-value"><span>New York, USA</span></div>
                                            </div>
                                        </div> -->
                                        <div class="col-6">
                                            <div class="info-item">
                                                <div class="info-item-label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-building">
                                                        <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"></path>
                                                        <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z"></path>
                                                    </svg><span>School</span></div>
                                                <div class="info-item-value" id="schoolName"><span>Lincoln Middle School</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3 class="section-title">Learning Progress</h3>
                                    <div class="mb-3" class="progress-overview" data-subject="Mathematics">
                                        <div class="progress-container">
                                            <div class="progress-title"><span>Mathematics</span><span class="progress-percentage">0%</span></div>
                                            <div class="progress">
                                                <div class="bg-warning progress-bar" id="mathProg" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container" data-subject="Enhlish">
                                            <div class="progress-title"><span>English</span><span class="progress-percentage">0%</span></div>
                                            <div class="progress">
                                                <div class="bg-danger progress-bar" id="engProg" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container" data-subject="Science">
                                            <div class="progress-title"><span>Science</span><span class="progress-percentage">0%</span></div>
                                            <div class="progress">
                                                <div class="bg-danger progress-bar" id="sciProg" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container" data-subject="Filipino">
                                            <div class="progress-title"><span>Filipino</span><span class="progress-percentage">0%</span></div>
                                            <div class="progress">
                                                <div class="bg-success progress-bar"id="filProg" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h1 class="section-title">Recent Activity</h1>
                                <div class="mb-3">
                                    <div class="activity-item">
                                        <div class="activity-icon blue"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book">
                                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                            </svg></div>
                                        <div class="activity-content">
                                            <div class="activity-title"><span>Completed: Lesson 4 -Solving Quadratic Equations</span></div>
                                            <div class="activity-time"><span>2 hr ago</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon green"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"></path>
                                            </svg></div>
                                        <div class="activity-content">
                                            <div class="activity-title"><span>Pre Test Done: Lesson 4 - Solving Quadratic Equations</span></div>
                                            <div class="activity-time"><span>2 hr ago</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon gray"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                            </svg></div>
                                        <div class="activity-content">
                                            <div class="activity-title"><span>Downloaded: Lesson 4 - Solving Quadratic Equations</span></div>
                                            <div class="activity-time"><span>2 hr ago</span></div>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon yellow"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-award">
                                                <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"></path>
                                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"></path>
                                            </svg></div>
                                        <div class="activity-content">
                                            <div class="activity-title"><span>Earned "Math Whiz" Badge for completing 10 quizzes</span></div>
                                            <div class="activity-time"><span>2 hr ago</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <div class="stat-value" ><span id="avgScore">0%</span></div>
                                    <div class="stat-label"><span>Average Score</span></div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value" ><span id="TotalCompleteLesson">0</span></div>
                                    <div class="stat-label"><span>Lesson Completed</span></div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value"><span id="badgeEarn">0</span></div>
                                    <div class="stat-label"><span>Badges Earned</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Manage Task Category -->
    <div class="modal fade" role="dialog" tabindex="-1" id="taskCategoryModal" aria-labelledby="taskCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h6 class="modal-title">Manage Categories</h6><button class="btn-close btn-close-white btn-" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body admin-profile-modal-body">
                    <div class="category-management">
                        <div class="category-header">
                            <h6>Existing Categories</h6>
                        </div>
                        <div class="category-list" id="categoryList"></div>
                        <div class="mt-4 pt-3 add-category-form border-top">
                            <h6>Add New Category</h6>
                            <div class="input-group flex-nowrap mb-3"><input class="form-control form-control form-select-sm" type="text" id="newCategoryName" placeholder="Category name"><button class="btn btn-secondary btn-sm btn-add-category" id="addCategoryBtn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-lg">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path>
                                    </svg></button></div>
                            <div class="color-picker" id="colorPicker"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Task -->
    <div class="modal fade" role="dialog" tabindex="-1" id="taskDetailModal" aria-labelledby="taskDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content admin-profile-modal-content">
                <div class="modal-header admin-profile-modal-header">
                    <h6 class="modal-title">Task Details</h6><button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body m-2 admin-profile-modal-body">
                    <div class="task-details">
                        <div class="mb-3"><label class="form-label fw-bold" for="taskTitle-1">Task Title</label>
                            <p id="detailTitle" class="form-control-plaintext">Upload Science Lesson 1</p>
                        </div>
                        <div class="mb-3"><label class="form-label fw-bold" for="taskDescription-2">Description</label>
                            <p id="detailDescription" class="form-control-plaintext">Discuss Q4 goals and project timelines.</p>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="fw-bold form-label" for="taskDueDate">Due Date</label>
                                <p id="detailDate" class="form-control-plaintext">October 27, 2025</p>
                            </div>
                            <div class="col-md-6"><label class="fw-bold form-label">Status</label><span id="detailStatus" class="badge status-task-pending">Pending</span></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="fw-bold form-label" for="taskCategory-1">Category</label><span id="detailCategory" class="badge-personal badge">Personal</span></div>
                            <div class="col-md-6"><label class="fw-bold form-label" for="taskPriority-1">Priority Level</label><span id="detailPriority" class="badge priority-low">Low Priority</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal (Reusablefor simple Deletion) -->
    <div class="modal fade" role="dialog" tabindex="-1" id="deleteModal" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-lg border-0 rounded-2">
                <div class="modal-body text-center m-3"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16" class="bi bi-exclamation-triangle-fill text-danger mb-2">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
                    </svg>
                    <p class="mb-2" style="font-size: 18px;">Are you sure you want to delete this subject?</p>
                    <p class="text-muted small" style="font-size: 15px;">This action cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center"><button class="btn btn-light px-4" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn px-4 deleteSub-btn" type="button">Delete</button></div>
            </div>
        </div>
    </div>

    <!-- Lesson Sucess Publication -->
    <div class="modal fade" role="dialog" tabindex="-1" id="publishSuccessModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-4">
                    <div class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle-fill text-success">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                        </svg></div>
                    <h4 class="fw-bold mb-2">Lesson Published!</h4>
                    <p class="text-muted mb-3">Your lesson is now live and ready for pupils to view in the mobile app.</p>
                    <button class="btn btn-success rounded-pill px-4 py-2 close-modal" type="button" data-bs-dismiss="modal" id="gotItButton">Got it!</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Loading Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="loadingModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-4">
                    <div class="mb-3">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <h4 id="loadingModalTitle" class="fw-bold mb-2">Publishing Lesson...</h4>
                    <p id="loadingModalText" class="text-muted mb-0">Please wait while we publish your lesson.</p>
                </div>
            </div>
        </div>
    </div>


    

    <!-- Confirmation Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="confirmPublishModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-4">
                    <div class="mb-3 text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16" class="bi bi-exclamation-triangle-fill text-danger">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <h4 class="fw-bold mb-3">Confirm Publication</h4>
                    <p class="text-muted mb-3">
                        <strong>After a pupil accesses this lesson or any of its materials, it can no longer be edited or deleted.</strong><br>
                        Please review everything carefully before publishing.
                    </p>
                    <div class="d-flex gap-2 justify-content-center">
                        <button class="btn btn-outline-danger rounded-pill px-4 py-2 btn-sm" type="button" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button class="btn btn-outline-success rounded-pill px-4 py-2 btn-sm" type="button" id="confirmPublishBtn">
                            Publish Lesson
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Global Toast Container -->
    <div class="position-fixed bottom-0 end-0 p-3 toast-container" id="global-toast-container" style="z-index: 9999;"></div>
    
    <!-- {{-- Hidden field that JS will keep up-to-date --}} -->
    <input type="hidden" id="selected-quarter-input" name="selected_quarter" value="quarter1">
    <input type="hidden" id="selected-subject-input" name="selected_subject" value="English">

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
    <script src="{{ asset('assets/js/badge-manager.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const userData = sessionStorage.getItem("user");
            const token = sessionStorage.getItem("token");

            console.log("User data:", userData);
            console.log("Token:", token);

            if (userData) {
                const user = JSON.parse(userData);

                // Update UI
                const adminName = document.getElementById("adminName");
                const adminName2 = document.getElementById("adminName2");
                const adminEmail = document.getElementById("adminEmail");

                if (adminName) adminName.textContent = user.first_name;
                if (adminName2) adminName2.textContent = user.first_name;
                if (adminEmail) adminEmail.textContent = user.email;

                // Avatar handling
                const profileSmall = document.getElementById("profileSmall");
                const profileLarge = document.getElementById("profileLarge");
                const sidebarProfile = document.getElementById("sidebarProfile");

                const avatarUrl = user.avatar?.thumbnail || "assets/img/default-avatar.png";
                const avatarAlt = user.avatar?.avatar || "Avatar";

                [profileSmall, profileLarge, sidebarProfile].forEach(img => {
                    if (!img) return;
                    img.src = avatarUrl;
                    img.alt = avatarAlt;

                    // fallback to circle avatar on error
                    img.onerror = () => {
                        const firstChar = user.first_name?.charAt(0).toUpperCase() || "?";
                        const colors = ["#FEDB7C", "#F16A43", "#C5C13C", "#FBB315"];
                        const bgColor = colors[firstChar.charCodeAt(0) % colors.length];

                        const canvas = document.createElement("canvas");
                        canvas.width = 100;
                        canvas.height = 100;
                        const ctx = canvas.getContext("2d");

                        ctx.fillStyle = bgColor;
                        ctx.beginPath();
                        ctx.arc(50, 50, 50, 0, 2 * Math.PI);
                        ctx.fill();

                        ctx.fillStyle = "white";
                        ctx.font = "bold 50px Arial";
                        ctx.textAlign = "center";
                        ctx.textBaseline = "middle";
                        ctx.fillText(firstChar, 50, 55);

                        img.src = canvas.toDataURL("image/png");
                    };
                });
            } else {
                // redirect if not logged in
                window.location.href = "{{ route('login') }}";
            }

            // Sign out logic with event delegation
            document.addEventListener("click", async (e) => {
                if (!e.target.closest("#logout-btn")) return;

                e.preventDefault();

                try {
                    const response = await fetch("{{ route('logout') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        }
                    });

                    await response.json();

                    // Clear any frontend data (optional)
                    sessionStorage.clear();

                    // Redirect to login
                    window.location.href = "{{ route('login') }}";

                } catch (error) {
                    console.error("❌ Logout failed:", error);
                    sessionStorage.clear();
                    window.location.href = "{{ route('login') }}";
                }
            });
        });
    </script>

    <script>
        window.dashboardData = {
            gender: {
                male: {{ $maleCount ?? 0 }},
                female: {{ $femaleCount ?? 0 }},
                others: {{ $preferNotToSayCount ?? 0 }}
            }
        };
    </script>

    <!-- JavaScript for Quarter Filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let currentQuarter = 1;
            const totalQuarters = 4;
            const quarterDisplay = document.getElementById('quarter-display');
            const subjects = document.querySelectorAll('.subject-card-wrapper');

            function updateQuarterDisplay() {
                quarterDisplay.textContent = `Quarter ${currentQuarter}`;
                subjects.forEach(card => {
                    const cardQuarter = parseInt(card.dataset.quarter);
                    card.style.display = (cardQuarter === currentQuarter) ? 'block' : 'none';
                });
            }

            document.getElementById('next-quarter').addEventListener('click', () => {
                currentQuarter = (currentQuarter % totalQuarters) + 1;
                updateQuarterDisplay();
            });

            document.getElementById('prev-quarter').addEventListener('click', () => {
                currentQuarter = (currentQuarter - 2 + totalQuarters) % totalQuarters + 1;
                updateQuarterDisplay();
            });

            // Initialize on load
            updateQuarterDisplay();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const studentsModal = document.getElementById('studentsModal');
            const studentsContainer = studentsModal.querySelector('.modal-student-list');

            studentsModal.addEventListener('show.bs.modal', async (event) => {
                // The element that triggered the modal
                const button = event.relatedTarget;
                const subjectId = button.getAttribute('data-subject-id');
                if (!subjectId) return;

                // Clear existing content
                studentsContainer.innerHTML = '<p class="text-center text-muted">Loading...</p>';

                try {
                    // Fetch enrolled students by subject_id
                    const response = await fetch(`/usersBySubject/${subjectId}`);
                    const students = await response.json();

                    // Clear container before inserting new data
                    studentsContainer.innerHTML = '';

                    if (students.length === 0) {
                        studentsContainer.innerHTML = `<p class="text-center text-muted">No enrolled students for this subject.</p>`;
                        return;
                    }

                    // Populate the modal with the fetched data
                    students.forEach(student => {
                        const avatar = student.avatar_thumbnail || 'assets/img/default-avatar.png';
                        const fullname = `${student.first_name ?? ''} ${student.last_name ?? ''}`.trim();
                        const lrn = student.lrn ?? 'N/A';

                        const card = `
                            <div class="student-card">
                                <div class="student-info">
                                    <img class="img-fluid" width="200" height="200" src="${avatar}">
                                    <div class="student-details">
                                        <strong>${fullname}</strong>
                                        <p class="text-muted mb-0">LRN:&nbsp;<span>${lrn}</span></p>
                                    </div>
                                    <div class="student-actions">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2
                                            0 0 1 2 2v8a2 2 0 0 1-2
                                            2H2a2 2 0 0 1-2-2zm2-1a1
                                            1 0 0 0-1 1v.217l7 4.2
                                            7-4.2V4a1 1 0 0
                                            0-1-1zm13 2.383-4.708
                                            2.825L15
                                            11.105zm-.034 6.876-5.64-
                                            3.471L8
                                            9.583l-1.326-.795-5.64
                                            3.47A1 1 0 0
                                            0 2 13h12a1 1 0 0 0
                                            .966-.741M1
                                            11.105l4.708-2.897L1
                                            5.383z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        `;
                        studentsContainer.insertAdjacentHTML('beforeend', card);
                    });

                } catch (error) {
                    console.error('Error fetching students:', error);
                    studentsContainer.innerHTML = `<p class="text-center text-danger">Failed to load data.</p>`;
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const subjectDisplay      = document.getElementById('subjectDisplay');
            const lessonSection       = document.getElementById('lessonSection');
            const selectedSubjectInput = document.getElementById('selected-subject-input');

            // ---------- SUBJECT LINKS ----------
            document.querySelectorAll('#subject-list .sidebar-link').forEach(link => {
                link.addEventListener('click', e => {
                    e.preventDefault();

                    const subject = link.dataset.subject;           // e.g. "Filipino"
                    const lower   = subject.toLowerCase();

                    // 1. Show lesson area
                    lessonSection.classList.remove('d-none');

                    // 2. Update header card
                    const displayName = subject.toLowerCase() === 'math' ? 'Mathematics' : subject;

                    subjectDisplay.innerHTML = `
                        <div class="mb-2 card ${subject.toLowerCase()}-subject-card">
                            <div class="subject-title">
                                <h3>${displayName} 4</h3>
                            </div>
                        </div>
                    `;


                    // 3. **IMPORTANT** – keep hidden input in sync
                    selectedSubjectInput.value = subject;

                    // 4. Highlight active link
                    document.querySelectorAll('#subject-list .sidebar-link')
                            .forEach(l => l.classList.remove('active'));
                    link.classList.add('active');

                    // 5. **RE-RENDER LESSONS** for the newly selected subject
                    const activeQuarter = document.querySelector('.quarter-tab.active')?.dataset.quarter || 'Q1';
                    window.renderLessons?.(activeQuarter);
                });
            });

            // ---------- CURRICULUM LINK (default = English) ----------
            document.getElementById('curriculumLink').addEventListener('click', e => {
                const defaultSubject = 'English';
                const lower = defaultSubject.toLowerCase();

                lessonSection.classList.remove('d-none');

                subjectDisplay.innerHTML = `
                    <div class="mb-2 card ${lower}-subject-card">
                        <div class="subject-title">
                            <h3>${defaultSubject} 4</h3>
                        </div>
                    </div>
                `;

                selectedSubjectInput.value = defaultSubject;

                // also render English lessons
                const activeQuarter = document.querySelector('.quarter-tab.active')?.dataset.quarter || 'Q1';
                window.renderLessons?.(activeQuarter);
            });
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const publishBtn = document.querySelector('.publish-btn');
            const draftBtn = document.querySelector('.save-draft-btn');
            const lessonTitle = document.getElementById('lesson-title');
            const lessonDescription = document.getElementById('lesson-description');
            const selectedQuarter = document.getElementById('selected-quarter-input');
            const selectedSubject = document.getElementById('selected-subject-input');

            // Initialize modals
            const confirmModal = new bootstrap.Modal(document.getElementById('confirmPublishModal'));
            const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'));
            const successModal = new bootstrap.Modal(document.getElementById('publishSuccessModal'));


            // Load draft
            const savedData = localStorage.getItem('lessonDraft');
            if (savedData) {
                const data = JSON.parse(savedData);
                lessonTitle.value = data.lesson_title || '';
                lessonDescription.value = data.lesson_description || '';
                selectedQuarter.value = data.selected_quarter || '';
                selectedSubject.value = data.selected_subject || '';
                console.log('Lesson restored from localStorage:', data);
            }


            // Store the current status for confirmation
            let currentStatus = '';

            // Check if lesson has any actual content
            async function hasLessonData() {
                const data = await getLessonData('draft');

                // Check title or description
                if (data.lesson_title.trim() || data.lesson_description.trim()) return true;

                // Check pre/post test
                if ((data.pretest_questions && data.pretest_questions.length > 0) ||
                    (data.posttest_questions && data.posttest_questions.length > 0)) return true;

                // Check games / learning materials
                const hasGames = Object.values(data.games || {}).some(arr => arr.length > 0);
                if (hasGames) return true;

                // Check uploads (files/videos/URL)
                const uploads = data.uploads || {};
                if ((uploads.files && uploads.files.file) ||
                    (uploads.videos && uploads.videos.file) ||
                    (uploads.video_url && uploads.video_url.trim() !== '')) return true;

                return false;
            }


            // Confetti function
            function fireConfetti() {
                const modalEl = document.getElementById('publishSuccessModal');
                const modalRect = modalEl.querySelector('.modal-content').getBoundingClientRect();
                const x = (modalRect.left + modalRect.width / 2) / window.innerWidth;
                const y = (modalRect.top + modalRect.height / 2) / window.innerHeight;

                if (typeof confetti !== 'undefined') {
                    confetti({
                        particleCount: 60,
                        angle: 90,
                        spread: 60,
                        startVelocity: 30,
                        decay: 0.92,
                        gravity: 0.5,
                        ticks: 120,
                        origin: { x, y },
                        colors: ['#28a745', '#198754', '#20c997', '#ffffff'],
                        scalar: 0.8,
                        disableForReducedMotion: true
                    });
                }
            }

            // Handle confirmation button click - ADD THIS INSIDE DOMContentLoaded
            document.getElementById('confirmPublishBtn').addEventListener('click', function() {
                console.log('Confirm publish button clicked'); // Debug log
                confirmModal.hide();
                submitLesson(currentStatus);
            });

            async function fetchGames() {
                const games = {};
                const gameTypes = ['matching', 'flashcard', 'spelling', 'speak', 'imagequiz'];

                for (const type of gameTypes) {
                    const container = document.getElementById(`${type}-container`);
                    if (!container) continue;

                    const items = [];
                    const itemGroups = container.querySelectorAll('.item-group');

                    for (const item of itemGroups) {
                        if (type === 'matching') {
                            const term = item.querySelector('.matching-container-item input')?.value || '';
                            const definition = item.querySelector('.matching-container-item textarea')?.value || '';
                            if (term || definition) items.push({ term, definition });
                        }

                        if (type === 'flashcard') {
                            const front = item.querySelector('.matching-container-item input')?.value || '';
                            const back = item.querySelector('.matching-container-item textarea')?.value || '';
                            if (front || back) items.push({ front, back });
                        }

                        if (type === 'spelling') {
                            const first = item.querySelector('.first-phrase')?.value || '';
                            const answer = item.querySelector('.answer-input')?.value || '';
                            const last = item.querySelector('.last-phrase')?.value || '';
                            const definition = item.querySelector('.definition-input')?.value || '';
                            if (first || answer || last) items.push({ first, answer, last, definition });
                        }

                        if (type === 'speak') {
                            const prompt = item.querySelector('.speech-text-form input')?.value || '';
                            if (prompt) items.push({ prompt });
                        }

                        if (type === 'imagequiz') {
                            const imgElement = item.querySelector('.preview-image-compact');
                            const question   = item.querySelector('.question-input')?.value || '';
                            const correct    = item.querySelector('.correct-select')?.value || '';

                            const choiceWrappers = item.querySelectorAll('.choice-item');
                            const fileInputs = item.querySelectorAll('.choice-image-input');

                            const choices = [];

                            choiceWrappers.forEach((wrapper, idx) => {
                                const textInput = wrapper.querySelector('.choices-wrapper input');
                                const fileInput = fileInputs[idx];

                                const textValue = textInput?.value.trim() || '';
                                const hasFile = fileInput?.files?.[0];

                                if (hasFile) {
                                    choices.push(hasFile);
                                } else if (textValue && !textValue.startsWith('C:\\fakepath\\')) {
                                    choices.push(textValue);
                                }
                            });

                            let image = imgElement?.src || '';
                            if (image.startsWith('blob:')) {
                                try {
                                    const blob = await fetch(image).then(r => r.blob());
                                    image = new File([blob], `imagequiz_${Date.now()}.png`, { type: blob.type });
                                } catch (e) {
                                    console.warn('Failed to convert question image:', e);
                                }
                            }

                            if (question || image || choices.length > 0) {
                                items.push({ image, question, choices, correct });
                            }
                        }
                    }

                    if (items.length) games[type] = items;
                }
                return games;
            }

            function fetchUploads() {
                const fileInput = document.getElementById('fileInput');
                const fileTitle = document.getElementById('file-title')?.value.trim() || '';
                const fileSubtitle = document.getElementById('file-title-1')?.value.trim() || '';
                const uploadedFile = fileInput?.files[0] || null;

                const videoInput = document.getElementById('videoInput');
                const videoTitle = document.getElementById('file-title-2')?.value.trim() || '';
                const videoSubtitle = document.getElementById('video-title')?.value.trim() || '';
                const uploadedVideo = videoInput?.files[0] || null;
                const videoUrl = document.getElementById('urlInput')?.value.trim() || '';

                return {
                    files: uploadedFile ? { title: fileTitle, subtitle: fileSubtitle, file: uploadedFile } : null,
                    videos: uploadedVideo ? { title: videoTitle, subtitle: videoSubtitle, file: uploadedVideo } : null,
                    video_url: videoUrl || null,
                    video_url_title: videoTitle || '',
                    video_url_subtitle: videoSubtitle || ''
                };
            }

            async function getLessonData(status) {
                const preTestQuestions = typeof fetchPreTestQuestions === 'function' ? fetchPreTestQuestions() : [];
                const postTestQuestions = typeof fetchPostTestQuestions === 'function' ? fetchPostTestQuestions() : [];
                const gameData = await fetchGames();
                const uploadData = fetchUploads();
                const allBadges = typeof window.getAllBadgeData === 'function' ? window.getAllBadgeData() : {};

                const filteredGames = {};
                const badges = {};

                Object.keys(gameData).forEach(type => {
                    const items = gameData[type];
                    if (items && items.length > 1) {
                        filteredGames[type] = items;
                        badges[type] = allBadges[type];
                    }
                });

                return {
                    lesson_title: lessonTitle.value.trim(),
                    lesson_description: lessonDescription.value.trim(),
                    selected_quarter: selectedQuarter.value,
                    selected_subject: selectedSubject.value,
                    pretest_questions: preTestQuestions,
                    posttest_questions: postTestQuestions,
                    games: filteredGames,
                    uploads: uploadData,
                    badges: badges,
                    status
                };
            }

            async function saveLessonToSession(status = 'draft') {
                try {
                    const data = await getLessonData(status);
                    sessionStorage.setItem('lessonDraft', JSON.stringify(data));
                    console.log('Lesson saved to sessionStorage:', data);
                } catch (err) {
                    console.warn('Failed to save lesson to sessionStorage:', err);
                }
            }



            async function submitLesson(status) {
                console.log('Submitting lesson with status:', status); // Debug log

                // Update loading modal text based on status
                const titleEl = document.getElementById('loadingModalTitle');
                const textEl = document.getElementById('loadingModalText');

                if (status === 'published') {
                    titleEl.textContent = 'Publishing Lesson...';
                    textEl.textContent = 'Please wait while we publish your lesson.';
                } else {
                    titleEl.textContent = 'Saving Draft...';
                    textEl.textContent = 'Please wait while we save your lesson as draft.';
                }
                
                // Show loading modal
                loadingModal.show();

                try {
                    const data = await getLessonData(status);
                    console.log('Submitting lesson data:', data);

                    const formData = new FormData();
                    formData.append('lesson_title', data.lesson_title);
                    formData.append('lesson_description', data.lesson_description);
                    formData.append('selected_quarter', data.selected_quarter);
                    formData.append('selected_subject', data.selected_subject);
                    formData.append('pretest_questions', JSON.stringify(data.pretest_questions));
                    formData.append('posttest_questions', JSON.stringify(data.posttest_questions));

                    // Process imagequiz: question + choice images
                    if (data.games.imagequiz && data.games.imagequiz.length) {
                        for (let i = 0; i < data.games.imagequiz.length; i++) {
                            const quiz = data.games.imagequiz[i];

                            // 1. Question Image
                            if (quiz.image instanceof File) {
                                console.log(`Question Image [Item ${i}]:`, {
                                    name: quiz.image.name,
                                    size: `${(quiz.image.size / 1024).toFixed(2)} KB`,
                                    type: quiz.image.type
                                });

                                formData.append('imagequiz_images[]', quiz.image);
                                quiz.image = `imagequiz_images[${i}]`;
                            }

                            // 2. Choice Images
                            for (let c = 0; c < quiz.choices.length; c++) {
                                const choice = quiz.choices[c];
                                if (choice instanceof File) {
                                    if (!window._imageIndex) window._imageIndex = 0;
                                    const idx = window._imageIndex++;

                                    formData.append('imagequiz_images[]', choice);
                                    quiz.choices[c] = `imagequiz_images[${idx}]`;
                                }
                            }
                        }
                    }

                    formData.append('games', JSON.stringify(data.games));
                    formData.append('badges', JSON.stringify(data.badges));
                    formData.append('status', data.status);

                    // Uploads
                    if (data.uploads.files) {
                        formData.append('fileTitle', data.uploads.files.title || '');
                        formData.append('fileSubtitle', data.uploads.files.subtitle || '');
                        if (data.uploads.files.file) formData.append('fileInput', data.uploads.files.file);
                    }

                    if (data.uploads.videos) {
                        formData.append('videoTitle', data.uploads.videos.title || '');
                        formData.append('videoSubtitle', data.uploads.videos.subtitle || '');
                        if (data.uploads.videos.file) formData.append('videoInput', data.uploads.videos.file);
                    }

                    if (data.uploads.video_url) {
                        formData.append('videoUrl', data.uploads.video_url);
                        formData.append('videoUrlTitle', data.uploads.video_url_title || '');
                        formData.append('videoUrlSubtitle', data.uploads.video_url_subtitle || '');
                    }

                    const token = '{{ session("node_token") }}';
                    console.log('Making API request...'); // Debug log
                    
                    const response = await fetch('{{ env("API_URL") }}/admin/lessons/upload', {
                        method: 'POST',
                        headers: { 'Authorization': `Bearer ${token}` },
                        body: formData
                    });

                    const result = await response.json();
                    console.log('API Response:', result);

                    // Hide loading modal
                    loadingModal.hide();

                    // Check if response is successful
                    if (response.ok && result.success) {
                        console.log('Upload successful!'); // Debug log
                        
                        // Show success modal only for published lessons
                        if (status === 'published') {

                            // Remove draft after publishing
                            localStorage.removeItem('lessonDraft');

                            successModal.show();
                            successModal._element.addEventListener('shown.bs.modal', fireConfetti, { once: true });
                            
                            // Disable the publish button after successful publication
                            publishBtn.disabled = true;
                            publishBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Published';
                            publishBtn.classList.remove('btn-primary');
                            publishBtn.classList.add('btn-success');

                            // ✅ Add event listener to "Got it!" button to reload page
                            document.getElementById('gotItButton').addEventListener('click', function() {
                                console.log('Got it button clicked - reloading page');
                                window.location.reload();
                            }, { once: true });

                            
                        } else {
                            // For draft, show a simple success message
                            showToast('info', 'Lesson Draft', 'Lesson saved as draft successfully!');
                        }
                    } else {
                        // Show error message
                        const errorMessage = result.message || result.error || 'Upload failed. Please try again.';
                        showToast('error', 'Upload Failed', errorMessage);
                    }

                } catch (err) {
                    console.error('Upload error:', err);
                    // Hide loading modal on error
                    loadingModal.hide();
                    // Show error message
                    showToast('error', 'Upload Error', 'An error occurred while uploading the lesson.');
                }
            }

            // Handle publish button click - show confirmation first
            publishBtn.addEventListener('click', async () => {
                console.log('Publish button clicked');
                const hasData = await hasLessonData();
                if (!hasData) {
                    showToast('warning', 'No Content', 'Please add content before publishing.');
                    return;
                }

                currentStatus = 'published';
                confirmModal.show();
            });

            async function saveLessonToLocalDraft(status = 'draft') {
                const data = await getLessonData(status);
                localStorage.setItem('lessonDraft', JSON.stringify(data));
                console.log('Lesson saved to localStorage:', data);
                showToast('info', 'Lesson Draft', 'Lesson saved locally!');
            }


            // Handle draft button click - no confirmation needed
            draftBtn.addEventListener('click', async () => {
                console.log('Draft button clicked');

                const hasData = await hasLessonData();
                if (!hasData) {
                    showToast('warning', 'No Content', 'Cannot save an empty lesson as draft.');
                    return;
                }

                // Save to localStorage first
                await saveLessonToLocalDraft('draft');

                // Then send to server
                await submitLesson('draft');
            });

            // Toast function (if not already defined)
            function showToast(type, title, message) {
                // You can use your existing toast implementation or Bootstrap toasts
                console.log(`[${type.toUpperCase()}] ${title}: ${message}`);
                // Example with Bootstrap toasts:
                const toast = new bootstrap.Toast(document.getElementById('liveToast'));
                if (toast) toast.show();
                
                // Fallback alert for debugging
                alert(`${title}: ${message}`);
            }
        });
    </script>

    <script>
    // All lessons and contents are already available from Laravel
        console.log('All Lessons:', @json($allLessons));
        console.log('All Contents:', @json($allContents));

        // Optional: Group contents by lesson
        const contentsByLesson = @json($allContents).reduce((acc, content) => {
            if (!acc[content.lesson_belong]) acc[content.lesson_belong] = [];
            acc[content.lesson_belong].push(content);
            return acc;
        }, {});

        console.log('Contents grouped by lesson:', contentsByLesson);
    </script>

    <script>
        console.log("📘 Subject Summaries:", @json($subjectSummaries));
        console.log("📗 Subject Performance:", @json($subjectPerformance));
        window.subjectPerformance = @json($subjectPerformance);
        console.log("👥 Subject Users:", @json($subjectUsers));
        console.log("👥 Users by Subject:", @json($usersBySubject));
        console.log("👩‍🏫 Teachers with Sections:", @json($teachersWithSections));
        console.log("Teacher List:", @json($Teachers_list));
        console.log("Pupil List:", @json($Pupils_list));
        console.log("Student Progress:", @json($Student_progress_Subject));
        console.log("Activity Logs:", @json($activity_logs));


        window.allLessons = {!! json_encode($allLessons) !!};
        window.allContents = {!! json_encode($allContents) !!};
        window.usersBySubject = @json($usersBySubject);
        window.teachersWithSections = @json($teachersWithSections);
        window.totalPupils = Object.values(window.usersBySubject)
        .flat()
        .length;

        /* Mapping: subject_id → subject name (used for filtering) */
        window.subjectIdToName = {
            '1': 'English',
            '2': 'Filipino',
            '3': 'Mathematics',
            '3': 'Math',
            '4': 'Science'
        };
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const input = document.getElementById('selected-subject-input');

            document.querySelectorAll('#subject-list a[data-subject]').forEach(link => {
                link.addEventListener('click', e => {
                    e.preventDefault();                     // stop # jump
                    const subj = link.getAttribute('data-subject');
                    input.value = subj;                     // <-- THIS updates the hidden field
                    console.log('Subject selected →', subj);

                    // optional visual feedback
                    document.querySelectorAll('#subject-list a').forEach(a => a.classList.remove('active'));
                    link.classList.add('active');

                    // re-render current quarter
                    const activeQ = document.querySelector('.quarter-tab.active')?.dataset.quarter || 'Q1';
                    window.renderLessons?.(activeQ);        // call the function defined below
                });
            });
        });
    </script>

    <script>
        /* --------------------------------------------------------------
        GLOBAL RENDER FUNCTION – called from subject selector above
        -------------------------------------------------------------- */
        window.renderLessons = function renderLessons(quarter) {
            const lessonMenu = document.getElementById('lessonMenu');
            const progressLabel = document.getElementById('progressLabel');
            const quarterProgress = document.getElementById('quarterProgress');

            if (!lessonMenu) return;

            // ---- dispose old collapses
            lessonMenu.querySelectorAll('.collapse').forEach(el => {
                const inst = bootstrap.Collapse.getInstance(el);
                if (inst) inst.dispose();
            });
            lessonMenu.innerHTML = '';

            let subj = (document.getElementById('selected-subject-input')?.value || '').trim().toLowerCase();

            // map user-friendly names → actual names in dataset
            const subjectMap = {
                'math': 'mathematics',
                'mathematics': 'mathematics',
                'eng': 'english',
                'english': 'english',
                'filipino': 'filipino',
                'science': 'science'
            };

            subj = subjectMap[subj] || subj; // default to original if no mapping

            const qNum = Number(quarter.replace('Q', ''));

            // console.log('🔍 DEBUG - All lessons:', window.allLessons);
            // console.log('🔍 DEBUG - Selected subject:', subj);
            // console.log('🔍 DEBUG - Quarter number:', qNum);

            const lessons = (window.allLessons || []).filter(l => {
                const s = (l.subject_name || '').trim().toLowerCase();
                return s === subj && Number(l.quarter) === qNum;
            });

            // const lessons = window.allLessons || []; // Show ALL lessons

            // Calculate progress - number of uploaded lessons vs total (8 per quarter)
            const TOTAL_LESSONS_PER_QUARTER = 8;
            const uploadedLessons = lessons.length; // Number of lessons actually uploaded
            const progressPercentage = Math.min((uploadedLessons / TOTAL_LESSONS_PER_QUARTER) * 100, 100);

             // Update progress label
            if (progressLabel) {
                progressLabel.innerHTML = `<span class="small">${uploadedLessons} out of ${TOTAL_LESSONS_PER_QUARTER} Lessons</span>`;
            }

            // Update progress bar
            if (quarterProgress) {
                quarterProgress.style.width = `${progressPercentage}%`;
            }


            console.log(`renderLessons → ${lessons.length} lesson(s) for "${subj}" – Q${qNum}`);

            if (lessons.length === 0) {
                lessonMenu.innerHTML = `<div class="text-center text-muted p-4">No lessons for this quarter.</div>`;
                return;
            }

            /* ------------------- helper function (unchanged) ------------------------- */
            function getContentLabel(c) {
                const type = (c.content_type || '').toLowerCase();
                const title = c.title || 'Untitled';
                const low = title.toLowerCase();

                if (type === 'quiz') {
                    if (low.includes('pretest')) return `Lesson Start: ${title}`;
                    if (low.includes('posttest')) return `Lesson End: ${title}`;
                    return `Quiz: ${title}`;
                }
                if (type === 'pdf') return `PDF Guide: ${title}`;
                if (type === 'ppt') return `PPT Guide: ${title}`;
                if (type.startsWith('game')) {
                    const map = { match:'Matching Game', flash:'Flashcard Game',
                                speak:'Speaking Game', comp:'Comprehension Game',
                                img:'Image-Based Game' };
                    for (const [k,v] of Object.entries(map)) if (type.includes(k)) return `${v}: ${title}`;
                    return `Game: ${title}`;
                }
                if (type === 'video') return `Video: ${title}`;
                if (type === 'url') return `URL Link: ${title}`;
                return title;
            }

            /* ------------------- render lessons (unchanged) ------------------------- */
            lessons.forEach((lesson, idx) => {
                const id      = lesson.lesson_id;
                const title   = lesson.lesson_title || `Lesson ${lesson.lesson_number || idx+1}`;
                const desc    = lesson.description || 'No description.';
                const comps   = lesson.learning_competencies || [];

                const contents = (window.allContents || []).filter(c => String(c.lesson_belong) === String(id));

                const materials = contents.length
                    ? contents.map(c => `<li class="material-item">${getContentLabel(c)} ...</li>`).join('')
                    : '<li class="text-muted">No materials yet.</li>';

                const compHtml = comps.length
                    ? `<h6>At the end of the lesson, the learner will be able to:</h6>
                    <ul class="obj-list">${comps.map(o => `<li>${o}</li>`).join('')}</ul>`
                    : '';

                const html = `<div class="lesson-item active" id="${quarter}${id}">
                                <div class="lesson-header d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#content${id}"
                                    aria-expanded="false" aria-controls="content${id}">
                                    <div class="header-left">
                                        <h2>Lesson ${lesson.lesson_number || idx+1}
                                            <span class="lock-badge" data-bs-toggle="tooltip" data-bss-tooltip title="This lesson cannot be edited">
                                            <svg class="bi bi-lock me-1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"></path>
                                            </svg> Locked </span>
                                        </h2>
                                        <p>${title}</p>
                                    </div>
                                    <div class="header-right"><span>+</span></div>
                                </div>
                                <div id="content${id}" class="collapse">
                                    <div class="lesson-content">
                                        <div class="locked-banner">
                                            <svg class="bi bi-exclamation-triangle me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"></path>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"></path>
                                            </svg>
                                            <span> This lesson is locked and cannot be edited or deleted. </span>
                                        </div>
                                        <div class="part-1 mb-3">
                                            <div class="mb-2 part-intro">
                                                <h6>Lesson Overview</h6>
                                                <p class="text-muted small">${desc}</p>
                                            </div>
                                            <div class="mb-2 part-1-obj">${compHtml}</div>
                                        </div>
                                        <div class="mb-2 part-2">
                                            <p>Learning Materials Included:</p>
                                            <ul class="list-unstyled part-2 materials">${materials}</ul>
                                        </div>
                                    </div>
                                </div>
                            </div>`;

                lessonMenu.insertAdjacentHTML('beforeend', html);

                const el = document.getElementById(`content${id}`);
                if (el) new bootstrap.Collapse(el, { toggle: false });
            });
        };


        /* --------------------------------------------------------------
        QUARTER TABS – also call the global renderer
        -------------------------------------------------------------- */
        document.addEventListener('DOMContentLoaded', () => {
            const quarterTabs = document.querySelectorAll('.quarter-tab');
            console.log('Quarter tabs found:', quarterTabs.length); // Add thi

            quarterTabs.forEach(tab => {
                tab.addEventListener('click', e => {
                    e.preventDefault();
                    quarterTabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    window.renderLessons(tab.dataset.quarter);
                });
            });

            // initial load (default quarter)
            const startQ = document.querySelector('.quarter-tab.active')?.dataset.quarter || 'Q1';
            window.renderLessons(startQ);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const teachersContainer = document.getElementById('teachersContainer');
            const pupilsContainer   = document.getElementById('pupilsContainer');

            const teachers = window.teachersWithSections || [];
            const pupilsBySubject = window.usersBySubject || {};
            const totalPupils = window.totalPupils || 0;

            /* ==============================================================
            1. RENDER TEACHERS
            ============================================================== */
            if (teachers.length === 0) {
                teachersContainer.innerHTML = `<p class="text-muted">No teachers assigned.</p>`;
            } else {
                const teacherHeader = `
                    <div class="student-header">
                        <div style="display:flex; flex-grow:1; flex-wrap:wrap; align-items:baseline;">
                            <h2 class="student-title">Teachers</h2>
                        </div>
                    </div>`;

                const teacherItems = teachers.map(t => `
                    <div class="teacher-item">
                        <img class="img-fluid avatar-teacher" 
                            src="${t.thumbnail}" 
                            alt="${t.teacher_name}" 
                            width="1080" height="1080">
                        <p class="mb-0 teacher-name">${t.teacher_name}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                        </svg>
                    </div>`).join('');

                teachersContainer.innerHTML = teacherHeader + teacherItems;
            }

            /* ==============================================================
            2. RENDER PUPILS
            ============================================================== */
            const allPupils = Object.values(pupilsBySubject).flat();

            const pupilHeader = `
                <div class="student-header">
                    <div class="justify-content-between" style="display:flex; flex-grow:1; flex-wrap:wrap; align-items:baseline;">
                        <h2 class="student-title">Pupils Enrolled</h2>
                        <div class="text-muted" style="padding-right:1rem;">
                            <p>${totalPupils} Pupil${totalPupils !== 1 ? 's' : ''}</p>
                        </div>
                    </div>
                </div>`;

            if (allPupils.length === 0) {
                pupilsContainer.innerHTML = pupilHeader + `<p class="text-muted">No pupils enrolled.</p>`;
            } else {
                const pupilItems = allPupils.map(p => `
                    <div class="pupil-item">
                        <img class="img-fluid avatar-pupil" 
                            src="${p.avatar_thumbnail}" 
                            alt="${p.first_name} ${p.last_name}" 
                            width="200" height="200">
                        <p class="mb-0 student-name">${p.first_name} ${p.last_name}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                        </svg>
                    </div>`).join('');

                pupilsContainer.innerHTML = pupilHeader + pupilItems;
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const teachersContainer = document.getElementById('teachersContainer');
            const pupilsContainer   = document.getElementById('pupilsContainer');
            const selectedInput     = document.getElementById('selected-subject-input');

            if (!selectedInput) return;

            const teachers = window.teachersWithSections || [];
            const pupilsBySubject = window.usersBySubject || {};
            const subjectIdMap = window.subjectIdToName || {};

            function renderPeople() {
                const selectedSubject = selectedInput.value.trim();
                if (!selectedSubject) return;

                const selectedSubjectId = Object.keys(subjectIdMap).find(id => 
                    subjectIdMap[id].toLowerCase() === selectedSubject.toLowerCase()
                );

                // === TEACHERS ===
                const matchingTeachers = selectedSubjectId
                    ? teachers.filter(t => String(t.subject_id) === selectedSubjectId)
                    : [];

                const teacherHeader = `<div class="student-header"><div style="display:flex; flex-grow:1; flex-wrap:wrap; align-items:baseline;"><h2 class="student-title">Teachers</h2></div></div>`;

                if (matchingTeachers.length === 0) {
                    teachersContainer.innerHTML = teacherHeader + `<p class="text-muted">No teachers assigned to ${selectedSubject}.</p>`;
                } else {
                    const items = matchingTeachers.map(t => `
                        <div class="teacher-item">
                            <img class="img-fluid avatar-teacher" src="${t.thumbnail || 'assets/img/default-avatar.png'}" alt="${t.teacher_name}">
                            <p class="mb-0 teacher-name">${t.teacher_name}</p>
                            <a href="mailto:${t.email}" class="email-link" title="Email ${t.teacher_name}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </a>
                        </div>`).join('');
                    teachersContainer.innerHTML = teacherHeader + items;
                }

                // === PUPILS ===
                const pupils = pupilsBySubject[selectedSubjectId] || [];
                const total = pupils.length;
                const pupilHeader = `<div class="student-header"><div class="justify-content-between" style="display:flex; flex-grow:1; flex-wrap:wrap; align-items:baseline;"><h2 class="student-title">Pupils Enrolled</h2><div class="text-muted" style="padding-right:1rem;"><p>${total} Pupil${total !== 1 ? 's' : ''}</p></div></div></div>`;

                if (pupils.length === 0) {
                    pupilsContainer.innerHTML = pupilHeader + `<p class="text-muted">No pupils enrolled in ${selectedSubject}.</p>`;
                } else {
                    const items = pupils.map(p => `
                        <div class="pupil-item">
                            <img class="img-fluid avatar-pupil" src="${p.avatar_thumbnail || 'assets/img/default-pupil.png'}" alt="${p.first_name} ${p.last_name}">
                            <p class="mb-0 student-name">${p.first_name} ${p.last_name}</p>
                            <a href="mailto:${p.email}" class="email-link" title="Email ${p.first_name} ${p.last_name}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </a>
                        </div>`).join('');
                    pupilsContainer.innerHTML = pupilHeader + items;
                }
            }

            renderPeople();
            selectedInput.addEventListener('change', renderPeople);
            new MutationObserver(renderPeople).observe(selectedInput, { attributes: true, attributeFilter: ['value'] });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const pupils = @json($Pupils_list);
            const studentProgress = @json($Student_progress_Subject);

            const searchInput = document.getElementById("searchInput-1");
            const quarterFilter = document.getElementById("atRiskQuarterFilter");
            const subjectFilter = document.getElementById("atRiskSubjectFilter");
            const sortSelect = document.getElementById("atRiskSort");
            const clearBtn = document.getElementById("clearFiltersBtn");
            const exportBtn = document.getElementById("exportBtn-2");

            const rowsPerPage = 5;
            let currentPage = 1;
            let filteredStudents = [];

            function updateTable() {
                currentPage = 1; // reset to first page when filters change
                filteredStudents = getFilteredStudents();
                renderTablePage();
                renderPagination();
            }

            function getFilteredStudents() {
                const AT_RISK_THRESHOLD = 75;

                let students = pupils.filter(pupil => {
                    const progressRecords = studentProgress.filter(s => s.pupil_id === pupil.pupil_id);
                    const atRiskRecords = progressRecords.filter(record => parseFloat(record.progress_percent) < AT_RISK_THRESHOLD);

                    const subjectMatch = subjectFilter.value ? atRiskRecords.some(r => r.subject_name === subjectFilter.value) : true;
                    const quarterMatch = quarterFilter.value ? atRiskRecords.some(r => r.quarter === quarterFilter.value) : true;
                    const searchMatch = searchInput.value ? pupil.full_name.toLowerCase().includes(searchInput.value.toLowerCase()) : true;

                    return atRiskRecords.length > 0 && subjectMatch && quarterMatch && searchMatch;
                });

                // Sort
                if (sortSelect.value) {
                    const [key, order] = sortSelect.value.split("-");
                    students.sort((a, b) => {
                        if (key === "name") return order === "asc" ? a.full_name.localeCompare(b.full_name) : b.full_name.localeCompare(a.full_name);
                        if (key === "last-active") {
                            const dateA = new Date(a.last_active || 0);
                            const dateB = new Date(b.last_active || 0);
                            return order === "asc" ? dateA - dateB : dateB - dateA;
                        }
                        if (key === "session") {
                            const sessionA = a.avg_session_seconds || 0;
                            const sessionB = b.avg_session_seconds || 0;
                            return order === "asc" ? sessionA - sessionB : sessionB - sessionA;
                        }
                    });
                }

                return students;
            }

            function renderTablePage() {
                const tableBody = document.getElementById("userTableBody-1");
                tableBody.innerHTML = "";

                const startIndex = (currentPage - 1) * rowsPerPage;
                const endIndex = startIndex + rowsPerPage;
                const pageStudents = filteredStudents.slice(startIndex, endIndex);

                pageStudents.forEach(pupil => {
                    const progressRecords = studentProgress.filter(s => s.pupil_id === pupil.pupil_id);
                    progressRecords.forEach(record => {
                        if (parseFloat(record.progress_percent) < 75) {
                            if ((subjectFilter.value && record.subject_name !== subjectFilter.value) ||
                                (quarterFilter.value && record.quarter !== quarterFilter.value)) return;

                            const tr = document.createElement("tr");
                            tr.innerHTML = `
                                <td></td>
                                <td data-label="Name">${pupil.full_name}</td>
                                <td data-label="Last Active">${pupil.last_active ? new Date(pupil.last_active).toLocaleDateString() : "N/A"}</td>
                                <td data-label="Progress">${record.progress_percent}%</td>
                                <td data-label="Subject">${record.subject_name}</td>
                                <td data-label="Avg. Session">${Math.round(pupil.avg_session_seconds / 60)}m</td>
                                <td data-label="Status"><span class="text-white bg-danger rounded-pill px-2 py-1 badge">At Risk</span></td>
                            `;
                            tableBody.appendChild(tr);
                        }
                    });
                });

                // Update counts
                document.getElementById("startCount-1").textContent = filteredStudents.length ? startIndex + 1 : 0;
                document.getElementById("endCount-1").textContent = endIndex > filteredStudents.length ? filteredStudents.length : endIndex;
                document.getElementById("totalCount-1").textContent = filteredStudents.length;

                document.getElementById("noAtRiskResults").style.display = filteredStudents.length === 0 ? "block" : "none";
            }

            function renderPagination() {
                const paginationContainer = document.querySelector(".pagination-container ul.pagination");
                paginationContainer.innerHTML = "";

                const totalPages = Math.ceil(filteredStudents.length / rowsPerPage);

                const createPageItem = (label, page, disabled = false, active = false) => {
                    const li = document.createElement("li");
                    li.className = `page-item ${disabled ? "disabled" : ""} ${active ? "active" : ""}`;
                    const a = document.createElement("a");
                    a.className = "page-link";
                    a.href = "#";
                    a.textContent = label;
                    a.addEventListener("click", e => {
                        e.preventDefault();
                        if (!disabled) {
                            currentPage = page;
                            renderTablePage();
                            renderPagination();
                        }
                    });
                    li.appendChild(a);
                    return li;
                };

                // Previous
                paginationContainer.appendChild(createPageItem("Previous", currentPage - 1, currentPage === 1));

                // Page numbers
                for (let i = 1; i <= totalPages; i++) {
                    paginationContainer.appendChild(createPageItem(i, i, false, currentPage === i));
                }

                // Next
                paginationContainer.appendChild(createPageItem("Next", currentPage + 1, currentPage === totalPages));
            }

            // Event listeners
            searchInput.addEventListener("input", updateTable);
            quarterFilter.addEventListener("change", updateTable);
            subjectFilter.addEventListener("change", updateTable);
            sortSelect.addEventListener("change", updateTable);

            clearBtn.addEventListener("click", () => {
                searchInput.value = "";
                quarterFilter.value = "";
                subjectFilter.value = "";
                sortSelect.value = "";
                updateTable();
            });

            exportBtn.addEventListener("click", () => {
                // Use currently filtered students
                const csvData = [];
                const AT_RISK_THRESHOLD = 75;
                filteredStudents.forEach(pupil => {
                    const progressRecords = studentProgress.filter(s => s.pupil_id === pupil.pupil_id);
                    progressRecords.forEach(record => {
                        if (parseFloat(record.progress_percent) < AT_RISK_THRESHOLD) {
                            if ((subjectFilter.value && record.subject_name !== subjectFilter.value) ||
                                (quarterFilter.value && record.quarter !== quarterFilter.value)) return;

                            csvData.push({
                                name: pupil.full_name,
                                lastActive: pupil.last_active ? Math.round((new Date() - new Date(pupil.last_active)) / (1000 * 60 * 60 * 24)) + " days ago" : "N/A",
                                completionRate: record.progress_percent,
                                subject: record.subject_name,
                                quarter: record.quarter,
                                sessionTime: Math.round(pupil.avg_session_seconds / 60),
                                status: "At Risk"
                            });
                        }
                    });
                });

                exportAtRiskCSV(csvData);
            });

            // Initial render
            updateTable();
        });



    </script>


    <script>
        const teachers = @json($Teachers_list);
        const pupils   = @json($Pupils_list);

        // Combine Teacher + Pupil into ONE unified list
        const combinedUsers = [
            ...teachers.map(t => ({
                id: t.user_id,
                name: t.full_name,
                email: t.email,
                type: "Teacher",
                birthdate: t.birth_date,
                avatar: t.avatar_thumbnail,
                schoolName: t.sections?.length 
                    ? `${t.sections[0].school_name}`
                    : "No School",
                active: t.active_status === 1,
                lastActive: t.last_active,
                sections: t.sections || [],
                totalPupils: t.total_pupils || 0,
                recentActivity: t.recent_activities || [],
                created_at: t.created_at
            })),
            ...pupils.map(p => ({
                id: p.pupil_id,
                name: p.full_name,
                email: p.email,
                type: "Pupil",
                birthdate: p.birth_date,
                avatar: p.avatar_thumbnail,
                schoolName: p.school_name ?? "No School",
                active: p.active_status === 1,
                lastActive: p.last_active,
                progress: p.progress || 0,
                total_badges: p.total_badges || 0,
                avg_score: p.avg_score || 0,
                total_completed_lessons: p.completed_lessons || 0,
                recentActivity: p.recent_activities || [],
                created_at: p.created_at
            }))
        ];

        console.log("Combined Users:", combinedUsers);

        let currentPage = 1;
        const rowsPerPage = 5;
        let activeList = [...combinedUsers]; 

        function renderPagination(list) {
            const total = list.length;
            const totalPages = Math.ceil(total / rowsPerPage);

            document.getElementById("totalCount").textContent = total;

            const pagination = document.querySelector(".pagination"); // only your pagination ul

            let pagesHTML = `
                <li class="page-item ${currentPage === 1 ? "disabled" : ""}">
                    <a class="page-link" href="#" data-page="prev">Previous</a>
                </li>
            `;

            for (let i = 1; i <= totalPages; i++) {
                pagesHTML += `
                    <li class="page-item ${i === currentPage ? "active" : ""}">
                        <a class="page-link" href="#" data-page="${i}">${i}</a>
                    </li>
                `;
            }

            pagesHTML += `
                <li class="page-item ${currentPage === totalPages ? "disabled" : ""}">
                    <a class="page-link" href="#" data-page="next">Next</a>
                </li>
            `;

            pagination.innerHTML = pagesHTML;

            // Attach event listeners AFTER updating the HTML
            pagination.querySelectorAll(".page-link").forEach(btn => {
                btn.addEventListener("click", e => {
                    e.preventDefault();
                    const page = btn.dataset.page;

                    if (page === "prev" && currentPage > 1) currentPage--;
                    else if (page === "next" && currentPage < totalPages) currentPage++;
                    else if (!isNaN(page)) currentPage = parseInt(page);

                    updateUI();
                });
            });
        }


        // Render to table
        function renderUserTable(list) {
            const body = document.getElementById("userTableBody");
            body.innerHTML = "";

            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            const pageItems = list.slice(start, end);

            document.getElementById("startCount").textContent = start + 1;
            document.getElementById("endCount").textContent = Math.min(end, list.length);

            pageItems.forEach(user => {
                const activeBadge = user.active 
                    ? `<span class="status-badge status-active">Active</span>`
                    : `<span class="status-badge status-inactive">Inactive</span>`;

                const dotClass = user.active ? "online" : "offline";

                const typeBadge =
                    user.type === "Teacher"
                        ? `<span class="text-success bg-success-subtle user-badge badge">Teacher</span>`
                        : `<span class="text-info bg-info-subtle user-badge badge">Pupil</span>`;

                const lastSeenText = user.active ? "Now" : timeAgo(user.lastActive);

                const row = `
                    <tr data-active="${user.active}">
                        <td data-label="Online"><div class="status-dot ${dotClass}"></div></td>
                        <td data-label="Name">${user.name}</td>
                        <td data-label="Email">${user.email}</td>
                        <td data-label="Type">${typeBadge}</td>
                        <td data-label="Grade/Class">${user.schoolName}</td>
                        <td data-label="Status">${activeBadge}</td>
                        <td data-label="Last Seen">${lastSeenText}</td>
                        <td data-label="Actions">
                            <button class="btn action-btn view" title="View Profile"
                                    data-bs-toggle="modal" data-bs-target="#viewProfile"
                                    onclick="openProfile(${user.id}, '${user.type}')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye" data-bs-toggle="modal" data-bs-target="#viewProfile">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                `;

                body.insertAdjacentHTML("beforeend", row);
            });
        }

        function updateUI() {
            renderUserTable(activeList);
            renderPagination(activeList);
        }

        // Converts last_active into “5 mins ago”
        function timeAgo(dateStr) {
            const diff = (new Date() - new Date(dateStr)) / 1000;
            if (diff < 60) return "Just now";
            if (diff < 3600) return Math.floor(diff / 60) + " mins ago";
            if (diff < 86400) return Math.floor(diff / 3600) + " hrs ago";
            return Math.floor(diff / 86400) + " days ago";
        }

        // Filter/Search Example (date, type, status, search)
        function applyFilters() {
            const dateFilter = document.getElementById("filterDate").value;
            const typeFilter = document.getElementById("filterType").value;
            const statusFilter = document.getElementById("filterStatus").value;
            const searchText = document.getElementById("searchInput").value.toLowerCase();

            let filtered = combinedUsers;

            // Filter by date
            if (dateFilter) {
                const now = new Date();
                let limitDays = parseInt(dateFilter);
                if (dateFilter === "24d") limitDays = 1;
                const cutoff = new Date(now.getTime() - limitDays * 24 * 60 * 60 * 1000);
                filtered = filtered.filter(u => new Date(u.lastActive) >= cutoff);
            }

            // Filter by type
            if (typeFilter) filtered = filtered.filter(u => u.type === typeFilter);

            // Filter by status
            if (statusFilter) {
                const isActive = statusFilter === "Active";
                filtered = filtered.filter(u => u.active === isActive);
            }

            // Filter by search text
            if (searchText) {
                filtered = filtered.filter(u =>
                    u.name.toLowerCase().includes(searchText) ||
                    u.schoolName.toLowerCase().includes(searchText) ||
                    u.type.toLowerCase().includes(searchText)
                );
            }

            activeList = filtered;
            currentPage = 1;
            updateUI();
        }

        // Event listeners
        document.getElementById("filterDate").addEventListener("change", applyFilters);
        document.getElementById("filterType").addEventListener("change", applyFilters);
        document.getElementById("filterStatus").addEventListener("change", applyFilters);
        document.getElementById("searchInput").addEventListener("input", applyFilters);

        // Initial render
        updateUI();


        // Assuming combinedUsers is your array of pupils + teachers
        function openProfile(userId, userType) {
            const user = combinedUsers.find(u => u.id === userId && u.type === userType);
            if (!user) return;

            // Modal elements
            const modal = document.getElementById('viewProfile');
            modal.querySelector('.profile-pic').src = user.avatar || 'assets/img/7.png';
            modal.querySelector('.profile-title h1').textContent = user.name;
            modal.querySelector('.profile-title span.badge').textContent = user.type;

            // Example: Show school or section info
            if (user.sections && user.sections.length > 0) {
                modal.querySelector('.profile-title p').textContent = user.sections.map(s => s.section_name).join(', ');
            } else {
                modal.querySelector('.profile-title p').textContent = '';
            }

            // Personal info
            document.getElementById("createdAt").textContent = new Date(user.created_at).toLocaleDateString() || '-';
            document.getElementById("email").textContent = user.email || '-';
            document.getElementById("bday").textContent = new Date(user.birthdate).toLocaleDateString() || '-';
            document.getElementById("schoolName").textContent = user.schoolName || 'No School';

            // Last Active
            document.getElementById('createdAt').textContent = user.lastActive
                ? new Date(user.lastActive).toLocaleString()
                : 'Active Now';

            // Learning Progress (if pupil)
            if (user.progress) {
                user.progress.forEach(p => {
                    const container = modal.querySelector(`.progress-container[data-subject="${p.subject_name}"]`);
                    if (container) {
                        const percent = parseFloat(p.progress_percent).toFixed(2); // format as 2 decimals
                        container.querySelector('.progress-percentage').textContent = `${percent}%`;
                        container.querySelector('.progress-bar').style.width = `${percent}%`;
                    }
                });
            }

            document.getElementById("avgScore").textContent = user.avg_score || '0%';
            document.getElementById("badgeEarn").textContent = user.total_badges || '0';
            document.getElementById("TotalCompleteLesson").textContent = user.total_completed_lessons || '0';


            // Recent Activities
            const activityContainer = modal.querySelector('.mt-4 .mb-3');
            activityContainer.innerHTML = ''; // Clear previous activities
            if (user.recentActivity && user.recentActivity.length > 0) {
                user.recentActivity.forEach(act => {
                    const div = document.createElement('div');
                    div.classList.add('activity-item');
                    div.innerHTML = `
                        <div class="activity-icon gray"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book"><path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path></svg></div>
                        <div class="activity-content">
                            <div class="activity-title"><span>${act.name}</span></div>
                            <div class="activity-time"><span>${new Date(act.executed_at).toLocaleString()}</span></div>
                        </div>
                    `;
                    activityContainer.appendChild(div);
                });
            } else {
                activityContainer.innerHTML = '<div>No recent activity</div>';
            }
        }

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const activityLogs = {!! json_encode($activity_logs) !!} || [];

            let currentPage = 1;
            const rowsPerPage = 10;

            let searchTerm = '';
            let filterType = '';
            let filterDate = '';

            function timeAgo(dateString) {
                const now = new Date();
                const past = new Date(dateString);
                const diffSec = Math.floor((now - past)/1000);
                const diffMin = Math.floor(diffSec/60);
                const diffHr = Math.floor(diffMin/60);
                const diffDay = Math.floor(diffHr/24);

                if(diffSec < 60) return `${diffSec} sec ago`;
                if(diffMin < 60) return `${diffMin} min ago`;
                if(diffHr < 24) return `${diffHr} hr ago`;
                return `${diffDay} days ago`;
            }

            function getFilteredLogs() {
                return activityLogs.filter(log => {
                    const searchText = `${log.full_name} ${log.activity_name}`.toLowerCase();
                    
                    // Search filter
                    if(searchTerm && !searchText.includes(searchTerm.toLowerCase())) {
                        return false;
                    }

                    // Activity type filter
                    if(filterType && filterType !== '') {
                        // Create a simplified version for comparison
                        const activityType = log.activity_name.toLowerCase().replace(/[^a-z0-9]/g, '_');
                        if(activityType !== filterType) {
                            return false;
                        }
                    }

                    // Date filter
                    if(filterDate) {
                        const logDate = new Date(log.executed_at);
                        const now = new Date();
                        
                        switch(filterDate){
                            case 'today': 
                                if(logDate.toDateString() !== now.toDateString()) return false; 
                                break;
                            case '7d': 
                                const sevenDaysAgo = new Date(now - 7 * 24 * 60 * 60 * 1000);
                                if(logDate < sevenDaysAgo) return false; 
                                break;
                            case '30d': 
                                const thirtyDaysAgo = new Date(now - 30 * 24 * 60 * 60 * 1000);
                                if(logDate < thirtyDaysAgo) return false; 
                                break;
                            case 'this-month': 
                                if(logDate.getMonth() !== now.getMonth() || logDate.getFullYear() !== now.getFullYear()) return false; 
                                break;
                        }
                    }

                    return true;
                });
            }

            // Activity Logs
            function renderLogs() {
                const list = document.getElementById('activityList');
                list.innerHTML = '';

                // Get filtered logs
                const filtered = getFilteredLogs();
                const total = filtered.length;
                const start = (currentPage - 1) * rowsPerPage;
                const end = Math.min(start + rowsPerPage, total);
                const paginated = filtered.slice(start, end);

                // Update counters
                document.getElementById('startCount-2').textContent = total === 0 ? 0 : start + 1;
                document.getElementById('endCount-2').textContent = end;
                document.getElementById('totalCount-2').textContent = total;

                // Show/hide no results message
                if(paginated.length === 0){
                    document.getElementById('noResults').style.display = 'block';
                } else {
                    document.getElementById('noResults').style.display = 'none';
                }

                // Render logs
                paginated.forEach(log => {
                    const li = document.createElement('li');
                    li.className = 'activity-log-item';
                    li.innerHTML = `
                        <div class="activity-log-header">
                            <div class="activity-log-icon login activity-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                                </svg>
                            </div>
                            <div class="activity-content">
                                <span class="activity-log-name">${log.full_name}&nbsp;<strong>${log.activity_name}</strong></span>
                                <span class="bg-primary badge user-role">${log.role}</span>
                            </div>
                            <div class="activity-time">
                                <span>${timeAgo(log.executed_at)}</span>
                            </div>
                        </div>
                    `;
                    list.appendChild(li);
                });

                renderPagination(total);
            }

            function renderPagination(total) {
                const totalPages = Math.ceil(total / rowsPerPage);
                const pagination = document.getElementById('activityPagination');
                
                // Clear old pagination buttons
                pagination.innerHTML = '';

                if (totalPages <= 1) {
                    pagination.style.display = 'none';
                    return;
                }

                pagination.style.display = 'flex';

                const createPageItem = (page, text = null, disabled = false, active = false) => {
                    const li = document.createElement('li');
                    li.className = `page-item ${disabled ? 'disabled' : ''} ${active ? 'active' : ''}`;
                    const a = document.createElement('a');
                    a.href = '#';
                    a.className = 'page-link';
                    a.textContent = text || page;
                    a.addEventListener('click', (e) => {
                        e.preventDefault();
                        if (!disabled && page >= 1 && page <= totalPages) {
                            currentPage = page;
                            renderLogs();
                        }
                    });
                    li.appendChild(a);
                    return li;
                };

                // Previous button
                pagination.appendChild(createPageItem(currentPage - 1, 'Previous', currentPage === 1));

                // Page numbers (show max 5)
                const maxVisiblePages = 5;
                let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
                let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

                if (endPage - startPage + 1 < maxVisiblePages) {
                    startPage = Math.max(1, endPage - maxVisiblePages + 1);
                }

                for (let i = startPage; i <= endPage; i++) {
                    pagination.appendChild(createPageItem(i, i, false, currentPage === i));
                }

                // Next button
                pagination.appendChild(createPageItem(currentPage + 1, 'Next', currentPage === totalPages));
            }



            // Event listeners
            function setupEventListeners() {
                document.getElementById('searchActivity').addEventListener('input', (e) => {
                    searchTerm = e.target.value;
                    currentPage = 1;
                    renderLogs();
                });

                document.getElementById('filterActType').addEventListener('change', (e) => {
                    filterType = e.target.value;
                    currentPage = 1;
                    renderLogs();
                });

                document.getElementById('filterDate-1').addEventListener('change', (e) => {
                    filterDate = e.target.value;
                    currentPage = 1;
                    renderLogs();
                });

                // CSV Export
                document.getElementById('exportBtn-1').addEventListener('click', () => {
                    const filtered = getFilteredLogs();

                    if (filtered.length === 0) {
                        alert('No data to export');
                        return;
                    }

                    let csvContent = "data:text/csv;charset=utf-8,";
                    csvContent += "Full Name,Activity,Role,Executed At\n";
                    filtered.forEach(log => {
                        csvContent += `"${log.full_name}","${log.activity_name}","${log.role}","${log.executed_at}"\n`;
                    });

                    const encodedUri = encodeURI(csvContent);
                    const link = document.createElement("a");
                    link.setAttribute("href", encodedUri);
                    link.setAttribute("download", "activity_logs.csv");
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                });
            }

            // Initialize
            setupEventListeners();
            renderLogs();
        });
    </script>








    

    

    

    
</body>

</html>