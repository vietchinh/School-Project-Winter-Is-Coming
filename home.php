<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="css/style.php" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="javascript/Javascript.js"></script>
		<title> WINTER IS COMING </title>
		<?php require_once "seasonpicker/seasonpicker.php"; require_once "array/array.php" ?>
	</head>
	<body onload="onload();">
		<div id="homepage">
			<div class="title">
				<h1><?php echo $seasons[$season]["headertext"] ?></h1>
				<h5>- Yoko Ono</h5>
			</div>
			<button onclick="htmlcss();">
				<h1> HTML/CSS </h1>
				<img src="../Website Images/html.jpg">
			</button >
			<button onclick="javascript();">
				<h1> Javascript </h1>
				<img src="../Website Images/javascript.png">
			</button>
			<button onclick="php();">
				<h1> PHP </h1>
				<img src="../Website Images/php.jpg">
			</button>
			<button onclick="making();">
				<h2> Making Of This website </h2>
				<img src="../Website Images/html.jpg">
			</button>
		</div> 
<!--		<div id="contentselectpage">
			<div id="menubar">
			</div>
			<div id="contenttitle">
			</div>
			<div id="contentselectbox">
				<button id="contentselectbox1">
					<div id="contentselectboxtitle">
						<h1> title </h1>
					</div>
					<p> text </p>
				</button>
				<button id="contentselectbox2">
					<div id="contentselectboxtitle">
						<h1> title </h1>
					</div>
					<p> text </p>
				</button>
				<button id="contentselectbox3">
					<div id="contentselectboxtitle">
						<h1> title </h1>
					</div>
					<p> text </p>
				</button>
			</div>
		</div>-->
	</body>
</html>