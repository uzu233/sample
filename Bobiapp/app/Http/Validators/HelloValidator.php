<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
        public function validatehello($attribute, $value, $parameters)
        {
                return $value % 2 == 0;
        }
}