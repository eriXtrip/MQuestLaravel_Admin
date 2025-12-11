<!DOCTYPE html>
<html data-bs-theme="light" lang="en" style="font-family: Poppins, sans-serif;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MQuest Teacher-Side</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/Login_Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('TeacherSide/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300i,400,400i,500,600,800&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('TeacherSide/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('TeacherSide/assets/css/styles.css') }}">


    <style>
/* Custom dropdown styles */
.custom-dropdown {
    position: relative;
}

/* Dropdown list base styles */
.dropdown-list {
    list-style: none;
    display: none;
    align-items: left;
    position: absolute;
    background: white;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border: 1px solid #e1e5e9;
    padding: 8px 0;
    min-width: 180px;
    z-index: 1000;
    margin: 0;
    animation: dropdownFadeIn 0.2s ease-out;
}

/* Mobile view - dropdown appears at top */
@media (max-width: 768px) {
    .dropdown-list {
        bottom: 100%; /* Position above the trigger */
        top: auto !important;
        left: 0;
        right: auto;
        margin-bottom: 8px;
        transform-origin: bottom left;
        align-items: left;
    }

    .sidebar-link:hover {
        background: #f8f9fa;
        border-left-color: #007bff;
        color: #0056b3;
    }
}

/* Desktop view - dropdown appears below */
@media (min-width: 769px) {
    .dropdown-list {
        top: 100%;
        bottom: auto;
        left: 0;
        margin-top: 8px;
        transform-origin: top left;
    }
}

/* Dropdown items */
.dropdown-list li {
    margin: 0;
    align-items: left;
}

.sidebar-link {
    display: block;
    padding: 12px 20px;
    color: #2d3748;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.2s ease;
}

.sidebar-link:hover {
    background: #f8f9fa;
    border-left-color: #007bff;
    color: #0056b3;
}

/* Smooth fade-in animation */
@keyframes dropdownFadeIn {
    from {
        opacity: 0;
        transform: scale(0.95) translateY(-5px);
    }
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

/* Mobile-specific adjustments */
@media (max-width: 768px) {
    .dropdown-list {
        animation: dropdownFadeInMobile 0.2s ease-out;
    }
    
    @keyframes dropdownFadeInMobile {
        from {
            opacity: 0;
            transform: scale(0.95) translateY(5px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }
    
    .sidebar-link {
        padding: 14px 20px;
        font-size: 15px;
    }
}

/* Ensure full height in paired columns */
.equal-height-row > [class*="col-"] {
    display: flex;
    flex-direction: column;
}

.mb-section {
    margin-bottom: 10px;
}

</style>

</head>

<body style="font-family: Poppins, sans-serif;">
    <div>
        <nav class="teacher-nav">
            <div class="logo-brand">
                <a class="text-decoration-none text-center d-flex justify-content-center align-items-center gap-1 py-2 sidebar-brand" href="#">
                    <span class="text-uppercase fs-5 fw-bold text-black p-2 me-3 align-middle">MQUEST</span>
                </a>
                <p class="text-center text-muted mb-3 mx-2 sidebar-subtitle" style="font-size: 16px;">A Matatag E-Learning Application</p>
            </div>
            <ul class="list-unstyled teacher-nav-list">
                <li>
                    <a class="text-decoration-none active" href="#" data-section="dashboardsection">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-grid" style="font-family: Poppins, sans-serif;">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
                        </svg>
                        <span class="text-decoration-none align-middle">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item custom-dropdown" style="position: relative;">
                    <a class="nav-link text-decoration-none d-flex align-items-center" 
                    href="#" 
                    data-section="lessonsection"
                    onclick="event.preventDefault(); this.parentNode.querySelector('.dropdown-list').style.display = (this.parentNode.querySelector('.dropdown-list').style.display === 'block' ? 'none' : 'block');">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bookmarks me-2">
                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                            <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                        </svg>
                        <span class="align-middle">Lessons</span>
                    </a>

                    <!-- Dropdown list - hidden by default -->
                    <ul class="dropdown-list">
                        <li>
                            <a class="sidebar-link" 
                            href="javascript:void(0)"  
                            data-section="lessonsection" 
                            data-subject="English" 
                            onclick="selectSubject(this)">English</a>
                        </li>
                        <li>
                            <a class="sidebar-link" 
                            href="javascript:void(0)"  
                            data-section="lessonsection" 
                            data-subject="Science" 
                            onclick="selectSubject(this)">Science</a>
                        </li>
                        <li>
                            <a class="sidebar-link" 
                            href="javascript:void(0)"  
                            data-section="lessonsection" 
                            data-subject="Mathematics" 
                            onclick="selectSubject(this)">Mathematics</a>
                        </li>
                        <li>
                            <a class="sidebar-link" 
                            href="javascript:void(0)"  
                            data-section="lessonsection" 
                            data-subject="Filipino" 
                            onclick="selectSubject(this)">Filipino</a>
                        </li>
                    </ul>

                </li>
                <li><a class="text-decoration-none" href="#" data-section="analyticsection">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bar-chart" style="font-family: Poppins, sans-serif;">
                            <path d="M4 11H2v3h2zm5-4H7v7h2zm5-5v12h-2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z"></path>
                        </svg>
                        <span class="text-decoration-none align-middle">Analytics</span>
                    </a>
                </li>
                <li><a class="text-decoration-none" href="#" data-section="pupilsection">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people" style="font-family: Poppins, sans-serif;">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                        </svg>
                        <span class="text-decoration-none align-middle">Pupils</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="main-content">
            <nav class="d-flex justify-content-between align-items-center p-3 navbar-main navbar navbar-expand navbar-light">
                <!-- <form class="d-sm-inline-block" inline="true">
                    <div class="input-group-navbar input-group search-bar">
                        <input class="form-control" type="text" placeholder="Search here..." aria-label="Search">
                        <button class="btn search-btn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                            </svg>
                        </button>
                    </div>
                </form> -->
                <div class="navbar-collapse collapse">
                    <div class="ms-auto navbar-align navbar-nav">
                        <div class="position-relative d-flex me-2 nav-item dropdown">
                            <!-- <a class="d-flex align-items-center nav-link nav-icon dropdown-toggle bell" id="element" aria-expanded="false" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bell">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6"></path>
                                    </svg>
                                    <span class="indicator">4</span>
                                </div>
                            </a> -->
                            <div class="p-0 dropdown-menu notification-dropdownMenu" data-bs-popper="static">
                                <div class="text-start position-relative w-100 p-3 dropdown-menu-header">
                                    <span>Notifications</span>
                                    <div class="notif-tabs">
                                        <button class="active" id="tabAll">All</button><button id="tabUnread">Unread</button>
                                    </div>
                                </div>
                                <div class="d-flex list-group g-5 notification-list" id="notificationList">
                                    <a href="#">
                                        <div class="notif-item unread">
                                            <div class="col-2"><img class="rounded-circle img-fluid avatar" width="200" height="200" src="{{ asset('TeacherSide/assets/img/10.png') }}"></div>
                                            <div class="notification-content">
                                                <div class="notification-text">
                                                    <span class="text-muted mt-1 small">12345678 enrolled in Mathematics Subject.&nbsp;</span>
                                                </div>
                                                <div class="notification-time"><span class="text-muted mt-1 small">30 min ago</span></div>
                                            </div>
                                            <div class="unread-dot"></div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-item unread">
                                            <div class="text-primary notification-icon lesson-item2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-files">
                                                    <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1M3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z"></path>
                                                </svg>
                                            </div>
                                            <div class="notification-content">
                                                <div class="notification-text">
                                                    <span class="text-muted mt-1 small">New learning material uploaded by Admin.</span>
                                                </div>
                                                <div class="notification-time"><span class="text-muted mt-1 small">1hr ago</span></div>
                                            </div>
                                            <div class="unread-dot"></div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-item">
                                            <div class="text-primary notification-icon interactive-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-puzzle">
                                                    <path d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2H7a.5.5 0 0 1 .5.5v.382c0 .696-.497 1.182-.872 1.469a.459.459 0 0 0-.115.118.113.113 0 0 0-.012.025L6.5 4.5v.003l.003.01c.004.01.014.028.036.053a.86.86 0 0 0 .27.194C7.09 4.9 7.51 5 8 5c.492 0 .912-.1 1.19-.24a.86.86 0 0 0 .271-.194.213.213 0 0 0 .039-.063v-.009a.112.112 0 0 0-.012-.025.459.459 0 0 0-.115-.118c-.375-.287-.872-.773-.872-1.469V2.5A.5.5 0 0 1 9 2h2.395a1.5 1.5 0 0 1 1.493 1.645L12.645 6.5h.237c.195 0 .42-.147.675-.48.21-.274.528-.52.943-.52.568 0 .947.447 1.154.862C15.877 6.807 16 7.387 16 8s-.123 1.193-.346 1.638c-.207.415-.586.862-1.154.862-.415 0-.733-.246-.943-.52-.255-.333-.48-.48-.675-.48h-.237l.243 2.855A1.5 1.5 0 0 1 11.395 14H9a.5.5 0 0 1-.5-.5v-.382c0-.696.497-1.182.872-1.469a.459.459 0 0 0 .115-.118.113.113 0 0 0 .012-.025L9.5 11.5v-.003a.214.214 0 0 0-.039-.064.859.859 0 0 0-.27-.193C8.91 11.1 8.49 11 8 11c-.491 0-.912.1-1.19.24a.859.859 0 0 0-.271.194.214.214 0 0 0-.039.063v.003l.001.006a.113.113 0 0 0 .012.025c.016.027.05.068.115.118.375.287.872.773.872 1.469v.382a.5.5 0 0 1-.5.5H4.605a1.5 1.5 0 0 1-1.493-1.645L3.356 9.5h-.238c-.195 0-.42.147-.675.48-.21.274-.528.52-.943.52-.568 0-.947-.447-1.154-.862C.123 9.193 0 8.613 0 8s.123-1.193.346-1.638C.553 5.947.932 5.5 1.5 5.5c.415 0 .733.246.943.52.255.333.48.48.675.48h.238zM4.605 3a.5.5 0 0 0-.498.55l.001.007.29 3.4A.5.5 0 0 1 3.9 7.5h-.782c-.696 0-1.182-.497-1.469-.872a.459.459 0 0 0-.118-.115.112.112 0 0 0-.025-.012L1.5 6.5h-.003a.213.213 0 0 0-.064.039.86.86 0 0 0-.193.27C1.1 7.09 1 7.51 1 8c0 .491.1.912.24 1.19.07.14.14.225.194.271a.213.213 0 0 0 .063.039H1.5l.006-.001a.112.112 0 0 0 .025-.012.459.459 0 0 0 .118-.115c.287-.375.773-.872 1.469-.872H3.9a.5.5 0 0 1 .498.542l-.29 3.408a.5.5 0 0 0 .497.55h1.878c-.048-.166-.195-.352-.463-.557-.274-.21-.52-.528-.52-.943 0-.568.447-.947.862-1.154C6.807 10.123 7.387 10 8 10s1.193.123 1.638.346c.415.207.862.586.862 1.154 0 .415-.246.733-.52.943-.268.205-.415.39-.463.557h1.878a.5.5 0 0 0 .498-.55l-.001-.007-.29-3.4A.5.5 0 0 1 12.1 8.5h.782c.696 0 1.182.497 1.469.872.05.065.091.099.118.115.013.008.021.01.025.012a.02.02 0 0 0 .006.001h.003a.214.214 0 0 0 .064-.039.86.86 0 0 0 .193-.27c.14-.28.24-.7.24-1.191 0-.492-.1-.912-.24-1.19a.86.86 0 0 0-.194-.271.215.215 0 0 0-.063-.039H14.5l-.006.001a.113.113 0 0 0-.025.012.459.459 0 0 0-.118.115c-.287.375-.773.872-1.469.872H12.1a.5.5 0 0 1-.498-.543l.29-3.407a.5.5 0 0 0-.497-.55H9.517c.048.166.195.352.463.557.274.21.52.528.52.943 0 .568-.447.947-.862 1.154C9.193 5.877 8.613 6 8 6s-1.193-.123-1.638-.346C5.947 5.447 5.5 5.068 5.5 4.5c0-.415.246-.733.52-.943.268-.205.415-.39.463-.557z"></path>
                                                </svg>
                                            </div>
                                            <div class="notification-content">
                                                <div class="notification-text">
                                                    <span class="text-muted mt-1 small">New educational game is available now.</span>
                                                </div>
                                                <div class="notification-time"><span class="text-muted mt-1 small">1hr ago</span></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-item unread">
                                            <div class="text-primary notification-icon assessment-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-question-circle">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"></path>
                                                </svg>
                                            </div>
                                            <div class="notification-content">
                                                <div class="notification-text">
                                                    <span class="text-muted mt-1 small">New Pre Test posted in Lesson 1: Reproductive System</span>
                                                </div>
                                                <div class="notification-time"><span class="text-muted mt-1 small">2 days ago</span></div>
                                            </div>
                                            <div class="unread-dot"></div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-item unread">
                                            <div class="text-primary notification-icon video-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-camera-video">
                                                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"></path>
                                                </svg>
                                            </div>
                                            <div class="notification-content">
                                                <div class="notification-text">
                                                    <span class="text-muted mt-1 small">New video uploaded.</span>
                                                </div>
                                                <div class="notification-time"><span class="text-muted mt-1 small">2 days ago</span></div>
                                            </div>
                                            <div class="unread-dot"></div>
                                        </div>
                                    </a>
                                </div>
                                <a class="text-decoration-none" href="Notifications-Section.html">
                                    <div class="text-center position-relative w-100 dropdown-menu-footer show-all-notif">
                                        <span>Show All Notifications</span>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item dropdown nav-item-user">
                                <span class="d-inline-block d-sm-none nav-icon">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="rounded-circle" width="200" height="200" style="height: 28px; width: 28px; object-fit: cover;" src="{{ asset('TeacherSide/assets/img/8.png') }}">
                                    </a>
                                </span>
                                <span class="d-none d-sm-inline-block nav-icon">
                                    <a class="nav-link dropdown-toggle" href="#" aria-expanded="false" role="button" data-bs-toggle="dropdown">
                                        <img class="rounded-circle img-fluid me-1 profile" width="32" height="32" id="TeacherProfile" alt="Profile">
                                        <span style="font-size: 14px;" id="TeacherName">...</span>
                                    </a>
                                </span>
                                <div class="dropdown-menu dropdown-menu3 dropdown-menu-end" data-bs-popper="static" style="width:180px;">
                                    <a class="dropdown-item" href="Profile-Section.html" type="button" style="display: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                        </svg>
                                        <span>Profile</span>
                                    </a>
                                    <a class="dropdown-item" href="#" type="button" style="display:none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-moon-fill">
                                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278"></path>
                                        </svg>
                                        <span>Dark Mode</span>
                                    </a>

                                    <hr class="dropdown-divider">

                                    <a class="dropdown-item" href="#" id="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-right">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"></path>
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                                        </svg><span>Sign out</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="mb-3 content-container">

                <!--Dashboard Section-->
                <section id="dashboardsection" class="content-section">
                    <div class="p-0 container-fluid">
                        <div class="text-end mb-3 date-section"><span class="text-muted" id="currentDate">Friday, August 20, 2025</span></div>
                        <div class="rounded-3 d-flex justify-content-between align-items-center p-4 mb-4 welcome-card">
                            <div class="welcome-text">
                                <h4 class="fw-bold mb-2" style="color: #131150;" id='TeacherLname'>Welcome back, Ms. Cruz</h4>
                                <p class="text-muted mb-1">Stay updated on your students’ learning journey in this subject with access to their lessons and progress.</p>
                                <!-- <p class="mb-2">You have<strong> <span style="color: rgb(19, 17, 80);">10 pending enrollment request</span></strong> waiting for your review today.&nbsp;</p> -->
                                 <!--<button id="gotolessons-btn" class="btn rounded-pill px-4 gotolessons-btn">Go to Lessons</button>-->
                            </div>
                            <div class="ms-3 welcome-img"><img src="{{ asset('TeacherSide/assets/img/undraw_books_wxzz.svg') }}" style="max-width: 150px;" widt=""></div>
                        </div>
                        <!--<div class="main-content-row row">-->

                        <!--Row 1-->
                        <div class="row equal-height-row mb-section g-4">
                            <!-- OverView Section-->
                                <div class="col-lg-8">
                                <div class="overview-section h-100">
                                    <div class="overview-header">
                                        <h4 class="text-muted">Overview</h4>
                                    </div>
                                    <div class="stats-grid row g-3">
                                        <div class="card stat-card-2">
                                            <div class="text-center card-body-2">
                                                <!-- <p class="text-end text-success" style="font-size: 0.75rem;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-up me-1">
                                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"></path>
                                                    </svg>+2&nbsp;&nbsp;
                                                </p> -->
                                                <div class="mb-3 mx-auto stat-icon bg-lessons">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                                    </svg>
                                                </div>
                                                <h5 class="fw-bold card-title-2" id="total-pupils">...</h5>
                                                <p class="text-muted mb-1 card-text-2">Number of pupils</p>
                                            </div>
                                        </div>
                                        <div class="card stat-card-2">
                                            <div class="text-center card-body-2">
                                                <!-- <p class="text-end text-success" style="font-size: 0.75rem;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-up me-1">
                                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"></path>
                                                    </svg>+2&nbsp;&nbsp;
                                                </p> -->
                                                <div class="mb-3 mx-auto stat-icon bg-lessons">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up">
                                                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"></path>
                                                    </svg>
                                                </div>
                                                <h5 class="fw-bold card-title-2" id="avg-score">...</h5>
                                                <p class="text-muted mb-1 card-text-2">Avg. class score</p>
                                            </div>
                                        </div>
                                        <div class="card stat-card-2">
                                            <div class="text-center card-body-2">
                                                <!-- <p class="text-end text-danger" style="font-size: 0.75rem;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-down me-1">
                                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"></path>
                                                    </svg>+2&nbsp;&nbsp;
                                                </p> -->
                                                <div class="mb-3 mx-auto stat-icon bg-lessons">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                                    </svg>
                                                </div>
                                                <h5 class="fw-bold card-title-2" id="avg-session-time">...</h5>
                                                <p class="text-muted mb-0 card-text-2">Avg. session time</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <!-- Student Distribution (Pie Graph)-->
                                <div class="col-lg-4">
                                <div class="donut-chart-container h-100">
                                    <div class="donut-header">
                                        <h4 class="text-muted">Student Distribution</h4>
                                    </div>
                                    <div class="donut-chart-body flex-grow-1">
                                        <canvas id="genderChart" width="1451" height="400"></canvas>
                                    </div>
                                </div>
                                </div>
                        </div>
                        
                        <!--Row 2-->
                        <div class="row equal-height-row mb-section g-4">
                            <!--Enrollment Request Section-->
                            <div class="col-lg-6">
                                <div class="enrollment-container h-100">
                                    <div class="enrollment-header">
                                        <h4 class="text-muted d-flex justify-content-center align-items-center">Recent Enrollment&nbsp;<span class="enrollment-count-bagde">0</span></h4>
                                        <!-- <button class="btn btn-sm view-all-list-btn" id="viewAllRequest" data-bs-toggle="modal" data-bs-target="#viewAllEnrollmentReq">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list me-1">
                                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"></path>
                                            </svg>View All
                                        </button> -->
                                    </div>
                                    <div id="enrollmentList">
                                        <div class="enrollment-item flex">
                                            <div class="pupil-information">
                                                <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/10.png') }}"></div>
                                                <div class="pupil-details">
                                                    <h5>Maria Anna</h5>
                                                    <p>LRN: 112456678563</p>
                                                    <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">01-13-24 · 2:30 PM</span></small></p>
                                                </div>
                                            </div>
                                            <div class="teacher-actions">
                                                <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-to-decline" data-action="decline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="enrollment-item">
                                            <div class="pupil-information">
                                                <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/5.png') }}"></div>
                                                <div class="pupil-details">
                                                    <h5>Maria Anna</h5>
                                                    <p>LRN: 112456678563</p>
                                                    <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">03-15-24 · 2:30 PM</span></small></p>
                                                </div>
                                            </div>
                                            <div class="teacher-actions">
                                                <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-to-decline" data-action="decline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="enrollment-item">
                                            <div class="pupil-information">
                                                <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/11.png') }}"></div>
                                                <div class="pupil-details">
                                                    <h5>Maria Anna</h5>
                                                    <p>LRN: 112456678563</p>
                                                    <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">02-3-24 · 2:30 PM</span></small></p>
                                                </div>
                                            </div>
                                            <div class="teacher-actions">
                                                <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-to-decline" data-action="decline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="enrollment-item">
                                            <div class="pupil-information">
                                                <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/8.png') }}"></div>
                                                <div class="pupil-details">
                                                    <h5>Maria Anna</h5>
                                                    <p>LRN: 112456678563</p>
                                                    <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">03-23-24 · 2:30 PM</span></small></p>
                                                </div>
                                            </div>
                                            <div class="teacher-actions">
                                                <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-to-decline" data-action="decline"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center d-none py-5 enrollment-empty-state">
                                        <div class="text-muted mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-fill-slash">
                                                <path d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465m-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4"></path>
                                            </svg>
                                        </div>
                                        <h5 class="text-muted mb-2">No Enrollment Yet</h5>
                                        <!-- <p class="text-muted mb-3">All enrollment requests have been processed.</p> -->
                                    </div>
                                </div>
                            </div>

                            <!--Top Performers-->
                            <div class="col-lg-6">
                                <div class="top-scorers-section h-100">
                                    <div class="top-scorers-header">
                                        <h4 class="text-muted">Top Performers</h4>
                                        <!-- <div class="top-performers-context"><span>Showing Top 5 of 42 Pupils</span></div> -->
                                    </div>
                                    <!-- <div class="text-muted d-flex justify-content-between subject-summary small">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trophy">
                                                <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"></path>
                                            </svg>&nbsp; Avg Top 5 Score: 88%
                                        </span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up-arrow">
                                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"></path>
                                            </svg>&nbsp; Class Average: 72%
                                        </span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-rocket-takeoff">
                                                <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532"></path>
                                                <path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z"></path>
                                                <path d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z"></path>
                                            </svg>&nbsp; Most Improved: Jane Rose (+12%)
                                        </span>
                                    </div> -->
                                    <!-- <div class="filter-and-view">
                                        <div class="top-performers-filter">
                                            <select class="form-select-sm form-select" id="timeRangeFilter">
                                                <option value="today" selected="">Today</option>
                                                <option value="week">This Week</option>
                                                <option value="month">This Month</option>
                                            </select></div>
                                        <div class="top-performers-filter">
                                            <select class="form-select-sm form-select" id="timeRangeFilter-1">
                                                <option value="all" selected="">All activities</option>
                                                <option value="quiz">Quizzes</option>
                                                <option value="lesson">Lessons</option>
                                                <option value="games">Interactive Games</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-outline-secondary clear-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-clockwise me-1">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"></path>
                                            </svg>
                                        </button>
                                        <button class="btn btn-sm view-all-scorers" data-bs-toggle="modal" data-bs-target="#viewAllTopPerformers">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list me-1">
                                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"></path>
                                            </svg>View All
                                        </button>
                                    </div> -->

                                    <!-- Leaderboard Items -->
                                    <div id="mainLeaderboard" class="leaderboard">
                                        <div class="top-pupil-item" data-range="today" data-name="Noah Williams" data-score="89" data-activity="quiz">
                                            <div class="top-pupil-rank rank-1"><span>1</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Noah Williams&nbsp;</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Photosynthesis Quiz 2</strong></span>
                                                    <span>Avg: 95%</span>
                                                    <span>Attempts: 1</span><span>▲ 0%</span>
                                                    <span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:89%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>89%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="today" data-name="Jane Rose" data-score="82">
                                            <div class="top-pupil-rank rank-2"><span>2</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Jane Rose</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Plant Parts Lesson</strong></span>
                                                    <span>Avg: 82%</span>
                                                    <span>Attempts: 1</span><span>▲ 0%</span>
                                                    <span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:82%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>82%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="today" data-name="Rica Estolas" data-score="80" data-activity="lessons">
                                            <div class="top-pupil-rank rank-3"><span>3</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Rica Estolas</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>States of Matter Quiz</strong></span>
                                                    <span>Avg: 89%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:80%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>80%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="today" data-name="Jennifer Lopez" data-score="78" data-activity="lesson">
                                            <div class="top-pupil-rank rank-other"><span>4</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Jennifer Lopez</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Science Fair</strong></span>
                                                    <span>Avg: 78%</span>
                                                    <span>Attempts: 1</span><span>▲ 0%</span>
                                                    <span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:78%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>78%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="today" data-name="Wendee Diane" data-score="72" data-activity="games">
                                            <div class="top-pupil-rank rank-other"><span>5</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Wendee Diane</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Science Fair Prep</strong></span>
                                                    <span>Avg: 72%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span></div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:72%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>72%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="week" data-name="Wendee Diane" data-score="89">
                                            <div class="top-pupil-rank rank-1"><span>1</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Wendee Diane</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Photosynthesis Quiz 2</strong></span>
                                                    <span>Avg: 95%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:89%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>89%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="week" data-name="Jane Rose" data-score="82">
                                            <div class="top-pupil-rank rank-2"><span>2</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Jane Rose</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Plant Parts Lesson</strong></span>
                                                    <span>Avg: 82%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span></div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:82%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>82%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="week" data-name="Rica Estolas" data-score="80">
                                            <div class="top-pupil-rank rank-3"><span>3</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Rica Estolas</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>States of Matter Quiz</strong></span>
                                                    <span>Avg: 89%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:80%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>80%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="week" data-name="Jennifer Lopez" data-score="78">
                                            <div class="top-pupil-rank rank-other"><span>4</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Jennifer Lopez</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Science Fair</strong></span>
                                                    <span>Avg: 78%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:78%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>78%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="week" data-name="Noah Williams" data-score="72">
                                            <div class="top-pupil-rank rank-other"><span>5</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Noah Williams</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Science Fair Prep</strong></span>
                                                    <span>Avg: 72%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:72%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>72%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="month" data-name="Faith Dolly" data-score="89">
                                            <div class="top-pupil-rank rank-1"><span>1</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Faith Dolly</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Photosynthesis Quiz 2</strong></span>
                                                    <span>Avg: 95%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:89%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>89%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="month" data-name="Lita MMM" data-score="82">
                                            <div class="top-pupil-rank rank-2"><span>2</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Lita MMM</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Plant Parts Lesson</strong></span>
                                                    <span>Avg: 82%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:82%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>82%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="month" data-name="Rica Estolas" data-score="80">
                                            <div class="top-pupil-rank rank-3"><span>3</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Rica Estolas</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>States of Matter Quiz</strong></span>
                                                    <span>Avg: 89%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:80%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>80%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="month" data-name="Jennifer Lopez" data-score="78">
                                            <div class="top-pupil-rank rank-other"><span>4</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Jennifer Lopez</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Science Fair</strong></span>
                                                    <span>Avg: 78%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:78%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>78%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                        <div class="top-pupil-item" data-range="month" data-name="Noah Williams" data-score="72">
                                            <div class="top-pupil-rank rank-other"><span>5</span></div>
                                            <div class="top-pupil-info">
                                                <div class="top-pupil-name">
                                                    <span class="student-name">Noah Williams</span>
                                                    <span class="grade-badge">Grade 4</span>
                                                </div>
                                                <div class="student-meta">
                                                    <span class="text-muted"><strong>Science Fair Prep</strong></span>
                                                    <span>Avg: 72%</span>
                                                    <span>Attempts: 1</span>
                                                    <span>▲ 0%</span><span>Completion: 100%</span>
                                                </div>
                                                <div class="top-pupil-progress">
                                                    <div class="progress-bar top-progress-bar" style="width:72%;"></div>
                                                </div>
                                            </div>
                                            <div class="top-pupil-stats">
                                                <div class="top-pupil-score"><span>72%</span></div>
                                                <div class="top-pupil-percentage"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Row 3-->
                        <div class="row equal-height-row mb-section g-4">
                            <!-- Line Chart-->
                            <div class="col-lg-6">
                                <div class="line-chart-container h-100">
                                    <div class="line-chart-header">
                                        <h4 class="text-muted">Class Performance</h4>
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
                                    <!-- <div class="d-flex justify-content-center align-items-center mt-2" style="font-size: 0.75rem;">
                                        <p class="text-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up-arrow me-2">
                                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"></path>
                                            </svg>+14 pts. Improvement
                                        </p>
                                    </div> -->
                                </div>
                            </div>

                            <!--Recently Added Materials-->
                            <div class="col-lg-6">
                                <div class="recently-added-container h-100">
                                    <div class="recently-added-header">
                                        <h4 class="text-muted d-flex align-items-center">
                                            Recently Added Materials&nbsp;<span class="new-materials-count-bagde" id="newMaterialsCount"></span>
                                        </h4>
                                    </div>
                                    <div class="material-lists" id="materialLists"></div>
                                </div>
                            </div>
                        </div>

                        <!--Row 4-->
                        <div class="row mb-section">
                            <!--Recent Activity-->
                            <div class="col-12">
                                <!-- <div class="recent-activity-container">
                                    <div class="recent-activity-header">
                                        <h4 class="text-muted">Recent Activity</h4>
                                    </div>
                                    <div class="activity-feed">
                                        <div class="activity-item">
                                            <div class="activity-icon icon-assessment">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-exclamation-circle">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-header">
                                                    <span class="activity-title-text">Pretest Completed</span>
                                                    <span class="activity-type badge-assessment">Assessment</span>
                                                </div>
                                                <div class="activity-description">
                                                    <span>Noah Williams just finished the Reproductive System Pretest.</span>
                                                </div>
                                                <div class="activity-time"><span>Today, 10:24 AM</span></div>
                                            </div>
                                        </div>
                                        <div class="activity-item">
                                            <div class="activity-icon icon-enrollment">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-plus">
                                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"></path>
                                                </svg>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-header">
                                                    <span class="activity-title-text">New Enrollment Request</span>
                                                    <span class="activity-type badge-enrollment">Enrollment</span>
                                                </div>
                                                <div class="activity-description">
                                                    <span>Maria Anna (LRN: 112456678563) requested to join your Grade 10 Biology class.</span>
                                                </div>
                                                <div class="activity-time"><span>Today, 9:15 AM</span></div>
                                            </div>
                                        </div>
                                        <div class="activity-item">
                                            <div class="activity-icon icon-game">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-puzzle">
                                                    <path d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2H7a.5.5 0 0 1 .5.5v.382c0 .696-.497 1.182-.872 1.469a.459.459 0 0 0-.115.118.113.113 0 0 0-.012.025L6.5 4.5v.003l.003.01c.004.01.014.028.036.053a.86.86 0 0 0 .27.194C7.09 4.9 7.51 5 8 5c.492 0 .912-.1 1.19-.24a.86.86 0 0 0 .271-.194.213.213 0 0 0 .039-.063v-.009a.112.112 0 0 0-.012-.025.459.459 0 0 0-.115-.118c-.375-.287-.872-.773-.872-1.469V2.5A.5.5 0 0 1 9 2h2.395a1.5 1.5 0 0 1 1.493 1.645L12.645 6.5h.237c.195 0 .42-.147.675-.48.21-.274.528-.52.943-.52.568 0 .947.447 1.154.862C15.877 6.807 16 7.387 16 8s-.123 1.193-.346 1.638c-.207.415-.586.862-1.154.862-.415 0-.733-.246-.943-.52-.255-.333-.48-.48-.675-.48h-.237l.243 2.855A1.5 1.5 0 0 1 11.395 14H9a.5.5 0 0 1-.5-.5v-.382c0-.696.497-1.182.872-1.469a.459.459 0 0 0 .115-.118.113.113 0 0 0 .012-.025L9.5 11.5v-.003a.214.214 0 0 0-.039-.064.859.859 0 0 0-.27-.193C8.91 11.1 8.49 11 8 11c-.491 0-.912.1-1.19.24a.859.859 0 0 0-.271.194.214.214 0 0 0-.039.063v.003l.001.006a.113.113 0 0 0 .012.025c.016.027.05.068.115.118.375.287.872.773.872 1.469v.382a.5.5 0 0 1-.5.5H4.605a1.5 1.5 0 0 1-1.493-1.645L3.356 9.5h-.238c-.195 0-.42.147-.675.48-.21.274-.528.52-.943.52-.568 0-.947-.447-1.154-.862C.123 9.193 0 8.613 0 8s.123-1.193.346-1.638C.553 5.947.932 5.5 1.5 5.5c.415 0 .733.246.943.52.255.333.48.48.675.48h.238zM4.605 3a.5.5 0 0 0-.498.55l.001.007.29 3.4A.5.5 0 0 1 3.9 7.5h-.782c-.696 0-1.182-.497-1.469-.872a.459.459 0 0 0-.118-.115.112.112 0 0 0-.025-.012L1.5 6.5h-.003a.213.213 0 0 0-.064.039.86.86 0 0 0-.193.27C1.1 7.09 1 7.51 1 8c0 .491.1.912.24 1.19.07.14.14.225.194.271a.213.213 0 0 0 .063.039H1.5l.006-.001a.112.112 0 0 0 .025-.012.459.459 0 0 0 .118-.115c.287-.375.773-.872 1.469-.872H3.9a.5.5 0 0 1 .498.542l-.29 3.408a.5.5 0 0 0 .497.55h1.878c-.048-.166-.195-.352-.463-.557-.274-.21-.52-.528-.52-.943 0-.568.447-.947.862-1.154C6.807 10.123 7.387 10 8 10s1.193.123 1.638.346c.415.207.862.586.862 1.154 0 .415-.246.733-.52.943-.268.205-.415.39-.463.557h1.878a.5.5 0 0 0 .498-.55l-.001-.007-.29-3.4A.5.5 0 0 1 12.1 8.5h.782c.696 0 1.182.497 1.469.872.05.065.091.099.118.115.013.008.021.01.025.012a.02.02 0 0 0 .006.001h.003a.214.214 0 0 0 .064-.039.86.86 0 0 0 .193-.27c.14-.28.24-.7.24-1.191 0-.492-.1-.912-.24-1.19a.86.86 0 0 0-.194-.271.215.215 0 0 0-.063-.039H14.5l-.006.001a.113.113 0 0 0-.025.012.459.459 0 0 0-.118.115c-.287.375-.773.872-1.469.872H12.1a.5.5 0 0 1-.498-.543l.29-3.407a.5.5 0 0 0-.497-.55H9.517c.048.166.195.352.463.557.274.21.52.528.52.943 0 .568-.447.947-.862 1.154C9.193 5.877 8.613 6 8 6s-1.193-.123-1.638-.346C5.947 5.447 5.5 5.068 5.5 4.5c0-.415.246-.733.52-.943.268-.205.415-.39.463-.557z"></path>
                                                </svg>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-header">
                                                    <span class="activity-title-text">Interactive Game Played</span>
                                                    <span class="activity-type badge-game">Game</span>
                                                </div>
                                                <div class="activity-description">
                                                    <span>Jennifer Lopez completed the Filipino Grammar Challenge with 92% accuracy.</span>
                                                </div>
                                                <div class="activity-time"><span>Yesterday, 2:10 PM</span></div>
                                            </div>
                                        </div>
                                        <div class="activity-item">
                                            <div class="activity-icon icon-achievement">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trophy">
                                                    <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"></path>
                                                </svg>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-header">
                                                    <span class="activity-title-text">Achievement Unlocked!</span>
                                                    <span class="activity-type badge-achievement">Achievement</span>
                                                </div>
                                                <div class="activity-description">
                                                    <span>Jane Rose earned the "Perfect Score" badge in Fractions Quiz.</span>
                                                </div>
                                                <div class="activity-time"><span>Yesterday, 3:42 PM</span></div>
                                            </div>
                                        </div>
                                        <div class="activity-item">
                                            <div class="activity-icon icon-assessment">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-exclamation-circle">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-header">
                                                    <span class="activity-title-text">Posttest Submitted</span>
                                                    <span class="activity-type badge-assessment">Assessment</span>
                                                </div>
                                                <div class="activity-description">
                                                    <span>Rica Estolas submitted her Cell Structure Posttest.</span>
                                                </div>
                                                <div class="activity-time"><span>Aug 19, 2025 - 11:30 AM</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="recent-activity-container">
                                    <div class="recent-activity-header">
                                        <h4 class="text-muted">Recent Activity</h4>
                                    </div>

                                    <div class="activity-feed" id="activityFeed"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Lesson Sections-->
                <section class="d-none content-section" id="lessonsection">
                    <div class="p-0 container-fluid">
                        <div class="subject">
                            <div class="mb-2 col" style="height: 15rem;     position: relative;     width: 100%;">
                                <div class="mb-2 card math-subject-card" id="subjectHeaderCard">
                                    <div class="subject-title">
                                        <h3>Mathematics 4</h3>
                                        <p id="totalLesson">8 Lessons</p>
                                    </div>
                                </div>
                            </div>
                            <div id="lessonsContainer" class="lessons-container" data-selected-subject="English">
                                <div class="lessons-header">
                                    <div>
                                        <h3 class="d-flex align-items-center gap-2 p-2">Available Lessons
                                            <span class="rounded-pill badge new-lesson-badge" id="newLessonsBadge" style="font-size: 0.75rem;">2 new</span>
                                        </h3>
                                    </div>

                                    <!-- View Mode Toggle ( High and Low Level View)-->
                                    <div class="view-mode-toggle">
                                        <button class="active toggle-btn" id="overviewModeBtn"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-grid">
                                                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
                                            </svg>Overview 
                                        </button>
                                        <button id="detailedModeBtn" class="toggle-btn"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list-ul">
                                                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"></path>
                                            </svg>Detailed 
                                        </button>
                                    </div>
                                </div>

                                <!--High Level View-->
                                <div class="row g-3 high-level-detail">
                                    <div class="col-md-6" id="q1">
                                        <div class="lesson-card">
                                            <div class="lesson-content">
                                                <div class="d-flex justify-content-between align-items-start mb-3 quarter-lesson-header">
                                                    <div>
                                                        <h6>Quarter 1 <i class="bi bi-chevron-right"></i></h6>
                                                    </div>
                                                    <!-- <button class="view-details-btn">View Details</button> -->
                                                </div>
                                                <div class="lesson-progress-label">
                                                    <span>Quarter Progress</span>
                                                    <span>0%</span>
                                                </div>
                                                <div class="quarter-progress">
                                                    <div class="progress-bar quarter-progress-bar" id="q1-progress" style="width:0%;"></div>
                                                </div>
                                            </div>
                                            <div class="lesson-footer">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book me-2">
                                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                                    </svg>
                                                    <span id="q1Lesson">8 Lessons</span>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-down">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                </svg>
                                            </div>
                                            <div id="quarterLessonList" class="quarter-lesson-list">
                                                <div class="quarter-lesson-item">
                                                    <h6>Lesson 1: Introduction to Fractions</h6>
                                                    <p>Understand the basic concept of fractions and how they represent parts of a whole.</p>
                                                </div>
                                                <div class="quarter-lesson-item">
                                                    <h6>Lesson 2: Adding and Subtracting Fractions&nbsp;<span class="rounded-pill badge new-lesson-badge" style="font-size: 10px;">New</span></h6>
                                                    <p>Learn how to perform basic operations with fractions having like and unlike denominators.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="q2">
                                        <div class="lesson-card">
                                            <div class="lesson-content">
                                                <div class="d-flex justify-content-between align-items-start mb-3 quarter-lesson-header">
                                                    <div>
                                                        <h6>Quarter 2 <i class="bi bi-chevron-right"></i></h6>
                                                    </div>
                                                    <!-- <button class="view-details-btn">View Details</button> -->
                                                </div>
                                                <div class="lesson-progress-label">
                                                    <span>Quarter Progress</span>
                                                    <span>0%</span>
                                                </div>
                                                <div class="quarter-progress">
                                                    <div class="progress-bar" id="q2-progress" style="width:0%;"></div>
                                                </div>
                                            </div>
                                            <div class="lesson-footer">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book me-2">
                                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                                    </svg>
                                                    <span id="q2Lesson">8 Lessons</span>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-down">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                </svg>
                                            </div>
                                            <div id="quarterLessonList-1" class="quarter-lesson-list">
                                                <div class="quarter-lesson-item">
                                                    <h6>Lesson 1: Reproductive System&nbsp;<span class="rounded-pill badge new-lesson-badge" style="font-size: 10px;">New</span></h6>
                                                    <p>Understand the basic concept of fractions and how they represent parts of a whole.</p>
                                                </div>
                                                <div class="quarter-lesson-item">
                                                    <h6>Lesson 2: Adding and Subtracting Fractions&nbsp;<span class="rounded-pill badge new-lesson-badge" style="font-size: 10px;">New</span></h6>
                                                    <p>Learn how to perform basic operations with fractions having like and unlike denominators.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="q3">
                                        <div class="lesson-card">
                                            <div class="lesson-content">
                                                <div class="d-flex justify-content-between align-items-start mb-3 quarter-lesson-header">
                                                    <div>
                                                        <h6>Quarter 3 <i class="bi bi-chevron-right"></i></h6>
                                                    </div>
                                                    <!-- <button class="view-details-btn">View Details</button> -->
                                                </div>
                                                <div class="lesson-progress-label">
                                                    <span>Quarter Progress</span>
                                                    <span>0%</span>
                                                </div>
                                                <div class="quarter-progress">
                                                    <div class="progress-bar" id="q3-progress" style="width:0%;"></div>
                                                </div>
                                            </div>
                                            <div class="lesson-footer">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book me-2">
                                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                                    </svg>
                                                    <span id="q3Lesson">8 Lessons</span>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-down">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                </svg>
                                            </div>
                                            <div id="quarterLessonList-2" class="quarter-lesson-list">
                                                <div class="quarter-lesson-item">
                                                    <h6>Lesson 1: Introduction to Fractions</h6>
                                                    <p>Understand the basic concept of fractions and how they represent parts of a whole.</p>
                                                </div>
                                                <div class="quarter-lesson-item">
                                                    <h6>Lesson 2: Adding and Subtracting Fractions&nbsp;<span class="rounded-pill badge new-lesson-badge" style="font-size: 10px;">New</span></h6>
                                                    <p>Learn how to perform basic operations with fractions having like and unlike denominators.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="q4">
                                        <div class="lesson-card">
                                            <div class="lesson-content">
                                                <div class="d-flex justify-content-between align-items-start mb-3 quarter-lesson-header">
                                                    <div>
                                                        <h6>Quarter 4 <i class="bi bi-chevron-right"></i></h6>
                                                    </div>
                                                    <!-- <button class="view-details-btn">View Details</button> -->
                                                </div>
                                                <div class="lesson-progress-label">
                                                    <span>Quarter Progress</span>
                                                    <span>0%</span>
                                                </div>
                                                <div class="quarter-progress">
                                                    <div class="progress-bar" id="q4-progress" style="width:0%;"></div>
                                                </div>
                                            </div>
                                            <div class="lesson-footer">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book me-2">
                                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                                    </svg>
                                                    <span id="q4Lesson">8 Lessons</span>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-down">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                </svg>
                                            </div>
                                            <div id="quarterLessonList-3" class="quarter-lesson-list">
                                                <!-- <div id="noContent">
                                                    <p class="text-center text-muted p-3">No lessons uploaded for this quarter.</p>
                                                </div> -->
                                                <div class="quarter-lesson-item">
                                                    <h6>Lesson 2: Adding and Subtracting Fractions&nbsp;<span class="rounded-pill badge new-lesson-badge" style="font-size: 10px;">New</span></h6>
                                                    <p>Learn how to perform basic operations with fractions having like and unlike denominators.</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <!--Low Level View-->
                                <div class="low-level-detail">
                                    <div class="search-filter-bar"><input type="text" id="search-lessonInput" class="search-lesson-input" placeholder="Search lessons by title or description...">
                                        <select class="form-select-sm form-select" id="lesson-sortSelect">
                                            <option value="title-asc" selected="">Title (A-Z)</option>
                                            <option value="title-desc">Title (Z-A)</option>
                                            <option value="completion-desc">Completion (High-Low)</option>
                                            <option value="completion-asc">Completion (Low-High)</option>
                                        </select>
                                    </div>
                                    <div class="quarter-nav">
                                        <button class="active quarter-btn" data-quarter="1">Quarter 1</button>
                                        <button class="quarter-btn" data-quarter="2">Quarter 2</button>
                                        <button class="quarter-btn" data-quarter="3">Quarter 3</button>
                                        <button class="quarter-btn" data-quarter="4">Quarter 4</button></div>
                                    <div id="lessonLists">
                                        <!-- <div class="lesson-item" data-lesson-id="1">
                                            <div class="lesson-header">
                                                <h4>Lesson 1: Introduction to Fractions&nbsp;<span class="badge rounded-pill new-lesson-badge" style="font-size:10px;">New</span></h4>
                                            </div>
                                            <p class="lesson-description">Learn the basics of fractions, including numerators, denominators, and how to represent parts of a whole.</p>
                                            <div class="mt-2 progress-container">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <span class="progress-label">Student Completion</span>
                                                    <span class="progress-percentage">45%</span>
                                                </div>
                                                <div class="progress-bar-container">
                                                    <div class="progress-bar" role="progressbar" style="width:45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="mt-1 progress-stats">
                                                    <small class="text-muted">18 of 40 students completed</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lesson-item" data-lesson-id="2">
                                            <div class="lesson-header">
                                                <h4>Lesson 2: Adding and Subtracting Fractions&nbsp;<span class="badge rounded-pill new-lesson-badge" style="font-size:10px;">New</span></h4>
                                                <p class="lesson-description">Master adding and subtracting fractions with like and unlike denominators.</p>
                                            </div>
                                            <div class="mt-2 progress-container">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <span class="progress-label">Student Completion</span>
                                                    <span class="progress-percentage">80%</span>
                                                </div>
                                                <div class="progress-bar-container">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="mt-1 progress-stats">
                                                    <small class="text-muted">18 of 40 students completed</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lesson-item" data-lesson-id="3">
                                            <div class="lesson-header">
                                                <h4>Lesson 3: Multiplying Fractions</h4>
                                            </div>
                                            <p class="lesson-description">Learn how to multiply fractions and mixed numbers with step-by-step examples.</p>
                                            <div class="mt-2 progress-container">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <span class="progress-label">Student Completion</span>
                                                    <span class="progress-percentage">20%</span>
                                                </div>
                                                <div class="progress-bar-container">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="mt-1 progress-stats">
                                                    <small class="text-muted">18 of 40 students completed</small>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <!--Lesson Detail view-->
                            <div id="lessonDetailContainer" class="lesson-detail-container">
                                <div class="d-flex align-items-center detail-header">
                                    <button class="btn back-button" id="backButton" type="button">
                                        <svg class="bi bi-chevron-left" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewbox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path></svg>
                                    </button>
                                    <div>
                                        <h1 id="lessonTitle" class="detail-title">Lesson 3: Multiplying Fractions</h1>
                                        <p class="detail-subtitle"><span class="nav-quarter-link">Quarter 1:&nbsp;</span>Mathematics 4</p>
                                    </div>
                                </div>
                                <div class="lesson-tabs-container">
                                    <ul class="list-unstyled nav nav-tabs lesson-tab-btn" role="tablist">
                                        <li class="nav-item pupil-tab">
                                            <button class="btn active nav-link pupil-tab-btn" data-bs-toggle="tab" data-bs-target="#introduction">Introduction</button>
                                        </li>
                                        <li class="nav-item pupil-tab">
                                            <button class="btn nav-link pupil-tab-btn" data-bs-toggle="tab" data-bs-target="#materials">Materials</button>
                                        </li>
                                        <li class="nav-item pupil-tab">
                                            <button class="btn nav-link pupil-tab-btn" data-bs-toggle="tab" data-bs-target="#pretest">Pretest</button>
                                        </li>
                                        <li class="nav-item pupil-tab">
                                            <button class="btn nav-link pupil-tab-btn" data-bs-toggle="tab" data-bs-target="#posttest">Post Test</button>
                                        </li>
                                        <li class="nav-item pupil-tab">
                                            <button class="btn nav-link pupil-tab-btn" data-bs-toggle="tab" data-bs-target="#game">Game Preview</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content pupil-tab-content">
                                        <div id="introduction" class="tab-pane fade show active">
                                            <div class="intro-content">
                                                <p>This lesson will teach students how to multiply fractions. We'll start with simple examples and gradually move to more complex problems involving mixed numbers.</p>
                                                <p>By the end of this lesson, students will be able to:</p>
                                                <ul>
                                                    <li>Understand what it means to multiply fractions</li>
                                                    <li>Apply the multiplication algorithm correctly</li>
                                                    <li>Solve word problems involving fraction multiplication</li>
                                                    <li>Convert between improper fractions and mixed numbers when necessary</li>
                                                </ul>
                                                <p>This lesson aligns with Common Core Standard 4.NF.B.4: Apply and extend previous understandings of multiplication to multiply a fraction by a whole number.</p>
                                            </div>
                                        </div>
                                        <div id="materials" class="tab-pane fade">
                                            <h4 class="mb-3">Uploaded Materials</h4>
                                            <div class="materials-grid">
                                                <div class="material-card">
                                                    <div class="material-icon"><i class="bi bi-file-earmark-slides"></i></div>
                                                    <h5 class="material-title">Presentation Slides</h5>
                                                    <p class="material-info">PPTX • 5.7 MB • Updated: Mar 15, 2023</p>
                                                    <div class="material-actions">
                                                        <button class="btn btn-outline-primary btn-sm">Preview</button>
                                                        <button class="btn btn-primary btn-sm">Download</button>
                                                    </div>
                                                </div>
                                                <div class="material-card">
                                                    <div class="material-icon"><i class="bi bi-play-circle"></i></div>
                                                    <h5 class="material-title">Instructional Video</h5>
                                                    <p class="material-info">MP4 • 48 MB • Duration: 12:34</p>
                                                    <div class="material-actions">
                                                        <button class="btn btn-outline-primary btn-sm">Watch</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pretest" class="tab-pane fade">
                                            <div class="quiz-container">
                                                <div class="quiz-header">
                                                    <h3 class="quiz-title">Pre-test Quiz</h3>
                                                    <p class="quiz-info">5 questions • Multiple choice</p>
                                                </div>
                                                <div class="question-item">
                                                    <p class="question-text">1. What is the first step when multiplying fractions?</p>
                                                    <label class="answer-option"><input type="radio" name="q1" value="a"> Multiply the numerators </label>
                                                    <label class="answer-option"><input type="radio" name="q1" value="b"> Find a common denominator </label>
                                                    <label class="answer-option"><input type="radio" name="q1" value="c"> Convert to mixed numbers </label>
                                                    <label class="answer-option"><input type="radio" name="q1" value="d"> Simplify the fractions </label>
                                                    <button class="show-answer-btn" onclick="toggleAnswer(&#39;pretest-1&#39;)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                        </svg> Show Answer 
                                                    </button>
                                                    <div class="answer-reveal" id="pretest-4">
                                                        <h5>Correct Answer: A</h5>
                                                        <p>When multiplying fractions, the first step is to multiply the numerators together.</p>
                                                    </div>
                                                </div>
                                                <div class="question-item">
                                                    <p class="question-text">2. What is 1/2 × 1/3?</p>
                                                    <label class="answer-option"><input type="radio" name="q2" value="a"> 1/5 </label>
                                                    <label class="answer-option"><input type="radio" name="q2" value="b"> 2/5 </label>
                                                    <label class="answer-option"><input type="radio" name="q2" value="c"> 1/6 </label>
                                                    <label class="answer-option"><input type="radio" name="q2" value="d"> 2/6 </label>
                                                    <button class="show-answer-btn" onclick="toggleAnswer(&#39;pretest-2&#39;)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                        </svg> Show Answer 
                                                    </button>
                                                    <div class="answer-reveal" id="pretest-5">
                                                        <h5>Correct Answer: C</h5>
                                                        <p>1/2 × 1/3 = (1×1)/(2×3) = 1/6</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="posttest" class="tab-pane fade">
                                            <div class="quiz-container">
                                                <div class="quiz-header">
                                                    <h3 class="quiz-title">Post-test Quiz</h3>
                                                    <p class="quiz-info">8 questions • Multiple choice &amp; short answer</p>
                                                </div>
                                                <div class="question-item">
                                                    <p class="question-text">1. Calculate: 3/4 × 2/5</p>
                                                    <label class="answer-option"><input type="radio" name="pq1" value="a"> 5/9 </label>
                                                    <label class="answer-option"><input type="radio" name="pq1" value="b"> 6/20 </label>
                                                    <label class="answer-option"><input type="radio" name="pq1" value="c"> 3/10 </label>
                                                    <label class="answer-option"><input type="radio" name="pq1" value="d"> 5/20 </label>
                                                    <button class="show-answer-btn" onclick="toggleAnswer(&#39;posttest-1&#39;)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                        </svg> Show Answer 
                                                    </button>
                                                    <div class="answer-reveal" id="posttest-1">
                                                        <h5>Correct Answer: C</h5>
                                                        <p>3/4 × 2/5 = (3×2)/(4×5) = 6/20 = 3/10</p>
                                                    </div>
                                                </div>
                                                <div class="question-item" onclick="toggleAnswer(&#39;posttest-2&#39;)">
                                                    <p class="question-text">2. Solve: 2 1/2 × 3 1/3</p>
                                                    <div class="input-group mt-2">
                                                        <input class="form-control form-control" type="text" placeholder="Enter your answer (e.g., 8 1/3)">
                                                    </div>
                                                    <button class="show-answer-btn" style="margin-top:1rem;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                        </svg> Show Answer 
                                                    </button>
                                                    <div class="answer-reveal" id="posttest-2">
                                                        <h5>Correct Answer: 8 1/3</h5>
                                                        <p>2 1/2 × 3 1/3 = 5/2 × 10/3 = 50/6 = 25/3 = 8 1/3</p>
                                                    </div>
                                                </div>
                                                <div class="question-item">
                                                    <p class="question-text">3. If a recipe calls for 3/4 cup of sugar and you want to make half the recipe, how much sugar do you need?</p>
                                                    <label class="answer-option"><input type="radio" name="pq3" value="a"> 1/2 cup </label>
                                                    <label class="answer-option"><input type="radio" name="pq3" value="b"> 3/8 cup </label>
                                                    <label class="answer-option"><input type="radio" name="pq3" value="c"> 1/4 cup </label>
                                                    <label class="answer-option"><input type="radio" name="pq3" value="d"> 1/3 cup </label>
                                                    <button class="show-answer-btn" onclick="toggleAnswer(&#39;posttest-3&#39;)"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                        </svg>Show Answer 
                                                    </button>
                                                    <div class="answer-reveal" id="posttest-3">
                                                        <h5>Correct Answer: B</h5>
                                                        <p>3/4 × 1/2 = 3/8 cup</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="game" class="tab-pane fade">
                                            <div class="game-preview">
                                                <div class="game-icon"><i class="bi bi-controller"></i></div>
                                                <h3 class="game-title">Fraction Frenzy</h3>
                                                <p class="game-description">Help our math hero navigate through the Fraction Forest by solving multiplication problems to unlock bridges and collect power-ups!</p>
                                                <button class="preview-button"><i class="bi bi-play-circle"></i> Preview Game </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Analytics and Insights Section-->
                <section class="d-none content-section" id="analyticsection">
                    <div class="p-0 container-fluid">
                        <div class="analytics-header">
                            <h1 class="analytics-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up me-2">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"></path>
                                </svg>Analytics &amp; Insights
                            </h1>
                            <p class="analytics-subtitle">Comprehensive analysis of student performance and engagement</p>
                        </div>
                        <div class="metrics-container">
                            <div class="metric-card">
                                <div class="metric-icon performance">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bullseye">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12"></path>
                                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8"></path>
                                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"></path>
                                    </svg>
                                </div>
                                <div class="metric-content">
                                    <div class="metric-value"><span id="performanceValue"></span></div>
                                    <div class="metric-label"><span>Overall Performance</span></div>
                                    <div class="metric-sublabel"><span>Subject average peformance</span></div>
                                </div>
                                <div class="trend-indicator trend-up" id="performanceTrendWrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-up" id="performanceTrendIcon">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"></path>
                                    </svg>
                                    <span id="performanceTrendText">  </span>
                                </div>
                            </div>
                            <div class="metric-card">
                                <div class="metric-icon engagement">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                    </svg>
                                </div>
                                <div class="metric-content">
                                    <div class="metric-value"><span id="engagementValue"></span></div>
                                    <div class="metric-label"><span>Engagement Rate</span></div>
                                    <div class="metric-sublabel"><span>Students actively participating</span></div>
                                </div>
                                <div class="trend-indicator trend-up" id="engagementTrendWrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-up" id="engagementTrendIcon">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"></path>
                                    </svg>
                                    <span id="engagementTrendText">  </span>
                                </div>
                            </div>
                            <div class="metric-card">
                                <div class="metric-icon completion">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-award">
                                        <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"></path>
                                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"></path>
                                    </svg>
                                </div>
                                <div class="metric-content">
                                    <div class="metric-value"><span id="completionValue"></span></div>
                                    <div class="metric-label"><span>Completion Rate</span></div>
                                    <div class="metric-sublabel"><span>Lessons completed on time</span></div>
                                </div>
                                <div class="trend-indicator trend-down" id="completionTrendWrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-down" id="completionTrendIcon">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"></path>
                                    </svg>
                                    <span id="completionTrendText"> </span>
                                </div>
                            </div>
                            <div class="metric-card">
                                <div class="metric-icon time">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                    </svg>
                                </div>
                                <div class="metric-content">
                                    <div class="metric-value"><span id="studyTimeValue"></span></div>
                                    <div class="metric-label"><span>Avg. Study Time</span></div>
                                    <div class="metric-sublabel"><span>Per student per day</span></div>
                                </div>
                                <div class="trend-indicator trend-up" id="studyTrendWrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-up" id="studyTrendIcon">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"></path>
                                    </svg>
                                    <span id="studyTrendText"> </span>
                                </div>
                            </div>
                        </div>

                        <!--Pupil Performance Filtering -->
                        <div class="mb-3 pupil-search-filter-bar">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-4 mb-2 mb-lg-0">
                                    <input type="text" id="searchInput" class="pupil-search-lesson-input" placeholder="Search student, subject, section...">
                                </div>
                                <div class="col-12 col-lg-8">
                                     <div class="row g-2 pupil-filters-group">
                                        <div class="col-12 col-sm-2" style="display: none;">
                                            <select class="form-select-sm form-select" id="pupilSubjectFilter">
                                                <option value="">All Subjects</option>
                                                <option value="">Mathematics</option>
                                                <option value="">Science</option>
                                                <option value="">English</option>
                                                <option value="">Filipino</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-2" style="display: none;">
                                            <select class="form-select-sm form-select" id="sectionFilter">
                                                <optgroup label="Sort by:">
                                                    <option value="">All Sections</option>
                                                    <option value="">Grade 7-A</option>
                                                    <option value="">Grade 7-B</option>
                                                    <option value="">Grade 8-C</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <select class="form-select-sm form-select" id="pupilTimeRangeFilter">
                                                <optgroup label="Sort by:">
                                                    <option value="">Default</option>
                                                    <option value="month">This Month</option>
                                                    <option value="week">This Week</option>
                                                    <option value="quarter">This Quarter</option>
                                                    <option value="year">This Year</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <select class="form-select-sm form-select" id="performanceFilter">
                                                <optgroup label="Sort by:">
                                                    <option value="">All Peformance</option>
                                                    <option value="Excellent">Excellent</option>
                                                    <option value="Good">Good</option>
                                                    <option value="Needs Attention">Needs Attention</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <select class="form-select-sm form-select" id="sortByName">
                                                <optgroup label="Sort by:">
                                                    <option value="">Default</option>
                                                    <option value="asc">Name (A-Z)</option>
                                                    <option value="desc">Name (Z-A)</option>
                                                    <option value="oldest">Oldest</option>
                                                    <option value="newest">Newest</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-3 ">
                                            <button class="btn btn-outline-secondary btn-sm w-100 reset-btn" id="resetFilters" type="button"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-clockwise me-1">
                                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"></path>
                                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"></path>
                                                </svg>Reset 
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pupil Performance Table-->
                        <div class="mb-3 pupil-list card">
                            <div class="card-header list-header">
                                <h2>Pupil Performance Tracking</h2>
                            </div>
                            <div class="mb-2 table-responsive table-list-users">
                                <div>
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Student</th>
                                                <th>Section</th>
                                                <th>Avg mastery</th>
                                                <th>Progress</th>
                                                <th>Time spent</th>
                                                <th>Bagdes</th>
                                                <th>Status</th>
                                                <th>&nbsp;Trend</th>
                                            </tr>
                                        </thead>
                                        <tbody id="studentsTbody">
                                            <tr data-active="false">
                                                <td></td>
                                                <td data-label="Student"></td>
                                                <td data-label="Section"></td>
                                                <td data-label="Avg. Score"></td>
                                                <td data-label="Progress"></td>
                                                <td data-label="Last Score"></td>
                                                <td data-label="Time Spent"></td>
                                                <td data-label="Badges"></td>
                                                <td data-label="Status"></td>
                                                <td data-label="Trend"></td>
                                            </tr>
                                            <tr data-active="true">
                                                <td></td>
                                                <td data-label="Student"></td>
                                                <td data-label="Section"></td>
                                                <td data-label="Section"></td>
                                                <td data-label="Progress"></td>
                                                <td data-label="Last Score"></td>
                                                <td data-label="Last Score"></td>
                                                <td data-label="Badges"></td>
                                                <td data-label="Status"></td>
                                                <td data-label="Trend"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="text-center text-muted p-4" id="noResultsFound" style="display:none;">
                                <span> No matching results found.</span>
                            </div>
                            <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                                <div class="text-muted small">
                                    <span> Showing </span>
                                    <span id="startCount-2">1</span>
                                    <span> to </span><span id="endCount-2">3</span>
                                    <span> of </span><span id="totalCount-2">50</span>
                                    <span> users </span>
                                </div>
                                <nav aria-label="User list pagination">
                                    <ul class="mb-0 pagination pagination-sm">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!--Lesson Progress Chart - Line Chart-->
                        <div class="mb-4 chart-card">
                            <div class="chart-header">
                                <div class="chart-header-content">
                                    <h4 class="chart-title">Lesson Progress Trends</h4>
                                    <p class="chart-subtitle">Track lesson performance across all lessons and subjects over time.&nbsp;</p>
                                </div>
                                <div class="chart-filters">
                                    <select class="form-select-sm form-select" id="subjectView">
                                        <option value="all" selected="">All Subject</option>
                                        <option value="mathematics">Mathematics</option>
                                        <option value="english">English</option>
                                        <option value="science">Science</option>
                                        <option value="filipino">Filipino</option>
                                    </select>
                                    <select class="form-select-sm form-select" id="quarterFilter">
                                        <option value="1" selected="">Quarter 1</option>
                                        <option value="2">Quarter 2</option>
                                        <option value="3">Quarter 3</option>
                                        <option value="4">Quarter 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="line-bar-radar-container"><canvas id="lessonProgressChart"></canvas></div>
                            <div class="chart-insights" id="chartInsights">
                                <span> No data to display. </span>
                            </div>
                        </div>
                        <div class="bar-radar-row">

                            <!--Bar Graph - Quarterly Performance-->
                            <div class="chart-card">
                                <div class="chart-header">
                                    <div class="chart-header-content">
                                        <h4 class="chart-title">Quarter Comparison</h4>
                                        <p class="chart-subtitle">Compare performance across all quarters</p>
                                    </div>
                                    <div class="chart-filters">
                                        <select class="form-select-sm form-select" id="bar-subjectView">
                                            <option value="all" selected="">All Subject</option> 
                                            <option value="mathematics">Mathematics</option> 
                                            <option value="english">English</option> 
                                            <option value="science">Science</option> 
                                            <option value="filipino">Filipino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="line-bar-radar-container"><canvas id="quarterComparisonChart"></canvas></div>
                                <div id="bar-chartInsights" class="chart-insights">
                                    <span> No data available </span>
                                </div>
                            </div>

                            <!--Radar Chart - Engagement vs Mastery-->
                             
                        </div>

                        <!--Insights-->
                        <div class="insights-container">
                            <div class="insights-header">
                                <h4 class="insight-main-title">Overall Insights</h4>
                            </div>
                            <div class="insight-card strong-performance">
                                <div class="insight-content">
                                    <div class="insight-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up-arrow">
                                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"></path>
                                        </svg>
                                    </div>
                                    <div class="insight-text">
                                        <div class="insight-title"><span>Strongest Subject Performance</span></div>
                                        <div class="insight-description">
                                            <span> No data to display</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="insight-card focus-area">
                                <div class="insight-content">
                                    <div class="insight-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bullseye">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12"></path>
                                            <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8"></path>
                                            <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"></path>
                                        </svg>
                                    </div>
                                    <div class="insight-text">
                                        <div class="insight-title"><span>Focus Area</span></div>
                                        <div class="insight-description">
                                            <span> No data available to determine focus area. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="insight-card progressive-improvement">
                                <div class="insight-content">
                                    <div class="insight-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-up">
                                            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"></path>
                                        </svg>
                                    </div>
                                    <div class="insight-text">
                                        <div class="insight-title"><span>Progressive Improvement Trend</span></div>
                                        <div class="insight-description">
                                            <span>No data available to analyze progressive improvement.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Pupil Management Section-->
                <section class="d-none content-section" id="pupilsection">
                    <div class="p-0 container-fluid">
                        <div class="pupils">
                            <div class="pupil-header">
                                <div class="d-flex flex-column justify-content-between gap-3 flex-sm-row">
                                    <h1 class="d-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                                        </svg>Pupil Management
                                    </h1>
                                    <button class="btn create-section-btn" id="createSectionBtn" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-lg">
                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path>
                                        </svg>Create Section
                                    </button>
                                </div>
                                <p class="mb-2">Manage pupils, filter, search, and export user list.</p>
                                <div id="sectionsContainer">
                                    <div class="sections-header-container">
                                        <div class="sections-header"><span>Your Sections</span></div>
                                        <div class="section-mode-toggle">
                                            <button class="btn" id="viewCardsBtn" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-grid">
                                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
                                                </svg>Cards
                                            </button>
                                            <button class="btn" id="viewListBtn" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list-ul">
                                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"></path>
                                                </svg>Lists
                                            </button>
                                        </div>
                                    </div>
                                    <div class="sections-wrapper">
                                        <div id="sectionsGrid" class="sections-grid cards-view"></div>
                                        <button class="btn show-all-btn" id="showAllBtn" type="button" style="display:none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-down showAllIcon">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                            </svg>
                                            <span id="showAllText">Show All</span>
                                        </button>
                                    </div>
                                </div>
                                <div id="advancedFilters" class="pupil-search-filter-bar">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6 mb-2 mb-lg-0"><input type="text" id="pupil-search" class="pupil-search-lesson-input" placeholder="Search here..."></div>
                                        <div class="col-12 col-lg-6">
                                            <div class="row g-2 pupil-filters-group">
                                                <div class="col-12 col-sm-4">
                                                    <select class="form-select-sm form-select" id="pupilStatusFilter">
                                                        <optgroup label="Status">
                                                            <option value="all">All</option>
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <select class="form-select-sm form-select" id="pupilSort">
                                                        <optgroup label="Sort by:">
                                                            <option value="asc">A-Z</option>
                                                            <option value="desc">Z-A</option>
                                                            <option value="newest">Newest</option>
                                                            <option value="oldest">Oldest</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <button class="btn btn-outline-secondary btn-sm w-100 reset-btn" type="button"> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-clockwise me-1">
                                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"></path>
                                                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"></path>
                                                        </svg>Reset 
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pupil-list card">
                                <div class="card-header list-header">
                                    <h2>Pupil List</h2>
                                    <div class="section-actions">
                                        <button class="btn btn-outline-secondary btn-sm export-btn" id="exportBtn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-download me-1">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                            </svg> Export 
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-2 table-responsive table-list-users">
                                    <div>
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Profile</th>
                                                    <th>Name</th>
                                                    <!--<th>LRN/th>-->
                                                    <th>Grade</th>
                                                    <!--<th>Age</th>-->
                                                    <th>Status</th>
                                                    <th>Email</th>
                                                    <th>Section</th>
                                                    <th>Last Active</th>
                                                    <!--<th>Action</th>-->
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id="userTableBody">
                                                <!-- User rows will be dynamically populated here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-center text-muted p-4" id="noResults" style="display:none;"><span> No matching results found.</span></div>
                                <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                                    <div class="text-muted small">
                                        <span> Showing </span>
                                        <span id="startCount">1</span>
                                        <span> to </span><span id="endCount">3</span>
                                        <span> of </span><span id="totalCount">50</span>
                                        <span> users </span>
                                    </div>
                                    <nav aria-label="User list pagination">
                                        <ul class="mb-0 pagination pagination-sm" id="pupilListPagination">
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
                        </div>
                    </div>
                </section>

                <!--Enrollment Requests Modal-->
                <div class="modal fade enrollment-modal" role="dialog" tabindex="-1" id="viewAllEnrollmentReq">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                        <div class="modal-content teacher-modal-content">
                            <div class="modal-header teacher-modal-header">
                                <h6 class="modal-title">Enrollment Request</h6>
                                <button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body teacher-modal-body">
                                <div class="mb-3">
                                    <div id="advancedFilters-1" class="pupil-search-filter-bar">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-6 mb-2 mb-lg-0"><input type="text" id="searchInputEnrollment" class="pupil-search-lesson-input" placeholder="Search name or LRN"></div>
                                            <div class="col-12 col-lg-6">
                                                <div class="row g-2 pupil-filters-group">
                                                    <div class="col-12 col-sm-6">
                                                        <select class="form-select-sm form-select" id="sortSelectEnrollment">
                                                            <optgroup label="Sort by:">
                                                                <option value="newest">Newest First</option>
                                                                <option value="oldest">Oldest First</option>
                                                                <option value="name-asc">Name (A-Z)</option>
                                                                <option value="name-desc">Name (Z-A)</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <button class="btn btn-outline-secondary btn-sm w-100 reset-btn" id="clearAllFilter" type="button"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-clockwise me-1">
                                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"></path>
                                                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"></path>
                                                            </svg>Reset 
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="enrollment-list">
                                    <div class="justify-content-between align-items-end gap-2 enrollment-control-row">
                                        <div class="d-flex align-items-center flex-wrap gap-2 p-3">
                                            <div class="d-flex select-group">
                                                <input class="me-2 form-check-input" type="checkbox" id="selectAll">
                                                <label class="form-check-label" for="selectAll">Select All</label>
                                            </div>
                                            <div class="d-flex gap-2 enrollment-action-buttons">
                                                <button class="btn batch-approve" id="batchApproveBtn"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                    </svg>Approve Selected
                                                    <span id="selectedCountApprove">(0)</span>
                                                </button>
                                                <button class="btn batch-decline" id="batchDeclineBtn"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                    </svg>Decline Selected
                                                    <span id="selectedCountDecline">(0)</span> 
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="enrollment-item">
                                        <div class="pupil-information"><input type="checkbox" class="select-item form-check-input">
                                            <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/10.png') }}"></div>
                                            <div class="pupil-details">
                                                <h5>Maria Anna&nbsp;<span class="text-dark bg-warning badge enrollment-status-badge">Pending</span></h5>
                                                <p>LRN: 113456678563</p>
                                                <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">May 12, 2024 · 2:30 PM</span></small></p>
                                            </div>
                                        </div>
                                        <div class="teacher-actions">
                                            <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-decline" data-action="decline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="enrollment-item">
                                        <div class="pupil-information"><input type="checkbox" class="select-item form-check-input">
                                            <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/5.png') }}"></div>
                                            <div class="pupil-details">
                                                <h5>Kia Ysabel&nbsp;<span class="text-dark bg-warning badge enrollment-status-badge">Pending</span></h5>
                                                <p>LRN: 112456678563</p>
                                                <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">Jan 12, 2024 · 2:30 PM</span></small></p>
                                            </div>
                                        </div>
                                        <div class="teacher-actions">
                                            <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-decline" data-action="decline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="enrollment-item">
                                        <div class="pupil-information"><input type="checkbox" class="select-item form-check-input">
                                            <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/11.png') }}"></div>
                                            <div class="pupil-details">
                                                <h5>Keyan Dollesin&nbsp;<span class="text-dark bg-warning badge enrollment-status-badge">Pending</span></h5>
                                                <p>LRN: 112456678563</p>
                                                <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">May 12, 2023 · 2:30 PM</span></small></p>
                                            </div>
                                        </div>
                                        <div class="teacher-actions">
                                            <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-decline" data-action="decline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="enrollment-item">
                                        <div class="pupil-information"><input type="checkbox" class="select-item form-check-input">
                                            <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/8.png') }}"></div>
                                            <div class="pupil-details">
                                                <h5>Maria Anna&nbsp;<span class="text-dark bg-warning badge enrollment-status-badge">Pending</span></h5>
                                                <p>LRN: 112456678563</p>
                                                <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">Apr 12, 2024 · 2:30 PM</span></small></p>
                                            </div>
                                        </div>
                                        <div class="teacher-actions">
                                            <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-decline" data-action="decline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="enrollment-item">
                                        <div class="pupil-information"><input type="checkbox" class="select-item form-check-input">
                                            <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/9.png') }}"></div>
                                            <div class="pupil-details">
                                                <h5>Maria Anna&nbsp;<span class="text-dark bg-warning badge enrollment-status-badge">Pending</span></h5>
                                                <p>LRN: 112456678563</p>
                                                <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">Dec 12, 2023 · 2:30 PM</span></small></p>
                                            </div>
                                        </div>
                                        <div class="teacher-actions">
                                            <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-decline" data-action="decline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="enrollment-item">
                                        <div class="pupil-information"><input type="checkbox" class="select-item form-check-input">
                                            <div class="pupil-profile"><img class="img-fluid" width="200" height="200" src="{{ asset('TeacherSide/assets/img/6.png') }}"></div>
                                            <div class="pupil-details">
                                                <h5>Maria Anna&nbsp;<span class="text-dark bg-warning badge enrollment-status-badge">Pending</span></h5>
                                                <p>LRN: 112456678563</p>
                                                <p class="text-muted mb-0"><small>Submitted: <span class="submission-time" data-timestamp="2024-05-12T14:30:00">May 12, 2024 · 2:30 PM</span></small></p>
                                            </div>
                                        </div>
                                        <div class="teacher-actions">
                                            <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-approve" data-action="approve" data-pupil="Maria Anna">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-to-decline" data-action="decline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-center text-muted mt-3 no-results" style="display:none;">
                                        <span>No matching results found.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Open View Details of Pupil Modal - Enrollment Section-->
                <div class="modal fade" role="dialog" tabindex="-1" id="openViewPupilModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable view-pupil-details-modal" role="document">
                        <div class="modal-content teacher-modal-content">
                            <div class="modal-header teacher-modal-header">
                                <h6 class="modal-title">Enrollment Request Details</h6>
                                <button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal" style="font-size: 12px;"></button>
                            </div>
                            <div class="modal-body teacher-modal-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="view-pupil-profile-header">
                                            <img class="img-fluid view-pupil-profile-img" width="200" height="200" src="{{ asset('TeacherSide/assets/img/2.png') }}">
                                            <div class="view-pupil-profile-name-container">
                                                <h1 class="m-0 view-pupil-profile-name">John Doe</h1>
                                                <span class="view-pupil-lrn">LRN: 123456789013</span>
                                            </div>
                                            <div class="mb-3 view-pupil-profile-meta">
                                                <span class="view-pupil-profile-badge">7 Y/O</span>
                                                <span class="view-pupil-profile-badge">Male</span>
                                            </div>
                                            <div class="view-pupil-status">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock me-1">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                                    </svg>Pending Approval
                                                </span>
                                            </div>
                                        </div>
                                        <div class="view-pupil-info-card">
                                            <div class="view-pupil-info-card-header">
                                                <h6>Contact Information</h6>
                                            </div>
                                            <div class="view-pupil-info-card-body">
                                                <div class="view-pupil-info-row">
                                                    <div class="view-info-label"><span>Email</span></div>
                                                    <div class="view-info-value"><span>john@example.com</span></div>
                                                </div>
                                                <div class="view-pupil-info-row">
                                                    <div class="view-info-label"><span>Phone Number</span></div>
                                                    <div class="view-info-value"><span>+63975272947</span></div>
                                                </div>
                                                <div class="view-pupil-info-row">
                                                    <div class="view-info-label"><span>Hometown</span></div>
                                                    <div class="view-info-value"><span>Pilar, Sorsogon</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="view-pupil-info-card">
                                                    <div class="view-pupil-info-card-header">
                                                        <h6>Personal information</h6>
                                                    </div>
                                                    <div class="view-pupil-info-card-body">
                                                        <div class="view-pupil-info-row">
                                                            <div class="view-info-label"><span>Full Name</span></div>
                                                            <div class="view-info-value"><span>John Doe Gonzales</span></div>
                                                        </div>
                                                        <div class="view-pupil-info-row">
                                                            <div class="view-info-label"><span>Date of Birth</span></div>
                                                            <div class="view-info-value"><span>March 10, 2004</span></div>
                                                        </div>
                                                        <div class="view-pupil-info-row">
                                                            <div class="view-info-label"><span>Nationality</span></div>
                                                            <div class="view-info-value"><span>Filipino</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="view-pupil-info-card">
                                                    <div class="view-pupil-info-card-header">
                                                        <h6>Academic Information</h6>
                                                    </div>
                                                    <div class="view-pupil-info-card-body">
                                                        <div class="view-pupil-info-row">
                                                            <div class="view-info-label"><span>School</span></div>
                                                            <div class="view-info-value"><span>Pilar, Elementary School</span></div>
                                                        </div>
                                                        <div class="view-pupil-info-row">
                                                            <div class="view-info-label"><span>Grade Level&nbsp;</span></div>
                                                            <div class="view-info-value"><span>4</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view-pupil-info-card">
                                            <div class="view-pupil-info-card-header">
                                                <h6>Parent/Guardian information</h6>
                                            </div>
                                            <div class="view-pupil-info-card-body">
                                                <div class="view-pupil-info-row">
                                                    <div class="view-info-label"><span>Parent/Guardian Name</span></div>
                                                    <div class="view-info-value"><span>Jose Gonzales</span></div>
                                                </div>
                                                <div class="view-pupil-info-row">
                                                    <div class="view-info-label"><span>Relationship to Pupil</span></div>
                                                    <div class="view-info-value"><span>Mother</span></div>
                                                </div>
                                                <div class="view-pupil-info-row">
                                                    <div class="view-info-label"><span>Parent Contact</span></div>
                                                    <div class="view-info-value"><span>+63 912 345 6789</span></div>
                                                </div>
                                                <div class="view-pupil-info-row">
                                                    <div class="view-info-label"><span>Parent Email</span></div>
                                                    <div class="view-info-value"><span>maria.santos@email.com</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer teacher-footer">
                                <button class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x me-1">
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
                                    </svg>Cancel
                                </button>
                                <button class="btn btn-sm btn-to-decline2" data-action="decline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg me-1">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                                    </svg>Decline
                                </button>
                                <button class="btn btn-sm btn-to-approve2" data-action="approve"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2 me-1">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                    </svg>Approve
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--View All Top Performers Modal-->
                <div class="modal fade modal-full-list" role="dialog" tabindex="-1" id="viewAllTopPerformers" data-label="Pupil">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                        <div class="modal-content teacher-modal-content">
                            <div class="modal-header teacher-modal-header">
                                <h6 class="modal-title">Top Performers -&nbsp;<span id="modalRangeTitle">Today</span>&nbsp;</h6>
                                <button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body teacher-modal-body">
                                <div class="d-flex gap-2 mb-3 modal-performer-search">
                                    <input type="text" id="performerSearchInput" class="searchPupilPerformer" placeholder="Search pupil name...">
                                    <div class="perform-sort">
                                        <select class="form-select-sm form-select" id="performerSort">
                                            <optgroup label="Sort By:">
                                                <option value="score" selected="">Highest Score</option>
                                                <option value="improvement">Most Improved</option>
                                                <option value="attempts">Most attempts</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>pupil</th>
                                                <th>Latest Activity</th>
                                                <th>avg</th>
                                                <th>improvement</th>
                                                <th>attempts</th>
                                                <th>completion Rate</th>
                                                <th>trend</th>
                                            </tr>
                                        </thead>
                                        <tbody id="performerTableBody">
                                            <tr>
                                                <td data-label="Rank">1</td>
                                                <td data-label="Pupil">Noah Williams</td>
                                                <td data-label="Last Activity">Photosynthesis Quiz</td>
                                                <td data-label="AVG" data-score="92">92%</td>
                                                <td data-label="Improvement" data-improvement="4">+4%</td>
                                                <td data-label="Attempts" data-attempts="3">3</td>
                                                <td data-label="Completion Rate">100%</td>
                                                <td data-label="Trend">
                                                    <svg class="w-100" width="70" height="26" viewBox="0 0 70 26" preserveAspectRatio="none"><polyline points="0,24 35,20 70,2" fill="none" stroke="rgba(67,97,238,0.85)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></polyline></svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Rank">2</td>
                                                <td data-label="Pupil">Rica Estolas</td>
                                                <td data-label="Last Activity">Games</td>
                                                <td data-label="AVG" data-score="89">89%</td>
                                                <td data-label="Improvement" data-improvement="6">+6%</td>
                                                <td data-label="Attempts" data-attempts="4">4</td>
                                                <td data-label="Completion Rate">100%</td>
                                                <td data-label="Trend">
                                                    <svg class="w-100" width="70" height="26" viewBox="0 0 70 26" preserveAspectRatio="none"><polyline points="0,24 35,12 70,2" fill="none" stroke="rgba(67,97,238,0.85)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></polyline></svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Rank">3</td>
                                                <td data-label="Pupil">Wendee Diane</td>
                                                <td data-label="Last Activity">Lesson 3 Reproductive System</td>
                                                <td data-label="AVG" data-score="86">86%</td>
                                                <td data-label="Improvement" data-improvement="-1">-1%</td>
                                                <td data-label="Attempts" data-attempts="1">1</td>
                                                <td data-label="Completion Rate">100%</td>
                                                <td data-label="Trend">
                                                    <svg class="w-100" width="70" height="26" viewBox="0 0 70 26" preserveAspectRatio="none"><polyline points="0,19 35,24 70,2" fill="none" stroke="rgba(67,97,238,0.85)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></polyline></svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Rank">4</td>
                                                <td data-label="Pupil">Jennifer Lopez</td>
                                                <td data-label="Last Activity">Parts of Plant Quiz</td>
                                                <td data-label="AVG" data-score="80">80%</td>
                                                <td data-label="Improvement" data-improvement="12">+12%</td>
                                                <td data-label="Attempts" data-attempts="3">3</td>
                                                <td data-label="Completion Rate">100%</td>
                                                <td data-label="Trend">
                                                    <svg class="w-100" width="70" height="26" viewBox="0 0 70 26" preserveAspectRatio="none"><polyline points="0,24 35,12 70,2" fill="none" stroke="rgba(67,97,238,0.85)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></polyline></svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Rank">5</td>
                                                <td data-label="Pupil">Jane Rose</td>
                                                <td data-label="Last Activity">Pretest</td>
                                                <td data-label="AVG" data-score="79">79%</td>
                                                <td data-label="Improvement" data-improvement="4">+4%</td>
                                                <td data-label="Attempts" data-attempts="3">3</td>
                                                <td data-label="Completion">100%</td>
                                                <td data-label="Trend">
                                                    <svg class="w-100" width="70" height="26" viewBox="0 0 70 26" preserveAspectRatio="none"><polyline points="0,24 35,12 70,2" fill="none" stroke="rgba(67,97,238,0.85)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></polyline></svg>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center text-muted d-none p-4" id="noAtRiskResults">
                                    <span>No matching results found.</span>
                                </div>
                                <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                                    <div class="text-muted small">
                                        <span> Showing </span>
                                        <span id="startCount-1">1</span>
                                        <span> to </span>
                                        <span id="endCount-1">3</span>
                                        <span> of </span><span id="totalCount-1">50</span>
                                    </div>
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
                        </div>
                    </div>
                </div>

                <!--View Pupil Modal - Pupil Management Section-->
                <div class="modal fade" role="dialog" tabindex="-1" id="viewPupilModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable viewpupil-modal-dialog" role="document">
                        <div class="modal-content teacher-modal-content">
                            <div class="modal-header teacher-modal-header">
                                <div>
                                    <h5 class="modal-title">Pupil Details</h5>
                                    <p class="text-light small" id="pupilProfileLRN" style="display:none;"></p>
                                </div>
                                <!-- <button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal" style="font-size: 12px;"></button> -->
                            </div>
                            <div class="modal-body pupil-modal-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="profile-header">
                                            <img class="img-fluid profile-img" id="pupilProfileImg" width="200" height="200">
                                            <div class="profile-name-container">
                                                <h1 class="profile-name" id="pupilProfileName"></h1>
                                                <span class="status-dot online"></span>
                                            </div>
                                            <div class="profile-meta">
                                                <span class="profile-badge">Grade 4</span>
                                                <span class="profile-badge" id="badgeAge"></span>
                                                <span class="profile-badge" id="badgeGender"></span></div>
                                        </div>
                                        <div class="pupil-info-card">
                                            <div class="pupil-info-card-header">
                                                <h6>Contact Information</h6>
                                            </div>
                                            <div class="pupil-info-card-body">
                                                <div class="pupil-info-row">
                                                    <div class="info-label"><span>Email</span></div>
                                                    <div class="info-value" id="pupilEmail"><span>john@example.com</span></div>
                                                </div>
                                                <!-- <div class="pupil-info-row">
                                                    <div class="info-label"><span>Contact Number</span></div>
                                                    <div class="info-value"><span>+689 7472 472 2847</span></div>
                                                </div> -->
                                                <div class="pupil-info-row">
                                                    <div class="info-label"><span>Section</span></div>
                                                    <div class="info-value" id="badgeSection"><span></span></div>
                                                </div>
                                                <!-- <div class="pupil-info-row">
                                                    <div class="info-label"><span>Parent</span></div>
                                                    <div class="info-value"><span>Ana Bell</span></div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="pupil-info-card">
                                            <div class="pupil-info-card-header">
                                                <h6>Personal Information</h6>
                                            </div>
                                            <div class="pupil-info-card-body">
                                                <div class="pupil-info-row">
                                                    <div class="info-label"><span>Date of Birth</span></div>
                                                    <div class="info-value" id="badgeBirthDate"><span></span></div>
                                                </div>
                                                <div class="pupil-info-row">
                                                    <div class="info-label"><span>Enrolled</span></div>
                                                    <div class="info-value" id="pupilEnrollmentDate"><span></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pupil-info-card">
                                            <div class="pupil-info-card-header">
                                                <h6>accumulated stars</h6>
                                            </div>
                                            <div class="pupil-info-card-body">
                                                <div class="stars-grid">
                                                    <div class="text-warning star-item"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg></div>
                                                    <div class="text-warning star-item"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg></div>
                                                    <div class="text-warning star-item"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg></div>
                                                    <div class="text-warning star-item"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg></div>
                                                    <div class="text-warning star-item"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg></div>
                                                    <div class="text-warning star-item"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg></div>
                                                    <div class="text-warning star-item"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg></div>
                                                    <div class="text-warning star-item"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg></div>
                                                    <div class="text-warning star-item"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg></div>
                                                    <div class="text-warning star-item more-star"><svg class="bi bi-star-fill text-warning" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg><span class="more-badge">3+</span></div>
                                                </div>
                                                <div class="encouragement-banner" id="starLable"><span>30 stars earned</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 pupil-tabs-container">
                                        <ul class="list-unstyled nav nav-tabs pupil-tabs">
                                            <li class="nav-item pupil-tab">
                                                <button class="btn active nav-link pupil-tab-btn" data-bs-toggle="tab" data-bs-target="#overview">Overview</button>
                                            </li>
                                            <li class="nav-item pupil-tab">
                                                <button class="btn nav-link pupil-tab-btn" data-bs-toggle="tab" data-bs-target="#academic">Analytic Performance</button>
                                            </li>
                                            <li class="nav-item pupil-tab">
                                                <button class="btn nav-link pupil-tab-btn" data-bs-toggle="tab" data-bs-target="#assessments">Assessments</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content pupil-tab-content">
                                            <div id="overview" class="tab-pane fade active show">
                                                <div class="pupil-info-card">
                                                    <div class="pupil-info-card-header">
                                                        <h6>Performance Summary</h6>
                                                        <p class="text-muted mb-0 small">Compared to last month</p>
                                                    </div>
                                                    <div class="p-0 pupil-info-card-body">
                                                        <div class="row g-0 performance-stats-grid">
                                                            <div class="col-6 col-md-3 stats-item border-end border-bottom" id="avgMasteryCard">
                                                                <div class="d-flex h-100 flex-column p-3">
                                                                    <small class="text-muted">Avg. Mastery</small>
                                                                    <div class="mt-1">
                                                                        <span class="fw-bold mb-0 h5" id="avgMasteryValue">87%</span>
                                                                        <span class="ms-1 trend up" id="avgMasteryTrend">▲ 4%</span>
                                                                    </div>
                                                                    <small class="text-success mt-1 stats-comment" id="avgMasteryStatus">Improving</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-md-3 stats-item border-end border-bottom" id="engagementCard">
                                                                <div class="d-flex h-100 flex-column p-3">
                                                                    <small class="text-muted">Engagement&nbsp;</small>
                                                                    <div class="mt-1">
                                                                        <span class="fw-bold mb-0 h5" id="engagementValue">92%</span>
                                                                        <span class="ms-1 trend up" id="engagementTrend">▲ 2%</span>
                                                                    </div>
                                                                    <small class="text-success mt-1 stats-comment" id="engagementStatus">Active</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-md-3 stats-item border-end border-bottom" id="avgSessionCard">
                                                                <div class="d-flex h-100 flex-column p-3">
                                                                    <small class="text-muted">Avg. Session</small>
                                                                    <div class="mt-1">
                                                                        <span class="fw-bold mb-0 h5" id="avgSessionValue">22 min</span>
                                                                        <span class="ms-1 trend down" id="avgSessionTrend">▼ 1 min</span>
                                                                    </div>
                                                                    <small class="text-warning mt-1 stats-comment" id="avgSessionStatus">Slight Dip</small>
                                                                </div>
                                                            </div> 
                                                            <div class="col-6 col-md-3 stats-item border-end border-bottom" id="badgesCard">
                                                                <div class="d-flex h-100 flex-column p-3">
                                                                    <small class="text-muted">Badges Earned</small>
                                                                    <div class="mt-1">
                                                                        <span class="fw-bold mb-0 h5" id="badgesValue">7</span>
                                                                        <span class="ms-1 trend up" id="badgesTrend">▲ 2</span>
                                                                    </div>
                                                                    <small class="text-success mt-1 stats-comment" id="badgesStatus">Motivated</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pupil-info-card">
                                                    <div class="pupil-info-card-header">
                                                        <h6>Recent Activity</h6>
                                                    </div>
                                                    <!-- <div class="pupil-info-card-body">
                                                        <div class="recent">
                                                            <div class="pupil-activity-item">
                                                                <span class="me-2 badge badge-warning">Achievement</span>
                                                                <div class="pupil-activity-content">
                                                                    <p class="pupil-activity-title">Earned "Wow Badge".</p>
                                                                    <p class="text-muted pupil-activity-timestamp small">Today</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="recent">
                                                            <div class="pupil-activity-item">
                                                                <span class="me-2 badge badge-success">Completed</span>
                                                                <div class="pupil-activity-content">
                                                                    <p class="pupil-activity-title">Completed Lesson 2 Quiz.</p>
                                                                    <p class="text-muted pupil-activity-timestamp small">Today</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="recent">
                                                            <div class="pupil-activity-item">
                                                                <span class="me-2 badge badge-success">Completed</span>
                                                                <div class="pupil-activity-content">
                                                                    <p class="pupil-activity-title">Completed Lesson 2 Quiz.</p>
                                                                    <p class="text-muted pupil-activity-timestamp small">Today</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="pupil-info-card-body">
                                                        <div class="recent" id="recent-activities"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="academic" class="tab-pane fade">
                                                <div class="pupil-info-card">
                                                    <div class="pupil-info-card-header" style="display: flex;       justify-content: space-between;       align-items: center;       flex-wrap: wrap;       gap: 0.75rem;       text-align: center;">
                                                        <div>
                                                            <h6>Engagement vs mastery</h6>
                                                            <p class="text-muted mb-0" id="radarChartSubtitle">High-level overview across subjects</p>
                                                        </div>
                                                        <div class="filter-group">
                                                            <select class="form-select-sm form-select" id="pupilSubjectfilter">
                                                                <option value="all">All Subjects</option>
                                                                <option value="Mathematics">Mathematics</option>
                                                                <option value="Science">Science</option>
                                                                <option value="English">English</option>
                                                                <option value="Filipino">Filipino</option>
                                                            </select>
                                                            <select class="form-select-sm form-select" id="pupilquarterFilter">
                                                                <option value="1" selected="">Quarter 1</option>
                                                                <option value="2">Quarter 2 </option>
                                                                <option value="3">Quarter 3</option>
                                                                <option value="4">Quarter 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="pupil-info-card-body">
                                                        <div class="chart-container" style="height: 280px; width: 100%;"><canvas id="radarChart"></canvas></div>
                                                        <!--<div class="text-center">
                                                            <span id="radarPupil-InsightText" class="pupil-insight-text">Mathematics leads across all quarters with consistent growth.</span>
                                                        </div>-->
                                                    </div>
                                                </div>
                                                <div class="pupil-info-card">
                                                    <div class="d-flex justify-content-between align-items-center pupil-info-card-header">
                                                        <h6>Learning Progress</h6>
                                                        <small class="text-muted">vs Class Average</small>
                                                    </div>
                                                    <div class="pupil-info-card-body" id="learningProgressContainer">
                                                        <!-- <div class="mb-4 subject-progress-item">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span class="fw-medium learning-subject">Science</span>
                                                                <span class="fw-bold learning-score">85% <span class="trend down">▼ 3%</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-warning" style="width:85%;"></div>
                                                            </div>
                                                            <small class="text-muted mt-1">Below class avg (88%) • Monitor</small>
                                                        </div>
                                                        <div class="mb-4 subject-progress-item">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span class="fw-medium learning-subject">Filipino</span>
                                                                <span class="fw-bold learning-score">82% <span class="trend down">▼ 2%</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-warning" style="width:82%;"></div>
                                                            </div>
                                                            <small class="text-muted mt-1">Below class avg (85%) • Monitor</small>
                                                        </div>
                                                        <div class="mb-4 subject-progress-item">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span class="fw-medium learning-subject">English</span>
                                                                <span class="fw-bold text-success learning-score">88% <span class="trend up">▲ 1%</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-success" style="width:88%;"></div>
                                                            </div>
                                                            <small class="text-muted mt-1">Above class avg (86%) • On track</small>
                                                        </div>
                                                        <div class="subject-progress-item">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span class="fw-medium learning-subject">Mathematics</span>
                                                                <span class="fw-bold text-success learning-score">92% <span class="trend up">▲ 4%</span></span>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-success" style="width:92%;"></div>
                                                            </div>
                                                            <small class="text-muted mt-1">Top performer • Exceeds class avg (87%)</small>
                                                        </div> -->
                                                        <div class="insight-banner">
                                                            <div class="d-flex align-items-start">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16" class="bi bi-lightbulb text-warning me-1">
                                                                    <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1"></path>
                                                                </svg>
                                                                <small id="pupilInsight"></small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- <div class="pupil-info-card" style="height: 350px; overflow: hidden; display: flex;   flex-direction: column;   height: 350px;">
                                                    <div class="pupil-info-card-header">
                                                        <h6>Recent Quizzes</h6>
                                                    </div>
                                                    <div class="pupil-info-card-body" style="flex: 1;   overflow-y: auto;   padding: 1rem;">
                                                        <div class="pupil-quiz-item">
                                                            <div class="quiz-icon green">
                                                                <svg class="bi bi-check-circle" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="activity-content">
                                                                <div class="pupil-quiz-title">
                                                                    <div class="quiz-title-container">
                                                                        <h3 class="pupil-quiz-title">Pretest: Lesson 1 - Flowers</h3>
                                                                        <span class="pupil-score">9/10</span>
                                                                    </div>
                                                                </div>
                                                                <div class="quiz-time"><span class="text-muted small">2 hr ago</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="pupil-quiz-item">
                                                            <div class="quiz-icon green">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle">
                                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="activity-content">
                                                                <div class="pupil-quiz-title">
                                                                    <div class="quiz-title-container">
                                                                        <h3 class="pupil-quiz-title">Pretest: Lesson 1 - Flowers&nbsp; Reproduction system algrebra</h3>
                                                                        <span class="pupil-score">9/10</span>
                                                                    </div>
                                                                </div>
                                                                <div class="quiz-time"><span class="text-muted small">1 day ago</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div id="assessments" class="tab-pane fade">
                                                <div style="background-color: white;border-radius: var(--radius);box-shadow: var(--shadow-sm);margin-bottom: 1.5rem;border: 1px solid var(--gray-200);">
                                                    <div class="p-3">
                                                        <div id="advancedFilters-2" class="p-2" style="border: 1px solid var(--gray-300);border-radius: 8px;">
                                                            <div class="row">
                                                                <div class="col-md-12 mb-2"><input id="searchTest" class="pupil-search-lesson-input" type="text" placeholder="Search by test title, subject, or type..." /></div>
                                                            </div>
                                                            <div class="row align-items-center">
                                                                <div class="col-12">
                                                                    <div class="row g-2 pupil-filters-group">
                                                                        <div class="col-12 col-sm-3"><select id="testSubjectFilter" class="form-select-sm form-select">
                                                                                <optgroup label="Sort by:">
                                                                                    <option value>All Subjects</option>
                                                                                    <option value="mathematics">Mathematics</option>
                                                                                    <option value="english">English</option>
                                                                                    <option value="science">Science</option>
                                                                                    <option value="filipino">Filipino</option>
                                                                                </optgroup>
                                                                            </select></div>
                                                                        <div class="col-12 col-sm-3"><select id="testQuarterFilter" class="form-select-sm form-select">
                                                                                <optgroup label="Sort by:">
                                                                                    <option value>All Quarters</option>
                                                                                    <option value="1">Q1</option>
                                                                                    <option value="2">Q2</option>
                                                                                    <option value="3">Q3</option>
                                                                                    <option value="4">Q4</option>
                                                                                </optgroup>
                                                                            </select></div>
                                                                        <div class="col-12 col-sm-3">
                                                                            <select id="sortDate" class="form-select form-select-sm">
                                                                                <option value="">Sort by Date</option>
                                                                                <option value="asc">Oldest to Newest</option>
                                                                                <option value="desc">Newest to Oldest</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3">
                                                                            <button id="testClearFilter" class="btn btn-outline-secondary btn-sm w-100 reset-btn" type="button">
                                                                                <svg class="bi bi-arrow-clockwise me-1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"></path>
                                                                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"></path>
                                                                                </svg>Reset 
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="test-results-section">
                                                            <div class="assess-header">
                                                                <div>
                                                                    <div class="assess-title"><span>All Test Results</span></div>
                                                                    <div class="assess-subtitle"><span>Detailed assessment records</span></div>
                                                                </div>
                                                            </div>
                                                            <div id="testCardsContainer" class="test-cards"></div>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between p-3 pagination-container">
                                                            <div class="text-muted small"><span> Showing </span><span id="startCount-3">1</span><span> to </span><span id="endCount-3">3</span><span> of </span><span id="totalCount-3">50</span></div>
                                                            <nav aria-label="User list pagination">
                                                                <ul class="mb-0 pagination pagination-sm" id="testPagination">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer pupil-modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal" style="font-size: 12px;">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Create Section Modal - Pupil Management-->
                <div class="modal fade" role="dialog" tabindex="-1" id="createSectionModal" aria-labelledby="createSectionModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createSectionModalLabel">Create New Section</h5>
                                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">

                                <!--Form to create section-->
                                <form id="createSectionForm" class="create-section">
                                    <div class="container mb-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="create-section-part">
                                                    <label class="form-label" for="sectionName">School Name</label>
                                                    <input class="form-control mb-2" type="text" id="schoolName" placeholder="e.g., ABC Elementary School" required="">
                                                    <small id="schoolNameError" class="text-danger error-text d-none">Text</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="create-section-part">
                                                    <label class="form-label" for="sectionName-1">School Year</label>
                                                    <input class="form-control mb-2" type="text" id="schoolYear" placeholder="e.g., 2024-2025" required="">
                                                    <small id="schoolYearError" class="text-danger error-text d-none">Text</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3 create-section-part">
                                                    <label class="form-label" for="sectionName-3">Section Name</label>
                                                    <input class="form-control mb-2" type="text" id="sectionName" placeholder="e.g., Aristotle" required="">
                                                    <small class="error-text text-danger d-none" id="sectionNameError"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-info-circle">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"></path>
                                        </svg>
                                        <div>
                                            <p>After creating the section, you'll receive a unique code that students can use to enroll.</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Create Section button-->
                            <div class="modal-footer create-section-footer">
                                <button class="btn btn-light btn-small" type="button" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary btn-small" id="createSectionSubmit" type="button">Create Section</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Confirm Delete Section Modal -->
                 <!--<div id="deleteSectionModal" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center p-4">
                                <div class="mb-3">
                                    <svg class="bi bi-exclamation-triangle-fill text-danger" xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
                                    </svg>
                                </div>

                                <h4 class="fw-bold mb-2">Delete section?</h4>
                                <p class="text-muted mb-3">Are you sure you want to delete this section? This action cannot be undone.</p>

                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-outline-danger btn-sm rounded-pill px-4 py-2" data-bs-dismiss="modal">
                                        Cancel
                                    </button>

                                    <button id="confirmDeleteSection" class="btn btn-outline-success btn-sm rounded-pill px-4 py-2">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div id="deleteSectionModal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center p-4">

                                <!-- Icon -->
                                <div class="mb-3" id="modalIconContainer">
                                    <svg class="bi bi-exclamation-triangle-fill text-danger" id="modalIcon"
                                        width="64" height="64" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13..."></path>
                                    </svg>
                                </div>

                                <!-- Title -->
                                <h4 class="fw-bold mb-2" id="modalTitle">Delete section?</h4>

                                <!-- Message -->
                                <p class="text-muted mb-3" id="modalMessage">
                                    Are you sure you want to delete this section? This action cannot be undone.
                                </p>

                                <!-- Buttons -->
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-outline-danger btn-sm rounded-pill px-4 py-2"
                                        type="button" data-bs-dismiss="modal">
                                        Cancel
                                    </button>
                                    <button id="confirmDeleteSection"
                                        class="btn btn-outline-success btn-sm rounded-pill px-4 py-2"
                                        type="button">
                                        Delete
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <!--Global Toast Container-->
                <div id="toast-container" class="toast-container"></div>
            </div>
        </div>
    </div>
    <div></div>
    <!-- <script src="{{ asset('TeacherSide/assets/bootstrap/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('TeacherSide/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('TeacherSide/assets/js/chart.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0/dist/chartjs-plugin-datalabels.min.js"></script>
    <script> window.dashboardData = @json($stats ?? []); </script>
    <script src="{{ asset('TeacherSide/assets/js/allcharts.js') }}"></script>
    <script src="{{ asset('TeacherSide/assets/js/time.js') }}"></script>
    <script>
        window.Laravel = {
            teacherId: {{ session('user_id') }},
            token: "{{ session('node_token') }}",
            apiUrl: "{{ env('API_URL') }}"
        };
    </script>
    <script src="{{ asset('TeacherSide/assets/js/script.js') }}"></script>
    <script src="{{ asset('TeacherSide/assets/js/toast-manager.js') }}"></script>
    <script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>



    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const userData = sessionStorage.getItem("user");
            const token = sessionStorage.getItem("token");

            console.log("User data:", userData);
            console.log("Token:", token);

            if (userData) {
                const user = JSON.parse(userData);

                // Update UI
                const TeacherName = document.getElementById("TeacherName");
                const TeacherLname = document.getElementById("TeacherLname");

                if (TeacherName) {
                    TeacherName.textContent = user.first_name;
                }

                if (TeacherLname) {
                    let title = "Mx."; // default neutral
                if (user.gender === "Male") {
                    title = "Mr.";
                } else if (user.gender === "Female") {
                    title = "Ms.";
                }
                    TeacherLname.textContent = `Welcome back, ${title} ${user.last_name}`;
                }

                // Avatar handling
                const profileSmall = document.getElementById("TeacherProfile");

                const avatarUrl = user.avatar?.thumbnail || "assets/img/default-avatar.png";
                const avatarAlt = user.avatar?.avatar || "Avatar";

                [profileSmall].forEach(img => {
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

            
        });
    </script>


    <script>
        // Sign out logic
        document.addEventListener("DOMContentLoaded", () => {
            const logoutBtn = document.getElementById("logout-btn");

            if (logoutBtn) {
                logoutBtn.addEventListener("click", async function (e) {
                    e.preventDefault();

                    console.log("Sign out clicked.");

                    const userData = sessionStorage.getItem("user");
                    const token = sessionStorage.getItem("token");

                    if (!userData || !token) {
                        console.warn("⚠️ No user logged in");
                        sessionStorage.clear();
                        window.location.href = "{{ route('login') }}";
                        return;
                    }

                    const user = JSON.parse(userData);

                    try {
                        const response = await fetch("{{ route('logout') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "Authorization": "Bearer " + token,
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({ user, token })
                        });

                        const data = await response.json();
                        console.log("🔌 Logout response:", data);

                        sessionStorage.clear();
                        window.location.href = "{{ route('login') }}";
                    } catch (error) {
                        console.error("❌ Logout failed:", error);
                        sessionStorage.clear();
                        window.location.href = "{{ route('login') }}";
                    }
                });
            }
        });
    </script>

    <!-- Recent Enrollees -->
    <script>
        //Original
        /*document.addEventListener('DOMContentLoaded', () => {
            const enrollmentList = document.getElementById('enrollmentList');
            const recentEnrollees = window.dashboardData?.recent_enrollees ?? [];

            // Clear existing dummy items
            enrollmentList.innerHTML = '';

            if (recentEnrollees.length === 0) {
                document.querySelector('.enrollment-empty-state').classList.remove('d-none');
                return;
            }

            document.querySelector('.enrollment-empty-state').classList.add('d-none');

            recentEnrollees.forEach(enrollee => {
                // Format date nicely
                const submittedDate = new Date(enrollee.enrollment_date);
                const formattedDate = submittedDate.toLocaleDateString('en-US', {
                    month: '2-digit',
                    day: '2-digit',
                    year: '2-digit'
                }) + ' · ' + submittedDate.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });

                const enrollmentItem = document.createElement('div');
                enrollmentItem.classList.add('enrollment-item', 'flex');

                enrollmentItem.innerHTML = `
                    <div class="pupil-information">
                        <div class="pupil-profile">
                            <img class="img-fluid" width="200" height="200" src="${enrollee.thumbnail ?? '{{ asset('TeacherSide/assets/img/default.png') }}'}">
                        </div>
                        <div class="pupil-details">
                            <h5>${enrollee.fullname}</h5>
                            <p>LRN: ${enrollee.lrn ?? 'N/A'}</p>
                            <p class="text-muted mb-0">
                                <small>Enrolled date: <span class="submission-time" data-timestamp="${enrollee.enrollment_date}">${formattedDate}</span></small>
                            </p>
                        </div>
                    </div>
                    <!--
                    <div class="teacher-actions">
                        <button class="btn btn-to-view" data-bs-toggle="modal" data-bs-target="#openViewPupilModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                            </svg>
                        </button>
                        <button class="btn btn-to-approve" data-action="approve" data-pupil="${enrollee.fullname}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                            </svg>
                        </button>
                        <button class="btn btn-to-decline" data-action="decline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-x-lg">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"></path>
                            </svg>
                        </button>
                    </div>
                    -->
                `;

                enrollmentList.appendChild(enrollmentItem);
            });

            // Update enrollment count badge
            const countBadge = document.querySelector('.enrollment-count-bagde');
            if (countBadge) countBadge.textContent = recentEnrollees.length;
        });*/
        document.addEventListener('DOMContentLoaded', () => {
            const enrollmentList = document.getElementById('enrollmentList');
            const recentEnrollees = window.dashboardData?.recent_enrollees ?? [];

            // Clear existing dummy items
            enrollmentList.innerHTML = '';

            // Filter enrollees enrolled within the last 7 days
            const daysVisible = 7;
            const now = new Date();
            const filteredEnrollees = recentEnrollees.filter(enrollee => {
                const enrolledDate = new Date(enrollee.enrollment_date);
                const daysPassed = (now - enrolledDate) / (1000 * 60 * 60 * 24);
                return daysPassed <= daysVisible;
            });

            if (filteredEnrollees.length === 0) {
                document.querySelector('.enrollment-empty-state').classList.remove('d-none');
                return;
            }

            document.querySelector('.enrollment-empty-state').classList.add('d-none');

            filteredEnrollees.forEach(enrollee => {
                // Format date nicely
                const submittedDate = new Date(enrollee.enrollment_date);
                const formattedDate = submittedDate.toLocaleDateString('en-US', {
                    month: '2-digit',
                    day: '2-digit',
                    year: '2-digit'
                }) + ' · ' + submittedDate.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });

                const enrollmentItem = document.createElement('div');
                enrollmentItem.classList.add('enrollment-item', 'flex');

                enrollmentItem.innerHTML = `
                    <div class="pupil-information">
                        <div class="pupil-profile">
                            <img class="img-fluid" width="200" height="200" src="${enrollee.thumbnail ?? '{{ asset('TeacherSide/assets/img/default.png') }}'}">
                        </div>
                        <div class="pupil-details">
                            <h5>${enrollee.fullname}</h5>
                            <!--<p>LRN: ${enrollee.lrn ?? 'N/A'}</p>-->
                            <p class="text-muted mb-0">
                                <small>Enrolled date: <span class="submission-time" data-timestamp="${enrollee.enrollment_date}">${formattedDate}</span></small>
                            </p>
                        </div>
                    </div>
                `;

                enrollmentList.appendChild(enrollmentItem);
            });

            // Update enrollment count badge
            const countBadge = document.querySelector('.enrollment-count-bagde');
            if (countBadge) countBadge.textContent = filteredEnrollees.length;
        });
    </script>

    <!-- Recent Materials -->
    <script>
        const materials = window.dashboardData.recentMaterials;

        function getMaterialIcon(type) {
            switch(type) {
                case 'video':
                    return `<svg class="bi bi-camera-video" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"></path>
                            </svg>`;
                case 'url':
                    return `<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-camera-video">
                                <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"></path>
                            </svg>`;
                case 'quiz':
                    return `<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-question-circle">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"></path>
                            </svg>`;
                case 'game_match':
                case 'game_flash':
                case 'game_comp':
                case 'game_speak':
                case 'game_img':
                    return `<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-puzzle">
                                <path d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2H7a.5.5 0 0 1 .5.5v.382c0 .696-.497 1.182-.872 1.469a.459.459 0 0 0-.115.118.113.113 0 0 0-.012.025L6.5 4.5v.003l.003.01c.004.01.014.028.036.053a.86.86 0 0 0 .27.194C7.09 4.9 7.51 5 8 5c.492 0 .912-.1 1.19-.24a.86.86 0 0 0 .271-.194.213.213 0 0 0 .039-.063v-.009a.112.112 0 0 0-.012-.025.459.459 0 0 0-.115-.118c-.375-.287-.872-.773-.872-1.469V2.5A.5.5 0 0 1 9 2h2.395a1.5 1.5 0 0 1 1.493 1.645L12.645 6.5h.237c.195 0 .42-.147.675-.48.21-.274.528-.52.943-.52.568 0 .947.447 1.154.862C15.877 6.807 16 7.387 16 8s-.123 1.193-.346 1.638c-.207.415-.586.862-1.154.862-.415 0-.733-.246-.943-.52-.255-.333-.48-.48-.675-.48h-.237l.243 2.855A1.5 1.5 0 0 1 11.395 14H9a.5.5 0 0 1-.5-.5v-.382c0-.696.497-1.182.872-1.469a.459.459 0 0 0 .115-.118.113.113 0 0 0 .012-.025L9.5 11.5v-.003a.214.214 0 0 0-.039-.064.859.859 0 0 0-.27-.193C8.91 11.1 8.49 11 8 11c-.491 0-.912.1-1.19.24a.859.859 0 0 0-.271.194.214.214 0 0 0-.039.063v.003l.001.006a.113.113 0 0 0 .012.025c.016.027.05.068.115.118.375.287.872.773.872 1.469v.382a.5.5 0 0 1-.5.5H4.605a1.5 1.5 0 0 1-1.493-1.645L3.356 9.5h-.238c-.195 0-.42.147-.675.48-.21.274-.528.52-.943.52-.568 0-.947-.447-1.154-.862C.123 9.193 0 8.613 0 8s.123-1.193.346-1.638C.553 5.947.932 5.5 1.5 5.5c.415 0 .733.246.943.52.255.333.48.48.675.48h.238zM4.605 3a.5.5 0 0 0-.498.55l.001.007.29 3.4A.5.5 0 0 1 3.9 7.5h-.782c-.696 0-1.182-.497-1.469-.872a.459.459 0 0 0-.118-.115.112.112 0 0 0-.025-.012L1.5 6.5h-.003a.213.213 0 0 0-.064.039.86.86 0 0 0-.193.27C1.1 7.09 1 7.51 1 8c0 .491.1.912.24 1.19.07.14.14.225.194.271a.213.213 0 0 0 .063.039H1.5l.006-.001a.112.112 0 0 0 .025-.012.459.459 0 0 0 .118-.115c.287-.375.773-.872 1.469-.872H3.9a.5.5 0 0 1 .498.542l-.29 3.408a.5.5 0 0 0 .497.55h1.878c-.048-.166-.195-.352-.463-.557-.274-.21-.52-.528-.52-.943 0-.568.447-.947.862-1.154C6.807 10.123 7.387 10 8 10s1.193.123 1.638.346c.415.207.862.586.862 1.154 0 .415-.246.733-.52.943-.268.205-.415.39-.463.557h1.878a.5.5 0 0 0 .498-.55l-.001-.007-.29-3.4A.5.5 0 0 1 12.1 8.5h.782c.696 0 1.182.497 1.469.872.05.065.091.099.118.115.013.008.021.01.025.012a.02.02 0 0 0 .006.001h.003a.214.214 0 0 0 .064-.039.86.86 0 0 0 .193-.27c.14-.28.24-.7.24-1.191 0-.492-.1-.912-.24-1.19a.86.86 0 0 0-.194-.271.215.215 0 0 0-.063-.039H14.5l-.006.001a.113.113 0 0 0-.025.012.459.459 0 0 0-.118.115c-.287.375-.773.872-1.469.872H12.1a.5.5 0 0 1-.498-.543l.29-3.407a.5.5 0 0 0-.497-.55H9.517c.048.166.195.352.463.557.274.21.52.528.52.943 0 .568-.447.947-.862 1.154C9.193 5.877 8.613 6 8 6s-1.193-.123-1.638-.346C5.947 5.447 5.5 5.068 5.5 4.5c0-.415.246-.733.52-.943.268-.205.415-.39.463-.557z"></path>
                            </svg>`;
                case 'ppt':
                    return `<svg class="bi bi-files" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1M3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z"></path>
                            </svg>`;
                case 'pdf':
                    return `<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-files">
                                <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1M3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z"></path>
                            </svg>`;
                default:
                    return `<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-file-earmark-text">
                                <path d="M5 10.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zm-3-.5V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4h-2z"/>
                            </svg>`;
            }
        }

        const container = document.getElementById('materialLists');
        materials.forEach((m, idx) => {
            const itemHTML = `
            <div class="material-item">
                <div class="recently-added-material-icon">${getMaterialIcon(m.type)}</div>
                <div class="recently-material-info">
                    <div class="recently-material-title"><span>${m.title}</span></div>
                    <div class="text-muted recently-material-meta">
                        <span>Admin</span>
                        <span>${new Date(m.uploaded_at).toLocaleDateString()}</span>
                        <span>${Math.floor((Date.now() - new Date(m.uploaded_at)) / 60000)} mins ago</span>
                    </div>
                </div>
                <!--
                <div class="recently-material-action">
                    <button class="btn recently-btn-view">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye me-2">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                        </svg>View
                    </button>
                </div>
                -->
            </div>
            `;
            container.insertAdjacentHTML('beforeend', itemHTML);
        });

        // Update materials count
        const newMaterialsCount = document.getElementById('newMaterialsCount');
        if (newMaterialsCount) {
            newMaterialsCount.textContent = materials.length;
        }

    </script>

    <!-- Leaderboard -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const list = window.dashboardData?.pupil_progress || [];
            const leaderboard = document.getElementById("mainLeaderboard");

            leaderboard.innerHTML = ""; // remove static items

            if (!list.length) {
                leaderboard.innerHTML = `<p class="text-muted">No pupil progress found.</p>`;
                return;
            }

            list.forEach((pupil, index) => {
                const rank = index + 1;
                const score = pupil.overall_progress || 0;

                const item = `
                    <div class="top-pupil-item" data-range="today" data-name="${pupil.fullname}" data-score="${score}">
                        <div class="top-pupil-rank ${rank === 1 ? "rank-1" : rank <= 3 ? "rank-3" : "rank-other"}">
                            <span>${rank}</span>
                        </div>

                        <div class="top-pupil-info">
                            <div class="top-pupil-name">
                                <span class="student-name">${pupil.fullname}</span>
                                <span class="grade-badge">Grade 4</span>
                            </div>
                            <div class="student-meta small">
                                <span class="text-muted"><strong>Last Accessed</strong></span>
                                <span>${new Date(pupil.last_accessed).toLocaleDateString()}</span>
                            </div>

                            <div class="top-pupil-progress">
                                <div class="progress-bar top-progress-bar" style="width:${score}%;"></div>
                            </div>
                        </div>

                        <div class="top-pupil-stats">
                            <div class="top-pupil-score"><span>${score}%</span></div>
                        </div>
                    </div>
                `;

                leaderboard.insertAdjacentHTML("beforeend", item);
            });
        });
    </script>

    <!-- Recent Activity -->
    <script>
        /*document.addEventListener("DOMContentLoaded", () => {
            const activities = window.dashboardData.recentActivity || [];
            const feed = document.getElementById("activityFeed");

            if (!feed) return;

            feed.innerHTML = ""; 

            activities.forEach(item => {
                const iconClass = getIconClass(item.type);
                const badgeClass = getBadgeClass(item.type);
                const formattedDate = formatDate(item.date);

                const html = `
                    <div class="activity-item">
                        <div class="activity-icon ${iconClass}">
                            ${getIconSVG(item.type)}
                        </div>

                        <div class="activity-content">
                            <div class="activity-header">
                                <span class="activity-title-text">${item.title}</span>
                                <span class="activity-type ${badgeClass}">${capitalize(item.type)}</span>
                            </div>

                            <div class="activity-description">
                                <span>${item.fullname} — ${item.subtitle ?? ''}</span>
                            </div>

                            <div class="activity-time">
                                <span>${formattedDate}</span>
                            </div>
                        </div>
                    </div>
                `;

                feed.insertAdjacentHTML("beforeend", html);
            });
        });*/
        document.addEventListener("DOMContentLoaded", () => {
            const activities = window.dashboardData.recentActivity || [];
            const feed = document.getElementById("activityFeed");

            if (!feed) return;

            feed.innerHTML = ""; 

            activities
                .slice(0, 6) // 👈 Show only first 6 items
                .forEach(item => {

                    const iconClass = getIconClass(item.type);
                    const badgeClass = getBadgeClass(item.type);
                    const formattedDate = formatDate(item.date);

                    const html = `
                        <div class="activity-item">
                            <div class="activity-icon ${iconClass}">
                                ${getIconSVG(item.type)}
                            </div>

                            <div class="activity-content">
                                <div class="activity-header">
                                    <span class="activity-title-text">${item.title}</span>
                                    <span class="activity-type ${badgeClass}">${capitalize(item.type)}</span>
                                </div>

                                <div class="activity-description">
                                    <span>${item.fullname} — ${item.subtitle ?? ''}</span>
                                </div>

                                <div class="activity-time">
                                    <span>${formattedDate}</span>
                                </div>
                            </div>
                        </div>
                    `;

                    feed.insertAdjacentHTML("beforeend", html);
                });
        });


        // -------------------
        // HELPER FUNCTIONS
        // -------------------

        function getIconClass(type) {
            return {
                quiz: "icon-assessment",
                game_comp: "icon-game",
                game_match: "icon-game",
                game_img: "icon-game",
                game_speak: "icon-game",
                achievement: "icon-achievement",
                enrollment: "icon-enrollment",
                video: "icon-video", //dinagdag q
                ppt: "icon-ppt" //dinagdag ko
            }[type] || "icon-default";
        }

        function getBadgeClass(type) {
            return {
                quiz: "badge-assessment",
                game_comp: "badge-game",
                game_match: "badge-game",
                game_img: "badge-game",
                game_speak: "badge-game",
                achievement: "badge-achievement",
                enrollment: "badge-enrollment",
                video: "badge-material", //dinagdag q
                ppt: "badge-material" // dinagdag q
            }[type] || "badge-default";
        }

        function getIconSVG(type) {
            const icons = {
                quiz: `
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-exclamation-circle">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"></path>
                    </svg>
                `,

                game_comp: puzzleIcon(),
                game_match: puzzleIcon(),
                game_img: puzzleIcon(),
                game_speak: puzzleIcon(),

                achievement: `
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trophy">
                        <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"></path>
                    </svg>
                `,

                enrollment: `
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-plus">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"></path>
                    </svg>
                `,

                video: `
                    <svg class="bi bi-camera-video" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"></path>
                    </svg>
                `,

                ppt: `
                    <svg class="bi bi-files" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1M3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z"></path>
                    </svg>
                `
            };

            return icons[type] || `<svg></svg>`;
        }

        // same puzzle icon for all game types
        function puzzleIcon() {
            return `
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-puzzle">
                    <path d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2H7a.5.5 0 0 1 .5.5v.382c0 .696-.497 1.182-.872 1.469a.459.459 0 0 0-.115.118.113.113 0 0 0-.012.025L6.5 4.5v.003l.003.01c.004.01.014.028.036.053a.86.86 0 0 0 .27.194C7.09 4.9 7.51 5 8 5c.492 0 .912-.1 1.19-.24a.86.86 0 0 0 .271-.194.213.213 0 0 0 .039-.063v-.009a.112.112 0 0 0-.012-.025.459.459 0 0 0-.115-.118c-.375-.287-.872-.773-.872-1.469V2.5A.5.5 0 0 1 9 2h2.395a1.5 1.5 0 0 1 1.493 1.645L12.645 6.5h.237c.195 0 .42-.147.675-.48.21-.274.528-.52.943-.52.568 0 .947.447 1.154.862C15.877 6.807 16 7.387 16 8s-.123 1.193-.346 1.638c-.207.415-.586.862-1.154.862-.415 0-.733-.246-.943-.52-.255-.333-.48-.48-.675-.48h-.237l.243 2.855A1.5 1.5 0 0 1 11.395 14H9a.5.5 0 0 1-.5-.5v-.382c0-.696.497-1.182.872-1.469a.459.459 0 0 0 .115-.118.113.113 0 0 0 .012-.025L9.5 11.5v-.003a.214.214 0 0 0-.039-.064.859.859 0 0 0-.27-.193C8.91 11.1 8.49 11 8 11c-.491 0-.912.1-1.19.24a.859.859 0 0 0-.271.194.214.214 0 0 0-.039.063v.003l.001.006a.113.113 0 0 0 .012.025c.016.027.05.068.115.118.375.287.872.773.872 1.469v.382a.5.5 0 0 1-.5.5H4.605a1.5 1.5 0 0 1-1.493-1.645L3.356 9.5h-.238c-.195 0-.42.147-.675.48-.21.274-.528.52-.943.52-.568 0-.947-.447-1.154-.862C.123 9.193 0 8.613 0 8s.123-1.193.346-1.638C.553 5.947.932 5.5 1.5 5.5c.415 0 .733.246.943.52.255.333.48.48.675.48h.238zM4.605 3a.5.5 0 0 0-.498.55l.001.007.29 3.4A.5.5 0 0 1 3.9 7.5h-.782c-.696 0-1.182-.497-1.469-.872a.459.459 0 0 0-.118-.115.112.112 0 0 0-.025-.012L1.5 6.5h-.003a.213.213 0 0 0-.064.039.86.86 0 0 0-.193.27C1.1 7.09 1 7.51 1 8c0 .491.1.912.24 1.19.07.14.14.225.194.271a.213.213 0 0 0 .063.039H1.5l.006-.001a.112.112 0 0 0 .025-.012.459.459 0 0 0 .118-.115c.287-.375.773-.872 1.469-.872H3.9a.5.5 0 0 1 .498.542l-.29 3.408a.5.5 0 0 0 .497.55h1.878c-.048-.166-.195-.352-.463-.557-.274-.21-.52-.528-.52-.943 0-.568.447-.947.862-1.154C6.807 10.123 7.387 10 8 10s1.193.123 1.638.346c.415.207.862.586.862 1.154 0 .415-.246.733-.52.943-.268.205-.415.39-.463.557h1.878a.5.5 0 0 0 .498-.55l-.001-.007-.29-3.4A.5.5 0 0 1 12.1 8.5h.782c.696 0 1.182.497 1.469.872.05.065.091.099.118.115.013.008.021.01.025.012a.02.02 0 0 0 .006.001h.003a.214.214 0 0 0 .064-.039.86.86 0 0 0 .193-.27c.14-.28.24-.7.24-1.191 0-.492-.1-.912-.24-1.19a.86.86 0 0 0-.194-.271.215.215 0 0 0-.063-.039H14.5l-.006.001a.113.113 0 0 0-.025.012.459.459 0 0 0-.118.115c-.287.375-.773.872-1.469.872H12.1a.5.5 0 0 1-.498-.543l.29-3.407a.5.5 0 0 0-.497-.55H9.517c.048.166.195.352.463.557.274.21.52.528.52.943 0 .568-.447.947-.862 1.154C9.193 5.877 8.613 6 8 6s-1.193-.123-1.638-.346C5.947 5.447 5.5 5.068 5.5 4.5c0-.415.246-.733.52-.943.268-.205.415-.39.463-.557z"></path>
                </svg>
            `;
        }

        function capitalize(text) {
            return text.charAt(0).toUpperCase() + text.slice(1);
        }

        function formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleString("en-US", {
                month: "short",
                day: "numeric",
                year: "numeric",
                hour: "2-digit",
                minute: "2-digit"
            });
        }
    </script>


    <script>
    // Fix for modal backdrop not disappearing
    document.addEventListener('DOMContentLoaded', function() {
        const createSectionModal = document.getElementById('createSectionModal');
        
        // Properly handle modal hide event
        createSectionModal.addEventListener('hidden.bs.modal', function () {
            // Remove any lingering backdrops
            const backdrops = document.querySelectorAll('.modal-backdrop');
            backdrops.forEach(backdrop => {
                backdrop.remove();
            });
            
            // Reset body styles
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        });

        // Also handle show event to prevent multiple backdrops
        createSectionModal.addEventListener('show.bs.modal', function () {
            // Clean up any existing backdrops before showing
            const existingBackdrops = document.querySelectorAll('.modal-backdrop');
            existingBackdrops.forEach(backdrop => {
                backdrop.remove();
            });
        });
    });

    // Your existing create section code
    /*document.getElementById('createSectionSubmit').addEventListener('click', async () => {
        const school_name  = document.getElementById('schoolName').value.trim();
        const school_year  = document.getElementById('schoolYear').value.trim();
        const section_name = document.getElementById('sectionName').value.trim();

        if (!school_name || !school_year || !section_name) {
            alert("All fields are required.");
            return;
        }

        const token = "{{ session('node_token') }}";
        const teacherId = "{{ session('user_id') }}";

        try {
            const response = await fetch("{{ env('API_URL') }}/teacher/create/section", {
                method: "POST",
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    teacherId: teacherId,
                    school_name,
                    school_year,
                    section_name
                })
            });

            const data = await response.json();

            if (!response.ok) {
                alert(data.error || "Failed to create section.");
                return;
            }

            // ✅ SUCCESS: Use Bootstrap to properly hide the modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('createSectionModal'));
            if (modal) {
                modal.hide();
            }

            // Reset form
            document.getElementById('createSectionForm').reset();

            // Show success message
            //alert("Section created successfully!");

            // Fetch updated sections
            await fetchSections();

        } catch (err) {
            console.error(err);
            alert("Something went wrong.");
        }
    });*/
    document.getElementById('createSectionSubmit').addEventListener('click', async () => {
        // Input values
        const schoolNameInput = document.getElementById('schoolName');
        const schoolYearInput = document.getElementById('schoolYear');
        const sectionNameInput = document.getElementById('sectionName');

        const school_name_raw = schoolNameInput.value.trim();
        const school_year = schoolYearInput.value.trim();
        const section_raw = sectionNameInput.value.trim();

        // Error elements
        const schoolNameErr = document.getElementById('schoolNameError');
        const schoolYearErr = document.getElementById('schoolYearError');
        const sectionNameErr = document.getElementById('sectionNameError');

        // Reset errors before validation
        [schoolNameErr, schoolYearErr, sectionNameErr].forEach(err => {
            err.classList.add('d-none');
            err.textContent = "";
        });

        let hasError = false;

        // === VALIDATION ===

        // 1. SCHOOL NAME MUST CONTAIN "Elementary School"
        if (!school_name_raw) {
            schoolNameErr.textContent = "School Name is required.";
            schoolNameErr.classList.remove("d-none");
            hasError = true;
        } else if (!school_name_raw.toLowerCase().includes("elementary school")) {
            schoolNameErr.textContent = "The name must include 'Elementary School'.";
            schoolNameErr.classList.remove("d-none");
            hasError = true;
        }

        // 2. SCHOOL YEAR VALIDATION
        const syPattern = /^(\d{4})-(\d{4})$/;
        const match = school_year.match(syPattern);
        const currentYear = new Date().getFullYear();

        if (!school_year) {
            schoolYearErr.textContent = "School Year is required.";
            schoolYearErr.classList.remove("d-none");
            hasError = true;
        } else if (!match) {
            schoolYearErr.textContent = "Format must be YYYY-YYYY.";
            schoolYearErr.classList.remove("d-none");
            hasError = true;
        } else {
            const startYear = parseInt(match[1]);
            const endYear = parseInt(match[2]);

            if (endYear !== startYear + 1) {
                schoolYearErr.textContent = "Years must be consecutive (e.g., 2024-2025).";
                schoolYearErr.classList.remove("d-none");
                hasError = true;
            }

            if (endYear < currentYear) {
                schoolYearErr.textContent = "That school year has already passed.";
                schoolYearErr.classList.remove("d-none");
                hasError = true;
            }
        }

        // 3. SECTION NAME VALIDATION + AUTO FORMAT
        if (!section_raw) {
            sectionNameErr.textContent = "Section Name is required.";
            sectionNameErr.classList.remove("d-none");
            hasError = true;
        }

        if (hasError) return; // stop submission until valid


        // Auto-format: Grade 4-SectionName (Capitalized)
        const formatted_section =
            `Grade 4-${section_raw.charAt(0).toUpperCase() + section_raw.slice(1).toLowerCase()}`;

        const school_name = school_name_raw.replace(/\s+/g, " ").trim();
        const section_name = formatted_section;

        const token = "{{ session('node_token') }}";
        const teacherId = "{{ session('user_id') }}";

        try {
            const response = await fetch("{{ env('API_URL') }}/teacher/create/section", {
                method: "POST",
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    teacherId,
                    school_name,
                    school_year,
                    section_name
                })
            });

            const data = await response.json();

            if (!response.ok) {
                sectionNameErr.textContent = data.error || "Failed to create section.";
                sectionNameErr.classList.remove("d-none");
                return;
            }

            // CLOSE MODAL
            const modal = bootstrap.Modal.getInstance(document.getElementById('createSectionModal'));
            if (modal) modal.hide();

            document.getElementById('createSectionForm').reset();
            showToast('success', 'Saved', 'Section created successfully!');
            await fetchSections();

        } catch (err) {
            console.error(err);
            sectionNameErr.textContent = "Something went wrong.";
            sectionNameErr.classList.remove("d-none");
        }
    });

</script>

    <script>
        async function fetchSections() {
            const token = "{{ session('node_token') }}";
            const teacherId = "{{ session('user_id') }}";

            try {
                const res = await fetch("{{ env('API_URL') }}/teacher/fetch-sections-and-pupils", {
                    method: "POST",
                    headers: {
                        "Authorization": `Bearer ${token}`,
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ teacherId })
                });

                const result = await res.json();

                console.log("📌 Updated Sections:", result.sections);
                console.log("📌 Updated Pupils:", result.pupils);

                // Pass the fetched data to initSectionsManager
                initSectionsManager(result.sections || [], result.pupils || []);

                if (result.pupils && result.pupils.length) {
                    // pick the first pupil initially
                    const firstPupil = result.pupils[0];
                    initRadarChartForPupil(firstPupil, 'all', 1);
                    initStudentsTable(result.pupils);

                    // Optional: store globally for later filtering
                    //window.globalPupils = result.pupils;
                }

            } catch (err) {
                console.error("Fetch Error:", err);
            }
        }

        // Trigger fetchSections on page load
        document.addEventListener('DOMContentLoaded', fetchSections);
    </script>


    



    




    
<script>
    // This is EXACTLY how your Admin dashboard injects data → copy-paste
    window.dashboardData = @json($stats ?? []);

    console.log("Teacher Dashboard Data:", window.dashboardData);
    console.log("Total Pupils:", window.dashboardData.total_pupils ?? 'N/A');
    console.log("Average Score:", window.dashboardData.avg_score ?? 'N/A');
    console.log("Average Session Time:", window.dashboardData.avg_session_time ?? 'N/A');
    console.log("Gender Stats:", window.dashboardData.gender_stats ?? {});
    console.log("Recent Enrollee", window.dashboardData.recent_enrollees ?? {});
    console.log("Recent Materials", window.dashboardData.recentMaterials ?? {});
    console.log("Pupil Progress", window.dashboardData.pupil_progress ?? {});
    console.log("Recent Activity", window.dashboardData.recentActivity ?? {});
    console.log("Subject Progress", window.dashboardData.quarterlyProgress ?? {});
    console.log("Class Performance", window.dashboardData.overall_class_performance ?? {});
    console.log("Over all Stats", window.dashboardData.overall_progress ?? {});
    console.log("subjects", window.dashboardData.subjects ?? {});

    document.addEventListener('DOMContentLoaded', () => {
        const data = window.dashboardData;

        if (data.total_pupils !== undefined) {
            document.getElementById('total-pupils') && 
                (document.getElementById('total-pupils').textContent = data.total_pupils);

            document.getElementById('avg-score') && 
                (document.getElementById('avg-score').textContent = (data.avg_score || 0) + '%');

            document.getElementById('avg-session-time') && 
                (document.getElementById('avg-session-time').textContent = (data.avg_session_time || 0) + ' mins');
        }
    });
</script>


<script>
    window.dashboardData = @json($stats ?? []);

    console.log("Dashboard Data:", window.dashboardData);

    function updateDashboardMetrics(data) {
        document.getElementById("performanceValue").textContent = data.performance + "%";
        document.getElementById("engagementValue").textContent = data.engagement_rate + "%";
        document.getElementById("completionValue").textContent = data.completion_rate + "%";
        document.getElementById("studyTimeValue").textContent = data.avg_study_time + " min";

        updateTrend("performance", data.performance, data.lastWeekPerformance);
        updateTrend("engagement", data.engagement_rate, data.lastWeekEngagement);
        updateTrend("completion", data.completion_rate, data.lastWeekCompletion);
        updateTrend("study", data.avg_study_time, data.lastWeekStudyTime);
    }

    // RUN IMMEDIATELY — NOT inside DOMContentLoaded
    if (window.dashboardData?.overall_progress) {
        updateDashboardMetrics(window.dashboardData.overall_progress);
    }

    function setArrow(icon, direction) {
        const parent = icon.parentNode;
        let newSvg;

        if (direction === "up") {
            newSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"></path>
            </svg>`;
        } else if (direction === "down") {
            newSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"></path>
            </svg>`;
        }

        parent.replaceChild(new DOMParser().parseFromString(newSvg, "text/html").body.firstChild, icon);
    }


    function updateTrend(name, current, lastWeek) {
        const wrapper = document.getElementById(name + "TrendWrapper");
        const icon = document.getElementById(name + "TrendIcon");
        const text = document.getElementById(name + "TrendText");

        current = Number(current);
        lastWeek = Number(lastWeek);

        const diff = current - lastWeek;
        const positive = diff > 0;
        const equal = diff === 0;
        const negative = diff < 0;

        text.textContent =
            (diff > 0 ? "+" : "") +
            diff.toFixed(1) +
            (name === "study" ? " min" : "%");

        wrapper.classList.remove("trend-up", "trend-down", "trend-neutral");

        if (positive) {
            wrapper.style.color = "var(--success-color)";
            wrapper.classList.add("trend-up");
            setArrow(icon, "up");
        }
        else if (negative) {
            wrapper.style.color = "var(--danger-color)";
            wrapper.classList.add("trend-down");
            setArrow(icon, "down");
        }
        else {
            wrapper.style.color = "var(--warning-color)";
            wrapper.classList.add("trend-neutral");
            icon.innerHTML = `
                <path fill-rule="evenodd" d="M3.5 8a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5z"></path>
            `;
        }
    }


</script>

<script>
const subjectBackgrounds = {
    "English": "../../assets/img/subject-themes/eng.png",
    "Filipino": "../../assets/img/subject-themes/fil.png",
    "Mathematics": "../../assets/img/subject-themes/math.png",
    "Science": "../../assets/img/subject-themes/science.png"
};

let subjectProgress = {}; // Precomputed progress object

document.addEventListener("DOMContentLoaded", () => {
    // Precompute progress per subject per quarter
    computeSubjectProgress();

    const defaultSubject = "English";

    // Set lessonsContainer data attribute to default subject
    const lessonsContainer = document.getElementById("lessonsContainer");
    lessonsContainer.dataset.selectedSubject = defaultSubject;

    updateSubjectCard(defaultSubject);
    window.renderLessons?.("Q1");
    updateQuarterlyProgressUI(defaultSubject); 
});

// Compute progress per subject per quarter
function computeSubjectProgress() {
    const progressData = window.dashboardData?.quarterlyProgress || {};
    const quarters = ["q1", "q2", "q3", "q4"];

    subjectProgress = {};

    quarters.forEach((quarterKey) => {
        const quarterSubjects = progressData[quarterKey] || {};

        for (const subject in quarterSubjects) {
            const scores = quarterSubjects[subject] || [];
            const sum = scores.reduce((a, b) => a + b, 0);
            const percent = scores.length > 0 ? Math.round(sum / scores.length) : 0;

            if (!subjectProgress[subject]) subjectProgress[subject] = {};
            subjectProgress[subject][quarterKey] = percent;
        }
    });

    // Fill missing quarters with 0
    const allSubjects = Object.keys(subjectProgress);
    allSubjects.forEach(subject => {
        quarters.forEach(q => {
            if (subjectProgress[subject][q] === undefined) subjectProgress[subject][q] = 0;
        });
    });

    console.log("Computed subject progress per quarter:", subjectProgress);
}

function selectSubject(link) {
    const subject = link.getAttribute("data-subject");

    // Update UI components
    updateSubjectCard(subject);
    updateQuarterlyProgressUI(subject);
    renderLowLevelLessons(subject);

    // Store the selected subject
    const lessonsContainer = document.getElementById("lessonsContainer");
    if (lessonsContainer) lessonsContainer.dataset.selectedSubject = subject;

    // Close dropdown
    const dropdownList = link.closest(".dropdown-list");
    if (dropdownList) dropdownList.style.display = "none";

    // Update hidden input
    const selectedInput = document.getElementById("selected-subject-input");
    if (selectedInput) selectedInput.value = subject;

    // Render lessons for the active quarter
    const activeQuarter = document.querySelector('.quarter-tab.active')?.dataset.quarter || "Q1";
    window.renderLessons?.(activeQuarter);

    // Hide lesson detail container
    const lessonDetailContainer = document.getElementById("lessonDetailContainer");
    if (lessonDetailContainer) lessonDetailContainer.style.display = "none";

    // Show lessons list again
    if (lessonsContainer) lessonsContainer.style.display = "block";
}

function updateSubjectCard(subject) {
    const card = document.getElementById("subjectHeaderCard");
    card.style.backgroundImage = `url('${subjectBackgrounds[subject]}')`;
    card.style.backgroundSize = "cover";
    card.style.backgroundPosition = "center";
    card.querySelector("h3").textContent = `${subject} 4`;
}

function updateQuarterlyProgressUI(subject) {
    const lessonsContainer = document.getElementById("lessonsContainer");
    const selectedSubject = subject;

    const quarters = ["q1", "q2", "q3", "q4"];
    const lessonsData = window.dashboardData.subjects?.[selectedSubject]?.lessons || [];

    let totalLessons = 0; // initialize total lesson count
    let newLessonsCount = 0; // initialize new lessons count

    // Current date for comparison
    const now = new Date();

    quarters.forEach((quarterKey, index) => {
        const quarterDiv = document.getElementById(quarterKey);
        if (!quarterDiv) return;

        // Update progress
        const percent = subjectProgress[selectedSubject]?.[quarterKey] || 0;
        const percentLabel = quarterDiv.querySelector(".lesson-progress-label span:nth-child(2)");
        if (percentLabel) percentLabel.textContent = percent + "%";

        const progressBar = quarterDiv.querySelector(".progress-bar");
        if (progressBar) progressBar.style.width = percent + "%";

        // Render lessons
        const quarterLessonList = quarterDiv.querySelector(".quarter-lesson-list");
        const noContentDiv = quarterDiv.querySelector("#noContent");

        if (!quarterLessonList) return;

        // Clear existing lessons
        quarterLessonList.innerHTML = "";

        // Filter lessons for this quarter
        const lessonsForQuarter = lessonsData.filter(l => `q${l.quarter}` === quarterKey);

        // Update lesson count span for this quarter
        const lessonCountSpan = document.getElementById(`${quarterKey}Lesson`);
        if (lessonCountSpan) lessonCountSpan.textContent = lessonsForQuarter.length;

        // Add to total lessons
        totalLessons += lessonsForQuarter.length;

        if (lessonsForQuarter.length === 0) {
            if (noContentDiv) noContentDiv.style.display = "block";
            return;
        } else {
            if (noContentDiv) noContentDiv.style.display = "none";
        }

        // Sort lessons by lesson_number
        lessonsForQuarter.sort((a, b) => a.lesson_number - b.lesson_number);

        // Render each lesson
        lessonsForQuarter.forEach(lesson => {
            const lessonItem = document.createElement("div");
            lessonItem.classList.add("quarter-lesson-item");

            const lessonTitle = lesson.lesson_title || `Lesson ${lesson.lesson_number}`;
            const lessonDescription = lesson.description || "";

            lessonItem.innerHTML = `
                <h6>Lesson ${lesson.lesson_number}: ${lessonTitle}</h6>
                <p>${lessonDescription}</p> 
            `;

            quarterLessonList.appendChild(lessonItem);

            // Check if lesson is new (within 7 days)
            if (lesson.created_at) {
                const lessonDate = new Date(lesson.created_at);
                const diffDays = (now - lessonDate) / (1000 * 60 * 60 * 24);
                if (diffDays <= 7) newLessonsCount++;
            }
        });
    });

    // Update total lessons
    const totalLessonElement = document.getElementById("totalLesson");
    if (totalLessonElement) totalLessonElement.textContent = `${totalLessons} Lessons`;

    // Update new lessons badge
    const newLessonsBadge = document.getElementById("newLessonsBadge");
    if (newLessonsBadge) {
        if (newLessonsCount > 0) {
            newLessonsBadge.textContent = `${newLessonsCount} new`;
            newLessonsBadge.style.display = "inline-block";
        } else {
            newLessonsBadge.style.display = "none"; // hide if no new lessons
        }
    }
}

function renderLowLevelLessons(subject, quarter = "1") {
    const lessonContainer = document.getElementById("lessonLists");
    if (!lessonContainer) return;

    const lessonsData = window.dashboardData.subjects?.[subject]?.lessons || [];
    const quarterlyProgress = window.dashboardData.quarterlyProgress || {};

    const lessonsForQuarter = lessonsData.filter(l => String(l.quarter) === String(quarter));
    const now = new Date();
    lessonContainer.innerHTML = "";

    lessonsForQuarter.sort((a, b) => a.lesson_number - b.lesson_number);

    lessonsForQuarter.forEach((lesson, index) => {
        const lessonProgress = quarterlyProgress[`q${quarter}`]?.[subject]?.[index] || 0;
        const lessonDate = new Date(lesson.created_at);
        const diffDays = (now - lessonDate) / (1000 * 60 * 60 * 24);
        const isNew = diffDays <= 7;

        const lessonItem = document.createElement("div");
        lessonItem.classList.add("lesson-item");
        lessonItem.dataset.lessonId = lesson.lesson_id || index + 1;

        lessonItem.innerHTML = `
            <div class="lesson-header">
                <h4>
                    Lesson ${lesson.lesson_number}: ${lesson.lesson_title || ""}
                    ${isNew ? '<span class="badge rounded-pill new-lesson-badge" style="font-size:10px;">New</span>' : ''}
                </h4>
            </div>
            <p class="lesson-description">${lesson.description || ""}</p>
            <div class="mt-2 progress-container">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="progress-label">Student Completion</span>
                    <span class="progress-percentage">${lessonProgress}%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" role="progressbar" style="width:${lessonProgress}%;" aria-valuenow="${lessonProgress}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        `;

        // Click listener opens lesson detail
        lessonItem.addEventListener("click", () => {
            openLessonDetail(lesson, subject, quarter);
        });

        lessonContainer.appendChild(lessonItem);
    });
}

// Update the quarter buttons
document.querySelectorAll(".quarter-btn").forEach(btn => {
    btn.addEventListener("click", (e) => {
        const quarter = btn.dataset.quarter;
        const subject = document.getElementById("lessonsContainer").dataset.selectedSubject;
        renderLowLevelLessons(subject, quarter);

        // Set active class
        document.querySelectorAll(".quarter-btn").forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
    });
});

// Search and sort functionality
document.getElementById("search-lessonInput")?.addEventListener("input", (e) => {
    const query = e.target.value.toLowerCase();
    document.querySelectorAll("#lessonLists .lesson-item").forEach(item => {
        const title = item.querySelector(".lesson-header h4")?.textContent.toLowerCase() || "";
        const desc = item.querySelector(".lesson-description")?.textContent.toLowerCase() || "";
        item.style.display = title.includes(query) || desc.includes(query) ? "block" : "none";
    });
});

document.getElementById("lesson-sortSelect")?.addEventListener("change", (e) => {
    const val = e.target.value;
    const lessonContainer = document.getElementById("lessonLists");
    const items = Array.from(lessonContainer.children);

    if (val === "title-asc") {
        items.sort((a, b) => a.querySelector("h4").textContent.localeCompare(b.querySelector("h4").textContent));
    } else if (val === "title-desc") {
        items.sort((a, b) => b.querySelector("h4").textContent.localeCompare(a.querySelector("h4").textContent));
    } else if (val === "completion-asc") {
        items.sort((a, b) => parseInt(a.querySelector(".progress-percentage").textContent) - parseInt(b.querySelector(".progress-percentage").textContent));
    } else if (val === "completion-desc") {
        items.sort((a, b) => parseInt(b.querySelector(".progress-percentage").textContent) - parseInt(a.querySelector(".progress-percentage").textContent));
    }

    lessonContainer.innerHTML = "";
    items.forEach(i => lessonContainer.appendChild(i));
});

// Initialize default
document.addEventListener("DOMContentLoaded", () => {
    const defaultQuarter = "1";
    const subject = document.getElementById("lessonsContainer").dataset.selectedSubject || "English";
    renderLowLevelLessons(subject, defaultQuarter);
});

function openLessonDetail(lesson, subject, quarter) {
    const lessonsContainer = document.getElementById("lessonsContainer");
    const container = document.getElementById("lessonDetailContainer");
    if (!container) return;

    if (lessonsContainer) lessonsContainer.style.display = "none";
    container.style.display = "block";

    // Update title and subtitle
    document.getElementById("lessonTitle").textContent = `Lesson ${lesson.lesson_number}: ${lesson.lesson_title}`;
    const displaySubject = subject === "Math" ? "Mathematics" : subject;
    container.querySelector(".detail-subtitle").innerHTML = 
        `<span class="nav-quarter-link">Quarter ${quarter}:&nbsp;</span>${displaySubject} 4`;

    // === INTRODUCTION TAB ===
    const introTab = document.getElementById("introduction");
    if (introTab) {
        const desc = lesson.description || "No description available.";
        introTab.innerHTML = `
            <div class="intro-content">
                <p>${desc.replace(/\r\n/g, '<br>')}</p>
            </div>`;
    }

    // === MATERIALS TAB ===
    const materialsTab = document.getElementById("materials");
    if (materialsTab) {
        const materials = lesson.lessons_content?.filter(c => 
            ["ppt", "video", "url"].includes(c.content_type)
        ) || [];

        const materialsHTML = materials.map(item => {
            let icon = "bi-file-earmark-text";
            let buttons = "";

            if (item.content_type === "ppt") {
                icon = "bi-file-earmark-slides";
                buttons = `<a href="${item.url}" download class="btn btn-primary btn-sm">Download</a>`;
            } else if (item.content_type === "video") {
                icon = "bi-play-circle";
                buttons = `<button class="btn btn-outline-primary btn-sm" onclick="window.open('${item.url}', '_blank')">Watch</button>`;
            } else if (item.content_type === "url") {
                icon = "bi-link-45deg";
                buttons = `<a href="${item.url}" target="_blank" class="btn btn-outline-primary btn-sm">Open Link</a>`;
            }

            return `
                <div class="material-card">
                    <div class="material-icon"><i class="bi ${icon}"></i></div>
                    <h5 class="material-title">${item.title}</h5>
                    <div class="material-actions">${buttons}</div>
                </div>`;
        }).join("");

        materialsTab.innerHTML = `
            <h4 class="mb-3">Uploaded Materials</h4>
            <div class="materials-grid">
                ${materialsHTML || "<p>No materials available.</p>"}
            </div>`;
    }

    // === PRETEST & POSTTEST TABS ===
    const pretestTab = document.getElementById("pretest");
    const posttestTab = document.getElementById("posttest");

    if (pretestTab) pretestTab.innerHTML = "<p>Loading pretest...</p>";
    if (posttestTab) posttestTab.innerHTML = "<p>Loading posttest...</p>";

    const quizzes = lesson.lessons_content?.filter(c => c.content_type === "quiz") || [];
    quizzes.forEach(quizContent => {
        const isPretest = quizContent.title.toLowerCase().includes("pretest");
        const targetTab = isPretest ? pretestTab : posttestTab;

        if (!targetTab || !quizContent.quiz_data) {
            targetTab.innerHTML = "<p>Quiz data not available.</p>";
            return;
        }

        renderQuiz(quizContent.quiz_data, targetTab, isPretest ? "Pre-test" : "Post-test");
    });

    // === GAME PREVIEW TAB ===
    const gameTab = document.getElementById("game");
    if (gameTab) {
        gameTab.innerHTML = `
            <div class="text-center py-5">
                <i class="bi bi-controller display-1 text-muted mb-4"></i>
                <h4 class="text-muted">Interactive Games</h4>
                <p class="lead text-muted">Under Construction</p>
                <p class="text-muted">Previewing interactive games is coming soon!</p>
            </div>
        `;
    }
    // if (gameTab) {
    //     const games = lesson.lessons_content?.filter(c => c.content_type.startsWith("game_")) || [];
    //     if (games.length === 0) {
    //         gameTab.innerHTML = `<p>No games available for this lesson.</p>`;
    //     } else {
    //         const gameCards = games.map(game => {
    //             const gameNames = {
    //                 game_match: "Match It Up!",
    //                 game_flash: "Flash Recall!",
    //                 game_comp:  "Complete the Word!",
    //                 game_speak: "Speak Out Loud!",
    //                 game_img:   "Picture Quiz!"
    //             };
    //             const title = gameNames[game.content_type] || "Interactive Game";
    //             return `
    //                 <div class="game-card mb-3 p-3 border rounded text-center">
    //                     <i class="bi bi-controller display-4 text-primary"></i>
    //                     <h5 class="mt-3">${title}</h5>
    //                     <p class="text-muted">${game.title}</p>
    //                     <button class="btn btn-success" onclick="window.open('${game.url}', '_blank')">
    //                         <i class="bi bi-play-circle"></i> Play Game
    //                     </button>
    //                 </div>`;
    //         }).join("");

    //         gameTab.innerHTML = `
    //             <h4 class="mb-4">Interactive Games</h4>
    //             <div class="row">${gameCards}</div>
    //         `;
    //     }
    // }
}

// Simple Quiz Renderer (supports multichoice, truefalse, enumeration)
function renderQuiz(quizData, container, type = "Quiz") {
    const questions = quizData.questions || [];
    if (questions.length === 0) {
        container.innerHTML = "<p>No questions found.</p>";
        return;
    }

    let html = `
        <div class="quiz-container">
            <div class="quiz-header">
                <h3 class="quiz-title">${quizData.title || type}</h3>
                <p class="quiz-info">${questions.length} questions • ${quizData.settings?.totalItems || questions.length} items</p>
            </div>
    `;

    questions.forEach((q, i) => {
        const num = i + 1;
        if (q.type === "multichoice") {
            html += `
                <div class="question-item mb-4 p-3 border rounded">
                    <p class="question-text fw-bold">${num}. ${q.question}</p>
                    ${q.choices.map(choice => `
                        <label class="answer-option d-block">
                            <input type="radio" name="q${q.id}" disabled> ${choice.text}
                        </label>
                    `).join("")}
                    <button class="show-answer-btn" onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                        </svg>
                        Show Answer
                    </button>
                    <div class="answer-reveal" style="display:none">
                        <strong>Correct Answer:</strong> 
                        ${q.choices.find(c => c.points > 0)?.text || "N/A"}
                    </div>
                </div>`;
        }
        else if (q.type === "truefalse") {
            html += `
                <div class="question-item mb-4 p-3 border rounded">
                    <p class="question-text fw-bold">${num}. ${q.question}</p>
                    <label><input type="radio" disabled> True</label>
                    <label><input type="radio" disabled> False</label>
                    <button class="show-answer-btn" onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                        </svg>
                        Show Answer
                    </button>
                    <div class="answer-reveal" style="display:none">
                        <strong>Correct Answer:</strong> ${q.answer[0]}
                    </div>
                </div>`;
        }
        else if (q.type === "enumeration") {
            html += `
                <div class="question-item mb-4 p-3 border rounded">
                    <p class="question-text fw-bold">${num}. ${q.question}</p>
                    <input type="text" class="form-control" disabled placeholder="Type answer here">
                    <button class="show-answer-btn" onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                        </svg>
                        Show Answer
                    </button>
                    <div class="answer-reveal" style="display:none">
                        <strong>Correct Answer:</strong> ${q.answer.join(", ")}
                    </div>
                </div>`;
        }
    });

    html += `</div>`;
    container.innerHTML = html;
}


// Back button functionality
document.getElementById("backButton")?.addEventListener("click", () => {
    const lessonsContainer = document.getElementById("lessonsContainer");
    const container = document.getElementById("lessonDetailContainer");

    // Hide lesson detail container
    if (container) container.style.display = "none";

    // Show lessons list again
    if (lessonsContainer) lessonsContainer.style.display = "block";
});


</script>









</body>

</html>
