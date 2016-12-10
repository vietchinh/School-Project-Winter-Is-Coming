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
	<body><!--onload="onload();"--> 
		<div id="homepage">
			<div id="navigationbar">
			</div>
			<div class="title">
				<h1><?php echo $seasons[$season]["headertext"] ?></h1>
				<h5>- Yoko Ono</h5>
			</div>
			<div class="box-wrapper">
				<div class="box-1">
						<button onclick="htmlcss();">
								<img src="../Website Images/html.jpg">
							<h1> HTML/CSS </h1>
						</button>
				</div>
				<div class="box-2">
					<button onclick="javascript();">
						<img src="../Website Images/javascript.png">
						<h1> Javascript </h1>
					</button>
				</div>
				<div class="box-3">
					<button onclick="php();">
						<img src="../Website Images/php.jpg">
						<h1> PHP </h1>
					</button>
				</div>
				<div class="box-4">
					<button onclick="making();">
						<img src="../Website Images/html.jpg">
						<h1> Making Of This website </h1>
					</button>
				</div>
			</div>		
		</div>
	
	<!--<div id="contentselectpage">
			<div id="menubar">
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