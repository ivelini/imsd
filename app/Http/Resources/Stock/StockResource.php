<?php

namespace App\Http\Resources\Stock;

use App\Models\Stock;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Stock
 */
class StockResource extends JsonResource
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
            'name' => $this->name,
            $this->mergeWhen($this->inside, [
                'count' => $this->inside->count,
                'price' => $this->inside->price,
            ]),

        ];
    }
}
