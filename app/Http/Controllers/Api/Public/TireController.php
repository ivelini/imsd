<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tire\IndexTiresRequest;
use App\Http\Resources\Tire\TireIndexResource;
use App\Models\Tire;
use Illuminate\Http\Request;

class TireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexTiresRequest $request)
    {
        return TireIndexResource::collection(Tire::query()
            ->with('country', 'season', 'vendor')
            ->joinPrice()
            ->filter($request->filters)
            ->sort($request->sorts)
//            ->dd()
            ->paginate(100)
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

}
