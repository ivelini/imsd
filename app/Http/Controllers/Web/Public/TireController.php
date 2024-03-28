<?php

namespace App\Http\Controllers\Web\Public;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tire\IndexTiresRequest;
use App\Http\Requests\Api\Tire\IndexToVehicleIdRequest;
use App\Http\Resources\Tire\TireIndexResource;
use App\Http\Resources\Tire\TireResource;
use App\Models\Tcs\TcsTireSpecification;
use App\Models\Tire;
use App\Models\Vendor;
use App\Services\Grouper\GrouperService;
use Illuminate\Http\Request;

class TireController extends Controller
{
    public function show(Vendor $vendor, Tire $tire) {
        return view('pages.public.itemCard');
    }
}
