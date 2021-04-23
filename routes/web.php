<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\ProfilesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function() {
    return view('index');
});

// Profile
Route::get('/{user}/profile', [ProfilesController::class, 'index'])->name('profile.index');

//Team
Route::get('/team/create', [TeamsController::class, 'create'])->name('teams.create');
Route::post('/team/store', [TeamsController::class, 'store'])->name('teams.store');

//Invite
Route::get('/team/invite', [InviteController::class, 'index'])->name('invite.index');
Route::post('/player/{id}/invite', [InviteController::class, 'store'])->name('invite.store');


require __DIR__.'/auth.php';
