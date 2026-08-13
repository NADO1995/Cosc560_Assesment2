<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $titles = [
            'Exploring Beautiful Places',
            'Latest Technology Trends',
            'Benefits of Regular Exercise',
            'Importance of Education',
            'Healthy Lifestyle Tips',
            'Adventure Travel in Bhutan',
            'Learning New Technology',
            'Sports and Fitness',
            'Discovering New Places',
            'Tips for Better Health'
        ];

        $contents = [
            'This post provides information about travelling and exploring different places.',
            'Technology is changing quickly and creating new opportunities for people.',
            'Regular exercise helps people stay healthy and active.',
            'Education helps us develop knowledge and useful skills.',
            'A healthy lifestyle includes good food, exercise and enough rest.',
            'Bhutan offers many beautiful places for adventure and travel.',
            'Learning new technology can help improve our knowledge and skills.',
            'Sports are a great way to stay active and healthy.',
            'Travelling allows us to experience new places and cultures.',
            'Simple healthy habits can improve our everyday life.'
        ];

        return [
            'title' => fake()->randomElement($titles),
            'content' => fake()->randomElement($contents),
            'user_id' => User::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'is_active' => fake()->randomElement(['Yes', 'No']),
        ];
    }
}