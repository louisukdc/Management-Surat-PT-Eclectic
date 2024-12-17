<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\post;
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
                'description' => "This is the body of post $i",
                'category_id' => $category->random()->id,
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
