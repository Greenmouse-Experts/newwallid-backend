<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IdCardResource extends JsonResource
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
            'name' => $this->whenLoaded('user', new SimpleUserResource($this->user))->username,
            // 'mobile_number' => $this->whenLoaded('user', new SimpleUserResource($this->user))->username,
            'firstname'=> $this->firstname,
            'lastname'=> $this->lastname,
            'middle_name'=> $this->middle_name,
            // 'passport'=> $this->passport,
            'id_card_number'=> $this->id_card_number,
            'role' => $this->role,
            'image'=> $this->passport,
            'issued_date' => $this->issued_date,
            'expiry_date' => $this->expiry_date,
            'template_name' => $this->template_name,
            'layout' => $this->layout,
            'category'=>$this->category,
            // 'logo_path'=>$this->logo_url,
            'user' => $this->whenLoaded('user', new SimpleUserResource($this->user)),
            // 'Created by Individual' => $this->individual,
            'created_by_individual' => $this->whenLoaded('individual', new IndividualResource($this->individual)),
            'created_by_organization' => $this->whenLoaded('organization', new OrganizationResource($this->organization)),
            // 'passport_path' =>$this->image,
            'created_at' => $this->created_at,
        ];
    }
}
