<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="css/style.php" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="javascript/Javascript.js"></script>
		<title> WINTER IS COMING </title>
		<?php session_start(); ?>
	</head>
	<body>
	<?php
	require_once("array/array.php");
			print_r($seasons);
			echo date("j m") . "<br />";
	
	/* Debugging Area 
	$fakeyear = date("Y", mktime(0, 0, 0, 1,  1, 2017));
	$fakedate = time();
		if ($fakedate >= mktime(0, 0, 0, 12, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 3, 21, $fakeyear + 1) || $fakedate <= mktime(0, 0, 0, 3, 20, $fakeyear)){
			$season = "winter";
		}
		elseif ($fakedate >= mktime(0, 0, 0, 3, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 6, 21, $fakeyear)){
			$season = "lente";
		}	
		elseif ($fakedate >= mktime(0, 0, 0, 6, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 10, 21, $fakeyear)){
			$season = "zomer";
		}
		elseif ($fakedate >= mktime(0, 0, 0, 10, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 12, 21, $fakeyear)){
			$season = "herfts";
		}

		$winter = $fakedate >= mktime(0, 0, 0, 12, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 3, 21, $fakeyear + 1) || $fakedate <= mktime(0, 0, 0, 3, 20, $fakeyear) ;
		$lente = $fakedate >= mktime(0, 0, 0, 3, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 6, 21, $fakeyear);
		$zomer = $fakedate >= mktime(0, 0, 0, 6, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 10, 21, $fakeyear);
		$herfts = $fakedate >= mktime(0, 0, 0, 10, 21, $fakeyear) && $fakedate < mktime(0, 0, 0, 12, 21, $fakeyear) ;
		echo var_dump($winter). "<br />" . var_dump($lente). "<br />" . var_dump($zomer) . "<br />" . var_dump($herfts); 
		
		echo $season; */
	?>

	<div class="title">
		<h1>Autumn passes and one remembers one's reverence<h1>
	</div>
	<div class="col-1">
	</div>
	<div class="col-2">
	</div>
	<div class="col-3">
	</div>
	<div class="col-4">
	</div>
	</body>
</html>