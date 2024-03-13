<?php

namespace App\Http\Requests\Api\Filter;

use App\Models\Tcs\TcsCarModel;
use App\Rules\Tire\FilterRule;
use App\Rules\Tire\SortRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class VehilcleTireSpecificationsRequest extends FormRequest
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
            'vendor' => ['required', 'string'],
            'model' => ['required', 'string'],
            'year' => ['required', 'string'],
            'modification' => ['required', 'string']
        ];
    }

    public function passedValidation()
    {
        $this->merge([
            'cache_key' => 'tcs_tire_cpec_' . Str::slug(implode(' ', $this->validated())),
        ]);
    }
}
