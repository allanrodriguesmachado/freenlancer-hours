<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->words(5, true),
            'description' => fake()->randomHtml(),
            'created_at' => fake()->dateTime(),
            'ends_at' => fake()->dateTime(),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElement([
                'PHP',
                'Java',
                'Kotlin',
                'C#',
                'Laminas',
                'Laravel'
            ], random_int(1, 5)),
            'created_by' => User::factory(),
        ];
    }
}
