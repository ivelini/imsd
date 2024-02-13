<?php

namespace App\Http\Controllers\Api\Public\Filters\Vehicle;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Filter\VehilcleTireInfoRequest;
use App\Models\Tcs\TcsCarModel;
use Illuminate\Support\Facades\Cache;

/**
 * Вывод информации для фильтра шин по авто
 */
class VehicleTireInfoFilterController extends Controller
{
    public function __invoke(VehilcleTireInfoRequest $request)
    {
        $parameters = $request->validated();
        $cache_key = $request->cache_key;
        
        $data = Cache::remember($cache_key, now()->addDay(), function () use ($parameters) {
            return [
                'vendor' => TcsCarModel::select('vendor')->distinct('vendor')->get()->transform(fn($item) => [
                    'name' => $item->vendor,
                    'selected' => isset($parameters['vendor']) && $item->vendor == $parameters['vendor'],
                ]),

                'model' => isset($parameters['vendor']) ?
                    TcsCarModel::select('vendor', 'model')->where('vendor', $parameters['vendor'])->distinct('model')
                        ->get()
                        ->transform(fn($item) => [
                            'name' => $item->model,
                            'selected' => isset($parameters['model']) && $item->model == $parameters['model']
                        ]) :
                    null,

                'year' => isset($parameters['model']) ?
                    TcsCarModel::select('vendor', 'model', 'year')
                        ->where('vendor', $parameters['vendor'])
                        ->where('model', $parameters['model'])
                        ->distinct('year')
                        ->get()
                        ->transform(fn($item) => [
                            'name' => $item->year,
                            'selected' => isset($parameters['year']) && $item->year == $parameters['year']
                        ]) :
                    null,

                'modification' => isset($parameters['year']) ?
                    TcsCarModel::select('vendor', 'model', 'year', 'modification')
                        ->where('vendor', $parameters['vendor'])
                        ->where('model', $parameters['model'])
                        ->where('year', $parameters['year'])
                        ->distinct('modification')
                        ->get()
                        ->transform(fn($item) => [
                            'name' => $item->modification,
                            'selected' => isset($parameters['modification']) && $item->modification == $parameters['modification']
                        ]) :
                    null,
            ];
        });

        return Response::success([
            'data' => $data,
        ]);
    }
}
