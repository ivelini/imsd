<?php

namespace App\Rules\Tire;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class FilterRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $res = preg_match('~^[a-zA-Z_]+[|]\w+(?:,\w+)*(?:;[a-zA-Z_]+[|]\w+(?:,\w+)*)*$~', $value);

        if (!$res) {
            $fail(__('validation.regex', ['attribute' => 'filters']));
        }
    }
}
