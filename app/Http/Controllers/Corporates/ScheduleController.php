<?php

namespace App\Http\Controllers\Corporates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Corporate;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    public function show()
    {
        $corporates = Corporate::get();
        foreach ($corporates as $corporate) {
            $corporate->date_time = Carbon::parse($corporate->date_time);
        }
        return view('corporates.schedule.all', compact('corporates'));
    }

    public function more(Corporate $corp)
    {
        return view('corporates.schedule.more', compact('corp'));
    }
}
