<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $categories = [
            [
                'name' => 'Travel',
                'content' => 'Posts about travel, destinations and exploring new places.'
            ],
            [
                'name' => 'Technology',
                'content' => 'Posts about computers, software and new technology.'
            ],
            [
                'name' => 'Sports',
                'content' => 'Posts about sports, fitness and physical activities.'
            ],
            [
                'name' => 'Health',
                'content' => 'Posts about healthy living, exercise and wellbeing.'
            ],
            [
                'name' => 'Education',
                'content' => 'Posts about learning, study and education.'
            ],
        ];

        return fake()->randomElement($categories);
    }
}