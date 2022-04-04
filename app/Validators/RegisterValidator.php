<?php

namespace App\Validators;

use App\Validators\ValidatorBase;
use Illuminate\Support\Facades\Validator;
use Modules\User\Rules\MatchOldPassword;
use Modules\User\Rules\PostalCode;
use Modules\User\Rules\StrongPassword;

class RegisterValidator extends ValidatorBase
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data) {
        $validators = [
            'name'          => ['required', 'string', 'max:255', 'min:6'],
            'surname'       => ['required', 'string', 'max:255', 'min:5'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'position'      => ['required', 'integer', 'min:1'],
        ];
        return Validator::make($data, $validators);
    }
}
