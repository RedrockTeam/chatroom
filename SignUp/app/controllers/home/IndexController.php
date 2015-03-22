<?php

namespace App\Controllers\Home;

use SignUser, SignLecture;

use Auth, BaseController, Form, Input, Redirect, Sentry, View, DB, Validator;

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
        $time = time();
        return View::make('home.index.index')->with('lastOne', $lastOne[0])->with('time', $time);
    }

    public function signUp($openid='null')
    {
        $input = Input::all();
        $validator = Validator::make(
            array(
                'username' => $input['username'],
                'stu_id' => $input['stu_id'],
                'phonenumber' => $input['phonenumber']
            ),
            array(
                'username' => 'required|between:4,10',
                'stu_id' => 'required|digits:10',
                'phonenumber' => 'required|digits:11',
            )
        );
        if ($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator->errors);
        }else {
            $re = Input::get('openid');

            $uri = "http://hongyan.cqupt.edu.cn/MagicLoop/index.php?s=/addon/BenchMark/BenchMark/verify";
            // 参数数组
            $data = array(
                'openid' => $re
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $uri);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $return = curl_exec($ch);
            curl_close($ch);
            $result = json_decode($return, true);    //json字符串转化为数组

            if ($result['status'] == 200)    //验证是否绑定重邮小帮手
            {
                $sign = new SignUser;
                $sign->user_name = Input::get('username');
                $sign->user_number = Input::get('stu_id');
                $sign->user_phone = Input::get('phonenumber');
                $sign->user_lecture = Input::get('lec_id');
                $sign->user_question = Input::get('questions');
                $sign->save();
                $lec = SignLecture::find(Input::get('lec_id'));
                return View::make('home.index.success')->with('returnMsg', $lec->lec_return_message);
            }
            return View::make('home.index.fail');
        }
    }

    public function detail($id)
    {
        $lastOne = SignLecture::find($id);

        return View::make('home.index.detail')->with('lastOne', $lastOne);
    }

    public function success()
    {

    }
}