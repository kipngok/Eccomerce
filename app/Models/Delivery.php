<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table='deliveries';
    protected $fillable=['order_id', 'rider_id', 'scheduled_date', 'scheduled_time', 'scheduled_by', 'status', 'dispatched_by' ,'dispatched_at', 'delivery_time', 'delivery_date', 'notes'];

public function order(){
	return $this->hasOne('App\Models\Order','id','order_id');
}

public function rider(){
	return $this->hasOne('App\Models\Rider','id','rider_id');
}
    
}

