<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Travel',
            'content' => 'Posts about travel, destinations and exploring new places.'
        ]);

        Category::create([
            'name' => 'Technology',
            'content' => 'Posts about computers, software and new technology.'
        ]);

        Category::create([
            'name' => 'Sports',
            'content' => 'Posts about sports, fitness and physical activities.'
        ]);

        Category::create([
            'name' => 'Health',
            'content' => 'Posts about healthy living, exercise and wellbeing.'
        ]);

        Category::create([
            'name' => 'Education',
            'content' => 'Posts about learning, study and education.'
        ]);
    }
}