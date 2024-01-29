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
            ->filter($request->filters)
            ->paginate(100)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //a
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
