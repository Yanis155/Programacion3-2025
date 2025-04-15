<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lastname' => $this->faker->lastName(),
            'name' => $this->faker->firstName(),
            'dni' => $this->faker->unique()->numberBetween(10000000, 50000000),
            'birthday' => $this->faker->date('Y-m-d'),
        ];
    }
}
