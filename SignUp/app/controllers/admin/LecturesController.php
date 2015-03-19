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
        return \View::make('admin.pages.show')->with('page', SignLecture::find($id))->withAuthor(Sentry::findUserById(SignLecture::find($id)->lec_admin)->first_name)->with('SignUser', $SignUser)->with('path', SignLecture::find($id)->lec_head_path);
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

            //检验一下上传的文件是否有效.
            if (Input::hasFile('path')) {
                //客户端文件名称.
                //$clientName = $file -> getClientOriginalName();

                //缓存在tmp文件夹中的文件名例如php8933.tmp 这种类型的.
                //$tmpName = $file ->getFileName();

                //这个表示的是缓存在tmp文件夹下的文件的绝对路径
                //$realPath = $file -> getRealPath();

                $file = Input::file('path');

                //上传文件的后缀.
                $extension = $file -> getClientOriginalExtension();

                //文件类型
                //$mimeTye = $file -> getMimeType();

                //把人名转换字符编码
                //$gb_username=iconv("UTF-8","gb2312",$input['std_username']);

                //新名字 人名 + 学号 不会重复
                $name = time().".".$extension;

                //移动路径
                //$path = $file -> move(app_path().'/storage/uploads',$newName);
                $file -> move(public_path().'/uploads',$name);

                $lec->lec_head_path = $name;

                $lec->save();

                Notification::success('新增成功！');

                return Redirect::route('admin.lectures.index');
            }

            Notification::success('新增失败! ');

            return Redirect::route('admin.lectures.create');
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

            //检验一下上传的文件是否有效.
            if (Input::hasFile('path')) {
                //客户端文件名称.
                //$clientName = $file -> getClientOriginalName();

                //缓存在tmp文件夹中的文件名例如php8933.tmp 这种类型的.
                //$tmpName = $file ->getFileName();

                //这个表示的是缓存在tmp文件夹下的文件的绝对路径
                //$realPath = $file -> getRealPath();

                $file = Input::file('path');

                //上传文件的后缀.
                $extension = $file -> getClientOriginalExtension();

                //文件类型
                //$mimeTye = $file -> getMimeType();

                //把人名转换字符编码
                //$gb_username=iconv("UTF-8","gb2312",$input['std_username']);

//                //新名字 人名 + 学号 不会重复
//                $newName = time().".".$extension;
//
//                //移动路径
//                $path = $file -> move(public_path().'/uploads',$newName);
//
//                $lec->lec_head_path = $newName;
                //新名字 人名 + 学号 不会重复
                $name = time().".".$extension;

                //移动路径
                $file -> move(public_path().'/uploads',$name);
                $lec->lec_head_path = $name;

                $lec->save();

                Notification::success('修改成功！');

                return Redirect::route('admin.lectures.index');
            }

            Notification::success('修改失败! ');

            return Redirect::route('admin.lectures.create');
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