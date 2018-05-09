<?php
	include("../../connection.php");
	session_start();
	$uname = $_SESSION['uname'];
	$query = "SELECT nama FROM anggota WHERE username = '$uname'";
	$query2 = "SELECT book.code as code, book.judul as judul, book.pengarang as pengarang, book.tahun as tahun, book.penerbit as penerbit, kategory.nama as kategory FROM book JOIN kategorybuku on book.code = kategorybuku.buku JOIN kategory ON kategory.id = kategorybuku.kategory"
	
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
				height: 6%;
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

		.top-nav {
			margin: 0;
			font-size: 20px;
			float: right;
			font-size: 1.5vw;

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
			height: 78%;
		}

		#logged{
			margin-top: 1%;
			font-size: 1.5vw;
		}

		#temp{
			padding:0px;
			margin: 0px;
		}

		#isi-content{
			margin:0px;
			padding0px;	
		}

		#about-us{
			margin-left: 10px;
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


		th{
			background-color:  rgb(124, 120, 120);
		}

		table {
			border-collapse: collapse;
			padding-top: 5%;
			width: 97%;
			margin: auto;
			text-align: center;
			margin-top: 2%;
		}

		td, tr{
			padding: 10px;
			font-size: 12px;
			text-align: center;
		}

		th {
			padding-left: 50px;
			padding-right: 50px;
			padding-top: 20px;
			padding-bottom: 20px;
			text-align: center;
			background-color:  rgb(124, 120, 120);
			color: white;
			font-size: 12px;
		}

		table tr:nth-child(odd){
			background:#aaa; /* Baris ganjil Dihitung dari Header*/
		}
		  table tr:nth-child(even){
			background:#eee; /* Baris Genap */
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
				if($res = $con->query($query)){
					while($row = $res->fetch_array()){ 
						echo '<p id="logged">You are logged in as '.$row['nama']."</p>";
					}
				}
			?>
			<div class="top-nav">
				<li><a href="../general/logout.php"><i class="fa fa-sign-out"></i></a></li>
			</div>
			<div class="top-nav">
				<li><a href="../general/profile.php"><i class="fa fa-user"></i></a></li>
			</div>
			<div class="top-nav">
				<li><a href=""><i class="fa fa-envelope"></i></a></li>
			</div>
			<div class="top-nav">
				<li><a href="../general/news.php"><i class="fa fa-newspaper-o"></i></a></li>
			</div>
			<div class="top-nav">
				<li><a href="../user/usr.php"><i class="fa fa-home"></i></a></li>
			</div>
		</div>
		<div class="wrap">
			<div class="nav-bar">
				<div id="nav-header">
					<h1>Menu</h1>
				</div>
				<div class="nav-content">
					<a id="temp" href="book.php"><h3>Book List</h3></a>
				</div>
				<div class="nav-content">
					<a id="temp" href="borrow.php"><h3>Borrowing History</h3></a>
				</div>
				<div class="nav-content">
					<a id="temp" href=""><h3>Download Journals</h3></a>
				</div>
			</div>
			<?php
				if(isset($_GET['cari'])){
					$filterBy = $_GET['filterBy'];
					$filter = $_GET['filter'];
					$query2.= " WHERE $filterBy = '$filter'";
				}
			?>
			<div class="content">
				<h1 style="display:inline">Book List</h1>
				<div>
					<form action="" method="get">
						<input id="button" style="margin-left:0px ;padding: 1px;font-size: 1vw; float: right; margin-right: 3%; margin-top: 0; margin-bottom: 10px;" type="submit" name="cari" value="Search">
						<select name="filterBy" style="width:15%; margin-right: 1%; height: 2vw ;float:right; font-size: 1vw;">
							<option value="book.code">Code</option>
							<option value="book.judul">Title</option>
							<option value="book.pengarang">Author</option>
							<option value="book.tahun">Year Published</option>
							<option value="book.penerbit">Publisher</option>
							<option value="kategory.nama">Category</option>
							<!-- value nnti disamain sama yg di tabel biar gampang -->
						</select>
						<label style="font-size: 15px; display: inline; margin-left: 10px; margin-right: 10px; float:right">by</label>
						<input name="filter" type="text" placeholder="Search books.." style="width:15%; margin: 0; height: 2vw ;float:right">
					</form>
				</div>
				<div class="scrollable">
					<table>
						<tr>
							<th>Code</th>
							<th>Title</th>
							<th>Author</th>
							<th>Publication Year</th>
							<th>Publisher</th>
							<th>Category</th>
						</tr>
						<?php
							if($res = $con->query($query2)){
								while($row = $res->fetch_array()){
									echo "<tr>";
									echo "<td>".$row['code']."</td>";
									echo "<td>".$row['judul']."</td>";
									echo "<td>".$row['pengarang']."</td>";
									echo "<td>".$row['tahun']."</td>";
									echo "<td>".$row['penerbit']."</td>";
									echo "<td>".$row['kategory']."</td>";
									echo "</tr>";
								}
							}
						?>
					</table>
				</div>
				2018 kikil-jeye
			</div>
			</div>
	</body>
</html>