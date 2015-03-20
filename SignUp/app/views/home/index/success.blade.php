<html>
<head>
	<title></title>
	<meta charset='utf-8'>
    <meta http-equiv="refresh" content="3;url={{ URL::route('home.index.index') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/success.css') }}">
	<script type="text/javascript" src='{{ URL::asset('js/layout.js') }}'></script>
</head>
<body>
     <div id="header">
         <a href="{{ URL::route('home.index.index') }}"><img src='{{ URL::asset('images/kind.png') }}'></a>
         <p>微信报名系统</p>
    </div>
    <div id="content">
        <p>{{ $returnMsg }}</p>
        <p class="small">3秒钟后将跳转到重邮小帮手主页！</p>
    </div>
</body>
</html>