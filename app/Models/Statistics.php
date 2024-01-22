<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'statistics';
    protected $fillable = [
        'User_ID',
        'Game_time',
        'Longest_round',
        'Progress_level',
        'Hardest_word',
        'Rating_points',
    ];
    protected $attributes = [
        'User_ID' => '',
        'Game_time' => 0,
        'Longest_round' => 0,
        'Progress_level' => 1,
        'Hardest_word' => '',
        'Rating_points' => 0,
    ];

}
