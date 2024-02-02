<?php

namespace App\Http\Resources\Vehicle;

use App\Models\Tcs\TcsTireSpecification;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin TcsTireSpecification
 */
class TireSpecificationResource extends JsonResource
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
            'type' => $this->type->name,
            'front_width' => $this->front_width,
            'front_height' => $this->front_height,
            'front_diameter' => $this->front_diameter,
            'back_width' => $this->back_width,
            'back_height' => $this->back_height,
            'back_diameter' => $this->back_diameter,
        ];
    }
}
