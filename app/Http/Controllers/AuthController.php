<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    protected $apiUrl;

    public function __construct()
    {
        // Read API_URL from .env (fallback to empty string)
        $this->apiUrl = env('API_URL', '');
    }

    // Start registration
    public function startRegistration(Request $request)
    {
        try {
            $response = Http::post("{$this->apiUrl}/auth/start-registration", $request->all());
            $payload = $response->json();

            if (! $response->successful()) {
                return response()->json($payload, $response->status());
            }

            return response()->json($payload);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Failed to start registration'], 500);
        }
    }

    // Verify registration code
    public function verifyCode(Request $request)
    {
        try {
            $body = [
                'email' => $request->input('email'),
                'code' => $request->input('code'),
            ];

            $response = Http::post("{$this->apiUrl}/auth/verify-code", $body);
            return response()->json($response->json(), $response->status());
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Failed to verify code'], 500);
        }
    }

    // Complete registration
    public function completeRegistration(Request $request)
    {
        try {
            $response = Http::post("{$this->apiUrl}/auth/complete-registration", $request->all());
            $payload = $response->json();

            if (! $response->successful()) {
                $status = $response->status() ?: 400;
                return response()->json($payload, $status);
            }

            return response()->json($payload);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Failed to complete registration'], 500);
        }
    }

    // Logout
    public function logout(Request $request)
    {
        try {
            $token = $request->session()->get('node_token');
            $userServerId = $request->session()->get('user_server_id');

            if (!$token || !$userServerId) {
                return response()->json(['error' => 'No token or user ID in session'], 400);
            }

            // Call external API
            Http::withToken($token)
                ->post("{$this->apiUrl}/auth/logout", ['user_id' => $userServerId]);

            // Clear Laravel session
            $request->session()->flush();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return response()->json(['message' => 'Logged out successfully']);

        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Logout failed'], 500);
        }
    }



    // Confirm admin login
    public function confirmAdminLogin(Request $request)
    {
        try {
            $body = [
                'userId' => $request->input('userId'),
                'secret_key' => $request->input('secret_key'),
            ];

            $response = Http::post("{$this->apiUrl}/auth/admin_confirm_login", $body);
            $payload = $response->json();

            if (! $response->successful()) {
                return response()->json($payload, $response->status());
            }

             // ✅ Store token in session if present
            if (isset($payload['token'])) {
                session(['node_token' => $payload['token']]);
            }

            return response()->json($payload);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Admin confirmation failed'], 500);
        }
    }

    // Login
    public function login(Request $request)
    {
        try {
            $response = Http::post("{$this->apiUrl}/auth/login", [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);

            $data = $response->json();

            if (! $response->successful()) {
                $status = $response->status() ?: 400;
                return response()->json($data, $status);
            }
            
            // mirror the JS mapping exactly
            $user = $data['user'] ?? [];

            // ✅ STORE TOKEN IN LARAVEL SESSION HERE
            $token = $data['token'] ?? null;
            if ($token) {
                session(['node_token' => $token]);
            }

            // ✅ STORE TEACHER/SERVER ID IN LARAVEL SESSION
            if (!empty($user['id'])) {
                session(['user_id' => $user['id']]);
            }

            $userDataForSync = [
                'server_id'   => $user['id'] ?? null,
                'email'       => $user['email'] ?? null,
                'first_name'  => $user['firstName'] ?? null,
                'middle_name' => $user['middleName'] ?? 'N/A',
                'last_name'   => $user['lastName'] ?? null,
                'suffix'      => $user['suffix'] ?? 'N/A',
                'birth_date'  => $user['birthday'] ?? null,
                'gender'      => $user['gender'] ?? null,
                'role_id'     => $user['role'] ?? null,
                'lrn'         => $user['lrn'] ?? 'N/A',
                'teacher_id'  => $user['teacherId'] ?? 'N/A',
                'avatar'      => $user['avatar'] ?? null,
            ];

            return response()->json([
                'success' => true,
                'user' => $userDataForSync,
                'token' => $data['token'] ?? null,
            ]);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Login failed'], 500);
        }
    }

    // Start password reset
    public function startPasswordReset(Request $request)
    {
        try {
            $response = Http::post("{$this->apiUrl}/auth/start-password-reset", $request->all());
            if (! $response->successful()) {
                return response()->json($response->json(), $response->status());
            }
            return response()->json($response->json());
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Failed to start password reset'], 500);
        }
    }

    // Verify password reset code
    public function verifyResetCode(Request $request)
    {
        try {
            $response = Http::post("{$this->apiUrl}/auth/verify-reset-code", [
                'email' => $request->input('email'),
                'code' => $request->input('code'),
            ]);

            return response()->json($response->json(), $response->status());
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Failed to verify reset code'], 500);
        }
    }

    // Complete password reset
    public function completePasswordReset(Request $request)
    {
        try {
            $response = Http::post("{$this->apiUrl}/auth/complete-password-reset", $request->all());
            if (! $response->successful()) {
                return response()->json($response->json(), $response->status());
            }
            return response()->json($response->json());
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Failed to complete password reset'], 500);
        }
    }

    // Change password
    public function changePassword(Request $request)
    {
        try {
            $token = $request->bearerToken() ?? $request->input('token');

            $response = Http::withHeaders([
                'Authorization' => $token ? "Bearer {$token}" : ''
            ])->post("{$this->apiUrl}/auth/change-password", [
                'server_id' => $request->input('server_id'),
                'currentPassword' => $request->input('currentPassword'),
                'newPassword' => $request->input('newPassword')
            ]);

            $contentType = $response->header('Content-Type', '');
            if (! str_contains($contentType, 'application/json')) {
                return response()->json(['error' => 'Expected JSON response from server'], 500);
            }

            $responseData = $response->json();
            if (! $response->successful()) {
                return response()->json($responseData, $response->status());
            }

            return response()->json($responseData);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Failed to change password'], 500);
        }
    }

    // Verify token silently
    public function verifyTokenSilently(Request $request)
    {
        try {
            $token = $request->input('token');
            $email = $request->input('email');

            $response = Http::withHeaders([
                'Authorization' => $token ? "Bearer {$token}" : '',
                'Content-Type' => 'application/json'
            ])->post("{$this->apiUrl}/auth/verify-token", [
                'email' => $email
            ]);

            $data = $response->json();

            // if token invalid, the JS logged out. Here we return the result.
            return response()->json($data, $response->status());
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage() ?: 'Token verification failed'], 500);
        }
    }

    // Test server connection
    public function testServerConnection()
    {
        try {
            $response = Http::get("{$this->apiUrl}/health");
            return response()->json(['ok' => $response->ok()], $response->status());
        } catch (\Throwable $e) {
            return response()->json(['ok' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // Vulnerable test function (for testing SQL injection)
    public function testVulnerableFunction(Request $request)
    {
        try {
            $response = Http::post("{$this->apiUrl}/auth/vulnerable-function", [
                'email' => $request->input('email')
            ]);

            if (! $response->successful()) {
                $text = $response->body();
                return response()->json(['error' => $text], $response->status());
            }

            $contentType = $response->header('Content-Type', '');
            if (str_contains($contentType, 'application/json')) {
                return response()->json($response->json());
            }

            return response()->json(['error' => 'Unexpected non-JSON response'], 500);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Secure test function
    public function testSecureFunction(Request $request)
    {
        try {
            $response = Http::post("{$this->apiUrl}/auth/secure-function", [
                'email' => $request->input('email')
            ]);
            return response()->json($response->json(), $response->status());
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
