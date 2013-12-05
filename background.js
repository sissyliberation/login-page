var which = Math.floor(Math.random()*2);
var num;
var temp;


$(document).ready( function() {
	//light
	if(which ==0) {
		num = Math.floor(Math.random()*countLight);
		temp = "url(img/light/"+num + ".png)";
	}
	//dark
	else {
		num = Math.floor(Math.random()*countDark);
		temp = "url(img/dark/"+num + ".png)";
		$('body').css("color","white");
	}
	$('body').css("background-image", temp);
	}
);
