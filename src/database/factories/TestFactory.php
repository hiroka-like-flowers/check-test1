<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    protected $model = User::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'first_name' => $this->faker->first_name(),
            'last_name' => $this->faker->last_name(),
            'status' => $this->faker->randomElement(['gender']),
            'email' => $this->faker->unique()->safeEmail(),
            'tel' => $this->faker->numberBetween(3, 5),
            'address' => $this->faker->address(10, 120),
            'building' => $this->faker->building(0,50),
            'status' => $this->faker->randomElement(['category']),
            'detail' => $this->faker->sentence(1, 120),
        ];
    }
}
