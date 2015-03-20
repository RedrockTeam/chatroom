<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/detail.css') }}">
	<title>微信报名系统</title>
</head>
<body>
     <div id="header">
         <a href="{{ URL::route('home.index.index') }}"><img src='{{ URL::asset('images/kind.png') }}'></a>
         <p>微信报名系统</p>
    </div>
    <script type="text/javascript" src='js/layout.js'></script>

    <div id="p_wrapper">
             <p class='theme'>今期话题：</p>
             <p id="content">{{ $lastOne->lec_title }}</p>
    </div>

    <div id="content_prev">
       <p class='theme'>内容预告：</p>
       <p class="content_detail">
       	    {{ $lastOne->lec_content }}
       </p>
    </div>

    <div id="person_intro">
     	<p class="theme">特邀嘉宾简介：</p>
  		<div class="img_wrapper">
           <img src="{{ URL::asset('uploads/'.$lastOne->lec_head_path) }}">
  		</div>
  		<div class="person_content">
	  		<p class="content_detail ">
	  		   {{ $lastOne->lec_speaker_introduce }}
	  		</p>
  		</div>
    </div>

    <div id="footer">
         <a id="join" href="{{ URL::route('home.index.index') }}"><img id='join_img'  src='{{ URL::asset('images/join.png') }}'></a>
    </div>
    <script type="text/javascript" src='js/date.js'></script>
</body>
</html>