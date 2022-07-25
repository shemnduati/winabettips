<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class predictions extends Model
{
    use HasFactory;
    protected $fillable = [
        'fixture_id',
        'start_time',
        'competition',
        'leagueId',
        'country',
        'team1',
        'team2',
        'prediction_type',
        'subcribers',
        'odds',
        'ht_score',
        'prediction_type',
        'final_score',
        'status',
        'date'
    ];

}
