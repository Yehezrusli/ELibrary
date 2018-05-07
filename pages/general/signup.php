<?php
	include("../../connection.php");
	$should_show_modal = '0';
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

			#signup{
				margin-top: 20px;
				background-color:  rgb(204, 198, 198);
				width: 40%;
				height: 100%;
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
			
			p{
				font-size: 20px;
				margin-left: 10px;
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

        .modal-content {
            background-color: rgba(204, 198, 198);
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
			width: 80%;
			height: 30%;
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
		</style>
	</head>
	<body>
		<!-- CONTENT -->
		<div id="image-box">
			<img src="../../img/banner2.jpg" class="header">
		</div>

		<div id="signup">
			<h1>Create New Account</h1>
			<form action="" method="post">
				<input type="text" name="uname" placeHolder="Username"><br>
				<input type="password" name="pass" placeHolder="Password"><br>
				<input type="password" name="cpass" placeHolder="Confirm Password"><br>
				<input type="text" name="name" placeHolder="Name"><br>
				<input type="text" name="phone" placeHolder="Phone"><br>
				<input type="text" name="adress" placeHolder="Adress">
				<input type="submit" name="register" id="button" onsubmit="blok()" value="REGISTER">
				<input type="submit" name="cancel" id="button" value="CANCEL">
		</form>
			<?php				
				if(isset($_POST['register'])){
					if(isset($_POST['uname']) && !is_null($_POST['uname'])){
						$uname = $_POST['uname'];
					}
					if(isset($_POST['pass']) && !is_null($_POST['pass'])){
						$pass = $_POST['pass'];
						$hidepass = md5("$pass");
					}
					if(isset($_POST['cpass']) && !is_null($_POST['cpass'])){
						$cpass = $_POST['cpass'];
					}
					if(isset($_POST['name']) && !is_null($_POST['name'])){
						$nama = $_POST['name'];
					}
					if(isset($_POST['phone']) && !is_null($_POST['phone'])){
						$phone = $_POST['phone'];
					}
					if(isset($_POST['adress']) && !is_null($_POST['adress'])){
						$alamat = $_POST['adress'];

					if($pass != $cpass){
						echo "<p>Password does not match</p>";
					}else{
						$query = "INSERT INTO anggota(username, pass, nama, telepon, alamat) VALUES ('$uname', '$hidepass', '$nama', '$phone', '$alamat')";
						if($con->query($query)){
							$should_show_modal='1';
						}
						else{
							$should_show_modal='0';
						}
						
					}
				}
			}

				if(isset($_POST['cancel'])){
					header("Location:../../index.php");
					$should_show_modal = '0';
				}
				?>
		</div>
		<?php if($should_show_modal == '1'): ?>
			<div id="myModal" class="modal">
				<div class="modal-content">
					<span class="close" onclick="none()">&times;</span>
					<?php
					echo '<p>You have registered as '.$nama.' </p>'
					?>
					<p>Please login to continue.</p>
					<form action="" method="post">
					<input type="submit" name="login" id="button" onsubmit="blok()" value="LOGIN">
					<input type="submit" name="cancel" id="button" value="CANCEL">
					</form>
				</div>
			</div>
		<?php endif; ?>
		<?php
			if(isset($_POST['login'])){
				header("Location:login.php");
				$should_show_modal = '0';
			}
		?>
	</body>
	
</html>