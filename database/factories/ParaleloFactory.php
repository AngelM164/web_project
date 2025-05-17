<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paralelo>
 */
class ParaleloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Paralelo::class;w
    public function definition(): array
    {
        return [
            'nombre' => 'Paralelo' . $this->faker->unique()->numberBetween(1, 100),
        ];
    }
}
