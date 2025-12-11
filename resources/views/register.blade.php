<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/Login_Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/register_style.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="register-container">
        <div class="progress-bar">
            <div class="progress-step active" id="step-0">1</div>
            <div class="progress-step" id="step-1">2</div>
            <div class="progress-step" id="step-2">3</div>
            <div class="progress-step" id="step-3">4</div>
            <div class="progress-step" id="step-4">5</div>
            <div class="progress-step" id="step-5">6</div>
            <div class="progress-step" id="step-6">7</div>
            <div class="progress-step" id="step-7">8</div>
        </div>

        <!-- Step 0: Role Selection -->
        <div class="step-content" id="step0-content">
            <button class="back-button" onclick="window.location.href='{{ route('login') }}'">&larr;</button>
            <h2>Who are you registering as?</h2>
            <p>Please choose your role to continue the registration.</p>
            <button class="register-button" style="display: none;" onclick="goToStep(1, 'Pupil')">I am a Pupil</button>
            <button class="register-button" onclick="goToStep(1, 'Teacher')">I am a Teacher</button>
        </div>

        <!-- Step 1: Name Input -->
        <div class="step-content" id="step1-content" style="display: none;">
            <button class="back-button" onclick="goToStep(0)">&larr;</button>
            <h2>What's your name?</h2>
            <p>Enter the name you use in real life.</p>
            <div class="row">
                <div class="half-input">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" placeholder="First name" required>
                </div>
                <div class="half-input">
                    <label for="middleName">Middle Name</label>
                    <input type="text" id="middleName" name="middleName" placeholder="Middle name">
                </div>
            </div>
            <div class="row">
                <div class="half-input">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Last name" required>
                </div>
                <div class="half-input">
                    <label for="suffix">Suffix (Optional)</label>
                    <input type="text" id="suffix" name="suffix" placeholder="e.g. Jr, Sr, III">
                </div>
            </div>
            <button class="register-button" onclick="validateAndGoToStep(1, 2)">Next</button>
        </div>

        <!-- Step 2: Gender Selection -->
        <div class="step-content" id="step2-content" style="display: none;">
            <button class="back-button" onclick="goToStep(1)">&larr;</button>
            <h2>What's your gender?</h2>
            <p>Select your gender.</p>
            <div class="gender-list">
                <div class="gender-option">
                    <span>Female</span>
                    <input type="radio" name="gender" value="Female" onclick="handleGenderSelect('Female')">
                </div>
                <div class="gender-option">
                    <span>Male</span>
                    <input type="radio" name="gender" value="Male" onclick="handleGenderSelect('Male')">
                </div>
                <div class="gender-option">
                    <span>Prefer not to say</span>
                    <input type="radio" name="gender" value="Prefer not to say" onclick="handleGenderSelect('Prefer not to say')">
                </div>
            </div>
            <button class="register-button" onclick="validateAndGoToStep(2, 3)">Next</button>
        </div>

        <!-- Step 3: Birthday -->
        <div class="step-content" id="step3-content" style="display: none;">
            <button class="back-button" onclick="goToStep(2)">&larr;</button>
            <h2>What's your birthday?</h2>
            <p>Choose your date of birth.</p>
            <input type="date" id="birthday" name="birthday" max="2025-09-15" required>
            <button class="register-button" onclick="validateAndGoToStep(3, 5)">Next</button>
        </div>

        <!-- Step 4: LRN or Teacher ID -->
        <div class="step-content" id="step4-content" style="display: none;">
            <button class="back-button" onclick="goToStep(3)">&larr;</button>
            <h2 id="id-title"></h2>
            <p id="id-description"></p>
            <div class="input-group">
                <label for="idInput" id="id-label"></label>
                <input type="text" id="idInput" name="idInput" required>
            </div>
            <button class="register-button" onclick="validateAndGoToStep(4, 5)">Next</button>
        </div>

        <!-- Step 5: Email -->
        <div class="step-content" id="step5-content" style="display: none;">
            <button class="back-button" onclick="goToStep(3)">&larr;</button>
            <h2>What's your email?</h2>
            <p>Enter your active email where you can be contacted.</p>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="example@email.com" required>
            </div>
            <button class="register-button" onclick="validateAndGoToStep(5, 6)">Send Verification Code</button>
        </div>

        <!-- Step 6: Verification Code -->
        <div class="step-content" id="step6-content" style="display: none;">
            <button class="back-button" onclick="goToStep(5)">&larr;</button>
            <h2>Verification Code</h2>
            <p>Enter the 6-digit code sent to <span id="display-email"></span></p>
            <div class="code-container">
                <input type="text" class="code-input" maxlength="1" oninput="handleCodeInput(this, 0)">
                <input type="text" class="code-input" maxlength="1" oninput="handleCodeInput(this, 1)">
                <input type="text" class="code-input" maxlength="1" oninput="handleCodeInput(this, 2)">
                <input type="text" class="code-input" maxlength="1" oninput="handleCodeInput(this, 3)">
                <input type="text" class="code-input" maxlength="1" oninput="handleCodeInput(this, 4)">
                <input type="text" class="code-input" maxlength="1" oninput="handleCodeInput(this, 5)">
            </div>
            <p class="register-link">Didn't receive code? <a href="#" onclick="resendCode()">Resend Code</a></p>
            <button class="register-button" onclick="validateAndGoToStep(6, 7)">Verify Code</button>
        </div>

        <!-- Step 7: Password -->
        <div class="step-content" id="step7-content" style="display: none;">
            <button class="back-button" onclick="goToStep(6)">&larr;</button>
            <h2>Create a Password</h2>
            <p>Create a password with at least 8 letters or numbers. It should be something others can't guess.</p>

            <!-- Password -->
            <div class="input-group">
                <label for="password">
                    Password 
                    <a href="#" onclick="showPasswordHint()">Tips</a>
                </label>
                <div style="position: relative;">
                    <input type="password" id="password" name="password" minlength="8" required>
                    <ion-icon id="togglePassword" name="eye-outline"
                            style="position:absolute; right:10px; top:50%; transform:translateY(-50%); cursor:pointer; font-size:20px; color:#555;"
                            onclick="togglePassword('password','togglePassword')">
                    </ion-icon>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <div style="position: relative;">
                    <input type="password" id="confirm-password" name="confirm-password" minlength="8" required>
                    <ion-icon id="toggleConfirmPassword" name="eye-outline"
                            style="position:absolute; right:10px; top:50%; transform:translateY(-50%); cursor:pointer; font-size:20px; color:#555;"
                            onclick="togglePassword('confirm-password','toggleConfirmPassword')">
                    </ion-icon>
                </div>
            </div>

             <!-- Terms and Conditions Checkbox -->
            <div class="input-group" style="margin-top: 20px;">
                <div style="display: flex; align-items: flex-start; gap: 10px;">
                    <input type="checkbox" id="agree-terms" name="agree-terms" style="margin-top: 3px;">
                    <label for="agree-terms" style="font-weight: normal; margin: 0; line-height: 1.4;">
                        I agree to the 
                        <a href="#" onclick="showTermsModal()" style="color: #007bff; text-decoration: underline;">Terms and Conditions</a>
                    </label>
                </div>
            </div>

            <!-- Privacy Policy Checkbox -->
            <div class="input-group" style="margin-top: 10px;">
                <div style="display: flex; align-items: flex-start; gap: 10px;">
                    <input type="checkbox" id="agree-privacy" name="agree-privacy" style="margin-top: 3px;">
                    <label for="agree-privacy" style="font-weight: normal; margin: 0; line-height: 1.4;">
                        I agree to the 
                        <a href="#" onclick="showPrivacyModal()" style="color: #007bff; text-decoration: underline;">Privacy Policy</a>
                    </label>
                </div>
            </div>

            <button class="register-button" onclick="validateAndGoToStep(7, 8)">Complete Registration</button>
        </div>

        <!-- Terms and Conditions Modal -->
        <div id="termsModal" class="modal" style="display: none;">
            <div class="modal-content" style="max-width: 800px; max-height: 80vh;">
                <div class="modal-header">
                    <h3>Terms and Conditions</h3>
                    <span class="close" onclick="closeTermsModal()">&times;</span>
                </div>
                <div class="modal-body" style="overflow-y: auto; max-height: 60vh; padding: 20px;">
                    <p style="opacity: 0.7; margin-bottom: 20px; text-align: left;">Last Updated: 2025-11-28</p>

                    <h4 style="margin-top: 20px; text-align: left; margin-bottom: 10px;">1. Acceptance of Terms</h4>
                    <p style="line-height: 1.6; text-align: left; margin-bottom: 15px;">
                        By accessing or using MQuest, you agree to be bound by these Terms and Conditions. If you do not agree,
                        do not use the Service. If you are a minor, you must have permission from a parent, guardian, or responsible
                        school official, where applicable.
                    </p>

                    <h4 style="margin-top: 20px; text-align: left; margin-bottom: 10px;">2. Eligibility</h4>
                    <p style="line-height: 1.6; text-align: left; margin-bottom: 15px;">
                        You must meet the minimum age requirements in your jurisdiction (e.g., 13+) or obtain permission from your
                        parent or guardian. If your account is provided by a school or educator, they confirm your eligibility and
                        authorize your use of the Service.
                    </p>

                    <h4 style="margin-top: 20px; text-align: left; margin-bottom: 10px;">3. Accounts and Security</h4>
                    <p style="line-height: 1.6; text-align: left; margin-bottom: 15px;">
                        You agree to provide accurate information and keep your credentials secure. You are responsible for all
                        activities under your account. Notify us immediately of any unauthorized use or security incident.
                    </p>

                    <h4 style="margin-top: 20px; text-align: left; margin-bottom: 10px;">4. Permitted and Prohibited Use</h4>
                    <p style="line-height: 1.6; text-align: left; margin-bottom: 15px;">
                        The Service is for lawful, personal, and/or educational use. You agree not to reverse engineer, scrape,
                        interfere with the Service, transmit malware, harass others, or violate any laws or the rights of others.
                    </p>

                    <h4 style="margin-top: 20px; text-align: left; margin-bottom: 10px;">5. Content and Intellectual Property</h4>
                    <p style="line-height: 1.6; text-align: left; margin-bottom: 15px;">
                        You retain ownership of content you submit. You grant matatag and company a limited license to host and display
                        your content solely to provide the Service. All Service content, code, and brand assets belong to
                        matatag and company and are licensed to you for use within the app only.
                    </p>

                    <h4 style="margin-top: 20px; text-align: left; margin-bottom: 10px;">6. Third-Party Links and In-App Browser</h4>
                    <p style="line-height: 1.6; text-align: left; margin-bottom: 15px;">
                        The Service may open external websites within the app or your default browser. External sites are governed by
                        their own terms and privacy policies. We are not responsible for the content or practices of third-party sites.
                    </p>

                    <h4 style="margin-top: 20px; text-align: left; margin-bottom: 10px;">9. Privacy</h4>
                    <p style="line-height: 1.6; text-align: left; margin-bottom: 15px;">
                        Our data practices are described in the Privacy Policy. By using the Service, you agree that we may collect and
                        use your information as outlined there.
                    </p>

                    <h4 style="margin-top: 20px; text-align: left; margin-bottom: 10px;">10. Disclaimers</h4>
                    <p style="line-height: 1.6; text-align: left; margin-bottom: 15px;">
                        The Service is provided "as is" and "as available" without warranties of any kind, except as required by law.
                        We do not guarantee uninterrupted or error-free operation.
                    </p>

                    <h4 style="margin-top: 20px; text-align: left; margin-bottom: 10px;">16. Contact</h4>
                    <p style="line-height: 1.6; text-align: left; margin-bottom: 15px; ">
                        For questions about these Terms, contact us at matatagquest@gmail.com.
                    </p>

                    <div style="border-top: 1px solid #e4e4e7; margin: 20px 0; padding: 20px 0; text-align: left;">
                        <p style="opacity: 0.8;">
                            By continuing to use MQuest, you acknowledge you have read and agreed to these Terms.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Privacy Policy Modal -->
        <div id="privacyModal" class="modal" style="display: none;">
            <div class="modal-content" style="max-width: 800px; max-height: 80vh;">
                <div class="modal-header">
                    <h3>Privacy Policy</h3>
                    <span class="close" onclick="closePrivacyModal()">&times;</span>
                </div>
                <div class="modal-body" style="overflow-y: auto; max-height: 60vh; padding: 20px; text-align: left;">
                    <p style="opacity: 0.7; margin-bottom: 20px; text-align: left;">Last Updated: 2025-11-28</p>

                    <h4 style="margin-top: 20px; margin-bottom: 10px; text-align: left;">1. Introduction</h4>
                    <p style="line-height: 1.6; margin-bottom: 15px; text-align: left;">
                        This Privacy Policy explains how matatag and company ("we", "us") collects, uses, and shares information about
                        you when you use MQuest. By using the Service, you agree to the collection and use of information
                        in accordance with this Policy.
                    </p>

                    <h4 style="margin-top: 20px; margin-bottom: 10px; text-align: left;">2. Information We Collect</h4>
                    <p style="line-height: 1.6; margin-bottom: 15px; text-align: left;">
                        We collect information you provide (e.g., name, email, profile details) and information collected
                        automatically (e.g., device information, app usage data, crash logs, IP address, and push tokens). We may
                        also receive information from third-party services where integrations are used.
                    </p>

                    <h4 style="margin-top: 20px; margin-bottom: 10px; text-align: left;">3. How We Use Information</h4>
                    <p style="line-height: 1.6; margin-bottom: 15px; text-align: left;">
                        We use your information to operate and improve the Service, authenticate users, personalize experiences,
                        support offline usage, store progress, send notifications, debug issues, and enhance security.
                    </p>

                    <h4 style="margin-top: 20px; margin-bottom: 10px; text-align: left;">5. Sharing and Disclosure</h4>
                    <p style="line-height: 1.6; margin-bottom: 15px; text-align: left;">
                        We share data with service providers that help us deliver the Service (e.g., hosting, analytics, notifications).
                        We may disclose information to comply with legal requests or to protect rights and safety. In case of a
                        business transfer (e.g., merger), your data may be transferred to the new owner.
                    </p>

                    <h4 style="margin-top: 20px; margin-bottom: 10px; text-align: left;">6. Data Storage, Security, and Retention</h4>
                    <p style="line-height: 1.6; margin-bottom: 15px; text-align: left;">
                        We implement reasonable security measures. Data may be stored on secure servers and within the app (e.g.,
                        secure credentials, offline databases, cached files). We retain data as long as necessary to provide the
                        Service and as required by law.
                    </p>

                    <h4 style="margin-top: 20px; margin-bottom: 10px; text-align: left;">7. Children's Privacy</h4>
                    <p style="line-height: 1.6; margin-bottom: 15px; text-align: left;">
                        If MQuest is used by students/minors, we require parental or school authorization where applicable and
                        limit data collection to what is necessary for learning and app functionality.
                    </p>

                    <h4 style="margin-top: 20px; margin-bottom: 10px; text-align: left;">9. Your Rights</h4>
                    <p style="line-height: 1.6; margin-bottom: 15px; text-align: left;">
                        Depending on your location, you may have rights to access, correct, delete, or export your data, restrict or
                        object to certain processing, and withdraw consent. To exercise these rights, contact us at matatagquest@gmail.com.
                    </p>

                    <h4 style="margin-top: 20px; margin-bottom: 10px; text-align: left;">11. Changes to This Policy</h4>
                    <p style="line-height: 1.6; margin-bottom: 15px; text-align: left;">
                        We may update this Policy from time to time. Significant changes will be communicated in-app or via other
                        reasonable means. Your continued use of the Service after changes indicates your acceptance.
                    </p>

                    <h4 style="margin-top: 20px; margin-bottom: 10px; text-align: left;">12. Contact Us</h4>
                    <p style="line-height: 1.6; margin-bottom: 15px; text-align: left;">
                        If you have questions or concerns about this Policy, contact us at matatagquest@gmail.com.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div id="customAlert" style="display:none; position:fixed; top:20px; right:20px; background-color:#f8d7da; color:#842029; border:1px solid #f5c2c7; padding:15px 20px; border-radius:5px; box-shadow:0 2px 6px rgba(0,0,0,0.2); z-index:1000; font-family:Arial, sans-serif;">
        <span id="customAlertMessage"></span>
        <button id="customAlertClose" style="margin-left:15px; background:none; border:none; font-weight:bold; cursor:pointer;">&times;</button>
    </div>

    
    <script>
        /* ---------- Proxy helpers (call Laravel controller routes) ---------- */

        function showCustomAlert(message, type = 'error') {
            const alertEl = document.getElementById('customAlert');
            const alertMessage = document.getElementById('customAlertMessage');
            const closeBtn = document.getElementById('customAlertClose');

            alertMessage.textContent = message;

            // Set styles based on type
            if (type === 'success') {
                alertEl.style.backgroundColor = '#d1e7dd';
                alertEl.style.color = '#0f5132';
                alertEl.style.border = '1px solid #badbcc';
            } else if (type === 'neutral') {
                alertEl.style.backgroundColor = '#cff4fc';
                alertEl.style.color = '#055160';
                alertEl.style.border = '1px solid #b6effb';
            } else { // error
                alertEl.style.backgroundColor = '#f8d7da';
                alertEl.style.color = '#842029';
                alertEl.style.border = '1px solid #f5c2c7';
            }

            alertEl.style.display = 'flex';
            alertEl.style.alignItems = 'center';

            closeBtn.onclick = () => {
                alertEl.style.display = 'none';
            };

            // Auto-hide after 5 seconds
            setTimeout(() => {
                alertEl.style.display = 'none';
            }, 5000);
        }

        async function startRegistration(data) {
            try {
                const res = await fetch("{{ route('register.start') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify(data)
                });

                // parse JSON response (server might return JSON error payload)
                const json = await res.json().catch(() => ({}));

                if (!res.ok) {
                    throw new Error(json.error || json.message || 'Registration start failed');
                }

                return json;
            } catch (err) {
                console.error('startRegistration error:', err.message || err);
                throw err;
            }
        }

        async function verifyCode(email, code) {
            try {
                const res = await fetch("{{ route('register.verify') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ email, code })
                });

                const json = await res.json().catch(() => ({}));

                if (!res.ok) {
                    throw new Error(json.error || json.message || 'Code verification failed');
                }

                return json;
            } catch (err) {
                console.error('verifyCode error:', err.message || err);
                throw err;
            }
        }

        async function completeRegistration(data) {
            try {
                const res = await fetch("{{ route('register.complete') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify(data)
                });

                const json = await res.json().catch(() => ({}));

                if (!res.ok) {
                    throw new Error(json.error || json.message || 'Registration completion failed');
                }

                return json;
            } catch (err) {
                console.error('completeRegistration error:', err.message || err);
                throw err;
            }
        }

        /* ----------------- existing registration UI logic (unchanged) ----------------- */

        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);

            if (input.type === "password") {
                input.type = "text";
                icon.setAttribute("name", "eye-off-outline");
            } else {
                input.type = "password";
                icon.setAttribute("name", "eye-outline");
            }
        }

        let formData = {
            role: '',
            firstName: '',
            middleName: '',
            lastName: '',
            suffix: '',
            gender: '',
            birthday: '',
            lrn: '000000000000',
            teacherId: '0000000000',
            email: '',
            password: '',
            confirmPassword: ''
        };
        let resendTimer = 30;
        let isResendTimerRunning = false;

        function goToStep(step, role = null) {
            if (role) {
                formData.role = role;
                document.getElementById('id-title').textContent = role === 'Teacher' ? "What's your Teacher ID?" : "What's your LRN?";
                document.getElementById('id-description').textContent = role === 'Teacher' ? 'Enter your assigned Teacher ID number.' : 'Enter your 12-digit Learner Reference Number (LRN).';
                document.getElementById('id-label').textContent = role === 'Teacher' ? 'Teacher ID' : 'LRN';
                document.getElementById('idInput').placeholder = role === 'Teacher' ? 'Enter Teacher ID' : 'Enter LRN (e.g. 123456789012)';
                document.getElementById('idInput').maxLength = role === 'Teacher' ? 10 : 12;
            }
            document.querySelectorAll('.step-content').forEach(content => content.style.display = 'none');
            document.getElementById(`step${step}-content`).style.display = 'block';
            document.querySelectorAll('.progress-step').forEach(stepEl => stepEl.classList.remove('active'));
            document.getElementById(`step-${step}`).classList.add('active');

            if (step === 6) {
                const email = document.getElementById('email').value;
                formData.email = email;
                document.getElementById('display-email').textContent = email;
            }
        }

        async function validateAndGoToStep(currentStep, nextStep) {
            let isValid = true;
            let message = '';

            switch (currentStep) {
                case 1:
                    formData.firstName = document.getElementById('firstName').value;
                    formData.middleName = document.getElementById('middleName').value;
                    formData.lastName = document.getElementById('lastName').value;
                    formData.suffix = document.getElementById('suffix').value;
                    const nameRegex = /^[a-zA-Z\s]+$/;
                    if (!nameRegex.test(formData.firstName) || !formData.firstName.trim()) {
                        isValid = false;
                        message = 'Please enter a valid first name (only letters allowed).';
                    } else if (!nameRegex.test(formData.lastName) || !formData.lastName.trim()) {
                        isValid = false;
                        message = 'Please enter a valid last name (only letters allowed).';
                    } else if (formData.middleName && !nameRegex.test(formData.middleName)) {
                        isValid = false;
                        message = 'Please enter a valid middle name (only letters allowed).';
                    } else if (formData.suffix && !nameRegex.test(formData.suffix)) {
                        isValid = false;
                        message = 'Please enter a valid suffix (only letters allowed).';
                    }
                    break;
                case 2:
                    if (!formData.gender) {
                        isValid = false;
                        message = 'Please select your gender.';
                    }
                    break;
                case 3:
                    formData.birthday = document.getElementById('birthday').value;
                    const selectedDate = new Date(formData.birthday);
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    if (!formData.birthday || selectedDate >= today) {
                        isValid = false;
                        message = 'Please choose a valid birthday.';
                    }
                    break;
                case 4:
                    const idInput = document.getElementById('idInput').value;
                    formData[formData.role === 'Teacher' ? 'teacherId' : 'lrn'] = idInput;
                    if (formData.role === 'Teacher' && !/^\d{10}$/.test(idInput)) {
                        isValid = false;
                        message = 'Teacher ID must be exactly 10 digits and contain only numbers.';
                    } else if (formData.role !== 'Teacher' && !/^\d{12}$/.test(idInput)) {
                        isValid = false;
                        message = 'LRN must be exactly 12 digits and contain only numbers.';
                    }
                    break;
                case 5:
                    formData.email = document.getElementById('email').value;
                    if (!formData.email) {
                        isValid = false;
                        message = 'Email is required.';
                    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email)) {
                        isValid = false;
                        message = 'Invalid email format.';
                    } else {
                        try {
                            const registrationData = {
                                email: formData.email,
                                role: formData.role.toLowerCase(),
                                firstName: formData.firstName,
                                lastName: formData.lastName,
                                middleName: formData.middleName || null,
                                suffix: formData.suffix || null,
                                gender: formData.gender,
                                birthday: formData.birthday,
                                lrn: formData.role === 'Pupil' ? formData.lrn : null,
                                teacherId: formData.role === 'Teacher' ? formData.teacherId : null
                            };
                            await startRegistration(registrationData);
                            startResendTimer();
                            goToStep(6);
                            showCustomAlert('Verification code sent to your email.', 'success');
                            return; // Exit early to avoid goToStep(nextStep)
                        } catch (error) {
                            isValid = false;
                            message = error.message || 'Failed to send verification code';
                        }
                    }
                    break;
                case 6:
                    const code = Array.from(document.querySelectorAll('.code-input')).map(input => input.value).join('');
                    if (code.length !== 6 || !/^\d{6}$/.test(code)) {
                        isValid = false;
                        message = 'Please enter a valid 6-digit code.';
                    } else {
                        try {
                            const result = await verifyCode(formData.email, code);
                            if (result.success) {
                                goToStep(7);
                                return; // Exit early to avoid goToStep(nextStep)
                            } else {
                                isValid = false;
                                message = 'Invalid or expired verification code';
                            }
                        } catch (error) {
                            isValid = false;
                            message = error.message || 'Failed to verify code';
                        }
                    }
                    break;
                case 7:
                    formData.password = document.getElementById('password').value;
                    formData.confirmPassword = document.getElementById('confirm-password').value;
                    const termsChecked = document.getElementById('agree-terms').checked;
                    const privacyChecked = document.getElementById('agree-privacy').checked;
                    
                    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/;

                    
                    if (!formData.password || formData.password.length < 8) {
                        isValid = false;
                        message = 'Password must be at least 8 characters long.';
                    } else if (!passwordRegex.test(formData.password)) {
                        isValid = false;
                        message = 'Password must include uppercase, lowercase, number, and special character.';
                    } else if (formData.password !== formData.confirmPassword) {
                        isValid = false;
                        message = 'Passwords do not match.';
                    } else if (!termsChecked || !privacyChecked) {
                        showCustomAlert('Please agree to both Terms and Conditions and Privacy Policy to continue.', 'error');
                        return;
                    }else {
                        try {
                            const registrationData = {
                                email: formData.email,
                                password: formData.password,
                                confirmPassword: formData.confirmPassword,
                                firstName: formData.firstName,
                                middleName: formData.middleName || null,
                                lastName: formData.lastName,
                                suffix: formData.suffix || null,
                                birthday: formData.birthday,
                                gender: formData.gender,
                                role: formData.role.toLowerCase(),
                                [formData.role === 'Teacher' ? 'teacherId' : 'lrn']: formData[formData.role === 'Teacher' ? 'teacherId' : 'lrn']
                            };
                            await completeRegistration(registrationData);
                            showCustomAlert('Account successfully created.', 'success');
                            setTimeout(() => window.location.href = "{{ route('login') }}", 2000);
                            return; // Exit early to avoid goToStep(nextStep)
                        } catch (error) {
                            isValid = false;
                            message = error.message || 'Failed to complete registration';
                        }
                    }
                    break;
            }

            if (!isValid) {
                showCustomAlert(message, 'error');
                return;
            }

            goToStep(nextStep);
        }

        function handleGenderSelect(gender) {
            formData.gender = gender;
        }

        function handleCodeInput(input, index) {
            const value = input.value.replace(/[^0-9]/g, '');
            input.value = value;
            if (value && index < 5) {
                document.querySelectorAll('.code-input')[index + 1].focus();
            } else if (!value && index > 0) {
                document.querySelectorAll('.code-input')[index - 1].focus();
            }
            if (index === 5 && value) {
                validateAndGoToStep(6, 7);
            }
        }

        async function resendCode() {
            if (resendTimer > 0) {
                showCustomAlert(`Please wait ${resendTimer}s before resending.`, 'neutral');
                return;
            }
            try {
                const registrationData = {
                    email: formData.email,
                    role: formData.role.toLowerCase(),
                    firstName: formData.firstName,
                    lastName: formData.lastName,
                    middleName: formData.middleName || null,
                    suffix: formData.suffix || null,
                    gender: formData.gender,
                    birthday: formData.birthday,
                    lrn: formData.role === 'Pupil' ? formData.lrn : null,
                    teacherId: formData.role === 'Teacher' ? formData.teacherId : null
                };
                await startRegistration(registrationData);
                showCustomAlert('Verification code resent.', 'success');
                document.querySelectorAll('.code-input').forEach(input => input.value = '');
                document.querySelectorAll('.code-input')[0].focus();
                startResendTimer();
            } catch (error) {
                showCustomAlert(error.message || 'Failed to resend code');
            }
        }

        function startResendTimer() {
            resendTimer = 30;
            isResendTimerRunning = true;
            const timerInterval = setInterval(() => {
                resendTimer--;
                if (resendTimer <= 0) {
                    isResendTimerRunning = false;
                    clearInterval(timerInterval);
                }
            }, 1000);
        }

        function closeAlert() {
            document.getElementById('alert').style.display = 'none';
        }

        function showPasswordHint() {
            showCustomAlert(
                'Tips for a strong password:\n\n' +
                '• Combine upper and lower case letters, numbers, and special characters (e.g., $, #, &, etc.).\n\n' +
                '• Keep your password at least 8 to 12 characters long.\n\n' +
                '• Avoid consecutive characters (e.g., 12345, abcde, qwerty, etc.) or repeating characters (e.g., 11111).\n\n' +
                '• Avoid personal info like names of friends or relatives, your birthday, or your address.\n\n' +
                '• Avoid common or obvious words (e.g., password, maya, bank, money, etc.).\n\n' +
                '• Avoid using the same password from other accounts you own.', 'neutral'
            );
        }
    </script>

    <script>
        // Terms and Privacy Modal Functions
        function showTermsModal() {
            document.getElementById('termsModal').style.display = 'block';
        }

        function closeTermsModal() {
            document.getElementById('termsModal').style.display = 'none';
        }

        function showPrivacyModal() {
            document.getElementById('privacyModal').style.display = 'block';
        }

        function closePrivacyModal() {
            document.getElementById('privacyModal').style.display = 'none';
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const termsModal = document.getElementById('termsModal');
            const privacyModal = document.getElementById('privacyModal');
            
            if (event.target == termsModal) {
                closeTermsModal();
            }
            if (event.target == privacyModal) {
                closePrivacyModal();
            }
        }
    </script>
</body>
</html>