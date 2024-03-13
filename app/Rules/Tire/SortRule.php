<?php

namespace App\Rules\Tire;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class SortRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $res = preg_match('~^[a-zA-Z_]+[|](?:asc|desc)(?:;[a-zA-Z_]+[|](?:asc|desc))*$~', $value);

        if (!$res) {
            $fail(__('validation.regex', ['attribute' => 'sorts']));
        }
    }
}
