<?php
    header("Content-type: text/css; charset: UTF-8");
	$seasons = array (
		"winter" => array ("globalcolor"=>"b4e4ff", "darkerglobalcolor"=>"69aad1"),
		"autumn" => array ("globalcolor"=>"e3cda1", "headercolor"=>"cdad92", "paragraphcolor"=>"755230")
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
	font-weight: bold;
	height:31vh;
	width: 100%;
	color: #<?php echo $seasons[$season]["globalcolor"]; ?>;
}
.title h1 {
	margin: auto;
}
.box {
	width: 250px;
	height: 250px;
	border: 5px solid red;
	border-radius: 10px;
	outline: none;
	/* Source: http://stackoverflow.com/questions/22672368/how-to-make-a-transparent-html-button */
	cursor: pointer;
	background-color: Transparent;
    background-repeat:no-repeat;
}
