<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;
    protected $table='riders';
    protected $fillable=['user_id', 'reg_no', 'type', 'status', 'place_id', 'longitude', 'latitude'];

    public function user(){
    	return $this->hasOne('App\Models\User','id','user_id');
    }

    public function deliveries(){
    	return $this->hasMany('App\Models\Delivery','rider_id','id');
    }
     public function orders(){
    	return $this->hasMany('App\Models\order','rider_id','id');
    }
}
