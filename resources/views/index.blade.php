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
    <div class="alert" id="alert" style="display: none;">
        <p id="alert-message"></p>
        <button onclick="closeAlert()">OK</button>
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

        async function handleLogin() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password) {
                showAlert('Please enter your email and password');
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
                    showAlert(data.error || 'Login failed. Please try again.');
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
                        const secretKey = prompt("Admin detected. Please enter your secret key:");
                        if (!secretKey) {
                            showAlert("Secret key is required for admin access.");
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
                            showAlert(`Login successful! Welcome, ${user.first_name}!`);
                            window.location.href = "{{ route('AdminDashboard') }}";
                        } else {
                            showAlert(confirmData.error || "Admin confirmation failed.");
                        }

                    } else if (user.role_id === 2) {
                        showAlert(`Login successful! Welcome, ${user.first_name}!`);
                        window.location.href = `/teacher/homepage?token=${data.token}`;
                    } else if (user.role_id === 3) {
                        const userId = user.server_id;
                        const token = data.token;

                        // Deep link to Android app
                        window.location.href = `intent://open?userId=${userId}&token=${token}#Intent;package=com.anonymous.MQuest;scheme=app;end`;

                        // Fallback to Play Store
                        setTimeout(() => {
                            window.location.href = "https://play.google.com/store/apps/details?id=com.myapp";
                        }, 2000);
                    }
                }, 1200);

            } catch (error) {
                console.error("Login error:", error);
                showAlert(error.message || 'Login failed. Please try again.');
            }
        }

        function showAlert(message) {
            document.getElementById('alert-message').textContent = message;
            document.getElementById('alert').style.display = 'flex';
        }

        function closeAlert() {
            document.getElementById('alert').style.display = 'none';
        }
        </script>
</body>
</html>