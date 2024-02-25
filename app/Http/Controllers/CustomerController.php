<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function searchCustomer(Request $request)
    {
        $validationrules = [
            'search_text' => 'required|string'
        ];
        $validator = Validator::make($request->all(), $validationrules);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'success' => false,
                'message' => 'Validation Errors'
            ], 400);
        }

        $customers = Customer::where('name', 'LIKE', '%' . $request->search_text . '%')
        ->orWhereRaw("JSON_SEARCH(phone, 'all', ?) IS NOT NULL", ["%$request->search_text%"])

        ->get();

        // $customers->address = json_decode($customers->address);
        return response()->json([
            'success' => true,
            'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
