<?php

namespace App\Controllers\Home;

use SignLecture;

use Input, Notification, Redirect, Sentry, Str, DB;

use Auth, BaseController, Form, View;

class SignController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function signUp()
    {
        return View::make('home.index.signUp');
    }
}