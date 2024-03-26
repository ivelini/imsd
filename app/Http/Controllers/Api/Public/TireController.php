<?php

namespace App\Http\Controllers\Api\Public;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tire\IndexTiresRequest;
use App\Http\Requests\Api\Tire\IndexToVehicleIdRequest;
use App\Http\Resources\Tire\TireIndexResource;
use App\Http\Resources\Tire\TireResource;
use App\Models\Tcs\TcsTireSpecification;
use App\Models\Tire;
use App\Services\Grouper\GrouperService;
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
            ->paginate(50)
            ->withQueryString()
        );
    }

    /**
     * Подбор шин с фильтрацией по параметрам спецификации
     *
     */
    public function indexToVehicleParameters(IndexToVehicleIdRequest $request)
    {
        $inputSpecifications = TcsTireSpecification::whereIn('id', $request->vehicle_ids)->get();
        $sortedSpecifications = collect($request->vehicle_ids)->map(fn($specificationId) => $inputSpecifications->where('id', $specificationId)->first());
        $grouppedSpecifications = $sortedSpecifications->groupBy(fn($item) => $item->type->name);

        $grouppedTires = $grouppedSpecifications
            ->map(
                fn ($groupSpecifications) => $groupSpecifications
                    ->map(
                        /** @var TcsTireSpecification $specification */
                        fn ($specification) => [
                            'specification_id' => $specification->id,
                            'specification' => $specification->name,
                            'is_grouping' => isset($specification->back_width),
                            'tires' => (new GrouperService($specification, $request->filters, $request->sort))->run()
                        ]
                    )
            );


        return Response::success(['data' => $grouppedTires]);
    }

    public function show(Tire $tire)
    {
        return TireResource::make($tire->load('vendor', 'country', 'season', 'stocks'));
    }
}
