<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        User::create([
            'name' => 'Ali',
            'email' => 'ali@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Sara',
            'email' => 'sara@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Alex',
            'email' => 'alex@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Jan',
            'email' => 'jan@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
