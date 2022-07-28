<?php

namespace App\Http\Resources;

use App\Models\Individual;
use Illuminate\Http\Resources\Json\JsonResource;

class MembershipRequestResource extends JsonResource
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
            'role' => $this->role,
            'organization' => $this->whenLoaded('organization', new OrganizationResource($this->organization)),
            'individual' => $this->whenLoaded('individual', new IndividualResource($this->individual)),
            'status' => $this->status,
            'created_at' => $this->created_at,
        ];
    }
}
