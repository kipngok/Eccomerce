<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table='order_items';
    protected $fillable=['product_id', 'order_id', 'quantity', 'price', 'amount'];

    public function product(){
    	return $this->hasOne('App\Models\product','id','product_id');
    }

    public function order(){
    	return $this->hasOne('App\Models\Order','id','order_id');
    }
}
