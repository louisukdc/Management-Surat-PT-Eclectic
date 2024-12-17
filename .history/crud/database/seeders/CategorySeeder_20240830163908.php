<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $category = ['Laravel', 'PHP', 'HTML', 'CSS', 'Java', 'Python'];
            foreach ($category as $category) {
                Category::create([
                    'name' => $category,
                ]);
            }

    }
}
