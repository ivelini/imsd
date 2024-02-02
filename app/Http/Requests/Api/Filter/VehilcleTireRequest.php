<?php

namespace App\Http\Requests\Api\Filter;

use App\Models\Tcs\TcsCarModel;
use App\Rules\Tire\FilterRule;
use App\Rules\Tire\SortRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class VehilcleTireRequest extends FormRequest
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
            'vendor' => ['required_with:model,year', 'string', 'exists:tcs_car_models,vendor'],
            'model' => ['required_with:year', 'string', function($key, $value, $fail) {
                if (
                    ! TcsCarModel::where('vendor', $this->vendor)
                        ->where('model', $this->model)
                        ->exists()
                ) {
                    $fail(__('validation.in'));
                }
            }],
            'year' => ['required_with:modification', 'string', function($key, $value, $fail) {
                if (
                    ! TcsCarModel::where('vendor', $this->vendor)
                        ->where('model', $this->model)
                        ->where('year', $this->year)
                        ->exists()
                ) {
                    $fail(__('validation.in'));
                }
            }],
            'modification' => ['string', function($key, $value, $fail) {
                if (
                    ! TcsCarModel::where('vendor', $this->vendor)
                        ->where('model', $this->model)
                        ->where('year', $this->year)
                        ->where('modification', $this->modification)
                        ->exists()
                ) {
                    $fail(__('validation.in'));
                }
            }]
        ];
    }

    public function passedValidation()
    {
        $this->merge([
            'cache_key' => 'tcs_' . Str::slug(implode(' ', $this->validated())),
        ]);
    }
}
