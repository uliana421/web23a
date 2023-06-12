<?php

namespace Database\Factories;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tutor>
 */
class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'gender' => Arr::random(['Laki-Laki','Perempuan']),
            'age' => fake()->numberBetween(35, 50),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address,
            'skill' => Arr::random(['Web Programming', 'UI/UX Design', 'Data Science']),
            'rate' => fake()->numberBetween(4, 5),
            'salary' => Arr::random(['$15', '$16'])
           
            
            
        ];
    }
}
