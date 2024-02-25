<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\PriceList;

class Cloth extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function price_list()
    {
        return $this->belongsTo(PriceList::class);
    }
    public function services()
    {
        return $this->belongsToMany(Service::class, 'price_lists', 'cloth_id', 'service_id')
                    ->as('price_list')->withPivot('price');
    }
    public function getClothImageAttribute($value)
    {
        return env('APP_URL') . '/' . $value;
    }
}
