<?php

namespace App\Http\Requests\Api\Tire;

use App\Rules\Tire\FilterRule;
use App\Rules\Tire\SortRule;
use Illuminate\Foundation\Http\FormRequest;

class IndexToVehicleIdRequest extends FormRequest
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
            'filters' => ['required', 'string', 'regex:/vehicle/i', new FilterRule],
            'sorts' => ['nullable', 'string', new SortRule],
        ];
    }

    public function passedValidation()
    {
        $strPosVehicle = stripos($this->filters, 'vehicle|') + 8;

        $vehicleIds = explode(',', substr($this->filters, $strPosVehicle, stripos($this->filters, ';') ? stripos($this->filters, ';') - $strPosVehicle : null));
        $this->merge(['vehicle_ids' => $vehicleIds]);
    }
}
