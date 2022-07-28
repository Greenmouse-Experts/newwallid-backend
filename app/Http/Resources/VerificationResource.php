<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VerificationResource extends JsonResource
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
            'id'=>$this->id,
            'name' => $this->name,
            'role' => $this->role,
            'status' => $this->status,
            'user' => $this->whenLoaded('user', new SimpleUserResource($this->user)),
            'created_by_individual' => $this->whenLoaded('individual', new IndividualResource($this->individual)),
            'organization' => $this->whenLoaded('organization', new OrganizationResource($this->organization)),
            'created_at' => $this->created_at,
        ];
    }
}
