<?php

namespace App\Http\Resources;

use App\Models\TicketCategory;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends \App\Http\Resources\BaseCustomResource
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
            'check_in' => $this->check_in,
            'user' => $this->whenLoaded('user', new UserResource($this->user)),
            'ticketCategory' => $this->whenLoaded('ticketCategory', new EventPriceResource($this->ticketCategory)),
            'event' =>  $this->whenLoaded('event', new EventDetailsResource($this->event)),
            'payment' =>  $this->whenLoaded('payment', new PaymentResource($this->payment)),
        ];
    }
}
