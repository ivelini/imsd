<?php

namespace App\Http\Controllers\Api\Admin\Auth;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class RevokeController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return Response::successWithOutContent();
    }
}
