<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            $employees = [
                [
                    'name' => 'Hamza Abbas',
                    'mobile' => '0581178476',
                    'password' => '',
                    'salary' => 1200,
                    'employee_type' => 'direct',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Akram',
                    'mobile' => '',
                    'password' => '',
                    'salary' => 0,
                    'employee_type' => 'outsourced',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Khalid',
                    'mobile' => '0565700157',
                    'password' => '',
                    'salary' => 0,
                    'employee_type' => 'outsourced',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // [
                //     'name' => '',
                //     'mobile' => '',
                //     'password' => '',
                //     'salary' => 1,
                //     'created_at' => now(),
                //     'updated_at' => now(),
                // ],
            ];

            foreach ($employees as $employee) {
                Employee::create($employee);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
