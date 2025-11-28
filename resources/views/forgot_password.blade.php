<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/Login_Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/forgot_password_style.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>
    <div class="login-container">
        <div class="progress-bar">
            <div class="progress-step active" id="step-1">1</div>
            <div class="progress-step" id="step-2">2</div>
            <div class="progress-step" id="step-3">3</div>
        </div>
        <div class="step-content" id="step1-content">
            <button class="back-button" onclick="window.location.href='{{ route('login') }}'">&larr;</button>
            <h2>Find Your Account</h2>
            <p>Enter the email associated with your account and we'll send you instructions to reset your password</p>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <button class="login-button" onclick="handleSubmitEmail()">Send Reset Code</button>
        </div>
        <div class="step-content" id="step2-content" style="display: none;">
            <button class="back-button" onclick="goToStep(1)">&larr;</button>
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
            <p class="register-link">Didn't receive code? <a href="#" onclick="handleResendCode()">Resend Code</a></p>
            <button class="login-button" onclick="handleVerifyCode()">Verify Code</button>
        </div>
        <div class="step-content" id="step3-content" style="display: none;">
            <button class="back-button" onclick="goToStep(2)">&larr;</button>
            <h2>Create a Password</h2>
            <p>Create a password with at least 8 letters or numbers. It should be something others can't guess.</p>

            <!-- Password -->
            <div class="input-group">
                <div class="password-header">
                    <label for="password">Password</label>
                    <a href="#" onclick="showPasswordHint()">Tips</a>
                </div>
                <div style="position: relative;">
                    <input type="password" id="password" name="password" placeholder="Enter password" minlength="8" required>
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
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm password" minlength="8" required>
                    <ion-icon id="toggleConfirmPassword" name="eye-outline"
                            style="position:absolute; right:10px; top:50%; transform:translateY(-50%); cursor:pointer; font-size:20px; color:#555;"
                            onclick="togglePassword('confirm-password','toggleConfirmPassword')">
                    </ion-icon>
                </div>
            </div>

            <button class="login-button" onclick="handleSubmitPassword()">Reset Password</button>
        </div>

    </div>
    <div id="customAlert" style="display:none; position:fixed; top:20px; right:20px; background-color:#f8d7da; color:#842029; border:1px solid #f5c2c7; padding:15px 20px; border-radius:5px; box-shadow:0 2px 6px rgba(0,0,0,0.2); z-index:1000; font-family:Arial, sans-serif;">
        <span id="customAlertMessage"></span>
        <button id="customAlertClose" style="margin-left:15px; background:none; border:none; font-weight:bold; cursor:pointer;">&times;</button>
    </div>
    <script src="./userside_backend/user.js"></script>
    <script>


        /* ---------- Proxy helpers (call Laravel controller routes) ---------- */

        async function startPasswordReset(data) {
            const response = await fetch("{{ route('password.start') }}", {
                method: "POST",
                headers: { 
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify(data)
            });
            let result;
            try {
                result = await response.json(); // try to parse backend JSON
            } catch (e) {
                result = { message: await response.text() }; // fallback if not JSON
            }

            if (!response.ok) {
                throw new Error(result.message || result.error || `HTTP ${response.status}`);
            }

            return result;
        }

        async function verifyResetCode(email, code) {
            const response = await fetch("{{ route('password.verify') }}", {
                method: "POST",
                headers: { 
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                 },
                body: JSON.stringify({ email, code })
            });
            let result;
            try {
                result = await response.json(); // try to parse backend JSON
            } catch (e) {
                result = { message: await response.text() }; // fallback if not JSON
            }

            if (!response.ok) {
                throw new Error(result.message || result.error || `HTTP ${response.status}`);
            }

            return result;
        }

        async function completePasswordReset(data) {
            const response = await fetch("{{ route('password.complete') }}", {
                method: "POST",
                headers: { 
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify(data)
            });

            let result;
            try {
                result = await response.json(); // try to parse backend JSON
            } catch (e) {
                result = { message: await response.text() }; // fallback if not JSON
            }

            if (!response.ok) {
                throw new Error(result.message || result.error || `HTTP ${response.status}`);
            }

            return result;
        }

        /* ----------------- existing registration UI logic (unchanged) ----------------- */

        function togglePassword(inputId, iconId) {
            const passwordField = document.getElementById(inputId);
            const toggleIcon = document.getElementById(iconId);

            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.setAttribute("name", "eye-off-outline");
            } else {
                passwordField.type = "password";
                toggleIcon.setAttribute("name", "eye-outline");
            }
        }

        let step = 1;
        let email = '';
        let resendTimer = 30;
        let isResendTimerRunning = false;

        function goToStep(newStep) {
            step = newStep;
            document.querySelectorAll('.step-content').forEach(content => content.style.display = 'none');
            document.getElementById(`step${step}-content`).style.display = 'block';
            document.querySelectorAll('.progress-step').forEach((stepEl, index) => {
                stepEl.classList.toggle('active', index < step);
            });
            if (step === 2) {
                email = document.getElementById('email').value;
                document.getElementById('display-email').textContent = email;
            }
        }

        async function handleSubmitEmail() {
            email = document.getElementById('email').value;
            if (!email.trim()) {
                showCustomAlert('Please enter your email');
                return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                showCustomAlert('Invalid email format.');
                return;
            }
            try {
                await startPasswordReset({ email });
                startResendTimer();
                goToStep(2);
                showCustomAlert('Verification code sent to your email.', 'success');
            } catch (error) {
                showCustomAlert(error.message || 'Account not found');
            }
        }

        async function handleVerifyCode() {
            const code = Array.from(document.querySelectorAll('.code-input')).map(input => input.value).join('');
            if (code.length !== 6 || !/^\d{6}$/.test(code)) {
                showCustomAlert('Please enter a valid 6-digit code.');
                return;
            }
            try {
                const result = await verifyResetCode(email, code);
                if (result.success) {
                    goToStep(3);
                } else {
                    showCustomAlert('Invalid or expired reset code');
                }
            } catch (error) {
                showCustomAlert(error.message || 'Failed to verify code');
            }
        }

        async function handleSubmitPassword() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            if (!password.trim()) {
                showCustomAlert('Please enter a password');
                return;
            }
            if (password !== confirmPassword) {
                showCustomAlert('Passwords do not match');
                return;
            }
            if (password.length < 8) {
                showCustomAlert('Password must be at least 8 characters');
                return;
            }
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/;
            if (!passwordRegex.test(password)) {
                showCustomAlert('Password must include uppercase, lowercase, number, and special character.');
                return;
            }
            try {
                await completePasswordReset({ email, password });
                showCustomAlert('Password has been reset successfully', 'success');
                setTimeout(() => window.location.href = "{{ route('login') }}", 2000);
            } catch (error) {
                showCustomAlert(error.message);
            }
        }

        async function handleResendCode() {
            if (resendTimer > 0) {
                showCustomAlert(`Please wait ${resendTimer}s before resending.`);
                return;
            }
            try {
                await startPasswordReset({ email });
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

        function handleCodeInput(input, index) {
            const value = input.value.replace(/[^0-9]/g, '');
            input.value = value;
            if (value && index < 5) {
                document.querySelectorAll('.code-input')[index + 1].focus();
            } else if (!value && index > 0) {
                document.querySelectorAll('.code-input')[index - 1].focus();
            }
            if (index === 5 && value) {
                handleVerifyCode();
            }
        }

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
</body>
</html>