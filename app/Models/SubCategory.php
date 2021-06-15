<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table='sub_categories';
    protected $fillable=['name', 'category_id', 'slug'];

public function category(){
	return $this->hasOne('App\Models\category','id','category_id');
}
 public function products(){
    	return $this->hasMany('App\Models\Product','sub_category_id','id');
    }
}
