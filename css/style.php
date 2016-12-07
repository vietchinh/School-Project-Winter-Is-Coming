<?php
    header("Content-type: text/css; charset: UTF-8");
	require_once "../seasonpicker/seasonpicker.php";
	require_once "../array/array.php";
?>
/* source http://stackoverflow.com/questions/19166838/css-de-blur-an-image-while-fading-it-in */
@keyframes fadeinblur {
	0% { filter: blur(0px);}
	100% { filter: blur(2px);}
}
/*@keyframes fadeinopacity {
	0% { opacity: 0;}
	100% { opacity: 1;}
}

/* End Source */
body {
	font-family: 'Raleway', sans-serif;
	margin: auto;
	position: fixed;
	background-color: rgb(<?php echo $seasons[$season]["backgroundcolor"]; ?>);
}
h1, h2, h3, h4, h5, h6 {
	color: rgb(<?php echo $seasons[$season]["headercolor"]; ?>);
	font-weight: normal;
}
p {
	color: rgb(<?php echo $seasons[$season]["paragraphcolor"]; ?>);
}
/* Sources: http://stackoverflow.com/questions/21209840/css-how-to-stretch-and-auto-resize-background-image and http://stackoverflow.com/questions/20039765/how-to-apply-a-css-3-blur-filter-to-a-background-image */
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
#homepage {
	display: inline-flex;
	flex-flow: row wrap;
	position: fixed;
	width: 100%;
	height: 100%;
}

#homepage button {
	width: 250px;
	height: 250px;
	margin: 0vmax auto 19vmax auto;
	padding: 0;
	position: relative;
	display: none;
	/* Source: http://stackoverflow.com/questions/4062001/css3-border-opacity */
	border: 5px solid rgba(<?php echo $seasons[$season]["backgroundcolor"]; ?>,0.4);
	/* End Source */
	border-radius: 10px;
	outline: none;
	/* Source: http://stackoverflow.com/questions/22672368/how-to-make-a-transparent-html-button */
	cursor: pointer;
	background-color: Transparent;
    background-repeat: no-repeat;
	/* End Source */
}
#homepage button img {
	width: 100%;
	height: 100%;
	filter: blur(2px);
}
/* Source: https://css-tricks.com/design-considerations-text-images/ */
#homepage button h1, #homepage button h2 {
	z-index: 1;
	margin: 0;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 100%;
	text-shadow: 3px 4px 8px black;
}
#homepage button h1 {
	font-size: 2vmax;
}
.col {
	width: 25vh;
	margin: 96px;
}
.title {
	text-align: center;
	text-shadow: 3px 4px 8px black;
	font-weight: bold;
	height: 40vh;
	width: 100%;
}
.title h1 {
	position: relative;
	margin: auto;
	top: 25%;
	/* Source: https://css-tricks.com/viewport-sized-typography/ */
	font-size: 3.7vmax;
	display: none;
}
.title h5 {
	position: relative;
	margin: auto;
	top: 21%;
	left: 46%;
	font-size: 1vmax;
	display: none;
}

