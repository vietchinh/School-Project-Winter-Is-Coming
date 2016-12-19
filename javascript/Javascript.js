var windowheight = $(window).height();
var windowwidth = $(window).width();
var boxh1text = [];
var memory = [];
var pagesave = [];
var histories = {
html:"PHP werd in 1994 ontwikkeld door Rasmus Lerdorf. De eerste publieke versie werd uitgegeven in 1995, alsook versie 2. Zeev Suraski en Andi Gutmans, twee Israëlische ontwikkelaars aan de Technion IIT, herschreven de parser in 1997 en vormden de basis voor PHP 3 en veranderde hiermee de naam in PHP: Hypertext Preprocessor. Het ontwikkelteam bracht PHP/FI 2 officieel in november 1997 uit, na maanden van beta-tests. Hierna begon de publieke test van PHP 3 en in juni 1998 werd PHP 3 officieel uitgebracht. Suraski en Gutmans begonnen hierna met het hersch............ ",
htmlimg: "../Website Images/test.png",
javascript:"lel",
php: "this is going be a mess",
making: "bloody hell"
};
var used = {
html:"PHP wordt veel gebruikt om op webservers dynamisch webpagina's te creëren. Andere bekende server-sidescripttalen zijn Java Server Pages (JSP), ColdFusion en Active Server Pages (ASP). De code van de pagina wordt op de webserver uitgevoerd en het resultaat wordt naar de computer van de bezoeker gestuurd en in de webbrowser getoond. Dit in tegenstelling tot client-side-scripting (zoals JavaScript), waarbij de webbrowser eerst de pagina van de webserver downloadt en vervolgens zelf (op de computer van........ ",
htmlimg: "../Website Images/test.png",
javascript:"lel",
php: "this is going be a mess",
making: "bloody hell"
};
var syntax = {
html:"PHP is een scripttaal en is vergelijkbaar met Perl, Python en Ruby. Qua syntaxis lijkt PHP het meest op C. In tegenstelling tot C is het in PHP (met name PHP5) mogelijk objectgeoriënteerd te programmeren, net als in bijvoorbeeld Java, C++ en C♯. Net als bij veel andere scripttalen moeten variabelen voorafgegaan worden door een dollarteken ('$'). Dit in tegenstelling tot talen als C, C++ en Java. Dit is overgenomen uit de scripttaal Perl, waarvan PHP mede is afgeleid. Naast server-side scripting kan PHP ook.................",
htmlimg: "../Website Images/test.png",
javascript:"lel",
php: "this is going be a mess",
making: "bloody hell"
};

function onload(){
	pagesave[0] = $("#homepage").html();
	pagesave[1] = $("#contentselectpage").html();
	$("#contentselectpage").remove();
	$("#title").children("h1").fadeIn(700, function() {
		$("#title").children("h5").fadeIn(800, function() {
			$("#box-wrapper").fadeIn(900).css("display", "inline-flex"); 
		}); 
	});
}
function homepagetransitionanimations(memory){
	homepage = [$("#homepage").html()];
	if (boxh1text != null){
		for (var b = 1; b <= 4; b++){
			boxh1text[b] = $("#box-" + b).text();
		}
	}
	$("body").append("<div id='contentselectpage'></div>");
	$("#contentselectpage").append(pagesave[1]);
		$("#titlebar").append("<h1>" + boxh1text[memory[0]] + "</h1>");
		$("#titlebar").append("<img src='../Website Images/" + memory[1] + ".jpg'></img>");
			$("#history").append("<img src='" + histories[memory[1] + "img"] + "'></img>");
			$("#history").append("<p>" + histories[memory[1]] + "</p>");
			$("#used").append("<img src='" + histories[memory[1] + "img"] + "'></img>");
			$("#used").append("<p>" + used[memory[1]] + "</p>");
			$("#syntax").append("<img src='" + histories[memory[1] + "img"] + "'></img>");
			$("#syntax").append("<p>" + syntax[memory[1]] + "</p>");
	$("#contentselectpage").fadeIn("slow", function() {
		$("body").children("#homepage").remove();
	});
}
function inbetweentransition(memory) {
	$("#history").children("p").fadeOut("slow", function() {
		$("#history").children("p").text(histories[memory[1]]);
		$("#history").children("p").fadeIn("slow");		
	});
	$("#used").children("p").fadeOut("slow", function() {
		$("#used").children("p").text(histories[memory[1]]);
		$("#used").children("p").fadeIn("slow");		
	});
	$("#syntax").children("p").fadeOut("slow", function() {
		$("#syntax").children("p").text(histories[memory[1]]);
		$("#syntax").children("p").fadeIn("slow");		
	});
}
function home(){
	$("body").append("<div id='homepage'></div>");
	$("#homepage").append(homepage[0]);
	$("#contentselectpage").fadeOut("slow", function () {
		$("body").children("#contentselectpage").remove();
	});
}
function htmlcss(){
	if($("#contentselectpage").length == 0) {
		memory[0] = 1;
		memory[1] = "html";
		homepagetransitionanimations(memory);
	}
	else {
		if (memory[0] == "html") {	
		}
		else {
			memory[0] = 1;
			memory[1] = "html";
			inbetweentransition(memory);	
		}
	}
}
function javascript(){
	if($("#contentselectpage").length == 0) {
		memory[0] = 2;
		memory[1] = "javascript";
		homepagetransitionanimations(memory);
	}
	else {
		if (memory[0] == "javascript") {
		}
		else {
			memory[0] = 2;
			memory[1] = "javascript";
			inbetweentransition(memory);	
		}
	}
}
function php(){
	if($("#contentselectpage").length == 0) {
		memory[0] = 3;
		memory[1] = "php";
		homepagetransitionanimations(memory);
	}
	else {
		if (memory[0] == "javascript") {
		}
		else {
			memory[0] = 3;
			memory[1] = "php";
			inbetweentransition(memory);	
		}
	}
}
function making(){
	if($("#contentselectpage").length == 0) {
		memory[0] = 4;
		memory[1] = "making";
		homepagetransitionanimations(memory);
	}
	else {
		if (memory[0] == "javascript") {	
		}
		else {
			memory[0] = 4;
			memory[1] = "making";
			inbetweentransition(memory);	
		}
	}
}