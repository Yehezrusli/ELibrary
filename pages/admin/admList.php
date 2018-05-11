<?php
	include("../../connection.php");
	session_start();
	if(!isset($_SESSION['uname'])){
		header("Location:../general/login.php");
	}
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
	$query2= "SELECT nama, telepon, alamat FROM anggota WHERE stat='adm'";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		input[type="submit"], input[type="button"]{
			font-size: 2vw;
			margin-left:0px;
			padding: 1px;
			font-size: 1vw;
			float: right;
			margin-right: 3%;
			margin-top: 1.5%;
			margin-bottom: 10px;
			width: 100px;
		}
	</style>
</head>
<body>
	<div class="content">
		<h1 style="display:inline">Admin List</h1>
		<input id="button" type="button" name="tambah" onclick="blok()" value="Add Admin">
		<div class="scrollable">
			<?php
				if(isset($_POST['register'])){
					$username = $_POST['username'];
					$name = $_POST['name'];
					$phone = $_POST['phone'];
					$address = $_POST['adress'];
					$password = generatePass();
					$query4= "SELECT username FROM anggota WHERE username = '$username'";
					$query3= "INSERT INTO anggota(username, pass, nama, telepon, alamat, stat) VALUES('$username', md5('$password'), '$name', '$phone', '$address', 'adm')";
					$res = $con->query($query4);
					if($res->num_rows > 0){
						echo '<p id="added">Username not available. Please try again</p>';
					}else{
						if($con->query($query3)){
							echo '<p id="added">Administrator added, temporary password: '.$password.'. Please change it immediately</p>';
						}
					}
				}
			?>
			<table class="data">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Address</th>
				</tr>
				<?php
					$i = 1;
					if($res = $con->query($query2)){
						while($row = $res->fetch_array()){
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$row['nama']."</td>";
							echo "<td>".$row['telepon']."</td>";
							echo "<td>".$row['alamat']."</td>";
							echo "</tr>";
							$i++;
						}
					}
				?>
			</table>
		</div>
		<div id="footer">
			<p>2018 kikil-jeye</p>
		</div>
	</div>
	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close" onclick="none()">&times;</span>
			<form action="admList.php" method="post">
				<h1>New Administrator</h1>
				<input type="text" name="username" placeHolder="Username"><br>
				<input type="text" name="name" placeHolder="Name"><br>
				<input type="text" name="phone" placeHolder="Phone"><br>
				<input type="text" name="adress" placeHolder="Address"><br>
				<input type="submit" name="register" id="button" value="REGISTER">
			</form>
		</div>
	</div>
	<?php
		function generatePass($length = 8){
			$characters = 'dfas9df6a9s6d9fa6sd9f6a8s6f6as6f87a68s7d6f87a6s78df69-01939412y53uwhgefsdvcx';
			$charlength = strlen($characters);
			$randomString = '';
			for($i = 0; $i < $length; $i++){
				$randomString .= $characters[rand(0, $charlength-1)];
			}
			return $randomString;
		}
	?>
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