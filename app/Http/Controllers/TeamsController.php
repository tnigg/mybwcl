<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamsController extends Controller
{
    public function create() {
        return view('teams.create');
    }

    public function store(Request $request) {
        
        $team = Team::create([
            'name' => $request->name,
            'team_tag' => $request->team_tag,
            'game_id' => $request->game_id,
            'manager_id' => Auth::id(),
        ]);

        
    }
}
