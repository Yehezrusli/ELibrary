<?php
	session_start();
	include("../../connection.php");
	include("../admin/headerAdmin.php");
	$query2 = "SELECT book.code as code, book.judul as judul, book.pengarang as pengarang, book.tahun as tahun, book.penerbit as penerbit, kategory.nama as kategory FROM book JOIN kategorybuku on book.code = kategorybuku.buku JOIN kategory ON kategory.id = kategorybuku.kategory";
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
	<?php
	if(isset($_GET['cari'])){
		$filterBy = $_GET['filterBy'];
		$filter = $_GET['filter'];
		$query2.= " WHERE $filterBy = '$filter'";
	}
	?>
			<input id="button" onclick="blok()" style="font-size: 2vw;margin-left:0px ;padding: 1px;font-size: 1vw; float: right; margin-right: 3%; ; margin-top: 1.5%; margin-bottom: 10px;" type="submit" name="add" value="ADD BOOK">
			<form action="" method="get" id="search">
				<h1 style="display:inline; margin-left:2%">Book List</h1>
				<input id="button" style="font-size: 2vw;margin-left:0px ;padding: 1px;font-size: 1vw; float: right; margin-right: 1%; ; margin-top: 1.5%; margin-bottom: 10px;" type="submit" name="cari" value="Search">
				<select name="filterBy" style="width:15%; margin-right: 1%; height: 2vw;float:right; margin-top: 1.5%; font-size: 1vw;">
					<option value="book.code">Code</option>
					<option value="book.judul">Title</option>
					<option value="book.pengarang">Author</option>
					<option value="book.tahun">Year Published</option>
					<option value="book.penerbit">Publisher</option>
					<option value="kategory.nama">Category</option>
					<!-- value nnti disamain sama yg di tabel biar gampang -->
				</select>
				<label style="font-size: 15px; display: inline; margin-left: 10px; margin-right: 10px; margin-top: 1.5%; float:right">by</label>
				<input name="filter" type="text" placeholder="Search books.." style="width:15%; margin: 0; height: 2vw;margin-top: 1.5%;float:right">
			</form>
		<div class="scrollable">
			<table class="data">
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
		<div id="footer">
			<p>2018 kikil-jeye</p>
		</div>
	</div>
		<div id="myModal" class="modal" id="modals">
			<div class="modal-content" style="height: 75%">
				<span class="close" onclick="none()">&times;</span>
				<form action="" method="post">
					<h1 style="text-align: left;">Book Data</h1>
					<input type="text" name="judul" placeHolder="Title"><br>
					<input type="text" name="pengarang" placeHolder="Author"><br>
					<input type="text" name="tahun" placeHolder="Publication Year"><br>
					<input type="text" name="penerbit" placeHolder="Publisher"><br>
					<select name="kategory" style="width: 97%; margin: 10px; height: 40px;">
						<?php
							$queryKategory = "SELECT id, nama FROM kategory";
							if($res=$con->query($queryKategory)){
								while($row = $res->fetch_array()){
									echo '<option value='."$row[id]".'>'.$row['nama'].'</option>';
								}
							}
						?>
					<!-- value nnti disamain sama yg di tabel biar gampang -->
				</select><br>
					<input type="submit" name="add" id="button" value="ADD">
				</form>	
			</div>
	</div>
	<?php
		if(isset($_POST['add'])){
			$judul = $_POST['judul'];
			$pengarang = $_POST['pengarang'];
			$tahun = $_POST['tahun'];
			$penerbit = $_POST['penerbit'];
			$kategory = $_POST['kategory'];
			$insert = "INSERT INTO book(judul, pengarang, tahun, penerbit) VALUES('$judul', '$pengarang', $tahun, '$penerbit')";
			$con->query($insert);
			$code = "SELECT code FROM book WHERE judul = '$judul'";
			if($res = $con->query($code)){
				while($row = $res->fetch_array()){
					$id = $row['code'];
				}
			}
			$insert = "INSERT INTO kategorybuku(kategory, buku) VALUES ($kategory, $id)";
			if($con->query($insert)){
			}
		}
	?>
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