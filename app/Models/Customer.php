<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerOrder;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customer_order()
    {
        return $this->belongsTo(CustomerOrder::class);
    }
    public function getPhoneAttribute($value)
    {
        $phoneArray = json_decode($value, true);
        
        if (is_array($phoneArray)) {
            return $phoneArray;
        }
        
        return [];
    }
    public function getAddressAttribute($value)
    {
        $addressArray = json_decode($value, true);
        
        if (is_array($addressArray)) {
            return $addressArray;
        }
        
        return [];
    }
}
