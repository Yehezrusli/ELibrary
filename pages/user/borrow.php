<?php
	include("../../connection.php");
	session_start();
	$uname = $_SESSION['uname'];
	$query = "SELECT nama FROM anggota WHERE username = '$uname'"
?>
<!DOCTYPE html>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../style/style.css">
		<link rel="stylesheet" href="../../lib/font-awesome.min.css">
		<link rel="stylesheet" href="../../lib/font-awesome.css">
		<style>
			input{
				float: left;
				margin: 40px;
				width: 400px;
			}
			.w3-theme-l2{
				width: 50%;
				margin: auto;
			}

			#image-box{
				margin-top: 10px;
				width: 99%;
				margin-right: auto;
				margin-left: auto;
				box-shadow: 10px 10px 5px black;
			}

			html, body{
				background-color: rgb(53, 50, 50);
				height: 100%;
			}

			#signup{
				margin-top: 20px;
				margin-bottom: 20px;
				background-color:  rgb(204, 198, 198);
				width: 99%;
				box-shadow: 10px 10px 5px black;
				height: 40px;
				margin-left: auto;
				margin-right: auto;
			}

			input[type=text] {
				margin: 10px;
				margin-top: 10px;
				margin-bottom: 10px;
				height: 30px;
				padding-left: 10px;
			}

			select, label {
				margin: 10px;
				margin-top: 10px;
				margin-bottom: 10px;
				height: 30px;
				padding-left: 10px;
			}

			input[type=password] {
				margin: 10px;
				margin-top: 10px;
				margin-bottom: 10px;
				width: 97%;
				height: 40px;
				padding-left: 10px;
				font-size: 20px;
			}

			h1{
				margin-left: 10px;
			}

			#button{
				background-color : black;
				color: white;
				margin-left: 10px;
				font-size: 18px;
				padding: 5px;
				padding-left: 10px;
				padding-right: 10px;	
			}

			input[type=submit] {
            width: 100px;
			height: 40px;
			margin: 0;
			}

			.top-nav {
				margin: 5px;
				margin-left: 10px;
				margin-right: 10px;
				font-size: 20px;
				float: right;
				
			}
			.li-header{
				display: inline-block;
			}
			li a:hover{
				padding: 15px;
				background-color: #5555ff;
			}

			.nav-bar{
				width: 18%;
				height: 95%;
				margin: 20px 0px 20px 1%;
				background-color:  rgb(204, 198, 198);
				float: left;
			}

			.wrap{
				display: inline;
			}

			.content{
				box-shadow: 2px 10px 5px black;
				margin: 20px 1% 20px 0px;
				height: 95%;
				width: 80%;
				background-color:  rgb(154, 150, 150);
				float: left;
			}

			#nav-header{
				background-color:  rgb(124, 120, 120);
				height: 70px;
				margin: 0px;
			}
			.nav-content{
				background-color:  rgb(184, 180, 180);
				height: 70px;
				margin: 0px;
				float: top;
			}
			h1, h3{
				margin: auto;
				text-align: center;
				vertical-align: middle;
				line-height: 70px; 
			}
			.scrollable{
				overflow-y: scroll;
				width: 100%;
				background-color:  rgb(177, 177, 192);
				height: 80%;
			}
			table{
				width: 97%;
				margin: auto;
			}
			th{
				text-align: left;
				background-color:  rgb(124, 120, 120);
			}
			.row-odd{
				background-color:  rgb(224, 218, 224);
			}
			.row-even{
				background-color:  rgb(204, 198, 198);
			}
		</style>
	</head>
	<body>
		<!-- CONTENT -->
		<div id="image-box">
			<img src="../../img/banner2.jpg" class="header">
		</div>
		<div id="signup">
			<?php
				if($res = $con->query($query)){
					while($row = $res->fetch_array()){ 
						echo "<p>You are logged in as ".$row['nama']."</p>";
					}
				}
			?>
			<div class="top-nav">
				<li class="li-header"><a href=""><i class="fa fa-sign-out"></i></a></li>
			</div>
			<div class="top-nav">
				<li class="li-header"><a href=""><i class="fa fa-user"></i></a></li>
			</div>
			<div class="top-nav">
				<li class="li-header"><a href=""><i class="fa fa-envelope"></i></a></li>
			</div>
			<div class="top-nav">
				<li class="li-header"><a href=""><i class="fa fa-newspaper-o"></i></a></li>
			</div>
			<div class="top-nav">
				<li class="li-header"><a href=""><i class="fa fa-home"></i></a></li>
			</div>
		</div>
		<div class="wrap">
			<div class="nav-bar">
				<div id="nav-header">
					<h1>Menu</h1>
				</div>
				<div class="nav-content">
					<a href=""><h3>Book List</h3></a>
				</div>
				<div class="nav-content">
					<a href=""><h3>Borrowing History</h3></a>
				</div>
				<div class="nav-content">
					<a href=""><h3>Download Journals</h3></a>
				</div>
			</div>
			<div class="content">
				<h1 style="display:inline">Borrowing History</h1>
				<div class="scrollable">
					<table>
						<tr>
							<th>Code</th>
							<th>Title</th>
							<th>Author</th>
							<th>Publication Year</th>
							<th>Publisher</th>
							<th>Category</th>
						</tr>
						<tr class="row-odd">
							<td>8574</td>
							<td>Operating System</td>
							<td>Tanembaum idola elikacrut</td>
							<td>19sekian</td>
							<td>Pearson</td>
							<td>Book of Death</td>
						</tr>
						<tr class="row-even">
							<td>e</td>
							<td>f</td>
							<td>e</td>
							<td>f</td>
							<td>e</td>
							<td>f</td>
						</tr>
					</table>
				</div>
				2018 kikil-jeye
			</div>
		</div>
	</body>
</html>