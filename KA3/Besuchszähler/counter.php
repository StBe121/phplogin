<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aufrufs-Zähler</title>
	</head>
	<body>
		<?php
			$nummer = file("counter.txt");
			$zaehlstand = $nummer[0];
			$zaehlstand++;
			file_put_contents("counter.txt", $zaehlstand);
			$nummer = file("counter.txt");
			echo $nummer[0];

		?>
	</body>
</html>