<?php

namespace App\Services\Validators;

class PageValidator extends Validator {
 
    public static $rules = array(
        'lec_title' => 'required',
        'lec_content' => 'required',
        'lec_speaker_name' => 'required',
        'lec_speaker_introduce' => 'required',
        'lec_master_name' => 'required',
        'lec_return_message' => 'required',
        'beginTime' => 'required',
        'deadline' => 'required',
    );
 
}