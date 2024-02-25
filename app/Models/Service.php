<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PriceList;
use App\Models\Cloth;

class Service extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function cloths()
    {
        return $this->belongsToMany(Cloth::class, 'price_lists', 'service_id', 'cloth_id')
                    ->withPivot('price');
    }
}
