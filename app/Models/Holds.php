<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holds extends Model
{
    use HasFactory;

    public function basket()
    {
        return $this->hasMany(Basket::class, 'id_basket', 'id_products');
    }
}
