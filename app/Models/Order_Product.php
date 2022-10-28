<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
    use HasFactory;
    public $table="order_products";

    public  function product(){
        return $this->belongsToMany(Product::class,'products','product_ID','ID');
    }
}