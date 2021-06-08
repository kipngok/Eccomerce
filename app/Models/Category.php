<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['name', 'slug', 'order'];

     public function products(){
    	return $this->hasMany('App\Models\Product','category_id','id');
    }
     public function subcategories(){
    	return $this->hasOne('App\Models\SubCategory','category_id','id');
    }
}
