<?php

namespace opensourcefootball;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    public function match()
    {
    	return $this->belongsTo(Match::class);
    }
}
