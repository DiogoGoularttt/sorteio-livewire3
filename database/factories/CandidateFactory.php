<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CandidateFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name'      => $this->faker->name,
            'email'     => $this->faker->email,
            'github'    => $this->faker->userName

        ];
    }
}
