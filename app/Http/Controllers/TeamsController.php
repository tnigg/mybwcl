<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
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
            'bw_manager_id' => Auth::id(),
        ]);
       
       // Save  
       $user = User::where('id', Auth::id())->first();
       $user->update([
           'bw_team_id' => $team->id,
           'bw_role' => 'Manager',
        ]);        
    }
 

}
