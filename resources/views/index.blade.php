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

                setTimeout(async () => {
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