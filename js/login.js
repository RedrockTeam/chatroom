(function(){
  var submit = document.querySelector('#join_img');

submit.onclick = function(e){
    alert(1);
    e.preventDefault();
    check();
}
}())
  

function check(){
	var inputs = document.getElementsByTagName('input'),
	feedback = document.querySelector('#feedback'),
	flag = true,
	
	reg = {
		stuId : /20[0-9]{8}/,
		number:/1[3|5|8][0-9]{9}/,
	};


    if(inputs[name='username'].value == ''){
    	alert('亲，为何不让我知道你的名字..');
    	flag = false;
    }

    if(inputs[name='stu_id'].value == ''||!reg.stuId.test(inputs[name='stu_id'].value)){
    	alert('学号不能这么填写辣<<');
    	flag = false;
    	
    }


    if(inputs[name='phonenumber'].value == ''||!reg.number.test(inputs[name='phonenumber'].value)){
    	alert('手机号都不告诉我对的嘛');
    	flag = false;
    	
    }
    console.log(flag);
}   