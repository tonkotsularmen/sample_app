<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    static $gym_cleans = [
        "とても綺麗", "まあまあ綺麗", "ふつう", "あまり綺麗ではない", "綺麗ではない"
    ];

    static $gym_staffs = [
        "とても丁寧", "まあまあ丁寧", "ふつう", "あまり丁寧ではない", "丁寧ではない"
    ];

    static $gym_users = [
        "5", "4", "3", "2", "1"
    ];

    static $gym_beginners = [
        "5", "4", "3", "2", "1"
    ];

    static $stars = [
        "5", "4", "3", "2", "1"
    ];
}
