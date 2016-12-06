<?php
	/* Debugging Area*/
	$fakeyear = date("Y", mktime(0, 0, 0, 1, 1, 2016));
	$fakedate = mktime(0, 0, 0, 12, 6, $fakeyear);
	if ($fakedate >= mktime(0, 0, 0, 3, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 6, 21, $fakeyear)){
		$season = "spring";
	}	
	elseif ($fakedate >= mktime(0, 0, 0, 6, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 10, 21, $fakeyear)){
		$season = "summer";
	}
	elseif ($fakedate >= mktime(0, 0, 0, 10, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 12, 21, $fakeyear)){
		$season = "autumn";
	}
	else {
		$season = "winter";
	}
	$spring = $fakedate >= mktime(0, 0, 0, 3, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 6, 21, $fakeyear);
	$summer = $fakedate >= mktime(0, 0, 0, 6, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 10, 21, $fakeyear);
	$autumn = $fakedate >= mktime(0, 0, 0, 10, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 12, 21, $fakeyear) ;
	echo "is current date larger than 03-21-currentyear AND smaller than 06-21-currentyear? ";
	echo var_dump($spring). "<br />";
	echo "is current date larger than 21-12-currentyear AND smaller than 10-21-currentyear? ";
	echo var_dump($summer). "<br />";
	echo "is current date larger than 10-21-currentyear AND smaller than 12-21-currentyear? ";
	echo var_dump($autumn). "<br />";
	echo "<br />" . $season . "<br />" ;
?>
