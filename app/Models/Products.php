<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table="products";
    protected $primaryKey = 'id_products';
    public function stock()
    {
        Return $this->hasOne(Stocks::class);
    }
    public function feature()
    {
        Return $this->hasOne(Features::class);
    }
}
