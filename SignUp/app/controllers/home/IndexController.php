<?php

namespace App\Controllers\Home;

use SignUser, SignLecture;

use Auth, BaseController, Form, Input, Redirect, Sentry, View, DB;

use App\Services\Validators\SignValidator;

class IndexController extends BaseController {

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

    public function index()
    {
        $lastOne = DB::table('sign_lectures')
                    ->where('lec_id', '>', '0')
                    ->orderBy('lec_id', 'desc')
                    ->limit(1)
                    ->get();

        return View::make('home.index.index')->with('lastOne', $lastOne[0]);
    }

    public function signUp()
    {
        $validation = new SignValidator;

        if ($validation->passes())
        {
            if(true)    //验证是否绑定重邮小帮手
            {
                $sign = new SignUser;
                $sign->user_name = Input::get('username');
                $sign->user_number = Input::get('stu_id');
                $sign->user_phone = Input::get('phonenumber');
                $sign->user_lecture = Input::get('lec_id');
                $sign->user_question = Input::get('questions');
                $sign->save();
                $lec_id = Input::get('lec_id');
                return Redirect::route('home.index.success', array('lec_id' => $lec_id));
            }
            return Redirect::route('home.index.fail');
        }
        return Redirect::back()->withInput()->withErrors($validation->errors);
    }

    public function detail($id)
    {
        $lastOne = SignLecture::find($id);

        return View::make('home.index.detail')->with('lastOne', $lastOne);
    }
}