<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            $services = [
                [
                    'service_name' => 'wash',
                    'service_code' => 'W',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'service_name' => 'iron',
                    'service_code' => 'I',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'service_name' => 'wash & iron',
                    'service_code' => 'WI',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'service_name' => 'dry clean',
                    'service_code' => 'DC',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ];
            // [
            //     'service_name' => '',
            //     'service_code' => '',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            
            foreach ($services as $service) {
                Service::create($service);
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
