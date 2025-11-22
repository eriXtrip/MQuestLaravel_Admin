<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MQuest Teacher-Side</title>
    <link rel="stylesheet" href="{{ asset('TeacherSide/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300i,400,400i,500,600,800&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('TeacherSide/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('TeacherSide/assets/css/styles.css') }}">
</head>

<body style="padding: 24px;">
    <div class="profile-shell">
        <div class="teacher-profile-header">
            <div class="teacher-avatar-wrap">
                <div class="teacher-avatar">
                    <img class="img-fluid" alt="Man with laptop and woman playing cello" width="1080" height="1080" id="teacherPhoto" src="{{ asset('TeacherSide/assets/img/photo-1755541516453-201559bec161.jpg') }}">
                </div>
                <button id="changePhotoBtn" class="change-photo-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-upload me-1">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"></path>
                    </svg>Change Photo
                </button>
            </div>
            <div class="teacher-profile-meta">
                <div class="teacher-profile-name">
                    <h2>Maria Santos</h2>
                    <div class="d-block">
                        <div class="teacher-subtitle"><span>Master Teacher I</span></div>
                        <div class="mt-2 badges teacher-badges">
                            <div class="badge badge-warning">
                                <span class="subject math"> Mathematics</span>
                            </div>
                            <div class="badge badge-info">
                                <span>Grade 4</span>
                            </div>
                            <div class="badge badge-success">
                                <span>Permanent</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 teacher-metrics-row">
                    <div class="teacher-metric blue">
                        <div class="label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                            </svg>
                            <span> Total Students</span>
                        </div>
                        <div class="value" data-target="84"><span>0</span></div>
                    </div>
                    <div class="teacher-metric blue">
                        <div class="label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up">
                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"></path>
                            </svg>
                            <span> Avg Progress</span>
                        </div>
                        <div class="value" data-target="87">
                            <span>0%</span>
                        </div>
                    </div>
                    <div class="teacher-metric blue">
                        <div class="label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock-history">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"></path>
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"></path>
                            </svg>
                            <span> Experience</span>
                        </div>
                        <div class="value" data-target="12">
                            <span>0 yrs</span>
                        </div>
                    </div>
                    <div class="teacher-metric blue">
                        <div class="label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book">
                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                            </svg>
                            <span>Total Lessons Uploaded</span>
                        </div>
                        <div class="value" data-target="96">
                            <span>10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-shell">
            <div class="nav-tabs-custom nav" role="tablist" id="profileTabs">
                <button class="active nav-link" data-tab="tab-personal" type="button">Personal</button>
                <button class="nav-link" data-tab="tab-professional" type="button">Professional &amp; Qualifications</button>
                <button class="nav-link" data-tab="tab-teaching" type="button">Teaching Info &amp; Performance</button>
            </div>
            <div class="teacher-detail-card">
                <div id="tab-personal" class="tab-content show active">
                    <div class="editable-section">
                        <div class="teacher-section-title">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-circle">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                                </svg>
                                <span> Personal Information</span>
                            </div>
                            <div class="text-end teacher-edit-col">
                                <button class="edit-profile-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pencil-square me-1">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"></path>
                                    </svg> Edit Profile
                                </button>
                                <div class="gap-2 teacher-edit-actions" style="display: none;">
                                    <button class="cancel-edit-btn">Cancel</button>
                                    <button class="save-changes-btn">Save Changes</button>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-section-body">
                            <div>
                                <div class="field">
                                    <div class="label">
                                        <span>First Name</span>
                                    </div>
                                    <div class="value">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person icon-muted">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                        </svg>
                                        <span class="view-value" data-field="firstName"> Maria</span>
                                        <input type="text" class="form-control edit-input" value="Maria" data-field="firstName" style="display: none;">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <span>Email Address</span>
                                    </div>
                                    <div class="value">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope icon-muted">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                        </svg>
                                        <span class="view-value" data-field="email"> maria.santos@delrosario.edu.ph</span>
                                        <input type="text" class="form-control edit-input" value="maria.santos@delrosario.edu.ph" data-field="email" style="display: none;">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <span>Address</span></div>
                                    <div class="value">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-geo-alt icon-muted">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"></path>
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                                        </svg>
                                        <span class="view-value" data-field="address"> Del Rosario Elementary School, Batangas</span>
                                        <input type="text" class="form-control edit-input" value="Del Rosario Elementary School, Batangas" data-field="address" style="display: none;">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <span>Date of Birth</span>
                                    </div>
                                    <div class="value">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-calendar4 icon-muted">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"></path>
                                        </svg>
                                        <span class="view-value" data-field="dob"> June 15, 1985</span>
                                        <input class="form-control edit-input" type="date" style="display: none;" data-field="dob" value="1985-06-15">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="field">
                                    <div class="label">
                                        <span>Last Name</span>
                                    </div>
                                    <div class="value">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person icon-muted">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                        </svg>
                                        <span class="view-value" data-field="lastName"> Santos</span>
                                        <input type="text" class="form-control edit-input" value="Santos" data-field="lastName" style="display: none;">
                                    </div>
                                </div>
                                <div class="field icon-muted">
                                    <div class="label icon-muted">
                                        <span class="icon-muted">Phone Number</span>
                                    </div>
                                    <div class="value icon-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone icon-muted">
                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                        </svg>
                                        <span class="view-value" data-field="phone"> +63 912 345 6789</span>
                                        <input type="tel" class="form-control edit-input" style="display: none;" value="+63 912 345 6789" data-field="phone">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label icon-muted">
                                        <span class="icon-muted">Employee ID</span>
                                    </div>
                                    <div class="value">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-credit-card-2-front icon-muted">
                                            <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"></path>
                                            <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5"></path>
                                        </svg>
                                        <span class="view-value" data-field="employeeId"> DRES-2018-0042</span>
                                        <input type="text" class="form-control edit-input" value="DRES-2018-0042" data-field="employeeId" disabled="" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 teacher-bio"><strong>Biography</strong>
                            <p class="mt-2 view-value" data-field="bio">Passionate educator committed to fostering a love for learning in young minds. With over 12 years of experience in elementary education, I specialize in creating engaging and inclusive learning environments that cater to diverse learning needs. I believe every child has unique potential that can be unlocked through personalized attention and innovative teaching methods.</p><textarea class="form-control edit-input" data-field="bio" rows="4" style="display: none;">Passionate educator committed to fostering a love for learning in young minds. With over 12 years of experience in elementary education, I specialize in creating engaging and inclusive learning environments that cater to diverse learning needs. I believe every child has unique potential that can be unlocked through personalized attention and innovative teaching methods.</textarea>
                        </div>
                    </div>
                </div>
                <div class="d-none tab-content" id="tab-professional">
                    <div class="mb-2 editable-section">
                        <div class="teacher-section-title">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-briefcase">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"></path>
                                </svg>
                                <span> Professional</span>
                            </div>
                            <div class="text-end teacher-edit-col">
                                <button class="edit-profile-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pencil-square me-1">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"></path>
                                    </svg> Edit info
                                </button>
                                <div class="gap-2 teacher-edit-actions" style="display: none;">
                                    <button class="cancel-edit-btn">Cancel</button>
                                    <button class="save-changes-btn">Save Changes</button>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-section-body">
                            <div>
                                <div class="field">
                                    <div class="label">
                                        <span>Position</span>
                                    </div>
                                    <div class="value">
                                        <span class="view-value" data-field="position">Master Teacher I</span>
                                        <input type="text" class="form-control edit-input" value="Master Teacher I" data-field="position" style="display:none;">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <span>Primary Subject</span>
                                    </div>
                                    <div class="value">
                                        <span class="badge badge-warning view-value" data-field="subject">Mathematics</span>
                                        <input type="text" class="form-control edit-input" value="Mathematics" data-field="subject" style="display:none;">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <span>Years of Experience</span>
                                    </div>
                                    <div class="value">
                                        <span class="view-value" data-field="experience">12yrs</span>
                                        <input type="number" class="form-control edit-input" value="12" data-field="experience" min="0" style="display:none;">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="field">
                                    <div class="label">
                                        <span>Department</span>
                                    </div>
                                    <div class="value">
                                        <span class="view-value" data-field="department">Elementary Education</span>
                                        <input type="text" class="form-control edit-input" value="Elementary Education" data-field="department" style="display:none;">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <span>Employment Status</span>
                                    </div>
                                    <div class="value">
                                        <span class="badge badge-success view-value" data-field="employmentStatus">Permanent</span>
                                        <select class="form-control edit-input" data-field="employmentStatus" style="display:none;">
                                            <option value="Permanent" selected="">Permanent</option>
                                            <option value="Contractual">Contractual</option>
                                            <option value="Probationary">Probationary</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <span>Specializations</span>
                                    </div>
                                    <div class="value">
                                        <span class="view-value" data-field="specializations">Mathematics Major</span>
                                        <input type="text" class="form-control edit-input" value="Mathematics Major" data-field="specializations" style="display:none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="editable-section">
                        <div class="teacher-section-title">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-award">
                                    <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"></path>
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"></path>
                                </svg>
                                <span>Educational Qualifications</span>
                            </div>
                            <div class="text-end teacher-edit-col">
                                <button class="edit-profile-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pencil-square me-1">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"></path>
                                    </svg> Edit info
                                </button>
                                <div class="gap-2 teacher-edit-actions" style="display: none;">
                                    <button class="cancel-edit-btn">Cancel</button>
                                    <button class="save-changes-btn">Save Changes</button>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-section-body">
                            <div>
                                <div class="field">
                                    <div class="label">
                                        <span>Highest Degree</span>
                                    </div>
                                    <div class="value">
                                        <span class="view-value" data-field="degree">Master of Arts in Education</span>
                                        <input type="text" class="form-control edit-input" value="Master of Arts in Education" data-field="degree" style="display:none;">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">
                                        <span>University</span>
                                    </div>
                                    <div class="value">
                                        <span class="view-value" data-field="university">Batangas State University</span>
                                        <input type="text" class="form-control edit-input" value="Batangas State University" data-field="university" style="display:none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none tab-content" id="tab-teaching">
                    <div class="mb-2 editable-section">
                        <div class="teacher-section-title">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-book">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
                                </svg>
                                <span>Teaching Assignment</span>
                            </div>
                            <div class="text-end teacher-edit-col">
                                <button class="edit-profile-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pencil-square me-1">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"></path>
                                    </svg> Edit info
                                </button>
                                <div class="gap-2 teacher-edit-actions" style="display: none;">
                                    <button class="cancel-edit-btn">Cancel</button>
                                    <button class="save-changes-btn">Save Changes</button>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-section-body">
                            <div class="field">
                                <div class="label">
                                    <span>Assigned Grade Level</span>
                                </div>
                                <div class="value">
                                    <span class="view-value" data-field="gradeLevel">Grade 4</span>
                                    <input type="text" class="form-control edit-input" value="Grade 4" data-field="gradeLevel" style="display:none;" disabled="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="label">
                                    <span>Schedule Type</span></div>
                                <div class="value"><span class="badge badge-success view-value" data-field="schedule">Full-time</span>
                                    <select class="form-control edit-input" data-field="schedule" style="display:none;">
                                        <option value="Full-time" selected="">Full-time</option>
                                        <option value="Part-time">Part-time</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="label">
                                    <span>Total Students</span>
                                </div>
                                <div class="value">
                                    <span class="view-value" data-field="students">84</span>
                                    <input type="number" class="form-control edit-input" value="84" data-field="students" min="1" style="display:none;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="teacher-section-title">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"></path>
                                </svg>
                                <span>Performance Metric</span>
                            </div>
                        </div>
                        <div class="mb-4 top-progress-row">
                            <div class="progress-block">
                                <div class="teacher-progress-label">
                                    <div><span>Completion Rate</span></div>
                                    <div class="fw-bold" id="completionPercentLabel">
                                        <span>80%</span>
                                    </div>
                                </div>
                                <div class="tiny-note">
                                    <span>Average completion across all lessons</span>
                                </div>
                                <div class="bar-wrap">
                                    <div class="progress-bar bar-inner" style="width:80%;"></div>
                                </div>
                            </div>
                            <div class="progress-block">
                                <div class="teacher-progress-label">
                                    <div><span>Engagement Rate</span></div>
                                    <div class="fw-bold" id="engagementPercentLabel">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="tiny-note">
                                    <span>Student active participation and activity</span>
                                </div>
                                <div class="bar-wrap">
                                    <div class="progress-bar bar-inner" style="width:50%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="insights">
                            <h6>Overall Insights</h6>
                            <div class="insight-card strong-performance">
                                <div class="insight-content">
                                    <div class="insight-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up-arrow">
                                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"></path>
                                        </svg>
                                    </div>
                                    <div class="insight-text">
                                        <div class="insight-title">
                                            <span>Strong Performance in Mathematics</span>
                                        </div>
                                        <div class="insight-description">
                                            <span> Mathematics shows consistent improvement with 92% average score across the latest lessons. Students are highly engaged and completing lessons on time.&nbsp;</span>
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
                                        <div class="insight-title">
                                            <span>Focus Area: Lesson 5 (Algebra)</span>
                                        </div>
                                        <div class="insight-description">
                                            <span> Lesson 5 shows lower engagement (78%) and mastery (75%) compared to other lessons in Mathematics. Recommend adding more interactive activities, practice problems, and providing additional support materials. </span>
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
                                        <div class="insight-title">
                                            <span>Progressive Improvement Trend</span>
                                        </div>
                                        <div class="insight-description">
                                            <span> Quarter-over-quarter analysis shows a positive trend in Mathematics. Q4 performance (90%) represents a 5-point improvement from Q1 (85%). Maintain current teaching methods and continue to provide varied learning materials. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Uplaod Image Modal-->
        <div class="photo-upload-modal" id="photoUploadModal">
            <div class="photo-upload-content">
                <div class="photo-upload-header">
                    <h3 class="photo-upload-title">Upload New Photo</h3>
                    <button class="photo-upload-close" id="closePhotoModal">×</button>
                </div>
                <div class="photo-upload-body">
                    <div class="photo-preview-container">
                        <img id="previewImage" class="photo-preview" src="" alt="Preview">
                        <div class="photo-placeholder">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-circle">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="photo-upload-form">
                        <div class="file-input-wrapper" id="fileInputWrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-upload">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"></path>
                            </svg>
                            <span class="file-input-label" id="fileNameLabel">Choose an image</span>
                            <input type="file" accept="image/*" class="file-input" id="photoInput">
                        </div>
                    </div>
                </div>
                <div class="photo-upload-footer">
                    <button class="btn-cancel" id="cancelUpload">Cancel</button>
                    <button class="btn-upload" id="uploadButton">Upload</button>
                </div>
            </div>
        </div>

        <!--Toast Container-->
        <div class="position-fixed bottom-0 end-0 p-3 toast-container" id="toast-container" style="z-index: 9999;"></div>
    </div>


    <script src="{{ asset('TeacherSide/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('TeacherSide/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('TeacherSide/assets/js/chart.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0/dist/chartjs-plugin-datalabels.min.js"></script>
    <script src="{{ asset('TeacherSide/assets/js/allcharts.js') }}"></script>
    <script src="{{ asset('TeacherSide/assets/js/script.js') }}"></script>
    <script src="{{ asset('TeacherSide/assets/js/time.js') }}"></script>
    <script src="{{ asset('TeacherSide/assets/js/toast-manager.js') }}"></script>
</body>

</html>