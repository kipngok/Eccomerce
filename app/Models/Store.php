<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table='stores';
    protected $fillable=['id', 'name', 'description', 'contact_person', 'contact-person_phone', 'contact_person_email', 'place_id', 'longitude', 'latitude'];

    public function place(){
    	return $this->hasOne('App\Models\Place','id','place_id');
    }
     public function order(){
    	return $this->hasMany('App\Models\Order','store_id','id');
    }
     public function storeproducts(){
    	return $this->hasMany('App\Models\StoreProduct','store_id','id');
    }
}
