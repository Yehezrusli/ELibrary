<?php
	include("../../connection.php");
	include("../user/header.php");
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
				<h1>Today's News</h1>
				<div class="scrollable">
					<h2 style="text-align: left; margin-left: 10px;">Trump election: Priebus and Bannon given key roles</h2>
					<div  id="about-us">
					<p id="isi-content">
						US President-elect Donald Trump has awarded key roles in his incoming team to a top Republican party official and a right-wing media chief.
						Reince Priebus, chairman of the Republican National Committee (RNC), will be his chief of staff.
						In this role, he will set the tone for the new White House and act as a conduit to Congress and the government.
						Stephen Bannon, from the Breitbart News Network, will serve as Mr Trump's chief strategist.
						Mr Bannon stepped aside as executive chairman of Breitbart - a combative conservative site with an
						anti-establishment agenda - to act as Mr Trump's campaign chief.
						Meanwhile, in the president-elect's first interview, with US broadcaster CBS, Mr Trump said:
					</p>
					<ul>
						<li id="list">He would deport or jail up to three million illegal migrants with criminal links</li><br>
						<li id="list">Future Supreme Court nominees would be "pro-life" - meaning they oppose abortion - and defend the 
						constitutional right to bear arms</li><br>
						<li id="list">He will not seek to overturn the legalisation of same-sex marriage</li><br>
						<li id="list">He will forgo the president's $400,000 salary, taking $1 a year instead</li><br>
					</ul>
					
					<p id="isi-content"> 
						In a statement released by his campaign, Mr Trump described Mr Priebus and Mr Bannon as "highly qualified 
						leaders who worked well together on our campaign and led us to a historic victory".
						Mr Priebus, 44, acted as a bridge between Mr Trump and the Republican party establishment during the campaign. 
						He is close to House Speaker Paul Ryan, a fellow Wisconsinite who could be instrumental in steering the new 
						administration's legislative agenda.
					</p>
				</div>
			</div>
			<div id="footer">
				<p>2018 kikil-jeye</p>
			</div>
			</div>
		</div>
</body>
</html>