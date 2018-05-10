<?php
	include("../../connection.php");
	include("header.php");
	$query2 = "SELECT book.code as code, book.judul as judul, book.pengarang as pengarang, peminjaman.pinjam as pinjam, peminjaman.kembali as kembali, datediff(current_date(), kembali) as dateDue FROM book JOIN peminjaman on book.code = peminjaman.buku";
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
		<h1 style="display:inline">Borrowing History</h1>
		<div class="scrollable">
			<table class="data">
				<tr>
					<th>Book Code</th>
					<th>Book Title</th>
					<th>Author</th>
					<th>Borrow Date</th>
					<th>Return Date</th>
					<th>Overdue</th>
					<th>fine</th>
				</tr>
				<?php
					if($res = $con->query($query2)){
						while($row = $res->fetch_array()){
							echo "<tr>";
							echo "<td>".$row['code']."</td>";
							echo "<td>".$row['judul']."</td>";
							echo "<td>".$row['pengarang']."</td>";
							echo "<td>".$row['pinjam']."</td>";
							echo "<td>".$row['kembali']."</td>";
							$dateDue = $row['dateDue'];
							if($dateDue <= 0){
								$dateDue = 0;
							}
							echo "<td>".$dateDue."</td>";
							$denda = $dateDue*500;
							echo "<td>".$denda."</td>";
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

</body>
</html>
			