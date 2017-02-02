<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerMatch extends Model
{
    //
    public function match()
    {
    	return $this->belongsTo(Match::class);
    }

    public function player()
    {
    	return $this->belongsTo(Player::class);
    }
}
