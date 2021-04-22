<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index($user) { 
        if($currentUser = User::where('id', $user)->first()) {         
           
            return view('profiles.index', compact('currentUser'));
        }
        else {
            return "Profile doesn't exist";
        }        
        
    }
}
