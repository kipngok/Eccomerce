<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryResource;

class SubCategoryResource extends JsonResource
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
        'category_id'=>$this->category_id,
        'category'=>new CategoryResource($this->category),
        'slug'=>$this->slug,
        ];
     
    }
}
