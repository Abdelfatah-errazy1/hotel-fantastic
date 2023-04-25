<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinDateToday implements Rule
{
    public function passes($attribute, $value)
    {
        $min_date = date('Y-m-d');
        return ($value >= $min_date);
    }

    public function message()
    {
        return 'The :attribute must be a date equal or greater than today.';
    }
}
