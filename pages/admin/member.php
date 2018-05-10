<?php
	session_start();
	include("../../connection.php");
	include("../admin/headerAdmin.php");
	$queryMember = "SELECT nama, telepon, alamat FROM anggota WHERE stat = 'usr'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<?php
	if(isset($_GET['cari'])){
		$nama = $_GET['nama'];
		$queryMember.=" AND nama = '$nama'";
	}
?>
<body>
	<div class="content">
		<form action="" method="get" id="search">
			<h1 style="display:inline; margin-left: 2%;">Member List</h1>
			<input id="button" style="font-size: 2vw;margin-left:0px ;padding: 1px;font-size: 1vw; float: right; margin-right: 3%; ; margin-top: 1.5%; margin-bottom: 10px;" type="submit" name="cari" value="Search">
			<input name="nama" type="text" placeholder="Search Name" style="width:15%; margin: 0; margin-right: 2%;height: 2vw;margin-top: 1.5%;float:right">
		</form>
		<div class="scrollable">
			<table class="data">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Address</th>
				</tr>
				<?php
					$i = 1;
					if($res = $con->query($queryMember)){
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

</body>
</html>