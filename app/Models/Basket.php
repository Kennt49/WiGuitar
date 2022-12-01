<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "basket";
    protected $primaryKey = 'id_basket';

    public function products()
    {
        return $this->belongsToMany(Products::class, 'holds', 'id_basket', 'id_products');
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'id_basket', 'id_users');
    }
}
