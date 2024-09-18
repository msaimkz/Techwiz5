<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Alpha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     *  *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  Closure  $fail
     */
     
    public function validateAlphabetical(string $attribute, mixed $value, Closure $fail): void
    {
        if (!is_string($value) || !preg_match('/^[a-zA-Z]+$/', $value)) {
            $fail("The $attribute must be alphabetic and cannot contain numbers.");
        }
    }
}
