<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
    public function playerMatches()
    {
    	return $this->hasMany(PlayerMatch::class);
    }

    public function season()
    {
    	return $this->belongsTo(Season::class);
    }
}
