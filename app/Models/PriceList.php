<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cloth;
use App\Models\Service;

class PriceList extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function cloths()
    // {
    //     return $this->hasOne(Cloth::class);
    // }
    // public function services()
    // {
    //     return $this->hasMany(Service::class);
    // }
}
