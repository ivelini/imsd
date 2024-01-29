<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as BaseResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Response
{
    /**
     * Fail response
     */
    public static function fail(string $message = 'Error'): JsonResponse
    {
        return response()->json(['message' => $message], BaseResponse::HTTP_UNPROCESSABLE_ENTITY, options: JSON_UNESCAPED_UNICODE);
    }

    /**
     * Unauthorised response
     */
    public static function unauthorised(string $message = 'Unauthorised'): JsonResponse
    {
        return response()->json(['message' => $message], BaseResponse::HTTP_UNAUTHORIZED, options: JSON_UNESCAPED_UNICODE);
    }

    /**
     * Fail response for many errors
     */
    public static function errors(array $errors = []): JsonResponse
    {

        return response()->json(['errors' => $errors],
            BaseResponse::HTTP_UNPROCESSABLE_ENTITY, options: JSON_UNESCAPED_UNICODE);
    }

    /**
     * Response created
     */
    public static function created(mixed $data = null): JsonResponse
    {
        return response()->json($data, BaseResponse::HTTP_CREATED, options: JSON_UNESCAPED_UNICODE);
    }

    /**
     * Response created
     */
    public static function successWithOutContent(): JsonResponse
    {
        return response()->json(status: BaseResponse::HTTP_NO_CONTENT, options: JSON_UNESCAPED_UNICODE);
    }

    /**
     * Response success
     */
    public static function success(mixed $data = ['message' => 'Success'], array $headers = []): JsonResponse
    {
        return response()->json($data, BaseResponse::HTTP_OK, $headers, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Download file response
     *
     * @param  $file path to file
     */
    public static function download(string $file, ?string $name = null, bool $delete = true): BinaryFileResponse
    {
        return response()->download($file, $name)->deleteFileAfterSend($delete);
    }

    /**
     * Download file stream response
     *
     * @param string $file path to file or stream
     */
    public static function downloadStream($file, ?string $name, array $headers = []): StreamedResponse
    {
        return response()->streamDownload(static function () use ($file) {
            echo $file;
        }, $name, $headers);
    }

    /**
     * Return stream
     */
    public static function stream(mixed $stream, array $headers = []): StreamedResponse
    {
        return response()->stream($stream, BaseResponse::HTTP_OK, $headers);
    }

    public static function notFound()
    {
        return response()->json(['message' => 'Not Found'], BaseResponse::HTTP_NOT_FOUND);
    }

}
