<?php

namespace App\Http\Controllers\Api\Public\Filters\Vehicle;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Filter\VehilcleTireInfoRequest;
use App\Http\Requests\Api\Filter\VehilcleTireSpecificationsRequest;
use App\Http\Resources\Vehicle\TireSpecificationResource;
use App\Models\Tcs\TcsCarModel;
use Illuminate\Support\Facades\Cache;

/**
 * Вывод информации для фильтра шин по авто
 */
class VehicleTireSpecificationsFilterController extends Controller
{
    public function __invoke(VehilcleTireSpecificationsRequest $request)
    {
        $parameters = collect($request->validated())
            ->transform(fn($item, $key) => [$key, '=', $item])
            ->values()
            ->toArray();

        $cache_key = $request->cache_key;

//        dd(
//            TcsCarModel::where($parameters)->first()
//                ?->tireSpecifications
//                ?->groupBy(fn($item) => $item->type->name)
//                ->transform(fn($items) => TireSpecificationResource::collection($items))
//        );


        return Response::success([
            'data' => TcsCarModel::where($parameters)->first()
                ?->tireSpecifications
                ?->groupBy(fn($item) => $item->type->name)
                ->transform(fn($items) => TireSpecificationResource::collection($items)),
        ]);
    }
}
