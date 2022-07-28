<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;
use App\Models\User;

class NotificationResource extends \App\Http\Resources\BaseCustomResource
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
            'event_name'=>$this->data['event_name'] ?? '',
            'sender' => $this->data['user'] ?? '',
            'date_sent' => $this->data['date_sent'] ?? '',
            'status' => $this->data['status'] ?? '',
        ];

        
    }
}