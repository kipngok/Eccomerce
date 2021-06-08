<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdress extends Model
{
    use HasFactory;
    protected $table='user_addresses';
    protected $fillable=['user_id', 'place_id', 'latitude', 'longitude', 'location_description'];

    public function user(){
    	return $this->hasOne('App\Models\User','id','user_id');
    }

    public function place(){
    	return $this->hasOne('App\Models\Place','id','place_id');
}
