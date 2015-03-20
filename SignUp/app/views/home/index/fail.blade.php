<html>
<head>
	<title></title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="3;url=http://hongyan.cqupt.edu.cn/MagicLoop/index.php?s=/addon/Bind/Bind/bind">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/failed.css') }}">
	<script type="text/javascript" src='{{ URL::asset('js/layout.js') }}'></script>
</head>
<body>
      <div id="header">
         <a href="{{ URL::route('home.index.index') }}"><img src='{{ URL::asset('images/kind.png') }}'></a>
         <p>微信报名系统</p>
      </div>
      <p>您的学号未绑定重邮小帮手</p>
      <p>3秒后将跳转至绑定页面</p>
</body>
</html>