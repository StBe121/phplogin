<?php
session_start();
session_destroy();
?>

<html>
  <head>
    <title>Gaestebuch Informatik Brink</title>
  </head>
  <body>
  	<h1>Gästebuch Informatik FTE21</h1>
  	<br>
		<form action="loginsuccess.php" method="post">
			Benutzer: <input type="text" name="username"><br>
			Passwort: <input type="password" name="password"><br>
			<input type="submit" name="login" value="Anmelden">
		</form>
		<br>
		Noch kein Account? Dann bitte hier registrieren:
		<form action="registration.php" method="post">
			<input type="submit" name="login" value="Registrieren">
		</form>
  </body>
</html>
