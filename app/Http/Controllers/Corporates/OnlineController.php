<?php

namespace App\Http\Controllers\Corporates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnlineController extends Controller
{
    public function show()
    {
        return view('corporates.online');
    }
}
