<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invite extends Model
{
    use HasFactory;
    
    protected $fillable = ['receiver_id', 'bw_team_id'];    

    public function user() {
        return $this->belongsTo(User::class);
    }
}
