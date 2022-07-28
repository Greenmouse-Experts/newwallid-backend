<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class IndividualResource extends \App\Http\Resources\BaseCustomResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'dob' => $this->dob,
            'id_card_number' => $this->id_card_number,
            'image' => $this->image,
            'bio' => $this->bio,
            'created_at' => $this->created_at,
            'user' => $this->whenLoaded('user', new SimpleUserResource($this->user))
        ];
    }
}
