<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SubCategory;
use App\Http\Resources\CategoryResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'id'=>$this->id,
        'name'=>$this->name,
        'slug'=>$this->slug,
        'meta'=>$this->meta,
        'price'=>$this->price,
        'sale_price'=>$this->sale_price,
        'description'=>$this->description,
        'featured'=>$this->featured,
        'sub_category_id'=>$this->sub_category_id,
        'subCategory'=>new SubCategoryResource($this->subCategory),
        'category_id'=>$this->category_id,
        'category'=>new CategoryResource($this->category),
        'status'=>$this->status
        ];
    }
}
