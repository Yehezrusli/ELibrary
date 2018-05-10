<?php
	include("../../connection.php");
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

			#login{
				margin-top: 20px;
				background-color:  rgb(204, 198, 198);
				width: 40%;
				height: inherit;
				margin-left: auto;
				margin-right: auto;
				padding: 10px;
			}

			input[type=text] {
				margin: 0px;
				margin-top: 10px;
				margin-bottom: 10px;
				width: 100%;
				height: 20%;
				padding-left: 10px;
				font-size: 20px;
			}

			input[type=password] {
				margin: 0px;
				margin-top: 10px;
				margin-bottom: 10px;
				width: 100%;
				height: 20%;
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
				font-size: 100%;
				padding: 5px;
				padding-left: 10px;
				padding-right: 10px;	
			}

			input[type=submit] {
            width: 20%;
			height: 20%;
			margin: 0;
			}
			
			p{
				display: block;
				font-size: 20px;
				color: red;
				margin: 0;
				text-align: center;
			}

			#text{
				color: white;
				position: absolute;
				font-size: 4vw;
				margin: 0;
				margin-top: 2%;
			}
			#textarea{
				width: 20%;
				height: 20%;
				margin-right: auto;
				margin-left: auto;
			}

		</style>
	</head>
	<body>
		<!-- CONTENT -->
		<div id="image-box">
			<div id="textarea">
				<p id="text">e-Library</p>
			</div>
			<img src="../../img/banner2.jpg" class="header">
		</div>
		<div id="login">
			<h1>Login</h1>
			<form action="" method="post">
				<input type="text" name="uname" placeHolder="Username"><br>
				<input type="password" name="pass" placeHolder="Password"><br>
				<input type="submit" name="login" id="button" onsubmit="blok()" value="LOGIN">
				<input type="submit" name="cancel" id="button" value="CANCEL">
			</form>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php
				session_start();
				if(isset($_POST['cancel'])){
					header("Location:../../index.php");
				}
				
				if(isset($_POST['login'])){
					if(isset($_POST['uname'])){
						$uname = $_POST['uname'];
					}
					if(isset($_POST['pass'])){
						$pass = $_POST['pass'];
					}
					$query = "SELECT pass FROM anggota WHERE username = '$uname'";
					$result = $con->query($query);

					if(!isset($uname) || empty($uname)){
						echo '<p>Please enter your username and password</p>';
					} else if(!isset($pass) || empty($pass)){
						echo '<p>Please enter your username and password</p>';
					} else if($result->num_rows == 0){
						echo '<p>WRONG USERNAME</p>';
					} else{
						while($row = $result->fetch_array()){
							if($row['pass'] == md5("$pass")){
								$_SESSION['uname'] = $uname;
								header("Location:../user/usr.php");
							}else{
								echo "<p>Wrong Password</p>";
							}
						}
					}
				}
			?>
		</div>
	</body>
</html>