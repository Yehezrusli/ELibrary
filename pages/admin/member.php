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
<body>
	<div class="content">
		<h1 style="display:inline; margin-left: 2%;">Member List</h1>
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