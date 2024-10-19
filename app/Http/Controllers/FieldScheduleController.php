<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class FieldScheduleController extends Controller
{
    public function index()
    {
        $schedules = $this->generateSchedule();
        $schedules = collect($schedules);

        // echo $schedules;
        return view('schedule.fieldSchedule', compact('schedules'));
    }

    public function generateSchedule()
    {
        $field_schedules = [];
        $now = Carbon::now('Asia/Jakarta');
        for ($i = 0; $i < 20; $i++) {
            $field_schedules[$i] = new Schedule($now->copy()->addDays($i));
        }
        return $field_schedules;
    }
}
