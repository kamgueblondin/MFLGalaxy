<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'blondin',
            'email' => 'blondin@gmail.com',
            'password' => bcrypt('blondin'),
        ]);
        User::create([
            'name' => 'landry',
            'email' => 'landry@gmail.com',
            'password' => bcrypt('landry'),
        ]);
        User::create([
            'name' => 'bertrand',
            'email' => 'bertrand@gmail.com',
            'password' => bcrypt('bertrand2005'),
        ]);
    }
}
