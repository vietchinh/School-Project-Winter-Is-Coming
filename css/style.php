<?php
    header("Content-type: text/css; charset: UTF-8");
	require_once "../seasonpicker/seasonpicker.php";
	require_once "../array/array.php";
?>
@keyframes fadeinblur {
	0% { filter: blur(0px);}
	100% { filter: blur(2px);}
}
/*@keyframes fadeinopacity {
	0% { opacity: 0;}
	100% { opacity: 1;}
}

/* End Source */
@keyframes biggertext {
	0% { font-size: 31px }
	75% {font-size: 3vmax;}
	100% {font-size: 3vmax;}
}
@keyframes backgroundimg {
	0% {}
	100% {background: url("../../Website Images/htmlbackgroundcontentselectscreen.jpg") no-repeat;}
}
body {
	font-family: 'Raleway', sans-serif;
	margin: auto;
	position: fixed;
	width: 100%;
	height: 100%;
	background-color: rgb(<?php echo $seasons[$season]["backgroundcolor"]; ?>);
}
h1, h2, h3, h4, h5, h6 {
	color: rgb(<?php echo $seasons[$season]["headercolor"]; ?>);
	font-weight: normal;
}
p {
	color: rgb(<?php echo $seasons[$season]["paragraphcolor"]; ?>);
}
/* Start Homepage !There might be some elements from other pages!
Sources: http://stackoverflow.com/questions/21209840/css-how-to-stretch-and-auto-resize-background-image and http://stackoverflow.com/questions/20039765/how-to-apply-a-css-3-blur-filter-to-a-background-image */
#homepage:before {
	content: "";
	z-index: -1;
	background: url("../../Website Images/<?php echo $season; ?>.jpg") no-repeat center center fixed;
	background-size: cover;
	position: fixed;
	width: 100%;
	height: 100%;
	filter: blur(2px);
    animation: fadeinblur linear 1s;
}
/* End Sources */
.box-wrapper {
	display: inline-flex;
	flex-flow: row wrap;
	position: fixed;
	top: 45%;
	width: 100%;
}

<?php	
	for ($a = 1; $a <=3; $a++){
		echo ".box-{$a},";
	}
	echo ".box-4{
		position: relative;
		margin: auto;
		width: 250px;
		height: 250px;
		text-align: center;
	}";
	for ($a = 1; $a <=3; $a++){
		echo ".box-{$a} button img,";
	}
	echo ".box-4 button img{
		width: 240px;
		height: 240px;
	}";
	for ($a = 1; $a <=3; $a++){
		echo ".box-{$a} h1,";
	}
	echo ".box-4 h1{
		font-size: 31px;
		margin: auto;
		position: relative;
		top: -138.5px;
		text-shadow: 3px 4px 8px black;
	}";
	for ($a = 1; $a <=3; $a++){
		echo ".box-{$a} button,";
	}
	echo " .box-4 button{
		font-family: 'Raleway', sans-serif;
		padding: 0;
		width: 100%;
		height: 100%;
		/* Source: http://stackoverflow.com/questions/4062001/css3-border-opacity */
		border: 5px solid rgba({$seasons[$season]['backgroundcolor']},0.4);
		/* End Source */
		border-radius: 10px;
		outline: none;
		/* Source: http://stackoverflow.com/questions/22672368/how-to-make-a-transparent-html-button */
		cursor: pointer;
		background-color: Transparent;
		background-repeat: no-repeat;
		/* End Source */
	}";
?>
.box-4 h1 {
	font-size: 20px;
	top: -134.5px;
}
.title {
    position: relative;
    top: 110px;
    text-align: center;
    text-shadow: 3px 4px 8px black;
}
.title h1 {
	margin: auto;
	/* Source: https://css-tricks.com/viewport-sized-typography/ */
	font-size: 3.7vmax;
	/*display: none;*/
}
.title h5 {
    margin: 0 10px 0 0;
    float: right;
    font-size: 1vmax;
}
#navigationbar {
	z-index: 99;
	margin: 0;
	text-align: center;
	text-shadow: 3px 4px 8px black;
	font-weight: bold;
	position: absolute;
	top: -50px;
	height: 5vh;
	width: 100%;
	background-color: rgb(<?php echo $seasons[$season]["backgroundcolor"]; ?>);
}
#contenttitle {
    position: relative;
    width: 100%;
    margin: 0;
    height: 20vh;
    text-align: center;
    text-shadow: 3px 4px 8px black;
    font-weight: bold;
	display: none;
}
#contenttitle h1{
	position: relative;
	top: 25%;
	font-size: 3vmax;
}

