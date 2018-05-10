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
		<h1>Welcome to E-Library</h1>
		<div class="scrollable">
			<h2 style="text-align: left; margin-left: 10px;">About Us</h2>
			<div id="about-us">
			<p id="isi-content">eLibrary is a simple library web where you can download jurnals for free and search the books you need. You were automatically registered as a member when you sign up.
			Look for the books you need in the book list before you come to our library and borrow the books. We also provide you with today's news, just click the newspaper icon.
			If you have any question, please contact us by e-mail(click the message icon).</p>
			</div>
		</div>
		<div id="footer">
			<p>2018 kikil-jeye</p>
		</div>
		</div>
	</div>
</body>
</html>