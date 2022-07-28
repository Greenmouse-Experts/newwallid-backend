<?php

namespace App\Http\Resources;

// use App\Facades\CustomEncryptionFacade;
use Illuminate\Http\Resources\Json\JsonResource;

class BaseCustomResource extends JsonResource
{
    public $id;

    public function __construct($resource)
    {
        if(isset($resource['id']) && !empty($resource['id']) && !is_null($resource['id'])) {
            $this->id = $resource['id'];
        }
        parent::__construct($resource);
    }
}
