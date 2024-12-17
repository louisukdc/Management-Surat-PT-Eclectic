<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
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
            'name' => 'James',
            'email' => 'james@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
