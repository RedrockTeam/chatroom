<html>
<head>
	<title></title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/success.css') }}">
</head>
<body>
     <div id="header">
         <a href="{{ URL::route('home.index.index') }}"><img src='{{ URL::asset('images/kind.png') }}'></a>
         <p>微信报名系统</p>
    </div>
    <div id="content">
        <p>{{ $returnMsg }}</p>
        <p class="small">5秒钟后将跳转到重邮小帮手主页！</p>
    </div>
    <script type="text/javascript" src='{{ URL::asset('js/layout.js') }}'></script>
    <script type="text/javascript">
        // window.setTimeout(window.location.href = 'index.html',5000);
    </script>
</body>
</html>