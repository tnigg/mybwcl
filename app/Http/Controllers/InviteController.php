<?php

namespace App\Http\Controllers;

use App\Http\Invite\InviteManager;
use App\Models\Invite;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class InviteController extends Controller
{
    public function index() {
        $inviteManager = new InviteManager();
        $avaiablePlayers = collect();        
        $users = User::where('bw_team_id', NULL)->get();  

        foreach($users as $user) {
            $id = $user->id;  
         
            if(!($inviteManager->checkIfAlreadyInvited($id))) {           
                if(Auth::user()->id != $user->id) {                     
                    $avaiablePlayers->push($user);
                }                      
            }         
        }     
        return view('invites.index', compact('avaiablePlayers'));
    }
    

    public function store($id) {
        // Just a safty net to prevent spam with weird user behaviour
        $inviteManager = new InviteManager();

        if($inviteManager->checkIfAlreadyInvited($id)) {            
            return redirect(route('invite.index', $id));
        }      
        // Store the invite
        $user = User::findOrFail($id);
        $invite = new Invite();
        $invite->receiver_id = $user->id;        
        $invite->from_team_id = Auth::user()->bw_team_id;        
        $invite->save();
    }   
}
