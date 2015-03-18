@extends('admin._layouts.default')
 
@section('main')
 
    <h2>页面内容</h2>

        <div id="onepage">
            <div class="title">
                <h3>{{ $page->lec_title }}</h3>
            </div>
            <div class="info">
            	<p><em>由 {{ $author }} 发布于 {{ $page->created_at }} 最后更新 {{ $page->updated_at }}</em></p>
            </div>
            <div class="body">
                <p><span>报名开始时间:</span>{{ $page->lec_begintime }}</p>
            </div>
            <div class="body">
                <p><span>报名截止时间:</span>{{ $page->lec_deadline }}</p>
            </div>
            <div class="body">
                <p><span>主持人:</span>{{ $page->lec_master_name }}</p>
            </div>
            <div class="body">
                <p><span>主讲人:</span>{{ $page->lec_speaker_name }}</p>
                <div style="width: 100px;height: 100px;">
                <img src="{{ URL::asset('uploads/'.$path) }}" alt="未上传图片"/>
                </div>
            </div>
            <div class="body">
                <p><span>主讲人介绍:<span>{{ $page->lec_speaker_introduce }}</p>
            </div>
            <div class="body">
                <p><span>内容简介:</span>{{ $page->lec_content }}</p>
            </div>
            <div class="body">
                <p><span>返回的消息:</span>{{ $page->lec_return_message }}</p>
            </div>
        </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>姓名</th>
                <th>性别</th>
                <th>学号</th>
                <th>邮箱</th>
                <th>手机号</th>
                <th>问题</th>
                {{--<th><i class="icon-cog"></i></th>--}}
            </tr>
        </thead>
        <tbody>
            @foreach ($SignUser as $user)
                <tr>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->user_name }}</td>
                    <td>{{ $user->user_sex }}</td>
                    <td>{{ $user->user_number }}</td>
                    <td>{{ $user->user_email }}</td>
                    <td>{{ $user->user_phone }}</td>
                    <td>{{ $user->user_question }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $SignUser->links(); }}
@stop