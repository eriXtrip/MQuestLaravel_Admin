<?php

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
}
