<?php
    header("Content-type: text/css; charset: UTF-8");
	require_once("../array/array.php");
	$currenttime = time();
	$currentyear = date("Y");
		if ($currenttime >= mktime(0, 0, 0, 12, 21, $currentyear ) && $currenttime < mktime(0, 0, 0, 3, 21, $currentyear + 1) || date("Y") < mktime(0, 0, 0, 3, 21, $currentyear )){
			$season = "winter";
		}
		elseif ($currenttime >= mktime(0, 0, 0, 3, 21, date("Y") ) && $currenttime < mktime(0, 0, 0, 6, 21, $currentyear)){
			$season = "lente";
		}	
		elseif ($currenttime >= mktime(0, 0, 0, 6, 21, date("Y") ) && $currenttime < mktime(0, 0, 0, 10, 21, $currentyear)){
			$season = "zomer";
		}
		elseif ($currenttime >= mktime(0, 0, 0, 10, 21, date("Y") ) && $currenttime < mktime(0, 0, 0, 12, 21, $currentyear)){
			$season = "herfst";
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
	margin: 109px;
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
