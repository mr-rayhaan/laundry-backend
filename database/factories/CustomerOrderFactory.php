<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\Employee;
use App\Models\Customer;
use App\Models\Cart;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerOrder>
 */
class CustomerOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $randomDate = Carbon::now()->addDays($this->faker->numberBetween(1, 2))->format('Y-m-d H:i:s');

        return [
            'status' => Arr::random(['RECEIVED', 'PROCESSING', 'READY', 'DELIVERED']),
            'customer_id' => Customer::inRandomOrder()->first()->id,
            
            'total_quantity' => 0,//$this->faker->numberBetween(1, 20),
            'discount' => 0,//$this->faker->numberBetween(0, 5),
            'vat' => 0,
            'total_amount' => 0,
            'amount_paid' => 0,
            'amount_pending' => 0,
            'comments' => $this->faker->sentence,
            'employee_id' => Employee::inRandomOrder()->first()->id,
            // 'delivery_date' => $randomDate,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
