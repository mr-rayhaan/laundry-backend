<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Models\Cloth;
use App\Models\Service;
use App\Models\PriceList;
use Faker\Factory as Faker;

class PriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            // $this->faker = Faker::create();
            $cloths = Cloth::all();
            // $services = Service::all();
            // foreach ($cloths as $cloth) {
            //     foreach($services as $service) {
            //         $price = $this->faker->randomFloat(1, 1, 20);
            //         PriceList::create([
            //             'service_id' => $service->id,
            //             'cloth_id' => $cloth->id,
            //             'price' => $price,
            //             'created_at' => now(),
            //             'updated_at' => now()
            //         ]);
            //     }
            // }
            $price_list = [
                [
                    'cloth_id' => 1,
                    'service_id' => 1,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 1,
                    'service_id' => 2,
                    'price' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 1,
                    'service_id' => 3,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 2,
                    'service_id' => 1,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 2,
                    'service_id' => 2,
                    'price' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 2,
                    'service_id' => 3,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 3,
                    'service_id' => 1,
                    'price' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 3,
                    'service_id' => 2,
                    'price' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 3,
                    'service_id' => 3,
                    'price' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 4,
                    'service_id' => 2,
                    'price' => 1.5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 4,
                    'service_id' => 3,
                    'price' => 1.5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ], 
                [
                    'cloth_id' => 5,
                    'service_id' => 2,
                    'price' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 5,
                    'service_id' => 3,
                    'price' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 6,
                    'service_id' => 1,
                    'price' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ], 
                [
                    'cloth_id' => 6,
                    'service_id' => 3,
                    'price' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 7,
                    'service_id' => 1,
                    'price' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 7,
                    'service_id' => 2,
                    'price' => 1.5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 7,
                    'service_id' => 3,
                    'price' => 2.5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 7,
                    'service_id' => 4,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 8,
                    'service_id' => 1,
                    'price' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 8,
                    'service_id' => 2,
                    'price' => 1.5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 8,
                    'service_id' => 3,
                    'price' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 8,
                    'service_id' => 4,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 9,
                    'service_id' => 2,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 9,
                    'service_id' => 4,
                    'price' => 12,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 10,
                    'service_id' => 2,
                    'price' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 10,
                    'service_id' => 4,
                    'price' => 18,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],  
                [
                    'cloth_id' => 11,
                    'service_id' => 2,
                    'price' => 1.5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 11,
                    'service_id' => 3,
                    'price' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 12,
                    'service_id' => 4,
                    'price' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 13,
                    'service_id' => 3,
                    'price' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 14,
                    'service_id' => 1,
                    'price' => 1.5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 14,
                    'service_id' => 3,
                    'price' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 14,
                    'service_id' => 4,
                    'price' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 15,
                    'service_id' => 1,
                    'price' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 15,
                    'service_id' => 2,
                    'price' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 15,
                    'service_id' => 3,
                    'price' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 15,
                    'service_id' => 4,
                    'price' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 16,
                    'service_id' => 2,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 16,
                    'service_id' => 4,
                    'price' => 12,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 17,
                    'service_id' => 2,
                    'price' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 17,
                    'service_id' => 4,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 18,
                    'service_id' => 2,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 18,
                    'service_id' => 4,
                    'price' => 12,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 19,
                    'service_id' => 2,
                    'price' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 19,
                    'service_id' => 4,
                    'price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 20,
                    'service_id' => 2,
                    'price' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 20,
                    'service_id' => 3,
                    'price' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 20,
                    'service_id' => 4,
                    'price' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 21,
                    'service_id' => 1,
                    'price' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 22,
                    'service_id' => 2,
                    'price' =>4 ,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 22,
                    'service_id' => 3,
                    'price' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 23,
                    'service_id' => 3,
                    'price' => 15,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 24,
                    'service_id' => 3,
                    'price' => 20,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 25,
                    'service_id' => 3,
                    'price' => 20,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 25,
                    'service_id' => 4,
                    'price' => 35,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 26,
                    'service_id' => 1,
                    'price' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 27,
                    'service_id' => 1,
                    'price' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 27,
                    'service_id' => 2,
                    'price' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_id' => 27,
                    'service_id' => 3,
                    'price' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
            ];
            foreach ($price_list as $item) {
                PriceList::create($item);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
