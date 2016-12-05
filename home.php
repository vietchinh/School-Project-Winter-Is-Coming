<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="css/style.php" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="javascript/Javascript.js"></script>
		<title> WINTER IS COMING </title>
		
	</head>
	<body>
	<?php
	require_once("array/array.php");
			print_r($seasons);
			echo date("j m") . "<br />";
	$currentdate = getdate();
	$fakedate = date("d m", mktime(0, 0, 0, 12, 21 , 0));
	$year = date("Y L", mktime(0, 0, 0, 0, 0, 2021));
	echo $year . "<br/>";
	if (date("L", mktime(0, 0, 0, 0, 0, 2001)) == 1) {
		echo  . "<br />";
	}
	else {
		echo "NO LEAP YEAR";
	}
	if ($fakedate == date("d m", mktime(0, 0, 0, 12, 21, 0)) ){
		echo "WINTER!";
	}
	elseif ($fakedate == date("d m", mktime(0, 0, 0, 3, 21, 0)) ){
		echo "LENTE!";
	}	
	elseif ($fakedate == date("d m", mktime(0, 0, 0, 6, 21, 0)) ){
		echo "ZOMER!";
	}
	elseif ($fakedate == date("d m", mktime(0, 0, 0, 10, 21, 0)) ){
		echo "HERFTS!";
	}	
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