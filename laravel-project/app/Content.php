<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    static $gym_cleans = [
        "とても綺麗", "まあまあ綺麗", "ふつう", "あまり綺麗ではない", "綺麗ではない"
    ];
}
