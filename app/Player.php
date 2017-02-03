<?php

namespace opensourcefootball;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Player extends Authenticatable
{
    use Notifiable;

    private static $positions = [
        'GK' => 'goalkeeper',
        'CB' => 'centre back',
        'LB' => 'left back',
        'RB' => 'right back',
        'CDM' => 'central defensive midfield',
        'LM' => 'left midfield',
        'RM' => 'right midfield',
        'CM' => 'centre midfield',
        'LW' => 'left wing',
        'RW' => 'right wing',
        'CAM' => 'centre attacking midfield',
        'ST' => 'striker'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'firstname', 'lastname', 'pref_position'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function playerMatches()
    {
    	return $this->hasMany(PlayerMatch::class);
    }

    public function getPositions()
    {
        return $positions;
    }

    public static function createPlayer($request)
    {   
        $player = create($request->all());
        return $player->save();
    }
}
