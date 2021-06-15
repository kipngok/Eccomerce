<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\ProductResource;

class ReveiwResource extends JsonResource
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
            'user_id'=>$this->user_id,
            'user'=>new UserResource($this->user), 
            'product_id'=>$this->product_id, 
            'product'=>new ProductResource($this->product),
            'rating'=>$this->rating, 
            'review'=>$this->review
        ];
    }
}

