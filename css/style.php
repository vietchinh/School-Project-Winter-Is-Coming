<?php
    header("Content-type: text/css; charset: UTF-8");
	$seasons = array (
		"winter" => array ("globalcolor"=>"b4e4ff", "darkerglobalcolor"=>"69aad1"),
		"autumn" => array ("globalcolor"=>"227,205,161", "headercolor"=>"205,173,146", "paragraphcolor"=>"755230")
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
	background: url("../../Website Images/<?php echo $season; ?>.jpg") no-repeat fixed;
	background-size: cover;
	font-family: 'Raleway', sans-serif;
	display: inline-flex;
	flex-flow: row wrap;
}
button {
	border: none;
}
.col {
	width: 25vh;
	margin: 96px;
}
.title {
	text-align: center;
	text-shadow: 2px 2px 5px black;
	font-weight: bold;
	height: 31vh;
	width: 100%;
	color: rgb(<?php echo $seasons[$season]["headercolor"]; ?>);
}
.title h1 {
	position: relative;
	margin: auto;
	top: 25%;
	font-size: 7vh;
}
.title h5 {
	position: relative;
	margin: auto;
	top: 21%;
	left: 45%;
	font-size: 2vh;
}
.box {
	width: 250px;
	height: 250px;
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
