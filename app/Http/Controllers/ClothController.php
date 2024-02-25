<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Cloth;
use Illuminate\Http\Request;
use App\Models\PriceList;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\CustomerOrder;

class ClothController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $cloths = Cloth::with(['services'])->get();
        
        return response()->json([
            'cloths' => $cloths
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

    }

    /**
     * Display the specified resource.
     */
    public function show(Cloth $cloth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cloth $cloth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cloth $cloth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cloth $cloth)
    {
        //
    }
}
