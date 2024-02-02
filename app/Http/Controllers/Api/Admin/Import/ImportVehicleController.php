<?php

namespace App\Http\Controllers\Api\Admin\Import;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Import\FileCsvRequest;
use App\Jobs\Import\Vihicle\ImportVehicleJob;
use Illuminate\Support\Facades\Storage;


class ImportVehicleController extends Controller
{
    public function __invoke(FileCsvRequest $request)
    {
        $path = $request->validated()['file']->store('/temp', 'local');



        //Всего строк в загружаеммо файле
        $fullRaws = 0;
        $file = fopen(Storage::disk('local')->path($path), 'r');
        while(!feof($file)) {
            fgets($file);
            $fullRaws++;
        }
        fclose($file);

        ImportVehicleJob::dispatch(Storage::disk('local')->path($path), $fullRaws);

        return Response::success();
    }
}
