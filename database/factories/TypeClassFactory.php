<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeClass>
 */
class TypeClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tutor_id' => fake()->numberbetween(1,5),
            'type' => Arr::random(['Online', 'Offline']),
            'schedule' => Arr::random(['Siang', 'Malam'])
        ];
    }
}
