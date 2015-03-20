<html>
<head>
	<title></title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/failed.css') }}">
</head>
<body>
      <div id="header">
         <a href="{{ URL::route('home.index.index') }}"><img src='{{ URL::asset('images/kind.png') }}'></a>
         <p>微信报名系统</p>
      </div>
      <p>您的学号未绑定重邮小帮手，请在小帮手回复“账号绑定”，感谢您的配合！5秒后将跳转至绑定页面</p>
      <script type="text/javascript" src='{{ URL::asset('js/layout.js') }}'></script>
      <script type="text/javascript">
         // window.setTimeout = (window.location.href = 'index.html',5000)
      </script>
</body>
</html>