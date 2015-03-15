<?php

namespace App\Controllers\Admin;

use SignLecture;
use Input, Notification, Redirect, Sentry, Str, DB;

use App\Services\Validators\PageValidator;

class LecturesController extends \BaseController {

    public function index()
    {
        return \View::make('admin.pages.index')->with('pages', SignLecture::paginate(10));
    }

    public function show($id)
    {
        $SignUser = DB::table('sign_users')->where('user_lecture', '=', $id)->paginate(5);
        return \View::make('admin.pages.show')->with('page', SignLecture::find($id))->withAuthor(Sentry::findUserById(SignLecture::find($id)->lec_admin)->first_name)->with('SignUser', $SignUser);
    }

    public function create()
    {
        return \View::make('admin.pages.create');
    }

    public function store()
    {
        $validation = new PageValidator;

        if ($validation->passes())
        {
            $lec              = new SignLecture;
            $lec->lec_title   = Input::get('lec_title');
            $lec->lec_content    = Input::get('lec_content');
            $lec->lec_speaker_name    = Input::get('lec_speaker_name');
            $lec->lec_speaker_introduce   = Input::get('lec_speaker_introduce');
            $lec->lec_master_name    = Input::get('lec_master_name');
            $lec->lec_return_message    = Input::get('lec_return_message');
            $lec->lec_begintime   = Input::get('beginTime');
            $lec->lec_deadline   = Input::get('deadline');
            $lec->lec_admin = Sentry::getUser()->id;
            $lec->save();

            Notification::success('新增成功！');

            return Redirect::route('admin.lectures.index');
        }

        return Redirect::back()->withInput()->withErrors($validation->errors);
    }

    public function edit($id)
    {
        return \View::make('admin.pages.edit')->with('lecture', SignLecture::find($id));
    }

    public function update($id)
    {
        $validation = new PageValidator;

        if ($validation->passes())
        {
            $lec          = SignLecture::find($id);
            $lec->lec_title   = Input::get('lec_title');
            $lec->lec_content    = Input::get('lec_content');
            $lec->lec_speaker_name    = Input::get('lec_speaker_name');
            $lec->lec_speaker_introduce   = Input::get('lec_speaker_introduce');
            $lec->lec_master_name    = Input::get('lec_master_name');
            $lec->lec_return_message    = Input::get('lec_return_message');
            $lec->lec_begintime   = Input::get('beginTime');
            $lec->lec_deadline   = Input::get('deadline');
            $lec->lec_admin = Sentry::getUser()->id;
            $lec->save();

            Notification::success('更新页面成功！');

            return Redirect::route('admin.lectures.index');
        }

        return Redirect::back()->withInput()->withErrors($validation->errors);
    }

    public function destroy($id)
    {
        $page = SignLecture::find($id);
        $page->delete();

        Notification::success('删除成功！');
        return Redirect::route('admin.lectures.index');
    }

}