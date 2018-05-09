<?php
	include("../../connection.php");
	session_start();
	$uname = $_SESSION['uname'];
	$query2 = "SELECT nama FROM anggota WHERE username = '$uname'"

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
			
			p{
				font-size: 20px;
				margin-left: 10px;
				padding-top: 1%;
				display: inline;
			}

			.top-nav {
				margin: 0;
				font-size: 20px;
				float: right;
				
			}
			#list-header{
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
				border-style: solid;
				border-width: 0px 0px 1px 0px;
			}
			h1{
				margin: 0px;
				text-align: center;
				vertical-align: middle;
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

			#isi-content{
				margin:0px;
				padding0px;	
			}

			#list{
				font-size: 20px;
				margin: 0;
				padding: 0;
				list-style-type: square;
			}

			#about-us{
				margin-left: 10px;
			}

			.profile{
				width: 20%;
				margin-left: auto;
				margin-right: auto;
				margin-top: 4px;
				padding-top: 2%;
				padding-bottom: 2%;
				background-color: grey;
			}

			#pic{
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 20%;
				margin-top: 5%;
			}

			button{
				background-color : black;
				color: white;
				margin-left: auto;
				margin-right: auto;
				display: block;
				font-size: 18px;
				padding: 5px;
				padding-left: 10px;
				padding-right: 10px;

			}

			
			.modal {
				display: none;
				position: fixed;
				z-index: 1;
				padding-top: 100px;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(204, 198, 198);
				background-color:  rgba(204, 198, 198, 0.6);
			}

			.modal-content {
				background-color: rgba(204, 198, 198);
				margin: auto;
				padding: 20px;
				border: 1px solid #888;
				width: 40%;
				height: 65%;
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
			
			#notif{
				margin-left: 3%;
				color: white;
				margin-top: 5%;
				font-size: 1vw;
				position: absolute;
			}

			#notif1{
				margin-left: 3%;
				color: white;
				margin-top: 5%;
				position: absolute;
			}

			#notif2{
				margin-left: 3%;
				color: red;
				margin-top: 5%;
				position: absolute;
				font-size: 135%;
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


		<div id="signup">
			<?php
				if($res = $con->query($query2)){
					while($row = $res->fetch_array()){ 
						echo '<p id="logged">You are logged in as '.$row['nama']."</p>";
					}
				}
			?>
			<div class="top-nav">
				<li id="list-header"><a href="logout.php"><i class="fa fa-sign-out"></i></a></li>
			</div>
			<div class="top-nav" style="background-color: blue; color: white;">
				<li id="list-header"><a href="profile.php"><i class="fa fa-user"></i></a></li>
			</div>
			<div class="top-nav">
				<li id="list-header"><a href=""><i class="fa fa-envelope"></i></a></li>
			</div>
			<div class="top-nav">
				<li id="list-header"><a href="news.php"><i class="fa fa-newspaper-o"></i></a></li>
			</div>
			<div class="top-nav">
				<li id="list-header"><a href="../user/usr.php"><i class="fa fa-home"></i></a></li>
			</div>
		</div>
		<div class="wrap">
			<div class="nav-bar">
				<div id="nav-header">
					<h1>Menu</h1>
				</div>
				<div class="nav-content">
					<a id="temp" href="../user/book.php"><h3>Book List</h3></a>
				</div>
				<div class="nav-content">
					<a id="temp" href="../user/borrow.php"><h3>Borrowing History</h3></a>
				</div>
				<div class="nav-content">
					<a id="temp" href=""><h3>Download Journals</h3></a>
				</div>
			</div>
			<div class="content">
				<h1>Profile</h1>
				<div class="scrollable">
				<?php
					if(isset($_POST['update'])){
						$query="";
						if(isset($_POST['pass']) && !empty($_POST['pass'])){
							$pass = $_POST['pass'];
							$hidepass = md5("$pass");
							if(isset($_POST['cpass']) && !empty($_POST['cpass'])){
								$cpass = $_POST['cpass'];
							}
							if($pass==$cpass){
								$query=" UPDATE anggota SET pass = '$hidepass'";
							}else{
								echo "<h1 id='notif2'>PASSWORD CONFIRMATION DOES NOT MATCH</h1>";

							}
						}
						if(isset($_POST['phone']) && !empty($_POST['phone'])){
							$phone = $_POST['phone'];
							if($query == ""){
								$query=" UPDATE anggota SET telepon = '$phone'";
							}else{
								$query.=", telepon = '$phone'";
							}
						}
						if(isset($_POST['adress']) && !empty($_POST['adress'])){
							$alamat = $_POST['adress'];
							if($query == ""){
								$query=" UPDATE anggota SET alamat = '$alamat'";
							}else{
								$query.=", alamat = '$alamat'";
							}
						}
						if($res = $con->query($query2)){
							while($row = $res->fetch_array()){ 
								$nama = $row['nama'];
							}
						}
						if($query!=""){
							$query.=" Where nama= '$nama'";
						
							if($con->query($query) && !empty($pass)){
								echo "<h1 id='notif1'>PROFILE UPDATED</h1>";
								echo "<br>";
								echo "<br>";
								echo "<p id='notif'>PLEASE USE YOUR NEW PASSWORD FOR THE NEXT LOGIN</p>";
							}else if($con->query($query)){
								echo "<h1 id='notif1'>PROFILE UPDATED</h1>";
							}
						}						
					}
				?>
					<img src="../../img/profile.jpg" alt="profile picture" id="pic">
					<div class="profile">
						<button id="SignUp" onclick="blok()">Update User Info</button>
					</div>
				</div>
				2018 kikil-jeye
			</div>
		</div>

		<div id="myModal" class="modal">
			<div class="modal-content">
				<span class="close" onclick="none()">&times;</span>
				<form action="" method="post">
					<h1>Update User Info</h1>
					<?php
						if($res = $con->query($query2)){
							while($row = $res->fetch_array()){ 
								echo '<p>Name: '.$row['nama']."</p>";
							}
						}
					?>
					<input type="password" name="pass" placeHolder="Password"><br>
					<input type="password" name="cpass" placeHolder="Confirm Password"><br>
					<input type="text" name="phone" placeHolder="Phone"><br>
					<input type="text" name="adress" placeHolder="Adress">
					<input type="submit" name="update" id="button" value="UPDATE">
				</form>
			</div>
	</div>
	
	
	<script>
        var modal = document.getElementById('myModal');
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        function blok() {
            modal.style.display = "block";
            var text = "You have login as yehez";
            document.getElementById("test").innerHTML = text;
        }

        function none() {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
	</body>
</html>