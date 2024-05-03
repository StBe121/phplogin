<!DOCTYPE html>
<html lang="de">
	<head>
	<meta charset="utf-8">
	<title>Alter in Tagen</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css">
	</head>

	<body>
		<?php
			$date = $_POST["datum"];
			$name = $_POST["vorname"];
			$datetime = strtotime(date($date));
			$days = floor((time()-$datetime) /60/60/24);
			if ($days == 1)
				{
					echo "Hallo $name, du bist $days Tag alt!";
				}
			else 
			{
				echo "Hallo $name, du bist $days Tage alt!";
			}
			
		?>
	</body>
</html>     