<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Meeting;
use Carbon\Carbon;

class MeetingController extends Controller
{
    public function index()
    {
        // यूजर की आने वाली मीटिंग्स को प्राप्त करें
        $meetings = Auth::user()
            ->meetings()
            ->where('start_time', '>', now())
            ->orderBy('start_time')
            ->get();

        // हर मीटिंग के लिए start_time को format करें
        foreach ($meetings as $meeting) {
            $meeting->formatted_start_time = Carbon::parse($meeting->start_time)->format('l, M j Y - H:i');
        }

        // View में मीटिंग्स पास करें
        return view('meetings.index', compact('meetings'));
    }
}
