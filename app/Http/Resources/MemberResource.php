<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\UserResource;
use App\Http\Resources\IndividualResource;
use App\Http\Resources\OrganizationResource;
use App\Models\Member;

class MemberResource extends \App\Http\Resources\BaseCustomResource
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
            'access_status' => $this->access_status,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'subscription' => $this->whenLoaded('subscription', new SubscriptionResource($this->subscription)),
            'membership_request_details' => $this->whenLoaded('membership_request', new MembershipRequestResource($this->membership_request)),
            'individual'=>$this->whenLoaded('individual', new IndividualResource($this->individual)),
            'organization'=>$this->whenLoaded('organization', new OrganizationResource($this->organization)),
        ];
    }
}
