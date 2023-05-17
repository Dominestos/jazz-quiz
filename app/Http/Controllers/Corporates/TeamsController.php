<?php

namespace App\Http\Controllers\Corporates;

use App\Http\Controllers\Controller;
use App\Models\Corporate;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function register(Corporate $corp)
    {
        return view('corporates.schedule.teams.register', compact('corp'));
    }

    public function store(Request $request, Corporate $corp)
    {
        $request->validate([
            'name' => 'required|string|max:60',
            'capitain_name' => 'required|string|max:60',
            'email' => ['required', 'regex:/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/'],
            'phone_number' => ['required', 'max:17', 'regex:/^\+375\s(25|29|33|44)\s\d{3}\s\d{2}\s\d{2}$/'],
            'number_of_participants' => 'required|gte:2|lte:9'
            ]);

        $team = Team::updateOrCreate($request->except('_token'));

        $team->save();

        $team->corporates()->attach($corp);
    }
}
