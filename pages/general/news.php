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
				<h1>Today's News</h1>
				<div class="scrollable">
					<h2>Trump election: Priebus and Bannon given key roles</h2>
					<p>
						US President-elect Donald Trump has awarded key roles in his incoming team to a top Republican party official and a right-wing media chief.
						Reince Priebus, chairman of the Republican National Committee (RNC), will be his chief of staff.
						In this role, he will set the tone for the new White House and act as a conduit to Congress and the government.
						Stephen Bannon, from the Breitbart News Network, will serve as Mr Trump's chief strategist.
						Mr Bannon stepped aside as executive chairman of Breitbart - a combative conservative site with an
						anti-establishment agenda - to act as Mr Trump's campaign chief.
						Meanwhile, in the president-elect's first interview, with US broadcaster CBS, Mr Trump said:
						<ul>
							<li>He would deport or jail up to three million illegal migrants with criminal links</li>
							<li>Future Supreme Court nominees would be "pro-life" - meaning they oppose abortion - and defend the 
							constitutional right to bear arms</li>
							<li>He will not seek to overturn the legalisation of same-sex marriage</li>
							<li>He will forgo the president's $400,000 salary, taking $1 a year instead</li>
						</ul>
					</p>
					<p>
						In a statement released by his campaign, Mr Trump described Mr Priebus and Mr Bannon as "highly qualified 
						leaders who worked well together on our campaign and led us to a historic victory".
						Mr Priebus, 44, acted as a bridge between Mr Trump and the Republican party establishment during the campaign. 
						He is close to House Speaker Paul Ryan, a fellow Wisconsinite who could be instrumental in steering the new 
						administration's legislative agenda.
					</p>
				</div>
				2018 kikil-jeye
			</div>
		</div>
	</body>
</html>