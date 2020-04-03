<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Algorithm extends Model
{
    // Algorithms belong to Users
    public function user(){
        return $this->belongsTo(User::class);
    }
}
