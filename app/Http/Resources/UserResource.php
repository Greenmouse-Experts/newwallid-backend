<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\IndividualResource;
use App\Http\Resources\OrganizationResource;
use App\Http\Resources\UserRoleResource;

class UserResource extends \App\Http\Resources\BaseCustomResource
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
            'username' => $this->username,
            'email' => $this->email,
            'type' => $this->type,
            'status' => $this->status,
            'details' => $this->whenLoaded('typeData', ($this->type == 'individual') ? new IndividualResource($this->typeData) : new OrganizationResource($this->typeData)),
        ];
    }
}
