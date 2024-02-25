<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\Cloth;
use App\Models\Service;
use App\Models\PriceList;
use App\Models\CustomerOrder;
use Faker\Factory as Faker;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        $customer_orders = CustomerOrder::all();

        foreach($customer_orders as $order) {
            
            $iterations = $faker->numberBetween(1,20);
            for($i = 0; $i < $iterations; $i++) {
                $cloth_id = Cloth::inRandomOrder()->first()->id;
                $service_id = Service::inRandomOrder()->first()->id;

                $rate = PriceList::where('cloth_id', $cloth_id)->where('service_id', $service_id)->first()->price;
                $quantity = $faker->numberBetween(1, 20);
                $total = $rate * $quantity;

                Cart::create([
                    'customer_order_id' => $order->id,
                    'cloth_id' => $cloth_id,
                    'service_id' => $service_id,
                    'rate' => $rate, 
                    'quantity' => $quantity,
                    'total' => $total,
                    'created_at' => $order->created_at,
                    'updated_at' => $order->created_at,
                ]);
            }
            $order_cart = Cart::where('customer_order_id', $order->id);
            $discount = $faker->numberBetween(0,5);
            $total_quantity = $order_cart->sum('quantity');
            $total_amount = $order_cart->sum('total');
            $amount_paid = $total_amount - $faker->randomFloat(1, 0, $total_amount / 1.05);

            CustomerOrder::where('id', $order->id)
            ->update([
                'total_quantity'=> $total_quantity,
                'discount'=> $discount,
                'vat'=> 0,
                'total_amount'=> $total_amount - $discount,
                'amount_paid'=> $amount_paid,
                'amount_pending'=> $total_amount - $amount_paid,
            ]);
        }
    }
}
