<?php
    header("Content-type: text/css; charset: UTF-8");
	require_once "../seasonpicker/seasonpicker.php";
	require_once "../array/array.php";
?>
@keyframes fadeinblur {
	0% { filter: blur(0px);}
	100% { filter: blur(2px);}
}
* {
  box-sizing: border-box;
}
body {
	font-family: 'Raleway', sans-serif;
	margin: auto;
	background-color: rgb(<?php echo $seasons[$season]["backgroundcolor"]; ?>);
}
h1, h2, h3, h4, h5, h6 {
	color: rgb(<?php echo $seasons[$season]["headercolor"]; ?>);
	font-weight: normal;
}
p {
	color: rgb(<?php echo $seasons[$season]["paragraphcolor"]; ?>);
}
button {
	font-family: 'Raleway', sans-serif;
	padding: 0;
	outline: none;
	/* Source: http://stackoverflow.com/questions/22672368/how-to-make-a-transparent-html-button */
	cursor: pointer;
	background-color: Transparent;
	background-repeat: no-repeat;
	/* End Source */
}
/* Start Homepage !There might be some elements from other pages!
Sources: http://stackoverflow.com/questions/21209840/css-how-to-stretch-and-auto-resize-background-image and http://stackoverflow.com/questions/20039765/how-to-apply-a-css-3-blur-filter-to-a-background-image */
.center {
	display: flex;
    justify-content: center;
    align-items: center;
}
#homepage:before {
	content: "";
	background: url("../../Website Images/<?php echo $season; ?>.jpg") no-repeat center center fixed;
	background-size: cover;
	position: fixed;
	width: 100%;
	height: 100%;
	filter: blur(2px);
    animation: fadeinblur linear 1s;
}
#homepage, #contentselectpage {
	box-sizing: border-box;
	z-index: -1;
	position: fixed;
	width: 100%;
	height: 100%;
}
/* End Sources */
#box-wrapper {
	display: none;
	z-index: 2;
	flex-flow: row wrap;
	position: fixed;
	top: 45%;
	width: 100%;
	padding: 2px;
}

<?php	
	for ($a = 1; $a <=3; $a++){
		echo "#box-{$a},";
	}
	echo "#box-4{
		position: relative;
		margin: auto;
		width: 250px;
		height: 250px;
		text-align: center;
	}";
	for ($a = 1; $a <=3; $a++){
		echo "#box-{$a} button img,";
	}
	echo "#box-4 button img{
		width: 240px;
		height: 240px;
	}";
	for ($a = 1; $a <=3; $a++){
		echo "#box-{$a} h1,";
	}
	echo "#box-4 h1{
		font-size: 31px;
		margin: auto;
		position: relative;
		top: -138.5px;
		text-shadow: 3px 4px 8px black;
	}";
	for ($a = 1; $a <=3; $a++){
		echo "#box-{$a} button,";
	}
	echo " #box-4 button{
		padding: 0;
		width: 100%;
		height: 100%;
		/* Source: http://stackoverflow#com/questions/4062001/css3-border-opacity */
		border: 5px solid rgba({$seasons[$season]['backgroundcolor']},0.4);
		/* End Source */
		border-radius: 10px;
	}";
?>
#box-4 h1 {
	font-size: 20px;
	top: -134.5px;
}
#title {
	z-index: 2;
    position: relative;
    top: 110px;
    text-align: center;
    text-shadow: 3px 4px 8px black;
}
#title h1 {
	display: none;
	margin: auto;
	/* Source: https://css-tricks.com/viewport-sized-typography/ */
	font-size: 3.7vmax;
	/*display: none;*/
}
#title h5 {
	display: none;
    margin: 0 10px 0 0;
    float: right;
    font-size: 1vmax;
}
/* End Homepage */
#contentselectpage {
	z-index: 2;
	display: none;
}
#navigationbar {
    flex-flow: row-reverse nowrap;
    align-items: center;
    display: inline-flex;
	z-index: 99;
	margin: 0;
	text-align: center;
	text-shadow: 3px 4px 8px black;
	font-weight: bold;
	position: absolute;
	height: 50px;
	width: 100%;
	background-color: rgb(<?php echo $seasons[$season]["backgroundcolor"]; ?>);
}
#icon {
	position: absolute;
	left: 0;
	height: 50px;
	width: 60px;
	background: url("../../Website Images/<?php echo $season; ?>icon.png") no-repeat center center;
	background-size: cover;
}
#navigationbar button {
	height: 35px;
	width: 80px;
	border-radius: 10px;
	border: 5px solid rgba(<?php echo $seasons[$season]["menuandbuttoncolor"]; ?>,0.4);
	margin: auto 5px auto 5px;
    box-shadow: 3px 4px 27px -9px black;
	background-color: rgb(<?php echo $seasons[$season]["menuandbuttoncolor"]; ?>);
}
#titlebar {
    width: 100%;
    margin: 50px auto auto auto;
    height: 25%;
    text-align: center;
    text-shadow: 3px 4px 8px black;
    font-weight: bold;
}
#titlebar h1{
    position: relative;
/* Source : http://stackoverflow.com/questions/6254793/center-a-h1-tag-inside-a-div */
    top: 50%;
    transform: translateY(-50%);
/* End Source */
    margin: 0;
    font-size: 4vmax;
}
#titlebar img {
	position: relative;
	width: 100%;
	top: -150px;
	z-index: -1;
	
}
#contentselect {
	padding: 10px;
    display: inline-flex;
    flex-flow: row nowrap;
	height: 70%;
	background-color: rgb(<?php echo $seasons[$season]["backgroundcolor"]; ?>);
}
#history, #used, #syntax{
	overflow: hidden;
display: inline-flex;
    flex-flow: column nowrap;
    position: relative;
    margin: 0 auto 0 auto;
    width: 25%;
    border: 5px solid rgba(220,168,46,0.4);
    background-color: rgb(220,168,46);
    height: 100%;
	border: 5px solid rgba(<?php echo $seasons[$season]["menuandbuttoncolor"]; ?>,0.4);
	background-color: rgb(<?php echo $seasons[$season]["menuandbuttoncolor"]; ?>);
}
#history p, #used p, #syntax p {

	font-size: 154%;
}
#history img, #used img, #syntax img {
	width: 100%;
}





