<?php
namespace App\Http\Invite;

use App\Models\User;
use App\Models\Invite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class InviteManager {
    public function checkIfAlreadyInvited($id) {
        $receiver = User::findOrFail($id);        

        $invites = Invite::where('accepted', 0)->where('declined', 0)
        ->where('from_team_id', Auth::user()->bw_team_id)
        ->where('receiver_id', $receiver->id)->get();        
       
        if($invites->isEmpty()) {
            return false;
        }        
        return true;       
    }    
}