<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MountainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->catchPhrase(),
            'description' => $this->faker->realText(),
            'altitude' => floatval(
                 "{$this->faker->numberBetween(300,5000)}.
                  {$this->faker->numberBetween(10, 99)}"
            ),
        ];
    }
}
