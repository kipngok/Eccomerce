<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['name', 'slug', 'meta', 'price', 'sale_price', 'description', 'featured', 'sub_category_id', 'category_id', 'status'];

    public function category(){
    	return $this->hasOne('App\Models\Category','id','category_id');
    }

    public function sub_category_id(){
    	return $this->hasOne('App\Models\SubCategory','id','sub_category_id');
    }

     public function orderitems(){
    	return $this->hasMany('App\Models\OrderItem','product_id','id');
    }

    public function reviews(){
    	return $this->hasMany('App\Models\Review','product_id','id');
    }
    
     public function storeproducts(){
    	return $this->hasMany('App\Models\StoreProduct','product_id','id');
    }
}
