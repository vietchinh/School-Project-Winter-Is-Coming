<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="css/style.php" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="javascript/Javascript.js"></script>
		<title> WINTER IS COMING </title>
		<?php require_once "seasonpicker/seasonpicker.php"; require_once "array/array.php"; ?>
	</head>
	<body onload="onload();"> 
		<div id="homepage">
			<div id="title">
				<h1><?php echo $seasons[$season]["headertext"] ?></h1>
				<h5>- Yoko Ono</h5>
			</div>
			<div id="box-wrapper">
				<div id="box-1">
					<button onclick="htmlcss();">
							<img src="../Website Images/html.jpg">
						<h1> HTML/CSS </h1>
					</button>
				</div>
				<div id="box-2">
					<button onclick="javascript();">
						<img src="../Website Images/javascript.png">
						<h1> Javascript </h1>
					</button>
				</div>
				<div id="box-3">
					<button onclick="php();">
						<img src="../Website Images/php.jpg">
						<h1> PHP </h1>
					</button>
				</div>
				<div id="box-4">
					<button onclick="making();">
						<img src="../Website Images/html.jpg">
						<h1> Hoe is dit website opgebouwd? </h1>
					</button>
				</div>
			</div>
		</div>
		<div id="contentselectpage">
			<div id="navigationbar">
				<div id="icon"></div>
				<button onclick="making();" style="width: 250px">Hoe is dit website opgebouwd?</button>
				<button onclick="php();">PHP</button>
				<button onclick="javascript();">Javascript</button>
				<button onclick="htmlcss();">HTML/CSS</button>
				<button onclick="home();">Home</button>
			</div>
			<div id="titlebar">
			</div>
			<div id="contentselect">
				<button id="history">
				</button>
				<button id="used">
				</button>
				<button id="syntax">
				</button>
			</div>
		</div>
	</body>
</html>

