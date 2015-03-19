<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/detail.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/mystyle.css') }}">
	<title>微信报名系统</title>
</head>
<body>

    <div id="header">
         <a href="javascript:void(0)"><img src='images/back.png'></a>
         <p>微信报名系统</p>
    </div>

    <div id="title">
        <div id="box">
             <span id="id">第{{ $lastOne->lec_id }}期</span>
             <a id="detail" href="detail.html">了解话题详情>></a>
        </div>
        <div id="p_wrapper">
             <p id='theme'>今期话题：</p>
             <p id="content">{{ $lastOne->lec_title }}</p>
             <img id="person_logo" src="images/person_logo.png">
             <span id="name">特邀嘉宾：<span id="person">{{ $lastOne->lec_speaker_name }}</span></span>
             <p class="time">活动开始时间：{{ $lastOne->lec_begintime }}</p>
             <p class="time">报名时间：{{ $lastOne->lec_deadline }}</p>
        </div>
    </div>
    {{ Form::open(array('route' => 'home.index.signUp')) }}
    <div id="form_outer">
         <div id="form_wrapper">
            <label>姓  名：</label>
            <input type='text' name="username" placeholder='必填 例如：张三' required="required"/><br/>
            <label>学  号：</label>
            <input type='text' name="stu_id" placeholder='必填 例如：2013211666'quired="required"/><br/>
            <label>手机号：</label>
            <input type='text' name="phonenumber" placeholder='必填 例如：18883814445' required="required"/><br/>
         </div>
    </div>

    <div id="more">
        <p id="more_detail">想聊更多：</p>
        <textarea>选择填写，不要超过30个字</textarea>
    </div>

    <div id="footer">
         <input id='join_img' type="submit" src="images/join.png" alt="Submit">
    </div>
    {{ Form::close() }}
</body>
<script type="text/javascript" src='{{ URL::asset('js/login.js') }}'></script>
<script type="text/javascript">
(function(){
	var width = document.body.clientWidth;
    var unit = parseInt(width/16);
    var body = document.body;
    body.style.fontSize = unit;
    // console.log(body.style.fontSize);
}())
</script>
</html>