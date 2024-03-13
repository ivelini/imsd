<?php

namespace App\Http\Controllers\Api\Public\Filters;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\Library\CountryResource;
use App\Http\Resources\Library\SeasonResource;
use App\Http\Resources\Library\VendorResource;
use App\Models\Country;
use App\Models\Season;
use App\Models\Tire;
use App\Models\Vendor;


/**
 * Вывод информации для фильтра
 */
class TireFilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        return Response::success([
            'data' => [
                'vendor' => VendorResource::collection(Vendor::all()),
                'country' => CountryResource::collection(Country::all()),
                'season' => SeasonResource::collection(Season::all()),
                'is_runflat' => [['id' =>true, 'name' => 'Да'], ['id' =>false, 'name' => 'Нет']],
                'is_spike' => [['id' =>true, 'name' => 'С шипами'], ['id' =>false, 'name' => 'Без шипов']],
                'width' => Tire::query()->select('width')->orderBy('width')->distinct()->pluck('width')->transform(fn($value) => ['id' => $value, 'name' => $value]),
                'height' => Tire::query()->select('height')->orderBy('height')->distinct()->pluck('height')->transform(fn($value) => ['id' => $value, 'name' => $value]),
                'diameter' => Tire::query()->select('diameter')->orderBy('diameter')->distinct()->pluck('diameter')->transform(fn($value) => ['id' => $value, 'name' => $value])
            ]
        ]);
    }
}
