<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::all();
        $users = User::all();

        for ($i = 1; $i <= 20; $i++) {
            Post::create([
                'title' => "Post $i",
            ]);
        }
    }
}