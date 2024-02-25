<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Models\Cloth;

class ClothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            $cloths = [
                [
                    'cloth_type' => 'dishdasha',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/dishdasha.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'kandoora',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/kandoora.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'ghutra',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/ghutra.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'lungi',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/lungi.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'vest / under shirt',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/vest/under-shirt.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'under-wear',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/under-wear.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'shirt',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/shirt.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'trouser',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/pants.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'jacket',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/jacket.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'suit',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/suit.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'pyjama',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/pyjama.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
                [
                    'cloth_type' => 'tie',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/tie.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'socks',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/socks.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'dress',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/dress.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'pakistani-dress',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/pakistani-dress.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'abaya',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/abaya.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'shella',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/shella.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'sari',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/sari.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'blouse',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/blouse.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'skirt',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/skirt.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'towel',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/towel.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'bed sheet',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/bed-sheet.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'blanket',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/blanket.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'bed spred',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/bed-spred.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'curtain',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/curtain.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'carpet',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/carpet.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cloth_type' => 'unknown',
                    'cloth_code' => '',
                    'cloth_image' => 'images/cloths/unknown.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ];
                // [
                //     'cloth_type' => '',
                //     'cloth_code' => '',
                //     'cloth_image' => '',
                //     'created_at' => now(),
                //     'updated_at' => now(),
                // ],
            

            
            foreach ($cloths as $cloth) {
                Cloth::create($cloth);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
