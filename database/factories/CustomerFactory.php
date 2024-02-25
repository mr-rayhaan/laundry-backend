<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomNumber = $this->faker->numberBetween(0,2);
        $arrayPhone = [];
        $arrayAddress = [];
        for($i = 0; $i < $randomNumber; $i++) {
            array_push($arrayPhone, $this->faker->phoneNumber);
            array_push($arrayAddress, $this->faker->address);
        }

        $startDate = '-10 years';
        $endDate = 'now';
        $randomDate = $this->faker->dateTimeBetween($startDate, $endDate);
        return [
            'name' => $this->faker->name,
            'phone' => count($arrayPhone) == 0 ? null : json_encode($arrayPhone),
            'address' => count($arrayAddress) == 0 ? null : json_encode($arrayAddress),
            'created_at' => $randomDate,
            'updated_at' => $randomDate,
        ];
    }
}
