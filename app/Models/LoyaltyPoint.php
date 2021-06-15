<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoyaltyPoint extends Model
{
    use HasFactory;
    protected $table='loyalty_points';
    protected $fillable= ['user_id', 'points', 'date', 'order_id', 'order_amount'];

    public function user(){
    	return $this->hasOne('App\Models\User','id','user_id');
    }
    public function order(){
    	return $this->hasOne('App\Models\Order','id','order_id');
    }
}
