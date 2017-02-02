<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    //
    public function completeMatches()
    {
    	return $this->hasMany(Match::class)->where('played', '=', 1);
    }

    public function upcomingMatches()
    {
    	return $this->hasMany(Match::class)->where('played', '=', 0);
    }

    // public function playedPlayerMatches()
    // {
    //     return $this->hasManyThrough('App\PlayerMatch', 'App\Match')->where('matches.played', '=', 1);
    // }

    public function getSeasonPlayerStats()
    {
    	$todaysDate = new \DateTime();
    	$matchesThisSeason = Season::has('completeMatches.playerMatches.player')->where([
    		['start_date', '<=', $todaysDate],
    		['end_date', '>=', $todaysDate]
    	])->first();
    	$playerSeasonStats = array();
    	foreach($matchesThisSeason->completeMatches as $matchStats) {
    		foreach($matchStats->playerMatches as $playerStats) {
    			$playerSeasonStats[$playerStats->player->id]['total_points'] = $playerStats->goals;
    			if($matchStats->team1_score > $matchStats->team2_score) {
    				$playerSeasonStats[$playerStats->player->id]['total_points'] += $playerStats->team_id == 1 ? 3 : 0; 
    			} elseif ($matchStats->team1_score < $matchStats->team2_score) {
    				$playerSeasonStats[$playerStats->player->id]['total_points'] += $playerStats->team_id == 2 ? 3 : 0; 
    			} else {
    				$playerSeasonStats[$playerStats->player->id]['total_points'] += 1;
    			}
    		}
    		$playerSeasonStats[$playerStats->player->id]['total_goals'] += $playerStats->goals;
    	}
    	dd($playerSeasonStats);
    }
}
