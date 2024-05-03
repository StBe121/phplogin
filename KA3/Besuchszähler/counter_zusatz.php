<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aufrufs-Zähler</title>
	</head>
	<body>
		<?php
			session_start();
			$nummer = file("counter.txt");
			$zaehlstand = $nummer[0];
			if (!isset($_SESSION['visited'])) 
				{
					$zaehlstand++;
					file_put_contents("counter.txt", $zaehlstand);
					$_SESSION['visited'] = true;
				}
			$nummer = file("counter.txt");
			$zaehlstand = $nummer[0];
			echo $nummer[0];
		?>
	</body>
</html>