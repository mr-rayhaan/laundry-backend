<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cloth;
use App\Models\CustomerOrder;
use App\Models\Service;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cloths()
    {
        return $this->hasMany(Cloth::class);
    }
    public function customer_order()
    {
        return $this->belongsTo(CustomerOrder::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }

}
