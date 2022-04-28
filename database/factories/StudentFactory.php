<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'name' => $this->faker->name($gender),
            'email' => $this->faker->unique()->safeEmail(),
            'username' => $this->faker->userName,
            'phone' => $this->faker->phoneNumber,
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
