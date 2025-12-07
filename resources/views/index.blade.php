<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/Login_Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index_style.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <style>
        /* === Secret Key Modal Styles === */
        .secret-key-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10000;
        }

        .secret-key-container {
        display: flex;
        flex-direction: column;
        max-width: 900px;
        width: 100%;
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        }

        @media (min-width: 768px) {
        .secret-key-container {
            flex-direction: row;
        }
        }

        .image-section {
        flex: 1;
        background: #f8fafc;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
        }

        .image-section img {
        max-width: 100%;
        max-height: 300px;
        height: auto;
        object-fit: contain;
        border-radius: 12px;
        }

        .form-section {
        flex: 1;
        padding: 40px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        }

        .form-section h1 {
        font-size: 24px;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 8px;
        }

        .form-section p {
        color: #64748b;
        font-size: 15px;
        margin-bottom: 24px;
        }

        .secret-input-group {
        position: relative;
        margin-bottom: 24px;
        }

        .secret-input-group label {
        display: block;
        font-size: 14px;
        font-weight: 500;
        color: #334155;
        margin-bottom: 8px;
        }

        .secret-input {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        font-size: 16px;
        font-family: monospace;
        letter-spacing: 8px;
        background-color: #f8fafc;
        color: transparent;
        text-shadow: 0 0 0 #475569;
        transition: border-color 0.3s;
        }

        .secret-input:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }

        .submit-secret-btn {
        background-color: #3b82f6;
        color: white;
        border: none;
        padding: 14px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
        }

        .submit-secret-btn:hover {
        background-color: #2563eb;
        }

        .submit-secret-btn:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }

        /* Placeholder image fallback */

        .placeholder-image {
        width: 200px;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e2e8f0;
        border-radius: 12px;
        color: #94a3b8;
        font-size: 14px;
        text-align: center;
        padding: 16px;
        }

    </style>

</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo">
        </div>
        <h2>Welcome!</h2>
        <p>Please login to your account</p>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter email" required>
        </div>
        <div class="input-group">
            <div class="password-header">
                <label for="password">Password</label>
                <a href="{{ route('forgot_password') }}" class="forgot-password">Forgot Password?</a>
            </div>
            <div style="position: relative;">
                <input type="password" id="password" name="password" placeholder="Enter password" required>
                <ion-icon id="togglePassword" name="eye-outline"
                        style="position:absolute; right:10px; top:50%; transform:translateY(-50%); cursor:pointer; font-size:20px; color:#555;"
                        onclick="togglePassword()">
                </ion-icon>
            </div>
        </div>
        <button class="login-button" onclick="handleLogin()">Login</button>
        <p class="register-link">Don't have an account? <a href="{{ route('register') }}">Register Instead</a></p>
    </div>

    <!--Custom enter secret key -->
    <div class="container secret-key-container" style="display: none;">
        <div class="image-section"><img id="auth-image" alt="Secure authentication illustration" src="eriXtrip/MQuestLaravel_Admin/public/assets/img/girl.png" />
            <div id="fallback" class="placeholder-image" style="display: none;"><span> 🔒 Secure Access</span><br /><small>Illustration</small></div>
        </div>
        <div class="form-section">
            <h1>Enter Your Secret Key</h1>
            <p>For security purposes, please provide your unique secret key to continue.</p>
            <div class="input-group secret-input-group"><label class="input-group-text" for="secretKey">Secret Key</label><input id="secretKey" class="secret-input" type="text" autocomplete="off" maxlength="64" placeholder="••••••••" spellcheck="false" /></div><button class="submit-secret-btn" type="button">Continue</button>
        </div>
    </div>

    <div id="customAlert" style="display:none; position:fixed; top:20px; right:20px; background-color:#f8d7da; color:#842029; border:1px solid #f5c2c7; padding:15px 20px; border-radius:5px; box-shadow:0 2px 6px rgba(0,0,0,0.2); z-index:1000; font-family:Arial, sans-serif;">
        <span id="customAlertMessage"></span>
        <button id="customAlertClose" style="margin-left:15px; background:none; border:none; font-weight:bold; cursor:pointer;">&times;</button>
    </div>
    <script>

        function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleIcon = document.getElementById("togglePassword");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.setAttribute("name", "eye-off-outline");
            } else {
                passwordField.type = "password";
                toggleIcon.setAttribute("name", "eye-outline");
            }
        }

        // Custom styled alert function with success/error types
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



        async function handleLogin() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password) {
                showCustomAlert('Please enter your email and password');
                return;
            }

            try {
                // ✅ Call Laravel route, which proxies to Node.js via UserController
                const response = await fetch("{{ route('login.attempt') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();

                if (!data.success) {
                    showCustomAlert(data.error || 'Login failed. Please try again.');
                    return;
                }

                const user = data.user;

                // ✅ Save user + token in sessionStorage
                sessionStorage.setItem('user', JSON.stringify(user));
                sessionStorage.setItem('token', data.token);

                console.log(sessionStorage.getItem("token"));
                console.log(sessionStorage.getItem("user"));

                /*setTimeout(async () => {
                    if (user.role_id === 1) {
                        // Admin needs secret key
                        const secretKey = prompt("Please enter your secret key.");
                        if (!secretKey) {
                            showCustomAlert("Secret key is required for admin access.");
                            return;
                        }


                        const confirmRes = await fetch("{{ route('admin.confirm') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({
                                userId: user.server_id,
                                secret_key: secretKey
                            })
                        });

                        const confirmData = await confirmRes.json();
                        if (confirmData.success) {
                            showCustomAlert(`Login successful! Welcome, ${user.first_name}!`, 'success');
                            window.location.href = "{{ route('AdminDashboard') }}";
                        } else {
                            showCustomAlert(confirmData.error || "Admin confirmation failed.");
                        }

                    } else if (user.role_id === 2) {
                        showCustomAlert(`Login successful! Welcome, ${user.first_name}!`, 'success');
                        window.location.href = "{{ route('teacher.homepage') }}";
                    } else if (user.role_id === 3) {
                        const userId = user.server_id;
                        const token = data.token;

                        // Improved deep linking for different platforms
                        const appScheme = 'mquest://';
                        const appPackage = 'com.anonymous.MQuest';

                        // Deep link to Android app
                        const androidIntent = `intent://open?userId=${userId}&token=${token}#Intent;package=${appPackage};scheme=${appScheme.slice(0, -2)};end;`;
                        window.location.href = androidIntent;

                        // Fallback to Play Store
                        // Fallback to  after delay
                        setTimeout(() => {
                            if (document.hidden || document.webkitHidden) {
                                // App opened successfully
                                console.log('App opened successfully');
                            } else {
                                // Redirect to Play Store or show instructions
                                window.location.href = "https://drive.google.com/file/d/1Ln41eRgFXVSN1QmVrTgg-jr59RbZXerT/view";
                            }
                        }, 2000);
                    }
                }, 1200);*/

                // ─── New: Show Secret Key Modal (Matches Your HTML) ───────────────
                function showSecretKeyPrompt() {
                    return new Promise((resolve) => {
                        const container = document.querySelector('.secret-key-container');
                        const input = document.getElementById('secretKey');
                        const submitBtn = document.querySelector('.submit-secret-btn');
                        const image = document.getElementById('auth-image');
                        const fallback = document.getElementById('fallback');

                        // Reset input and error state
                        input.value = '';
                        input.focus();

                        // Show modal
                        container.style.display = 'flex';

                        // Handle image load error
                        image.onerror = () => {
                        image.style.display = 'none';
                        fallback.style.display = 'flex';
                        };

                        // Close modal and resolve
                        function closeAndResolve(value) {
                        container.style.display = 'none';
                        resolve(value);
                        }

                        // Submit handler
                        function handleInput(e) {
                        if (e.type === 'click' || e.key === 'Enter') {
                            const key = input.value.trim();
                            if (key) {
                            closeAndResolve(key);
                            } else {
                            input.focus();
                            // Optional: show error message if you add one
                            }
                        }
                        }

                        // Cancel on outside click (optional)
                        function handleOutsideClick(e) {
                        if (e.target === container) {
                            closeAndResolve(null);
                        }
                        }

                        // Bind events
                        submitBtn.addEventListener('click', handleInput);
                        input.addEventListener('keypress', handleInput);
                        container.addEventListener('click', handleOutsideClick);

                        // Cleanup function (for safety)
                        const cleanup = () => {
                        submitBtn.removeEventListener('click', handleInput);
                        input.removeEventListener('keypress', handleInput);
                        container.removeEventListener('click', handleOutsideClick);
                        };

                        // Override resolve to include cleanup
                        const originalResolve = resolve;
                        resolve = (value) => {
                        cleanup();
                        originalResolve(value);
                        };
                    });
                }

                setTimeout(async () => {
                    if (user.role_id === 1) {
                        // Show custom secret key modal (your HTML)
                        const secretKey = await showSecretKeyPrompt();
                        if (!secretKey) {
                        showCustomAlert("Secret key is required for admin access.");
                        return;
                        }

                        // Proceed with confirmation
                        const confirmRes = await fetch("{{ route('admin.confirm') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            userId: user.server_id,
                            secret_key: secretKey
                        })
                        });

                        const confirmData = await confirmRes.json();
                        if (confirmData.success) {
                        showCustomAlert(`Login successful! Welcome, ${user.first_name}!`, 'success');
                        window.location.href = "{{ route('AdminDashboard') }}";
                        } else {
                        showCustomAlert(confirmData.error || "Admin confirmation failed.");
                        }

                    } else if (user.role_id === 2) {
                        showCustomAlert(`Login successful! Welcome, ${user.first_name}!`, 'success');
                        window.location.href = "{{ route('teacher.homepage') }}";
                    } else if (user.role_id === 3) {
                        const userId = user.server_id;
                        const token = data.token;

                        // Android deep link
                        const appPackage = 'com.anonymous.MQuest';
                        const androidIntent = `intent://open?userId=${userId}&token=${token}#Intent;package=${appPackage};scheme=mquest;end;`;
                        window.location.href = androidIntent;

                        setTimeout(() => {
                        if (!(document.hidden || document.webkitHidden)) {
                            window.location.href = "https://drive.google.com/file/d/1Ln41eRgFXVSN1QmVrTgg-jr59RbZXerT/view";
                        }
                        }, 2000);
                    }
                    }, 1200);

            } catch (error) {
                console.error("Login error:", error);
                showCustomAlert(error.message || 'Login failed. Please try again.');
            }
            
        }

        function closeAlert() {
            document.getElementById('alert').style.display = 'none';
        }
        </script>
</body>
</html>