<?php
    header("Content-type: text/css; charset: UTF-8");
	$seasons = array (
		"winter" => array ("globalcolor"=>"b4e4ff", "darkerglobalcolor"=>"69aad1"),
		"autumn" => array ("globalcolor"=>"227,205,161", "headercolor"=>"205,173,146", "paragraphcolor"=>"112,82,48")
	);
	$currentdate = time();
	if ($currentdate >= mktime(0, 0, 0, 3, 21, date("Y") ) && $currentdate < mktime(0, 0, 0, 6, 21, date("Y") )){
		$season = "spring";
	}	
	elseif ($currentdate >= mktime(0, 0, 0, 6, 21, date("Y") ) && $currentdate < mktime(0, 0, 0, 10, 21, date("Y"))){
		$season = "summer";
	}
	elseif ($currentdate >= mktime(0, 0, 0, 10, 21, date("Y") ) && $currentdate < mktime(0, 0, 0, 12, 21, date("Y") )){
		$season = "autumn";
	}
	else {
		$season = "winter";
	}
?>
body {
	font-family: 'Raleway', sans-serif;
	margin: auto;
	position: fixed;
	background-color: rgb(<?php echo $seasons[$season]["globalcolor"]; ?>)
}
h1, h2, h3, h4, h5, h6 {
	color: rgb(<?php echo $seasons[$season]["headercolor"]; ?>);
}
p {
	color: rgb(<?php echo $seasons[$season]["paragraphcolor"]; ?>)
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
	/* Source: http://stackoverflow.com/questions/4062001/css3-border-opacity */
	border: 5px solid rgba(<?php echo $seasons[$season]["globalcolor"]; ?>,0.3);
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
#homepage button h1 {
	z-index: 1;
	margin: 0;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.col {
	width: 25vh;
	margin: 96px;
}
.title {
	text-align: center;
	text-shadow: 2px 2px 5px black;
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
}
.title h5 {
	position: relative;
	margin: auto;
	top: 21%;
	left: 46%;
	font-size: 1vmax;
}

