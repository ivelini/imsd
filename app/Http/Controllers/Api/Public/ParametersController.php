<?php

namespace App\Http\Controllers\Api\Public;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tire\IndexTiresRequest;
use App\Http\Resources\Library\CountryResource;
use App\Http\Resources\Library\SeasonResource;
use App\Http\Resources\Library\VendorResource;
use App\Http\Resources\Tire\TireIndexResource;
use App\Models\Country;
use App\Models\Season;
use App\Models\Tire;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ParametersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tire()
    {
        return Response::success([
            'data' => [
                'vendor' => VendorResource::collection(Vendor::all()),
                'country' => CountryResource::collection(Country::all()),
                'season' => SeasonResource::collection(Season::all()),
                'is_runflat' => [true, false],
                'is_spike' => [true, false],
                'width' => Tire::query()->select('width')->orderBy('width')->distinct()->pluck('width'),
                'height' => Tire::query()->select('height')->orderBy('height')->distinct()->pluck('height'),
                'diameter' => Tire::query()->select('diameter')->orderBy('diameter')->distinct()->pluck('diameter')
            ]
        ]);
    }
}
