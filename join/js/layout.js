(function(){
	var width = document.body.clientWidth;
    var unit = parseInt(width/16);
    var body = document.body;
    body.style.fontSize = unit;
    console.log(body.style.fontSize);
}())