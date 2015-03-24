<?php

namespace App\Services\Validators;

class SignValidator extends Validator {

    public static $rules = array(
        'username' => 'required',
        'stu_id' => 'required|digits:10',
        'phonenumber' => 'required|digits:11',
    );

}