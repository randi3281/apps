<?php

namespace Database\Factories\belajar\database\onetomany;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\belajar\database\onetomany\commentonetomany>
 */
class commentonetomanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => $this->faker->sentence,
            'postonetomany_id' => 1,
        ];
    }
}
