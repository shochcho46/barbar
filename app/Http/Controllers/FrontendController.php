<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $startTime = '11:00 AM'; // Dynamic start time
        $endTime = '5:00 PM'; // Dynamic end time
        $interval = 30; // Time slot interval in minutes
        $date = date('Y-m-d');
        $timeSlots = $this->generateTimeSlots($startTime, $endTime, $interval);

        return view('frontend.custom.main', compact('timeSlots', 'date'));
    }

    public function generateTimeSlots($startTime, $endTime, $interval)
    {
        $timeSlots = [];

        $currentTime = strtotime($startTime);

        while ($currentTime <= strtotime($endTime)) {
            $formattedTime = date('h:i A', $currentTime);
            $timeSlots[] = $formattedTime;
            $currentTime = strtotime('+' . $interval . ' minutes', $currentTime);
        }

        return $timeSlots;
    }

    public function timeSlot(Request $request)
    {
        $startTime = '11:00 AM'; // Dynamic start time
        $endTime = '5:00 PM'; // Dynamic end time
        $interval = 30; // Time slot interval in minutes

        $timeSlots = $this->generateTimeSlots($startTime, $endTime, $interval);

        // Output the generated time slots
        $htmlContent = view('frontend.custom.ajax', ['timeSlots' => $timeSlots, 'date' => $request->date])->render();

        return response()->json(['content' => $htmlContent]);

    }

    public function bookSlot(Request $request)
    {

    }
}
