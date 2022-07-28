<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IdManagementResource extends JsonResource
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
            'id_card_number'=> $this->id_card_number,
            'name' => $this->name,
            'passport'=> $this->passport,
            'path' => $this->path,
            'issued_date' => $this->issued_date,
            'role' => $this->role,
            'status' => $this->status,
            'user' => $this->whenLoaded('user', new SimpleUserResource($this->user)),
            'template' => $this->whenLoaded('template', new IdCardTemplateResource($this->template)),
            'created_by_individual' => $this->whenLoaded('individual', new IndividualResource($this->individual)),
            'created_by_organization' => $this->whenLoaded('organization', new OrganizationResource($this->organization)),
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
        ];
    }
}
