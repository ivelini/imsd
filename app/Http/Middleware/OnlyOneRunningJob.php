<?php

namespace App\Http\Middleware;

use App\Helpers\Response;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OnlyOneRunningJob
{
    /**
     * @param Request $request
     * @param Closure $next
     * @param $queueName
     * @return JsonResponse|mixed
     */
    public function handle(Request $request, Closure $next, $queueName): mixed
    {
        return DB::table('jobs')->where('queue', $queueName)->exists() ?
            Response::errors(['Зидание импорта уже добавлено в очередь. Подождите.']) :
            $next($request);
    }
}
