<?php

namespace App\Http\Resources\Tire;

use App\Http\Resources\Library\CountryResource;
use App\Http\Resources\Library\SeasonResource;
use App\Http\Resources\Library\VendorResource;
use App\Http\Resources\Stock\StockResource;
use App\Models\Season;
use App\Models\Tire;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Tire
 */
class TireResource extends JsonResource
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
            'stocks' => StockResource::collection($this->whenLoaded('stocks')),
            'name'  => 'Шина ' . $this->name . ' ' . $this->width . '/' . $this->height . ' R' . $this->diameter,
            'width'  => $this->width,
            'height'  => $this->height,
            'diameter'  => $this->diameter,
            'is_runflat'  => $this->is_runflat,
            'is_spike'  => $this->is_spike,
            'parameters'  => $this->when(isset($this->parameters), $this->parameters),
            'count' => $this->total_count_all_stocks,
            'price' => $this->minimum_price_from_stocks,
            'description' => $this->when(isset($this->description), $this->description),
        ];
    }
}
