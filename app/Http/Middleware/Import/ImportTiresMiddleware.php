<?php

namespace App\Http\Middleware\Import;

use App\Helpers\Response;
use App\Models\Stock;
use Closure;
use Illuminate\Http\Request;


class ImportTiresMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): \Illuminate\Http\JsonResponse
    {
        return (Stock::all()->count() > 0) ?
            $next($request) :
            Response::errors(['В таблице <<stocks>> не найдены склады. Произведите импорт поставщиков и складов']);
    }
}
