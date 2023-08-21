<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::create(['user_id' => 1, 'star' => 4, 'gym_name' => "テストジムA", 'gym_clean' => "まあまあ綺麗", 'gym_staff' => "まあまあ丁寧", 'gym_user' => 4, 'gym_beginner' => 4, 'memo' => "テスト１"]);

        Content::create(['user_id' => 1, 'star' => 3, 'gym_name' => "テストジムB", 'gym_clean' => "ふつう", 'gym_staff' => "ふつう", 'gym_user' => 3, 'gym_beginner' => 3, 'memo' => "テスト２"]);

        Content::create(['user_id' => 1, 'star' => 3, 'gym_name' => "テストジムC", 'gym_clean' => "とても綺麗", 'gym_staff' => "とても丁寧", 'gym_user' => 3, 'gym_beginner' => 3, 'memo' => "テスト3"]);

        Content::create(['user_id' => 1, 'star' => 3, 'gym_name' => "テストジムD", 'gym_clean' => "とても綺麗", 'gym_staff' => "とても丁寧", 'gym_user' => 3, 'gym_beginner' => 3, 'memo' => "テスト４"]);

        Content::create(['user_id' => 1, 'star' => 3, 'gym_name' => "テストジムE", 'gym_clean' => "とても綺麗", 'gym_staff' => "とても丁寧", 'gym_user' => 3, 'gym_beginner' => 3, 'memo' => "テスト5"]);

        Content::create(['user_id' => 1, 'star' => 3, 'gym_name' => "テストジムF", 'gym_clean' => "とても綺麗", 'gym_staff' => "とても丁寧", 'gym_user' => 3, 'gym_beginner' => 3, 'memo' => "テスト６"]);
    }
}
