<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function create() {
        return view('teams.create');
    }
}
