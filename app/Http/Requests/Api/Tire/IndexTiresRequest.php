<?php

namespace App\Http\Requests\Api\Tire;

use App\Rules\Tire\FilterRule;
use App\Rules\Tire\SortRule;
use Illuminate\Foundation\Http\FormRequest;

class IndexTiresRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'filters' => ['nullable', 'string', new FilterRule],
            'sorts' => ['nullable', 'string', new SortRule],
        ];
    }
}
