<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IdCardTemplateResource extends JsonResource
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
            'organization_id' => $this->organization_id,
            'background_color' => $this->background_color,
            'text_color' => $this->text_color,
            'role' => $this->role,
            'logo' => $this->logo,
            'path' => $this->path,
            'created_by_organization' => $this->whenLoaded('organization', new OrganizationResource($this->organization_id)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
