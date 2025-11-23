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
            <button class="register-button" onclick="goToStep(1, 'Pupil')">I am a Pupil</button>
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
            <button class="register-button" onclick="validateAndGoToStep(3, 4)">Next</button>
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
            <button class="back-button" onclick="goToStep(4)">&larr;</button>
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

            <button class="register-button" onclick="validateAndGoToStep(7, 8)">Complete Registration</button>
        </div>

    </div>

    <div class="alert" id="alert" style="display: none;">
        <p id="alert-message"></p>
        <button onclick="closeAlert()">OK</button>
    </div>

    
    <script>
        /* ---------- Proxy helpers (call Laravel controller routes) ---------- */

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
            lrn: '',
            teacherId: '',
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
                            showAlert('Verification code sent to your email.');
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
                    } else {
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
                            showAlert('Account successfully created.');
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
                showAlert(message);
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
                showAlert(`Please wait ${resendTimer}s before resending.`);
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
                showAlert('Verification code resent.');
                document.querySelectorAll('.code-input').forEach(input => input.value = '');
                document.querySelectorAll('.code-input')[0].focus();
                startResendTimer();
            } catch (error) {
                showAlert(error.message || 'Failed to resend code');
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

        function showAlert(message) {
            document.getElementById('alert-message').textContent = message;
            document.getElementById('alert').style.display = 'flex';
        }

        function closeAlert() {
            document.getElementById('alert').style.display = 'none';
        }

        function showPasswordHint() {
            showAlert(
                'Tips for a strong password:\n\n' +
                '• Combine upper and lower case letters, numbers, and special characters (e.g., $, #, &, etc.).\n\n' +
                '• Keep your password at least 8 to 12 characters long.\n\n' +
                '• Avoid consecutive characters (e.g., 12345, abcde, qwerty, etc.) or repeating characters (e.g., 11111).\n\n' +
                '• Avoid personal info like names of friends or relatives, your birthday, or your address.\n\n' +
                '• Avoid common or obvious words (e.g., password, maya, bank, money, etc.).\n\n' +
                '• Avoid using the same password from other accounts you own.'
            );
        }
    </script>
</body>
</html>