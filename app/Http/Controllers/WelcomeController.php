<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corporate;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $corporates = Corporate::orderBy('id', 'desc')->limit(3)->get();
        foreach ($corporates as $corporate) {
            $corporate->date_time = Carbon::parse($corporate->date_time);
        }
        return view('welcome', compact('corporates'));
    }
}
