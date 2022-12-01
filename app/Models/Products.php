<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "products";
    protected $primaryKey = 'id_products';

    public function stock()
    {
        return $this->belongsTo(Stocks::class, 'id_products', 'id_stocks');
    }

    public function feature()
    {
        return $this->belongsTo(Features::class, 'id_products', 'id_features');
    }

    public function basket()
    {
        return $this->belongsToMany(Holds::class, 'holds', 'id_products', 'id_basket');
    }
}
