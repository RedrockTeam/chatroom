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
             <span id="id">第152期</span>
             <a id="detail" href="detail.html">了解话题详情>></a>
        </div>
        <div id="p_wrapper">
             <p id='theme'>今期话题：</p>
             <p id="content">你觉得价值观体现在哪里你觉得价值观体现在哪里？</p>
             <img id="person_logo" src="images/person_logo.png">
             <span id="name">特邀嘉宾：<span id="person">xxxx</span></span>
             <p class="time">活动开始时间：2015年3月12号 下午7：00</p>
             <p class="time">报名时间:2015.3.16 上午4：00--下午7：00</p>
        </div>
    </div>
    <div id="form_outer">
         <div id="form_wrapper">
         <form>
            <label>姓  名：</label>
            <input type='text' name="username" placeholder='必填 例如：张三' required="required"/><br/>
            <label>学  号：</label>
            <input type='text' name="stu_id" placeholder='必填 例如：2013211666'quired="required"/><br/>
            <label>手机号：</label>
            <input type='text' name="phonenumber" placeholder='必填 例如：18883814445' required="required"/><br/>
         </form>
         </div>
    </div>

    <div id="more">
        <p id="more_detail">想聊更多：</p>
        <textarea>选择填写，不要超过30个字</textarea>
    </div>
    <div id="footer">
         <a id="join" href="javascript:void(0)"><img id='join_img'  src='images/join.png'></a>
    </div>

</body>
<script type="text/javascript" src='{{ URL::asset('js/layout.js') }}'></script>
</html>