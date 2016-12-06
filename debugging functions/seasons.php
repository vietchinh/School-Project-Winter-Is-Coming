<?php
	/* Debugging Area*/
	$fakeyear = date("Y", mktime(0, 0, 0, 1, 1, 2016));
	$fakedate = mktime(0, 0, 0, 1, 1, $fakeyear);
	function currentyearplusone($fakedate, $fakeyear){
		if ($fakedate == mktime(0,0,0,12,21,$fakeyear)){
			$fakeyearplusone = $fakeyear + 1;
			return $fakeyearplusone;
		}
		else {
			return $fakeyear;
		}
	}
	$fakeyearplusone = currentyearplusone($fakedate, $fakeyear);
	if ($fakedate >= mktime(0, 0, 0, 12, 21, $fakeyearplusone) || $fakedate < mktime(0, 0, 0, 3, 21, $fakeyearplusone)) {
		$season = "winter";
	}
	elseif ($fakedate >= mktime(0, 0, 0, 3, 21, $fakeyearplusone) && $fakedate < mktime(0, 0, 0, 6, 21, $fakeyearplusone)){
		$season = "spring";
	}	
	elseif ($fakedate >= mktime(0, 0, 0, 6, 21, $fakeyearplusone) && $fakedate < mktime(0, 0, 0, 10, 21, $fakeyearplusone)){
		$season = "summer";
	}
	elseif ($fakedate >= mktime(0, 0, 0, 10, 21, $fakeyearplusone) && $fakedate < mktime(0, 0, 0, 12, 21, $fakeyearplusone)){
		$season = "autumn";
	}
	$winter = $fakedate >= mktime(0, 0, 0, 12, 21, $fakeyearplusone) || $fakedate < mktime(0, 0, 0, 3, 21, $fakeyearplusone);
	$spring = $fakedate >= mktime(0, 0, 0, 3, 21, $fakeyearplusone) && $fakedate < mktime(0, 0, 0, 6, 21, $fakeyearplusone);
	$summer = $fakedate >= mktime(0, 0, 0, 6, 21, $fakeyearplusone) && $fakedate < mktime(0, 0, 0, 10, 21, $fakeyearplusone);
	$autumn = $fakedate >= mktime(0, 0, 0, 10, 21, $fakeyearplusone) && $fakedate < mktime(0, 0, 0, 12, 21, $fakeyearplusone) ;
	echo "is current date larger than 21-12-currentyear OR smaller than 21-3-currentyear? ";
	echo var_dump($winter) . "<br />";
	echo "is current date larger than 03-21-currentyear AND smaller than 06-21-currentyear? ";
	echo var_dump($spring). "<br />";
	echo "is current date larger than 21-12-currentyear AND smaller than 10-21-currentyear? ";
	echo var_dump($summer). "<br />";
	echo "is current date larger than 10-21-currentyear AND smaller than 12-21-currentyear? ";
	echo var_dump($autumn). "<br />";
	echo "<br />" . $season . "<br />" . $fakeyearplusone; 
?>
