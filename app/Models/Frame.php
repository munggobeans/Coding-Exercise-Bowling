<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frame extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'frame_num', 'shot_1', 'shot_2', 'shot_3', 'pins_knocked_down', 'points'];
}
