<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\OrderResource;
use App\Http\Resources\UserResource;

class OrderItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
     return[
        'id'=>$this->id,
        'product_id'=>$this->product_id,
        'user'=>new UserResource($this->user),
        'order_id'=>$this->order_id,
        'orde'=>new OrderResource($this->orde),
        'quantity'=>$this->quantity, 
        'price'=>$this->price,
        'amount'=>$this->amount,
     ];
    }
}
