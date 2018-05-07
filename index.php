<!DOCTYPE html>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="lib/w3.css">
		<link rel="stylesheet" href="lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="style/style.css">
		<style>
			.w3-theme-l2{
				color: inherit;
				background-color: inherit;
				padding: 20px;
			}
			.w3-theme-d1{
				color: #fff !important;
				background-color: #456185 !important;
				font-size: 45px;
			}
			#temp{
				margin-left: 38%;
			}
		</style>
	</head>
	<body class="w3-theme-dark">
		<!-- CONTENT -->
		<div>
			<div>
				<img src="img/banner.jpg" class="header">
			</div>
			<div class="w3-theme-l2">
				<input type="button" class="w3-theme-d1" id="temp" value="SIGN UP" onclick="window.location='pages/general/signup.php';">
				<input type="button" class="w3-theme-d1" value="LOGIN" onclick="window.location='pages/general/login.php';">
			</div>
		</div>
	</body>
</html>