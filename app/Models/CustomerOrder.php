<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cloth;
use App\Models\Cart;

class CustomerOrder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customer()
    {
        return $this->hasOne(Cloth::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

}
