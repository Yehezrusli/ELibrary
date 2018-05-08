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
		<link rel="stylesheet" href="../../lib/font-awesome.min.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../style/style.css">
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
				margin-top: 10px;
				margin-bottom: 10px;
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
				width: 97%;
				height: 40px;
				padding-left: 10px;
				font-size: 20px;
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
<<<<<<< HEAD
			
			p{
				font-size: 20px;
				margin-left: 10px;
				padding-top: 1%;
				display: inline;
			}

			.modal {
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(204, 198, 198);
			background-color:  rgba(204, 198, 198, 0.3);
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
=======
>>>>>>> b40edd4769935e4d3cc900bf8c9d3cd3a0e39365

		.top-nav {
			margin: 0;
			font-size: 20px;
			float: right;
			
		}
		li{
			display: inline-block;
			padding: 5px;
		}
		li a:hover{
			padding: 20px;
			background-color: #5555ff;
		}

		.nav-bar{
			width: 18%;
			height: 95%;
			margin: 20px 0px 20px 1%;
			background-color:  rgb(204, 198, 198);
			float: left;
		}
		a{
			padding-left: 10px;
			padding-right: 10px;
			text-decoration: none;
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
			margin: 0px;
			padding-top: 5px;
			float: top;
			border: 0.3px solid;
		}
		h1{
			margin: 0px;
			text-align: center;
			line-height: 70px; 
			padding:0px;
		}

		h3{
			margin: 0px;
			padding: 0px;
			text-align: center;
		}

		.scrollable{
			overflow-y: scroll;
			width: 100%;
			background-color:  rgb(177, 177, 192);
			height: 80%;
		}

		#logged{
			margin-top: 1%;
		}

		#temp{
			padding:0px;
			margin: 0px;
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
						echo '<p id="logged">You are logged in as '.$row['nama']."</p>";
					}
				}
			?>
			<div class="top-nav">
				<li><a href=""><i class="fa fa-sign-out"></i></a></li>
			</div>
			<div class="top-nav">
				<li><a href=""><i class="fa fa-user"></i></a></li>
			</div>
			<div class="top-nav">
				<li><a href=""><i class="fa fa-envelope"></i></a></li>
			</div>
			<div class="top-nav">
				<li><a href=""><i class="fa fa-newspaper-o"></i></a></li>
			</div>
			<div class="top-nav" style="background-color: blue;">
				<li><a href=""><i class="fa fa-home"></i></a></li>
			</div>
		</div>
		<div class="wrap">
			<div class="nav-bar">
				<div id="nav-header">
					<h1>Menu</h1>
				</div>
				<div class="nav-content">
					<a id="temp" href=""><h3>Book List</h3></a>
				</div>
				<div class="nav-content">
					<a id="temp" href=""><h3>Borrowing History</h3></a>
				</div>
				<div class="nav-content">
					<a id="temp" href=""><h3>Download Journals</h3></a>
				</div>
			</div>
			<div class="content">
				<h1>Welcome to E-Library</h1>
				<div class="scrollable">
					dolor amet ipsum lalalaala
				</div>
				2018 kikil-jeye
			</div>
		</div>
	</body>
</html>