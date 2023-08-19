<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => "testuser1", 'email' => "testuser1@mail.com", 'password' => bcrypt('testuser1')]);
        //
    }
}
