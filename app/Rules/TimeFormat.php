<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeFormat implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^(?:[01]\d|2[0-3]):(?:[0-5]\d)\s-\s(?:[01]\d|2[0-3]):(?:[0-5]\d)$/', $value))
        {
            $fail('El horario debe cumplir con el formato HH:MM - HH:MM');
        }
    }
}
