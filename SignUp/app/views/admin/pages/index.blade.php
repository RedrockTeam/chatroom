@extends('admin._layouts.default')

@section('main')

    {{ Notification::showAll() }}

    <a href="{{ URL::route('admin.lectures.create') }}" class="btn btn-primary">新建</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>截止报名时间</th>
                <th><i class="icon-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->lec_id }}</td>
                    <td><a href="{{ URL::route('admin.lectures.show', $page->lec_id) }}">{{ $page->lec_title }}</a></td>
                    <td>{{ $page->lec_deadline }}</td>
                    <td>
                        <a href="{{ URL::route('admin.lectures.edit', $page->lec_id) }}" class="btn btn-success btn-mini pull-left">编辑</a>

                        {{ Form::open(array('route' => array('admin.lectures.destroy', $page->lec_id), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
                              <button type="submit" href="{{ URL::route('admin.lectures.destroy', $page->lec_id) }}" class="btn btn-danger btn-mini">删除</button>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pages->links(); }}
@stop