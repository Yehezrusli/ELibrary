<?php
	include("../../connection.php");
	if(!isset($_SESSION['uname'])){
		header("Location:../general/login.php");
	}
	$uname = $_SESSION['uname'];
	$query = "SELECT nama FROM anggota WHERE username = '$uname'";	
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
        <link rel="stylesheet" href="../../style/user.css">

		<style>

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
				if($res = $con->query($query)){
					while($row = $res->fetch_array()){ 
						echo '<p id="logged">You are logged in as '.$row['nama']."</p>";
					}
				}
			?>
			<li id="li" ><a href="../general/logout.php"><i class="fa fa-sign-out"></i></a></li>
			<li id="li" <?php if(stripos($_SERVER['SCRIPT_NAME'],"profile.php")){echo 'class="active" ';}?>><a href="../general/profile.php"><i class="fa fa-user"></i></a></li>
			<li id="li" ><a href="#"><i class="fa fa-bell"></i></a></li>
			<li id="li" <?php if(stripos($_SERVER['SCRIPT_NAME'],"news.php")){echo 'class="active" ';}?>><a href="../general/news.php"><i class="fa fa-newspaper-o"></i></a></li>
			<li id="li" <?php if(stripos($_SERVER['SCRIPT_NAME'],"usr.php")){echo 'class="active" ';}?>><a href="../user/usr.php"><i class="fa fa-home"></i></a></li>
		</div>
			<div class="nav-bar">
				<div id="nav-header">
					<h1>Menu</h1>
				</div>
				<table id="side-bar">
					<tr>
						<td id="side-bar-list" <?php if(stripos($_SERVER['SCRIPT_NAME'],"books.php")){echo 'class="active" ';}?>>
							<li id="li2"><a id="temp" href="../admin/books.php"><h3>Book List</h3></a></li>
						</td>
					</tr>
					<tr>
						<td id="side-bar-list" <?php if(stripos($_SERVER['SCRIPT_NAME'],"member.php")){echo 'class="active" ';}?>>
							<li id="li2"><a id="temp" href="../admin/member.php"><h3>Member List</h3></a></li>
						</td>
					</tr>
					<tr>
						<td id="side-bar-list" <?php if(stripos($_SERVER['SCRIPT_NAME'],"admList.php")){echo 'class="active" ';}?>>
							<li id="li2"><a id="temp" href="../admin/admList.php"><h3>Administrator List</h3></a></li>
						</td>
                    </tr>
                    <tr>
						<td id="side-bar-list" <?php if(stripos($_SERVER['SCRIPT_NAME'],"journals.php")){echo 'class="active" ';}?>>
							<li id="li2"><a id="temp" href="../general/journals.php"><h3>Download Jurnal</h3></a></li>
						</td>
					</tr>
				</table>
			</div>
	</body>
</html>