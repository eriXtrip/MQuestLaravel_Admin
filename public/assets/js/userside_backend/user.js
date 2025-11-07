const API_URL = "http://192.168.0.116:3001/api"; // Replace with your actual API URL

// Start registration process
async function startRegistration(data) {
    try {
        const response = await fetch(`${API_URL}/auth/start-registration`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        });
        const result = await response.json();
        return result;
    } catch (error) {
        console.error('Registration start error:', error.message);
        throw new Error(error.message || 'Failed to start registration');
    }
}

// Verify registration code
async function verifyCode(email, code) {
    try {
        const response = await fetch(`${API_URL}/auth/verify-code`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email, code })
        });
        return await response.json();
    } catch (error) {
        console.error('Code verification error:', error.message);
        throw new Error(error.message || 'Failed to verify code');
    }
}

// Complete registration process
async function completeRegistration(data) {
    try {
        const response = await fetch(`${API_URL}/auth/complete-registration`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        });
        if (!response.ok) {
            const errorData = await response.json();
            throw new Error(errorData.error || 'Registration failed');
        }
        return await response.json();
    } catch (error) {
        console.error('Registration completion error:', error.message);
        throw new Error(error.message || 'Failed to complete registration');
    }
}

// Logout function
async function logout() {
    try {
        const token = localStorage.getItem("token");
        const userRaw = localStorage.getItem("user");
        const user = userRaw ? JSON.parse(userRaw) : null;

        console.log("🔑 Stored token:", token);
        console.log("👤 Stored user object:", user);

        if (!token) throw new Error("No token provided");
        if (!user?.server_id) throw new Error("No user_id provided");

        const response = await fetch(`${API_URL}/auth/logout`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            },
            body: JSON.stringify({ user_id: user.server_id })
        });

        const data = await response.json();
        console.log("🚪 Logout response:", data);

        if (!response.ok) {
            throw new Error(data.error || "Logout failed");
        }

        // Clear storage
        localStorage.removeItem("user");
        localStorage.removeItem("token");

        return true;
    } catch (err) {
        console.error("Logout error:", err.message);
        return false;
    }
}

// Confirm Admin Login
async function confirmAdminLogin(userId, secretKey) {
    try {
        console.log("Confirming admin login for userId:", userId, secretKey);
        const response = await fetch(`${API_URL}/auth/admin_confirm_login`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ userId, secret_key: secretKey })
        });

        const data = await response.json();
        console.log("Admin confirm response:", data);

        if (!response.ok) {
            throw new Error(data.error || 'Admin confirmation failed.');
        }

        return data; // { success: true }
    } catch (error) {
        console.error("Admin confirm error:", error.message);
        throw new Error(error.message || 'Failed to confirm admin login');
    }
}

// Login function
async function login(email, password) {
    try {
        const response = await fetch(`${API_URL}/auth/login`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email, password })
        });
        const data = await response.json();
        console.log('Login response:', {
            ok: response.ok,
            status: response.status,
            userData: data.user,
            hasToken: !!data.token,
            error: data.error
        });

        if (!response.ok) {
            throw new Error(data.error || 'Login failed. Please try again.');
        }

        const userDataForSync = {
            server_id: data.user.id,
            email: data.user.email,
            first_name: data.user.firstName,
            middle_name: data.user.middleName || 'N/A',
            last_name: data.user.lastName,
            suffix: data.user.suffix || 'N/A',
            birth_date: data.user.birthday,
            gender: data.user.gender,
            role_id: data.user.role,
            lrn: data.user.lrn || 'N/A',
            teacher_id: data.user.teacherId || 'N/A'
        };

        // Return token as well so callers can persist it
        return { success: true, user: userDataForSync, token: data.token };
    } catch (error) {
        console.error('Login error:', error.message);
        throw new Error(error.message);
    }
}

// Start password reset process
async function startPasswordReset(data) {
    try {
        const response = await fetch(`${API_URL}/auth/start-password-reset`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        });
        if (!response.ok) {
            const errorData = await response.json();
            throw new Error(errorData.error || 'Account not found');
        }
        return await response.json();
    } catch (error) {
        console.error('Password reset start error:', error.message);
        throw new Error(error.message || 'Failed to start password reset');
    }
}

// Verify password reset code
async function verifyResetCode(email, code) {
    try {
        const response = await fetch(`${API_URL}/auth/verify-reset-code`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email, code })
        });
        return await response.json();
    } catch (error) {
        console.error('Reset code verification error:', error.message);
        throw new Error(error.message || 'Failed to verify reset code');
    }
}

// Complete password reset process
async function completePasswordReset(data) {
    try {
        const response = await fetch(`${API_URL}/auth/complete-password-reset`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        });
        if (!response.ok) {
            const errorData = await response.json();
            throw new Error(errorData.error || 'Failed to reset password');
        }
        return await response.json();
    } catch (error) {
        console.error('Password reset completion error:', error.message);
        throw new Error(error.message || 'Failed to reset password');
    }
}

// Change password
async function changePassword(data) {
    try {
        const response = await fetch(`${API_URL}/auth/change-password`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${data.token}`
            },
            body: JSON.stringify({
                server_id: data.server_id,
                currentPassword: data.currentPassword,
                newPassword: data.newPassword
            })
        });

        const contentType = response.headers.get('content-type');
        if (!contentType || !contentType.includes('application/json')) {
            const text = await response.text();
            console.error('Non-JSON response:', { status: response.status, text });
            throw new Error(`Expected JSON, received ${contentType || 'no content-type'}`);
        }

        const responseData = await response.json();
        if (!response.ok) {
            throw new Error(responseData.error || 'Failed to change password');
        }
        return responseData;
    } catch (error) {
        console.error('Change password error:', error.message);
        throw new Error(error.message);
    }
}

// Verify token silently
async function verifyTokenSilently(token, email) {
    try {
        const response = await fetch(`${API_URL}/auth/verify-token`, {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ email })
        });
        const data = await response.json();
        if (!data.valid) {
            await logout();
        }
    } catch (error) {
        console.warn('Background verification failed:', error.message);
        await logout();
    }
}

// Test server connection
async function testServerConnection() {
    try {
        const response = await fetch(`${API_URL}/health`, {
            method: 'GET',
            headers: { 'Content-Type': 'application/json' }
        });
        return response.ok;
    } catch (error) {
        console.error('Server connection test failed:', error.message);
        return false;
    }
}

// Vulnerable test function (for testing SQL injection)
async function testVulnerableFunction(email) {
    try {
        const response = await fetch(`${API_URL}/auth/vulnerable-function`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email })
        });

        if (!response.ok) {
            const text = await response.text();
            throw new Error(`Server Error: ${response.status}\n${text}`);
        }

        const contentType = response.headers.get('content-type');
        if (contentType && contentType.includes('application/json')) {
            const data = await response.json();
            console.log('Vulnerable Function Response:', data);
            return data;
        } else {
            const text = await response.text();
            console.warn('Unexpected response:', text);
            throw new Error('Server did not return JSON');
        }
    } catch (error) {
        console.error('Vulnerable test error:', error.message);
        return { error: error.message };
    }
}

// Secure test function
async function testSecureFunction(email) {
    try {
        const response = await fetch(`${API_URL}/auth/secure-function`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email })
        });
        const data = await response.json();
        console.log('Secure Function Response:', data);
        return data;
    } catch (error) {
        console.error('Secure test error:', error.message);
        return { error: error.message };
    }
}