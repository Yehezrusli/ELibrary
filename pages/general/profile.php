<?php
	include("../../connection.php");
	session_start();
	$uname = $_SESSION['uname'];
	$query = "SELECT nama, stat FROM anggota WHERE username = '$uname'";	
	if($res = $con->query($query)){
		while($row = $res->fetch_array()){ 
			if($row['stat']=='usr'){
				include("../user/header.php");
			}else{
				include("../admin/headerAdmin.php");
			}
		}
	}
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<div class="content">
				<h1>Profile</h1>
				<div class="scrollable">
				<?php
					if(isset($_POST['update'])){
						$query2="";
						if(isset($_POST['pass']) && !empty($_POST['pass'])){
							$pass = $_POST['pass'];
							$hidepass = md5("$pass");
							if(isset($_POST['cpass']) && !empty($_POST['cpass'])){
								$cpass = $_POST['cpass'];
							}
							if($pass==$cpass){
								$query2=" UPDATE anggota SET pass = '$hidepass'";
							}else{
								echo "<h1 id='notif2'>PASSWORD CONFIRMATION DOES NOT MATCH</h1>";

							}
						}
						if(isset($_POST['phone']) && !empty($_POST['phone'])){
							$phone = $_POST['phone'];
							if($query2 == ""){
								$query2=" UPDATE anggota SET telepon = '$phone'";
							}else{
								$query2.=", telepon = '$phone'";
							}
						}
						if(isset($_POST['adress']) && !empty($_POST['adress'])){
							$alamat = $_POST['adress'];
							if($query2 == ""){
								$query2=" UPDATE anggota SET alamat = '$alamat'";
							}else{
								$query2.=", alamat = '$alamat'";
							}
						}
						if($res = $con->query($query)){
							while($row = $res->fetch_array()){ 
								$nama = $row['nama'];
							}
						}
						if($query!=""){
							$query2.=" Where nama= '$nama'";
						
							if($con->query($query2) && !empty($pass)){
								echo "<h1 id='notif1'>PROFILE UPDATED</h1>";
								echo "<br>";
								echo "<br>";
								echo "<p id='notif'>PLEASE USE YOUR NEW PASSWORD FOR THE NEXT LOGIN</p>";
							}else if($con->query($query2)){
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
				<div id="footer">
					<p>2018 kikil-jeye</p>
				</div>
			</div>
		</div>

		<div id="myModal" class="modal">
			<div class="modal-content">
				<span class="close" onclick="none()">&times;</span>
				<form action="" method="post">
					<h1>Update User Info</h1>
					<?php
						if($res = $con->query($query)){
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