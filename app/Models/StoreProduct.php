<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreProduct extends Model
{
    use HasFactory;
    protected $table='store_products';
    protected $fillable=['store_id', 'product_id', 'quantity
'];

public function store(){
	return $this->hasOne('App\Models\Store','id','store_id');
}

public function product(){
	return $this->hasOne('App\Models\Product','id','product_id');
}
}
