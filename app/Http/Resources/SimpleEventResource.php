<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\EventPriceResource;

class SimpleEventResource extends \App\Http\Resources\BaseCustomResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'status' => $this->status,
            'tickets' => $this->tickets,
            'price' => $this->price,
            'isFree' => $this->isFree,
            'pricing' => $this->pricing,
            'unique_id' => $this->unique_id,
            'description' => $this->description,
            'image' => $this->image,
            'venue' => $this->venue,
            'venue_image' => $this->venue_image,
            'category_id' => $this->category_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // 'tickets_purchased' => $this->tickets_purchased,
            'user' => $this->whenLoaded('user', new UserResource($this->user)),
            'ticketCategories' => $this->whenLoaded('ticketCategories', EventPriceResource::collection($this->ticketCategories)),
            'category' => $this->whenLoaded('category', new CategoryResource($this->category)),

        ];
    }
}
