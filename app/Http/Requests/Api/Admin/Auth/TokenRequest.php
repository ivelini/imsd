<?php

namespace App\Http\Requests\Api\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class TokenRequest
 * @package App\Http\Requests\Api\AdminPanel\Auth
 *
 * @property string $email
 * @property string $password
 */
final class TokenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ];
    }
}
