<?php

namespace App\Http\Controllers\Api\Admin\Auth;


use App\Helpers\Response;
use App\Http\Requests\Api\Admin\Auth\TokenRequest;
use App\Models\Admin;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

final class TokenController
{
    /**
     * @throws ValidationException
     */
    public function __invoke(TokenRequest $request): JsonResponse
    {
        $admin = Admin::whereIsActive(true)->whereEmail($request->email)->first();

        if (empty($admin) || !Hash::check($request->password, $admin->password)) {
            throw ValidationException::withMessages(['password' => [__('auth.failed')]]);
        }

        return Response::success([
            'access_token' => $admin->createToken('api.admin', ['api:admin'])->plainTextToken,
            'token_type' => 'Bearer',
        ]);
    }
}
