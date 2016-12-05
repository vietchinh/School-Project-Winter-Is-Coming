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
			$season = "herfts";
		}

?>
body {
	background: url("../../Website Images/<?php echo $season; ?>.jpg") no-repeat fixed;
	background-size: cover;
	font-family: 'Raleway', sans-serif;
}
.title {
	color: #<?php echo $seasons[$season]["globalcolor"]; ?>
}