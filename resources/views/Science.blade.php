
            <div class="d-none subject-section content-section" id="lessonSection">
                <div class="ms-1 tab-container main-tab"><button class="btn active tab-button" type="button" onclick="switchTab(event, &#39;tab1&#39;)">Create</button><button class="btn tab-button" type="button" onclick="switchTab(event, &#39;tab2&#39;)">Lessons</button><button class="btn tab-button" type="button" onclick="switchTab(event, &#39;tab3&#39;)">People</button>
                    <div class="tab-indicator"></div>
                </div>
                <div id="tab1" class="tab-content active">
                    <div class="p-3 subject-box">
                        <div class="mb-2 col" style="height: 15rem;     position: relative;     width: 100%;">
                            <div class="mb-2 card science-subject-card">
                                <div class="subject-title">
                                    <h3>Science 4</h3>
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
                                <div id="defaultQuarterLabel" style="font-size:0.75rem;color:var(--text-light);"><span class="small"> Default Quarter: </span><strong class="small">None</strong></div><button class="btn btn-secondary" id="setDefaultQuarterBtn" type="button">Set Current as Default</button>
                            </div>
                        </div>
                        <div class="mb-2 form-container lesson-container" id="lessonTemplate-1">
                            <h2 class="p-2">Create Lesson</h2>
                            <section class="main-container-lesson">
                                <h6><span>1&nbsp;</span>Lesson Title</h6>
                                <form>
                                    <div class="form-group lesson-title-wrapper"><input type="text" id="lesson-title-1" placeholder=" " required=""><label for="lesson-title-1">Lesson Title</label></div>
                                    <div class="form-group lesson-title-wrapper"><textarea id="lesson-description-1" placeholder=" " required=""></textarea><label for="lesson-description-1">Lesson Description</label></div>
                                    <div class="form-group lesson-title-wrapper"><textarea id="objectives-1" placeholder=" " required=""></textarea><label for="lesson-description-1">Objectives</label></div>
                                </form>
                            </section>
                            <section class="main-container-lesson">
                                <h6><span>2</span>Pre Test</h6>
                                <p class="text-muted mb-2">Create a pretest with 5–10 questions (True/False, Multiple Choice, Fill in the Blank).</p>
                                <div id="quiz-container-1"></div>
                                <div class="mb-3 quiz"><label class="form-label" for="questionType-1">Choose Question Type</label><select class="mb-2 form-select" id="questionType-1">
                                        <option value="" selected="">Select Type</option>
                                        <option value="truefalse">True / False</option>
                                        <option value="multiple">Multiple Choice</option>
                                        <option value="fillblank">Fill in the Blank</option>
                                    </select><button class="btn mb-3 addQuestion-btn" id="add-question-btn-1" type="button" onclick="addQuestion()"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle me-2">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                        </svg>Add Question</button></div>
                            </section>
                            <section class="main-container-lesson">
                                <h6><span>3</span>Games Builder (Optional)</h6>
                                <p class="text-muted mb-2">Create a game activity with 5–10 items (Matching, Flashcard, Fill in the Blank, Spelling, Speak, Image Quiz).</p>
                                <div class="mb-3 quiz"><label class="form-label" for="gametype">Choose a Game Type</label><select class="mb-2 form-select" id="gameSelect">
                                        <option value="" selected="">Select Type</option>
                                        <option value="matching">Matching</option>
                                        <option value="flashcard">Flash Card</option>
                                        <option value="spelling">Spelling</option>
                                        <option value="speak">Speak</option>
                                        <option value="imagequiz">Image Quiz</option>
                                    </select></div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="matching-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Matching Game</h5><button class="btn btn-sm reset-btn" type="button" data-target="matching-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="matching-container"></div><button class="btn mb-3 add-game" id="addMatchingBtn" type="button">Add Another Pair</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="flashcard-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Flashcard Game</h5><button class="btn btn-sm reset-btn" type="button" data-target="flashcard-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="flashcard-container"></div><button class="btn mb-3 add-game" id="addFlashcardBtn" type="button">Add Another Card</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="spelling-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Fill-in-the-Blank</h5><button class="btn btn-sm reset-btn" type="button" data-target="spelling-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="spelling-container"></div><button class="btn mb-3 add-game" id="addSpellingBtn" type="button">Add Another Word</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="speak-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Speech</h5><button class="btn btn-sm reset-btn" type="button" data-target="speak-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="speak-container"></div><button class="btn mb-3 add-game" id="addSpeakBtn" type="button">Add Another Prompt</button>
                                </div>
                                <div class="shadow-sm p-2 mb-4 game-template card" id="imagequiz-game">
                                    <div class="d-flex justify-content-between align-items-center p-2 mb-3">
                                        <h5>Image Quiz</h5><button class="btn btn-sm reset-btn" type="button" data-target="imagequiz-container"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"></path>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"></path>
                                            </svg></button>
                                    </div>
                                    <div id="imagequiz-container"></div><button class="btn mb-3 add-game" id="addImageQuizBtn" type="button">Add Another Image Quiz</button>
                                </div>
                            </section>
                            <section class="main-container-lesson">
                                <div class="row">
                                    <div class="mb-3 col-12 col-md-6">
                                        <h6><span>4</span>Upload Learning Material</h6>
                                        <p class="text-muted">Select a PowerPoint or PDF file (.ppt or .pptx) to upload.&nbsp;</p>
                                        <div class="mt-3 container">
                                            <div class="mb-3 drop-zone upload-container" id="dropZone-1"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-upload">
                                                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z"></path>
                                                </svg>
                                                <p class="mb-0">Drop files here</p><small class="text-muted">Files Supported: PDF, PPT, PPTX</small><br><label class="btn-upload" for="fileInput-1">Choose File</label><br><small class="text-muted">Maximum size: 5MB</small><input type="file" id="fileInput-1" class="file-input" accept=".ppt,.pptx">
                                            </div>
                                            <div class="mb-3 file-info" id="fileNameDisplay-1">
                                                <p id="fileName-1" class="file-name">Paragraph</p>
                                                <p id="fileSize-1" class="file-size">Paragraph</p>
                                            </div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-3" placeholder=" " required=""><label for="file-title-3">Title</label></div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-4" placeholder=" " required=""><label for="file-title-4">Subtitle</label></div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <h6><span>5</span>Upload Video/s</h6>
                                        <p class="text-muted mb-2">Select a video file (e.g., .mp4, .mov, .webm) to upload.&nbsp;</p>
                                        <div class="mt-3 container">
                                            <div class="mb-3 drop-zone upload-container" id="dropZone2-1"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-upload">
                                                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z"></path>
                                                </svg>
                                                <p class="mb-0">Drop video here</p><small class="text-muted">Files Supported: MP4, MOV, WEBM&nbsp;</small><br><label class="btn-upload" for="videoInput-1">Choose File</label><br><small class="text-muted">Maximum size: 5MB</small><input type="file" id="videoInput-1" class="video-input" accept="video/*">
                                            </div>
                                            <div id="videoPreview-1" class="video-preview"><video id="previewVideo-1" controls=""></video>
                                                <div class="video-controls"><button id="playPauseBtn-1">Play</button></div>
                                            </div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="file-title-5" placeholder=" " required=""><label for="file-title-5">Title</label></div>
                                            <div class="form-group lesson-title-wrapper"><input type="text" id="video-title-1" placeholder=" " required=""><label for="video-title-1">Subtitle</label></div>
                                            <div class="upload-url-container">
                                                <h4><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-link-45deg me-2">
                                                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"></path>
                                                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"></path>
                                                    </svg>Or Add a Video URL</h4>
                                                <div class="url-input-group"><input type="url" id="urlInput" class="url-input" placeholder="https://shareprojectdikename.com/csv-file"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="main-container-lesson">
                                <h6><span>6</span>Post Test</h6>
                                <p class="text-muted mb-2">Create a pretest with 5–10 questions (True/False, Multiple Choice, Fill in the Blank).</p>
                                <div id="quiz-container2-1"></div>
                                <div class="mb-3 quiz"><label class="form-label" for="questionType2-1">Choose Question Type</label><select class="mb-2 form-select" id="questionType2-1">
                                        <option value="" selected="">Select Type</option>
                                        <option value="truefalse">True / False</option>
                                        <option value="multiple">Multiple Choice</option>
                                        <option value="fillblank">Fill in the Blank</option>
                                    </select><button class="btn mb-3 addQuestion-btn" id="add-question-btn2-1" type="button" onclick="addQuestion2()"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle me-2">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                        </svg>Add Question</button></div>
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
                            <div class="d-flex flex-wrap gap-3 p-4"><button class="btn me-2 publish-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-circle me-2">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"></path>
                                    </svg>Publish Lesson</button><button class="btn btn-outline-secondary save-draft-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-save me-2">
                                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1z"></path>
                                    </svg>Save As Draft</button></div>
                        </div>
                    </div>
                    <div class="create"><button class="btn floating-create-btn" id="createLessonBtn-1" type="button" aria-label="Create Lesson"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                            </svg></button></div>
                </div>
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
                            <div id="Q1" class="lesson-item active">
                                <div class="lesson-header" data-bs-toggle="collapse" data-bs-target="#contentQ1" aria-expanded="false" aria-controls="contentQ1">
                                    <div class="header-left">
                                        <h2>Lesson 1</h2>
                                        <p>Introduction to Shapes</p>
                                    </div>
                                    <div class="header-right"><span>+</span></div>
                                </div>
                                <div id="contentQ1" class="collapse">
                                    <div class="lesson-content">
                                        <div class="part-1">
                                            <div class="mb-2 part-intro">
                                                <h6>Lesson Overview</h6>
                                                <p class="text-muted small">This lesson introduces learners to the concept of place value in 3- to 4-digit numbers. Students will learn how to identify the value of digits in the ones, tens, hundreds, and thousands places through visual aids, interactive activities, and real-life examples like counting objects and money.</p>
                                            </div>
                                            <div class="mb-2 part-1-obj">
                                                <h6>At the end of the lesson, the learner will be able to:&nbsp;</h6>
                                                <ul class="obj-list">
                                                    <li>Identify the main parts of a plant (roots, stem, leaves, flowers).</li>
                                                    <li>Describe the function of each part in the plant’s survival.</li>
                                                    <li>Label a diagram of a plant correctly.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-2 part-2">
                                            <p>Learning Materials Included:</p>
                                            <ul class="list-unstyled part-2 materials">
                                                <li class="material-item">10-Item Pre Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">Illustrated Guide (PDF)<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">10-Item Post Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Q2" class="lesson-item">
                                <div class="lesson-header" data-bs-toggle="collapse" data-bs-target="#contentQ2" aria-expanded="false" aria-controls="contentQ2">
                                    <div class="header-left">
                                        <h2>Lesson 1</h2>
                                        <p>Introduction to Colors</p>
                                    </div>
                                    <div class="header-right"><span>+</span></div>
                                </div>
                                <div id="contentQ2" class="collapse">
                                    <div class="lesson-content">
                                        <div class="part-1">
                                            <div class="mb-2 part-intro">
                                                <h6>Lesson Overview</h6>
                                                <p class="text-muted small">This lesson introduces learners to the concept of place value in 3- to 4-digit numbers. Students will learn how to identify the value of digits in the ones, tens, hundreds, and thousands places through visual aids, interactive activities, and real-life examples like counting objects and money.</p>
                                            </div>
                                            <div class="mb-2 part-1-obj">
                                                <h6>At the end of the lesson, the learner will be able to:&nbsp;</h6>
                                                <ul class="obj-list">
                                                    <li>Identify the main parts of a plant (roots, stem, leaves, flowers).</li>
                                                    <li>Describe the function of each part in the plant’s survival.</li>
                                                    <li>Label a diagram of a plant correctly.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-2 part-2">
                                            <p>Learning Materials Included:</p>
                                            <ul class="list-unstyled part-2 materials">
                                                <li class="material-item">10-Item Pre Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">Illustrated Guide (PDF)<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">10-Item Post Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Q3" class="lesson-item">
                                <div class="lesson-header" data-bs-toggle="collapse" data-bs-target="#contentQ3" aria-expanded="false" aria-controls="contentQ3">
                                    <div class="header-left">
                                        <h2>Lesson 1</h2>
                                        <p>Introduction to Flowers</p>
                                    </div>
                                    <div class="header-right"><span>+</span></div>
                                </div>
                                <div id="contentQ3" class="collapse">
                                    <div class="lesson-content">
                                        <div class="part-1">
                                            <div class="mb-2 part-intro">
                                                <h6>Lesson Overview</h6>
                                                <p class="text-muted small">This lesson introduces learners to the concept of place value in 3- to 4-digit numbers. Students will learn how to identify the value of digits in the ones, tens, hundreds, and thousands places through visual aids, interactive activities, and real-life examples like counting objects and money.</p>
                                            </div>
                                            <div class="mb-2 part-1-obj">
                                                <h6>At the end of the lesson, the learner will be able to:&nbsp;</h6>
                                                <ul class="obj-list">
                                                    <li>Identify the main parts of a plant (roots, stem, leaves, flowers).</li>
                                                    <li>Describe the function of each part in the plant’s survival.</li>
                                                    <li>Label a diagram of a plant correctly.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-2 part-2">
                                            <p>Learning Materials Included:</p>
                                            <ul class="list-unstyled part-2 materials">
                                                <li class="material-item">10-Item Pre Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">Illustrated Guide (PDF)<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">10-Item Post Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Q4" class="lesson-item">
                                <div class="lesson-header" data-bs-toggle="collapse" data-bs-target="#contentQ4" aria-expanded="false" aria-controls="contentQ4">
                                    <div class="header-left">
                                        <h2>Lesson 1</h2>
                                        <p>Introduction to Human</p>
                                    </div>
                                    <div class="header-right"><span>+</span></div>
                                </div>
                                <div id="contentQ4" class="collapse">
                                    <div class="lesson-content">
                                        <div class="part-1">
                                            <div class="mb-2 part-intro">
                                                <h6>Lesson Overview</h6>
                                                <p class="text-muted small">This lesson introduces learners to the concept of place value in 3- to 4-digit numbers. Students will learn how to identify the value of digits in the ones, tens, hundreds, and thousands places through visual aids, interactive activities, and real-life examples like counting objects and money.</p>
                                            </div>
                                            <div class="mb-2 part-1-obj">
                                                <h6>At the end of the lesson, the learner will be able to:&nbsp;</h6>
                                                <ul class="obj-list">
                                                    <li>Identify the main parts of a plant (roots, stem, leaves, flowers).</li>
                                                    <li>Describe the function of each part in the plant’s survival.</li>
                                                    <li>Label a diagram of a plant correctly.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-2 part-2">
                                            <p>Learning Materials Included:</p>
                                            <ul class="list-unstyled part-2 materials">
                                                <li class="material-item">10-Item Pre Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">Illustrated Guide (PDF)<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                                <li class="material-item">10-Item Post Test Quiz<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right">
                                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"></path>
                                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"></path>
                                                    </svg></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab3" class="tab-content">
                    <div class="p-3 people-main-container">
                        <div class="mb-4 teacher-ab">
                            <div class="student-header">
                                <div style="display: flex ;     flex-grow: 1;     flex-wrap: wrap;     align-items: baseline;">
                                    <h2 class="student-title">Teachers</h2>
                                </div>
                            </div>
                            <div class="teacher-item"><img class="img-fluid avatar-teacher" alt="Man with laptop and woman playing cello" width="1080" height="1080" src="assets/img/photo-1755541516453-201559bec161.jpg">
                                <p class="mb-0 teacher-name">Jeffrey Belson</p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="student-ab">
                            <div class="student-header">
                                <div class="justify-content-between" style="display: flex ;     flex-grow: 1;     flex-wrap: wrap;     align-items: baseline;">
                                    <h2 class="student-title">Pupils Enrolled</h2>
                                    <div class="text-muted" style="padding-right: 1rem;">
                                        <p>34 Pupils</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pupil-item"><img class="img-fluid avatar-pupil" width="200" height="200" src="assets/img/6.png">
                                <p class="mb-0 student-name">Anna</p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                            <div class="pupil-item"><img class="img-fluid avatar-pupil" width="200" height="200" src="assets/img/2.png">
                                <p class="mb-0 student-name">Bella</p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                            <div class="pupil-item"><img class="img-fluid avatar-pupil" width="200" height="200" src="assets/img/10.png">
                                <p class="mb-0 student-name">Joseph Marco</p><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope email-icon">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>