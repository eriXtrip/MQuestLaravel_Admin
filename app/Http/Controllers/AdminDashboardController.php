<?php
// MQUESTADMINLARAVEL/app/Http/Controllers/AdminDashboardController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AdminDashboardController extends Controller
{
    protected string $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL', '');
    }

    public function index()
    {
        $lessonsCount = 0;
        $pupilsCount = 0;
        $teachersCount = 0;
        $maleCount = 0;
        $femaleCount = 0;
        $preferNotToSayCount = 0;
        $totalUsers = 0;
        $activeUsers = 0;
        $activeRatePercent = 0;
        $subjectSummaries = [];
        $subjectPerformance = [];
        $subjectUsers = [];
        $teachersWithSections = [];
        $Teachers_list = [];
        $Pupils_list = [];
        $Student_progress_Subject = [];

        $token = session('node_token');

        if (!$token) {
            Log::warning('❌ node_token missing from session!');
        }

        if ($token) {
            try {
                // ✅ 1. Fetch global counts
                $countResponse = Http::withToken($token)
                    ->timeout(10)
                    ->get("{$this->apiUrl}/admin/lessons/count");

                if ($countResponse->successful() && $countResponse->json('success')) {
                    $lessonsCount = (int) $countResponse->json('total_lessons', 0);
                    $pupilsCount = (int) $countResponse->json('total_pupils', 0);
                    $teachersCount = (int) $countResponse->json('total_teachers', 0);

                    $gender = $countResponse->json('gender', []);
                    $maleCount = (int) ($gender['male'] ?? 0);
                    $femaleCount = (int) ($gender['female'] ?? 0);
                    $preferNotToSayCount = (int) ($gender['prefer_not_to_say'] ?? 0);
                    
                    $totalUsers = (int) $countResponse->json('total_users', 0);
                    $activeUsers = (int) $countResponse->json('active_users', 0);
                    $activeRatePercent = $totalUsers > 0
                        ? round(($activeUsers / $totalUsers) * 100, 2)
                        : 0;
                    
                    Log::info('✅ Fetched global counts', [
                        'total_users' => $totalUsers,   
                        'active_users' => $activeUsers,
                        'active_rate_percent' => $activeRatePercent
                    ]);

                }

                // ✅ 2. Fetch subject summary (with quarters)
                $summaryResponse = Http::withToken($token)
                    ->timeout(10)
                    ->get("{$this->apiUrl}/admin/subjects/summary");

                if ($summaryResponse->successful()) {
                    $fullResponse = $summaryResponse->json();

                    $subjectPerformance = $fullResponse['subject_performance'] ?? [];
                    $Teachers_list = $fullResponse['Teachers_list'] ?? [];
                    $Pupils_list = $fullResponse['Pupils_list'] ?? [];
                    $Student_progress_Subject = $fullResponse['Student_progress_Subject'] ?? [];

                    // ✅ Extract the 'data' array
                    if (is_array($fullResponse) && isset($fullResponse['data']) && is_array($fullResponse['data'])) {
                        $subjectSummaries = $fullResponse['data'];
                        Log::info('📘 Subject Summaries (extracted data):', [
                            'count' => count($subjectSummaries),
                            'sample' => array_slice($subjectSummaries, 0, 3)
                        ]);
                    } else {
                        Log::warning('⚠️ Subject summaries missing "data" array', ['response' => $fullResponse]);
                        $subjectSummaries = [];
                    }
                } else {
                    Log::warning('⚠️ Failed to fetch subject summaries', [
                        'status' => $summaryResponse->status(),
                        'body' => $summaryResponse->body()
                    ]);
                    $subjectSummaries = [];
                    $subjectPerformance = [];
                    $Teachers_list = [];
                    $Pupils_list = [];
                    $Student_progress_Subject = [];

                }

                // ✅ 3. Fetch subject users (with avatar thumbnails)
                $usersResponse = Http::withToken($token)
                    ->timeout(10)
                    ->get("{$this->apiUrl}/admin/subjects/users");

                if ($usersResponse->successful()) {
                    $fullResponse = $usersResponse->json();

                    // ✅ Extract the 'data' array
                    if (is_array($fullResponse) && isset($fullResponse['data']) && is_array($fullResponse['data'])) {
                        $subjectUsers = $fullResponse['data'];
                        Log::info('👥 Subject Users (extracted data):', [
                            'count' => count($subjectUsers),
                            'sample' => array_slice($subjectUsers, 0, 3)
                        ]);
                    } else {
                        Log::warning('⚠️ Subject users missing "data" array', ['response' => $fullResponse]);
                        $subjectUsers = [];
                    }
                } else {
                    Log::warning('⚠️ Failed to fetch subject users', [
                        'status' => $usersResponse->status(),
                        'body' => $usersResponse->body()
                    ]);
                    $subjectUsers = [];
                }

                // ✅ 4. Fetch ALL Lessons & Contents (Pretest first, Posttest last)
                $lessonsFetched = session('lessons_fetched', false);
                $allLessons = session('all_lessons', []);
                $allContents = session('all_contents', []);

                if (!$lessonsFetched) {
                    $lessonsResponse = Http::withToken($token)
                        ->timeout(10)
                        ->get("{$this->apiUrl}/admin/subjects/lessons");

                    if ($lessonsResponse->successful() && $lessonsResponse->json('success')) {
                        $responseData = $lessonsResponse->json();

                        $allLessons = $responseData['lessons'] ?? [];
                        $allContents = $responseData['contents'] ?? [];

                        // Save to session to avoid refetching
                        session([
                            'all_lessons' => $allLessons,
                            'all_contents' => $allContents,
                            'lessons_fetched' => true
                        ]);

                        Log::info('Fetched all lessons & contents', [
                            'lessons_count' => count($allLessons),
                            'contents_count' => count($allContents)
                        ]);
                    } else {
                        Log::warning('Failed to fetch lessons', [
                            'status' => $lessonsResponse->status(),
                            'body' => $lessonsResponse->body()
                        ]);
                    }
                } else {
                    Log::info('Lessons already in session, skipping API call');
                }

                try {
                    $teachersResponse = Http::withToken($token)
                        ->timeout(10)
                        ->get("{$this->apiUrl}/admin/teachers/sections");

                    if ($teachersResponse->successful() && $teachersResponse->json('success')) {
                        $fullResponse = $teachersResponse->json();
                        $teachersWithSections = $fullResponse['data'] ?? [];
                        Log::info('👩‍🏫 Teachers with Sections fetched', [
                            'count' => count($teachersWithSections),
                            'sample' => array_slice($teachersWithSections, 0, 3)
                        ]);
                    } else {
                        Log::warning('⚠️ Failed to fetch teachers with sections', [
                            'status' => $teachersResponse->status(),
                            'body' => $teachersResponse->body()
                        ]);
                    }
                } catch (\Exception $e) {
                    Log::error('💥 Error fetching teachers with sections', [
                        'message' => $e->getMessage()
                    ]);
                }


            } catch (\Exception $e) {
                Log::error('💥 Error connecting to Node.js API', [
                    'message' => $e->getMessage(),
                    'url' => $this->apiUrl
                ]);
            }
        }

        // Group users by subject_id
        $usersBySubject = [];
        foreach ($subjectUsers as $user) {
            if (is_array($user) && isset($user['subject_id'])) {
                $usersBySubject[$user['subject_id']][] = $user;
            }
        }

        // ✅ Save in session for later use
        session(['usersBySubject' => $usersBySubject]);
        session(['teachersWithSections' => $teachersWithSections]);

        return view('AdminDashboard', compact(
            'lessonsCount',
            'pupilsCount',
            'teachersCount',
            'maleCount',
            'femaleCount',
            'preferNotToSayCount',
            'totalUsers',
            'activeUsers',
            'activeRatePercent',
            'subjectSummaries',
            'subjectPerformance',
            'subjectUsers',
            'usersBySubject',
            'allLessons',     
            'allContents',
            'teachersWithSections',
            'Teachers_list',
            'Pupils_list',
            'Student_progress_Subject'
        ));
    }

    public function getUsersBySubject($subject_id)
    {
        try {
            // 🧾 Log the subject ID for debugging
            \Log::info('🧩 Fetching users by subject ID:', ['subject_id' => $subject_id]);

            // Access usersBySubject data from your index logic or cache
            $usersBySubject = session('usersBySubject', []); // or from controller variable
            $users = $usersBySubject[$subject_id] ?? [];

            // 🧾 Log how many users were found for this subject
            \Log::info('👥 Users found for subject', [
                'subject_id' => $subject_id,
                'count' => count($users)
            ]);

            return response()->json($users);
        } catch (\Exception $e) {
            \Log::error('💥 Error fetching users by subject', [
                'subject_id' => $subject_id,
                'error' => $e->getMessage()
            ]);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }



}