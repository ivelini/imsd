<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tire\IndexTiresRequest;
use App\Http\Resources\Tire\TireIndexResource;
use App\Http\Resources\Tire\TireResource;
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

    public function show(Tire $tire)
    {
        return TireResource::make($tire->load('vendor', 'country', 'season', 'stocks'));
    }
}
