<?php

namespace App\Http\Resources\Tire;

use App\Http\Resources\Library\CountryResource;
use App\Http\Resources\Library\SeasonResource;
use App\Http\Resources\Library\VendorResource;
use App\Models\Season;
use App\Models\Tire;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Tire
 */
class TireIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'  => $this->id,
            'product_article'  => $this->product_article,
            'vendor_id'  => $this->vendor_id,
            'vendor'  => VendorResource::make($this->whenLoaded('vendor')),
            'country_id'  => $this->country_id,
            'country'  => CountryResource::make($this->whenLoaded('country')),
            'season_id'  => $this->season_id,
            'season'  => SeasonResource::make($this->whenLoaded('season')),
            'name'  => $this->name,
            'width'  => $this->width,
            'height'  => $this->height,
            'diameter'  => $this->diameter,
            'is_runflat'  => $this->is_runflat,
            'is_spike'  => $this->is_spike,
            'parameters'  => $this->parameters,
            'price' => $this->minimum_price_from_stocks
        ];
    }
}
