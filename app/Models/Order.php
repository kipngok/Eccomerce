<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=['user_id', 'name', 'email', 'phone', 'place_id', 'latitude', 'longitude', 'location_description', 'discount', 'discount_code', 'subtotal', 'tax', 'total', 'payment_gateway', 'status', 'is_paid', 'rider_id','affiliate_code', 'store_id'];

    public function user(){
    	return $this->hasOne('App\Models\User','id','user_id');
    }

    public function place(){
    	return $this->hasOne('App\Models\Place','id','place_id');
    }
    public function store(){
    	return $this->hasOne('App\Models\Store','id','store_id');
    }
     public function rider(){
        return $this->hasOne('App\Models\Rider','id','rider_id');
    }
     public function deliveries(){
        return $this->hasMany('App\Models\Delivery','order_id','id');
    }
     public function loyaltypoints(){
        return $this->hasMany('App\Models\LoyaltyPoint','order_id','id');
    }    
     public function orderitems(){
        return $this->hasMany('App\Models\OrderItem','order_id','id');
    }
}
