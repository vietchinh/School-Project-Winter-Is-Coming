var windowheight = $(window).height();
var windowwidth = $(window).width();
console.log (windowheight);
console.log (windowwidth);
function onload(){
	
	$("#homepage").children(".title").children("h1").delay(1000).fadeIn(1000, function() {
		$("#homepage").children(".title").children("h5").fadeIn(1000, function() {
			$("#homepage").children("button").fadeIn(1000); }); 
		});
}
function Test(){
	var memory = "memory";
	console.log (memory);
}
function homepagetransitionanimations(b, img){
	/* source : http://stackoverflow.com/questions/8260156/how-do-i-create-dynamic-variable-names-inside-a-loop */
	var boxleftposition = [];
	var boxh1text = [];
	for (var c = 1; c <= 4; c++){
		boxleftposition[c] = $(".box-" + c).offset().left;
		 boxh1text[c] = $(".box-" + c).text();
	}
	/* End Source */
	for (var a = 1; a <= 4; a++) {
		if (a == b){
			$(".box-" + b).css("left", boxleftposition[a] ).css("margin", 0);
		}
		else {
		/* source: http://stackoverflow.com/questions/5891840/how-to-use-javascript-variables-in-jquery-selectors */
		$(".box-" + a).css("left", boxleftposition[a]).fadeOut("fast").css("margin", 0).css("position", "fixed");
		/*End Source*/
		}
	}
	$(".box-" + b).css("left", boxleftposition[b]).css("margin", 0);
	$(".box-" + b).children("button").children("h1").remove();
	$(".box-" + b).append("<div id='contenttitle'></div>");
	$(".box-" + b).append("<h1>" + boxh1text[b] + "</h1>").children("h1").css("top", -140);
	$("#navigationbar").animate({
		top: 0
	}, "slow");
	$(".title").fadeOut("fast");
	$(".box-" + b).children("button").fadeOut("slow", function() {
		$(".box-" + b).children("h1").css("top", 110).css("animation", "biggertext linear 1s forwards" );
		$(".box-" + b).children("h1").animate({
			top: 55
		},"slow");
	
	$(".box-wrapper").animate({
			top: $("#navigationbar").height(),
		}, "slow").children(".box-" + b).animate({
			margin: 0,
			left: 0,
			width: "100%",
			height: 20 + "vh",
		},"slow",function(){
				$("#contenttitle").fadeIn("slow").css("display", "inline-block").css("background", "url('../Website Images/"+ img +"balk.png') no-repeat");
				$(".box-" + b).children("h1").css("top", -152);
		});
	}) ;
}

function fadeout(b){

}
function htmlcss(){
	var b = 1;
	var img = "html";
	homepagetransitionanimations(b, img);
	
}
function javascript(){
	var b = 2;
	var img = "javascript";
	homepagetransitionanimations(b, img);
}
function php(){
	var b = 3;
	var img = "php";
	homepagetransitionanimations(b, img);
}
function making(){
	var b = 4;
	var img = "making";
	homepagetransitionanimations(b, img);
}