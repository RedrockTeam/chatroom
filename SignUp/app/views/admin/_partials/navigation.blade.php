@if (Sentry::check())
  <ul class="nav">
    <li class="{{ Request::is('admin/lectures*') ? 'active' : null }}"><a href="{{ URL::route('admin.lectures.index') }}"><i class="icon-book"></i> Pages</a></li>
    {{--<li class="{{ Request::is('admin/articles*') ? 'active' : null }}"><a href="{{ URL::route('admin.articles.index') }}"><i class="icon-edit"></i> Articles</a></li>--}}
    <li><a href="{{ URL::route('admin.logout') }}"><i class="icon-lock"></i> Logout</a></li>
  </ul>
@endif
