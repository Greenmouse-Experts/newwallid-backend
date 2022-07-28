<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscribedUserResource extends \App\Http\Resources\BaseCustomResource
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
            'subscription' => new SubscriptionResource($this->subscription),
            'amount_paid' => $this->amount_paid,
            'user' => $this->whenLoaded('user', new SimpleUserResource($this->user)),

        ];
    }
}
