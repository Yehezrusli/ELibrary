<?php  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../style/style.css">
		<style>
		.w3-theme-l2{
			color: inherit;
			background-color: inherit;
			padding: 20px;
		}
		.w3-theme-d1{
			color: #fff !important;
			background-color: #456185 !important;
			font-size: 200%;
		}
		.temp{
			width: 16%;
			margin: auto;
		}
		#text{
			color: white;
			position: absolute;
			font-size: 8vw;
			margin: 0;
			margin-top: 6%;
		}
		#textarea{
			width: 30%;
			height: 30%;
			margin-right: auto;
			margin-left: auto;
		}

		#logout{
			font-size: 2vw;
		}

		.temp2{
			width: 28%;
			margin: auto;
		}
		

	</style>
</head>
<body class="w3-theme-dark">
	<!-- CONTENT -->
	<div>
		<div id="textarea">
				<p id="text">e-Library</p>
			</div>
		<div>
			<img src="../../img/banner.jpg" class="header">
		</div>
		<div class="w3-theme-l2">
			<div class="temp2">
				<p id="logout">You have successfully loged out</p>
			</div>
			<div class="temp">	
				<input type="button" class="w3-theme-d1" value="SIGN UP" onclick="window.location='signup.php';">
				<input type="button" class="w3-theme-d1" value="LOGIN" onclick="window.location='login.php';">
			</div>
		</div>
	</div>
</body>
</html>