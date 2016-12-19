<?php	
	$currentdate = mktime(0, 0, 0, 12, 19, date("y"));
	#$currentdate = time();
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