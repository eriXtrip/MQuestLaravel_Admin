<?php
// app/Http/Controllers/TeacherDashboardController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TeacherDashboardController extends Controller
{
    protected string $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL', '');
    }

    public function stats(Request $request)
    {
        $token = session('node_token');
        $teacherId = session('user_id');

        if (!$token || !$teacherId) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        try {
            // ✅ Send teacher_id as query string
            $response = Http::withToken($token)
                ->timeout(10)
                ->get("{$this->apiUrl}/teacher/dashboard/stats", [
                    'teacher_id' => $teacherId
                ]);

            $data = $response->successful() ? $response->json() : [];

            return view('TeacherSide.Homepage', [
                'stats' => $data
            ]);
        } catch (\Exception $e) {
            Log::error('Exception fetching teacher stats: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while fetching stats.');
        }
    }

    public function createSection(Request $request)
    {
        $token = session('node_token');
        $teacherId = session('user_id');

        try {
            $response = Http::withToken($token)->post("{$this->apiUrl}/teacher/create/section", [
                "teacherId" => $teacherId,
                "school_name" => $request->school_name,
                "school_year" => $request->school_year,
                "section_name" => $request->section_name
            ]);

            return response()->json($response->json(), $response->status());
        } catch (\Exception $e) {
            Log::error("Create Section Error: " . $e->getMessage());
            return response()->json(["error" => "Server error"], 500);
        }
    }

    public function fetchSections(Request $request)
    {
        $token = $request->input('token');
        $teacherId = $request->input('teacherId');

        if (!$token || !$teacherId) {
            return response()->json(["error" => "Missing token or teacherId"], 400);
        }

        try {
            $response = Http::withToken($token)->post("{$this->apiUrl}/teacher/fetch-sections-and-pupils", [
                "teacherId" => $teacherId
            ]);

            Log::info('Fetch Sections Response: ', $response->json());

            return response()->json($response->json(), $response->status());

        } catch (\Exception $e) {
            Log::error("Fetch Sections Error: " . $e->getMessage());
            return response()->json(["error" => "Server error"], 500);
        }
    }







}
