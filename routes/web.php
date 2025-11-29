    <?php

    // MQUESTADMINLARAVEL/routes/web.php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\AdminDashboardController;

    use App\Http\Controllers\TeacherDashboardController;

    use Illuminate\Support\Facades\Http;
    use Illuminate\Support\Facades\Log;
    use Illuminate\Support\Facades\DB;

    /*Route::get('/', function () {
        return view('welcome');
    });*/


    // Default login page
    Route::get('/', function () {
        return view('index');
    })->name('login');

    // Login controller route
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
    Route::post('/admin/confirm', [AuthController::class, 'confirmAdminLogin'])->name('admin.confirm');

    // Logout controller route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // registration routes (proxy to Node via AuthController)
    Route::prefix('register')->group(function () {
        Route::post('/start', [AuthController::class, 'startRegistration'])->name('register.start');
        Route::post('/verify', [AuthController::class, 'verifyCode'])->name('register.verify');
        Route::post('/complete', [AuthController::class, 'completeRegistration'])->name('register.complete');
    });

    // Forgot Password routes (proxy to Node via AuthController)
    Route::prefix('forgot-password')->group(function () {
        Route::post('/start', [AuthController::class, 'startPasswordReset'])->name('password.start');
        Route::post('/verify', [AuthController::class, 'verifyResetCode'])->name('password.verify');
        Route::post('/complete', [AuthController::class, 'completePasswordReset'])->name('password.complete');
    });

    // Register
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    // Forgot Password
    Route::get('/forgot_password', function () {
        return view('forgot_password');
    })->name('forgot_password');

    // Teacher Home
    Route::get('/home_teacher', function () {
        return view('home_teacher');
    })->name('home_teacher');

    // Admin Home
    Route::get('/home_admin', function () {
        return view('home_admin');
    })->name('home_admin');

    Route::get('/usersBySubject/{subject_id}', [AdminDashboardController::class, 'getUsersBySubject']);



    Route::get('/gdrive', function () {
        return view('gdrive_API.gdrive');
    })->name('gdrive');


    // Karylle's Routes

    Route::get('/ActivityLog', function () {
        return view('ActivityLog');
    })->name('ActivityLog');

    Route::get('/AdminDashboard', [AdminDashboardController::class, 'index'])
    ->name('AdminDashboard');

    Route::get('/orgAdminDashboard', function () {
        return view('orgAdminDashboard');
    })->name('orgAdminDashboard');



    // web.php
    Route::get('/English', function () {
        return view('English'); // this should return only the HTML fragment (not full layout)
    })->name('English');


    Route::get('/Science', function () {
        return view('Science');
    })->name('Science');

    Route::get('/Mathematics', function () {
        return view('Mathematics');
    })->name('Mathematics');

    Route::get('/Filipino', function () {
        return view('Filipino');
    })->name('Filipino');


    Route::get('/UserManagement', function () {
        return view('UserManagement');
    })->name('UserManagement');

    Route::get('/proxy-image/{id}', function ($id) {
        try {
            $url = "https://drive.google.com/uc?id={$id}";
            $response = Http::timeout(10)->get($url);

            if ($response->successful()) {
                return response($response->body(), 200)
                    ->header('Content-Type', $response->header('Content-Type') ?: 'image/jpeg')
                    ->header('Cache-Control', 'public, max-age=31536000');
            } else {
                Log::error("Failed to fetch Google Drive image", [
                    'id' => $id,
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return response()->file(public_path('images/default-avatar.jpg'));
            }
        } catch (\Exception $e) {
            Log::error("Error in proxy-image route", [
                'id' => $id,
                'error' => $e->getMessage()
            ]);
            return response()->file(public_path('images/default-avatar.jpg'));
        }
    });

    Route::post('/admin/refresh-dashboard-data', [AdminDashboardController::class, 'refreshDashboardData'])->name('admin.refresh-dashboard-data');


    //Added teacher side routes

    // Route::get('/teacher/homepage', function () {
    //     return view('TeacherSide.Homepage');
    // })->name('teacher.homepage');

    Route::get('/teacher/notifications', function () {
        return view('TeacherSide.Notifications-Section');
    })->name('teacher.notifications');

    Route::get('/teacher/profile', function () {
        return view('TeacherSide.Profile-Section');
    })->name('teacher.profile');

    Route::get('/teacher/homepage', [TeacherDashboardController::class, 'stats'])
     ->name('teacher.homepage');

    Route::post('/teacher/create-section', [TeacherDashboardController::class, 'createSection']);
    Route::post('/teacher/fetch-sections', [TeacherDashboardController::class, 'fetchSections']);



