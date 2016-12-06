<?php
	/* Debugging Area*/
	$fakedate = mktime(0, 0, 0, 10, 21, 0);
	if ($fakedate >= mktime(0, 0, 0, 12, 21, 0) || $fakedate < mktime(0, 0, 0, 3, 21, 0)) {
		$season = "winter";
	}
	elseif ($fakedate >= mktime(0, 0, 0, 3, 21, 0) && $fakedate < mktime(0, 0, 0, 6, 21, 0)){
		$season = "spring";
	}	
	elseif ($fakedate >= mktime(0, 0, 0, 6, 21, 0) && $fakedate < mktime(0, 0, 0, 10, 21, 0)){
		$season = "summer";
	}
	elseif ($fakedate >= mktime(0, 0, 0, 10, 21, 0) && $fakedate < mktime(0, 0, 0, 12, 21, 0)){
		$season = "autumn";
	}
	$winter = $fakedate >= mktime(0, 0, 0, 12, 21, 0) || $fakedate < mktime(0, 0, 0, 3, 21, 0) ;
	$spring = $fakedate >= mktime(0, 0, 0, 3, 21, 0) && $fakedate < mktime(0, 0, 0, 6, 21, 0);
	$summer = $fakedate >= mktime(0, 0, 0, 6, 21, 0) && $fakedate < mktime(0, 0, 0, 10, 21, 0);
	$autumn = $fakedate >= mktime(0, 0, 0, 10, 21, 0) && $fakedate < mktime(0, 0, 0, 12, 21, 0) ;
	echo "is current date larger than 21-12-currentyear OR smaller than 21-3-currentyear? ";
	echo var_dump($winter) . "<br />";
	echo "is current date larger than 03-21-currentyear AND smaller than 06-21-currentyear? ";
	echo var_dump($spring). "<br />";
	echo "is current date larger than 21-12-currentyear AND smaller than 10-21-currentyear? ";
	echo var_dump($summer). "<br />";
	echo "is current date larger than 10-21-currentyear AND smaller than 12-21-currentyear? ";
	echo var_dump($autumn). "<br />";
	echo "<br />" . $season; 
?>
