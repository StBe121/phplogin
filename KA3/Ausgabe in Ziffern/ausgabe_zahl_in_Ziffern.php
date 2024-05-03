<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aufrufs-Zähler</title>
	</head>
	<body>
		<?php
			$zahl = $_POST["zahl"];
			$zahl_komplett = $zahl;
			$hunderter = floor($zahl / 100);
			$zahl = $zahl - ($hunderter*100);
			$zehner = floor($zahl / 10);
			$zahl = $zahl - ($zehner*10);
			$einer = $zahl;
			echo ("Die Zahl $zahl_komplett  besteht aus folgenden Ziffern: <br />Hunderter: $hunderter<br />Zehner: $zehner<br />Einer: $einer<br />  </body>")
		?>
	</body>
</html>