@extends('admin._layouts.default')
 
@section('main')
 
    <h2>新增一个</h2>

    {{ Notification::showAll() }}
     
    @if ($errors->any())
            <div class="alert alert-error">
                    {{ implode('<br>', $errors->all()) }}
            </div>
    @endif

    {{--{{ Form::open(array('route' => 'admin.lectures.store')) }}--}}
    {{ Form::open(array('route' => 'admin.lectures.store', 'files' => true)) }}
        <div>
            <div style="float: left;">
                <div class="control-group">
                    {{ Form::label('title', '今日话题:') }}
                    <div class="controls">
                        {{ Form::text('lec_title') }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('body', '内容简介:') }}
                    <div class="controls">
                        {{ Form::textarea('lec_content') }}
                    </div>
                </div>
            </div>
            <div style="float: left; margin-left: 10px;">
                <div class="control-group">
                    {{ Form::label('title', '嘉宾:') }}
                    <div class="controls">
                        {{ Form::text('lec_speaker_name') }}
                    </div>
                </div>

                <div class="control-group">
                    {{ Form::label('body', '嘉宾介绍:') }}
                    <div class="controls">
                        {{ Form::textarea('lec_speaker_introduce') }}
                    </div>
                </div>
            </div>
            <div style="float: left; margin-left: 10px;">
                <div class="control-group">
                    {{ Form::label('title', '主持人:') }}
                    <div class="controls">
                        {{ Form::text('lec_master_name') }}
                    </div>
                </div>

                <div class="control-group">
                    {{ Form::label('body', '返回的消息:') }}
                    <div class="controls">
                        {{ Form::textarea('lec_return_message') }}
                    </div>
                </div>
            </div>
            <div style="float: left; margin-left: 10px;">
                <div class="control-group">
                    {{ Form::label('title', '活动开始时间:') }}
                    <div class="controls">
                        {{ Form::text('lec_time') }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('title', '报名开始时间:') }}
                    <div class="controls">
                        <input name="beginTime" type="date"/>
                    </div>
                </div>

                <div class="control-group">
                    {{ Form::label('title', '报名结束时间:') }}
                    <div class="controls">
                        <input name="deadline" type="date"/>
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('title', '上传头像:') }}
                    <div class="controls">
                        {{ Form::file('path', array('class' => 'path')) }}
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
        <div class="form-actions">
            {{ Form::submit('新增', array('class' => 'btn btn-success btn-save btn-large')) }}
            <a href="{{ URL::route('admin.lectures.index') }}" class="btn btn-large">取消</a>
        </div>

    {{ Form::close() }}

@stop