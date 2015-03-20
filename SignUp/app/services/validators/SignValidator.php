<?php

namespace App\Services\Validators;

class SignValidator extends Validator {

    public static $rules = array(
        'username' => 'required|between:4,10',
        'stu_id' => 'required|digits:10',
        'phonenumber' => 'required|digits:11',
    );

}