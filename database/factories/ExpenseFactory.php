<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //$this->faker->unique()->safeEmail
        $startDate = '-10 years';
        $endDate = 'now';
        $randomDate = $this->faker->dateTimeBetween($startDate, $endDate);

        $imageFileName = $this->faker->image(storage_path('app/public/images'), 400, 300, 'expenses', false);
        $imageFilePath = 'public/images/' . $imageFileName;
        // Save the fake image file to the "public" disk
        Storage::disk('public')->put($imageFilePath, file_get_contents(storage_path('app/' . $imageFilePath)));
        // Get the URL for the fake image
        $imageUrl = Storage::disk('public')->url($imageFilePath);

        return [
            'employee_id' => Employee::factory()->create()->id,
            'total_amount' => $this->faker->randomFloat(1, 1, 200),
            'receipt_image' => $imageUrl,
            'beneficiary_name' => $this->faker->optional($weight = 0.2)->name,
            'comments' => $this->faker->optional($weight = 0.2)->paragraph,
            'payment_type' => $this->faker->randomElement(['cash','card','cheque']),
            'created_at' => $randomDate,
            'updated_at' => $randomDate,
        ];
    }
}
