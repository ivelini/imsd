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
        $name = $this->front_width . '/' . $this->front_height . ' /R' . $this->front_diameter;

        if(!empty($this->back_width)) {
            $name .= ' - ' . $this->back_width . '/' . $this->back_height . ' /R' . $this->back_diameter;
        }

        return [
            'id' => $this->id,
            'name' => $name,
            'type' => $this->type->name,
            'front' => [
                'width' => $this->front_width,
                'height' => $this->front_height,
                'diameter' => $this->front_diameter,
            ],
            'back' => ! empty($this->back_width) ? [
                'width' => $this->back_width,
                'height' => $this->back_height,
                'diameter' => $this->back_diameter,
            ] : null,
        ];
    }
}
