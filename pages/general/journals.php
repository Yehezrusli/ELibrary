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
				<h1>Today's News</h1>
				<div class="scrollable">
                    <a id="temp" href="../../files/JOURNAL1.pdf" target="_blank"><div class="journal-wrapper">
                        <h2>Journal 1</h2>
                        <p>Writer 1</p>
                        <h3>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</h3>
                    </div></a>
                    <a id="temp" href="../../files/JOURNAL2.pdf" target="_blank"><div class="journal-wrapper">
                        <h2>Journal 2</h2>
                        <p>Writer 2</p>
                        <h3>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</h3>
                    </div></a>
                    <a id="temp" href="../../files/JOURNAL3.pdf" target="_blank"><div class="journal-wrapper">
                        <h2>Journal 3</h2>
                        <p>Writer 3</p>
                        <h3>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</h3>
                    </div></a>
				</div>
			</div>
			<div id="footer">
				<p>2018 kikil-jeye</p>
			</div>
			</div>
		</div>
</body>
</html>