<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public $fillable = ['bw_manager_id', 'name', 'team_tag', 'game_id'];

    public function user() {
        $this->belongsTo(User::class);
    }
}
