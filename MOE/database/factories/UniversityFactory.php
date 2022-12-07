<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $f = $this->faker;

        return [
            'name' => $f->sentence(3, false)
        ];
    }
}
