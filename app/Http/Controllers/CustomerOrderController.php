<?php

namespace App\Http\Controllers;

use App\Models\CustomerOrder;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return 'index';

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validationrules = [
            "action" => "required|string",
            "customer_id" => "nullable|numeric|min:1",
            "total_quantity" => "required|numeric|min:1",
            "discount" => "required|numeric|min:0",
            "vat" => "required|numeric|min:0",
            "total_amount" => "required|numeric|min:1",
            "amount_paid" => "required|numeric|min:0",
            "amount_pending" => "required|numeric|min:0",
            "comments" => "nullable|string",
            "employee_id" => "nullable|exists:employees,id",
            "delivery_date" => "required|date_format:Y-m-d H:i:s",
            "cart_items" => "required|array",
            "cart_items.*cloth_id" => "required|integer",
            "cart_items.*service_id" => "required|integer",
            "cart_items.*rate" => "required|numeric",
            "cart_items.*quantity" => "required|integer",
            "cart_items.*total_amount" => "required|numeric"

        ];

        $validator = Validator::make($request->all(), $validationrules);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'success' => false,
                'message' => 'Validation Errors'
            ], 400);
        }
        $message = '';

        if ($request->action == 'create') {
            $customer_order = CustomerOrder::create([
                "status" => 'RECEIVED',
                'customer_id' => $request->customer_id,
                'total_quantity' => $request->total_quantity,
                'discount' => $request->discount,
                'vat' => $request->vat,
                'total_amount' => $request->total_amount,
                "amount_paid" => $request->amount_paid,
                "amount_pending" => $request->amount_pending,
                "comments" => $request->comments,
                "employee_id" => $request->employee_id,
                "delivery_date" => $request->delivery_date,
                "created_at" => now(),
                "updated_at" => now(),
            ]);
            foreach($request->cart_items as $item) {
                // Log::debug($item["cloth_id"]);
                Cart::create([
                    "cloth_id" => $item["cloth_id"],
                    "service_id" => $item["service_id"],
                    "rate" => $item["rate"],
                    "quantity" => $item["quantity"],
                    "total" => $item["total_amount"],
                    "customer_order_id" => $customer_order->id
                ]);
            }
            
            $message = 'created';
        }
        else {
            //UPDATE

        }
        
        
        return response()->json([
            'success' => true,
            'message' => 'Order '. $message
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerOrder $customerOrder)
    {
        //
    }
}
