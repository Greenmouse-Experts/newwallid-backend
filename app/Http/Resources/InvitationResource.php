<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SimpleEventResource;
use App\Http\Resources\UserResource;
use App\Models\User;

class InvitationResource extends \App\Http\Resources\BaseCustomResource
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
            'sent_on'=>$this->created_at,
            'user' => $this->whenLoaded('user', new UserResource($this->user)),
            'sender' => User::findorfail($this->sender_id)->username,
            'event' => $this->whenLoaded('event', new SimpleEventResource($this->event))
        ];
    }
}
