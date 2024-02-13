<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tire\IndexTiresRequest;
use App\Http\Requests\Api\Tire\IndexToVehicleIdRequest;
use App\Http\Resources\Tire\TireIndexResource;
use App\Http\Resources\Tire\TireResource;
use App\Models\Tcs\TcsTireSpecification;
use App\Models\Tcs\TcsTypeEnum;
use App\Models\Tire;
use Illuminate\Http\Request;

class TireController extends Controller
{
    public function index(IndexTiresRequest $request)
    {
        return TireIndexResource::collection(Tire::query()
            ->with('country', 'season', 'vendor')
            ->joinPrice()
            ->filter($request->filters)
            ->sort($request->sorts)
            ->paginate(100)
        );
    }

    /**
     * Подбор шин с фильтрацией по параметрам спецификации
     *
     */
    public function indexToVehicleParameters(IndexToVehicleIdRequest $request)
    {
        $tireSpecifications = TcsTireSpecification::whereIn('id', $request->vehicle_ids)->get()->groupBy(fn($item) => $item->type->name);

        $tires = $tireSpecifications
            ->map(
                fn ($specifications) => $specifications
                    ->map(
                        /** @var TcsTireSpecification $specification */
                        fn ($specification) => [
                            'specification' => $specification->name,
                            'tires' => TireIndexResource::collection(
                                Tire::query()
                                    ->with('country', 'season', 'vendor')
                                    ->joinPrice()
                                    ->filterTcsTireSpecification($specification)
                                    ->filter($request->filters)
                                    ->sort($request->sort)
                                    ->get()
                            )
                        ]
                    )
            );

        return $tires;
    }

    public function show(Tire $tire)
    {
        return TireResource::make($tire->load('vendor', 'country', 'season', 'stocks'));
    }
}
