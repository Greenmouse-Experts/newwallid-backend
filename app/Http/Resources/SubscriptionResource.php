<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class SubscriptionResource extends \App\Http\Resources\BaseCustomResource
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
            'status' => $this->status,
            'expiry_date' => $this->expiry_date,
            'created_at' => $this->created_at,
            'individual' => $this->whenLoaded('individual', new IndividualResource($this->individual)),
            'organization' => $this->whenLoaded('organization', new OrganizationResource($this->organization)),
            'subscription_plan' => $this->whenLoaded('subscription_plan', new SubscriptionPlanResource($this->subscription_plan)),
            'payment' => $this->whenLoaded('subscription_plan', new PaymentResource($this->payment)),
        ];
    }
}
