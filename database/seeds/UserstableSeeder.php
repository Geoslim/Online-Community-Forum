<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Administrator',
            'password' => bcrypt('password'),
            'email' => 'igeo273@gmail.com',
            'admin' => 1

        ]);

        App\User::create([
            'name' => 'Garry Adams',
            'password' => bcrypt('password'),
            'email' => 'george@kjk.com'

        ]);

        App\User::create([
            'name' => 'Jamie Lannister',
            'password' => bcrypt('password'),
            'email' => 'iedomwande@yahoo.com'

        ]);
    }
}
