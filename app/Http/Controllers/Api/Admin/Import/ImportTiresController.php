<?php

namespace App\Http\Controllers\Api\Admin\Import;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Import\FileRequest;
use App\Jobs\Import\ImportTiresJob;
use Illuminate\Support\Facades\Storage;


class ImportTiresController extends Controller
{
    public function __invoke(FileRequest $request)
    {
        $path = $request->validated()['file']->store('/temp', 'local');

        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(Storage::disk('local')->path($path));
        $fullRaws = $spreadsheet->getActiveSheet()->getHighestRow();

        ImportTiresJob::dispatch(Storage::disk('local')->path($path), $fullRaws);

        return Response::success();
    }
}
