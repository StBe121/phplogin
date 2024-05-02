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
  	<form action="regsuccess.php" method="post">
		Benutzername:<br>
		<input type="Text" name="username"><br><br>
 
		Passwort:<br>
		<input type="Password" name="passwort">
 
		<input type="Submit" value="Registrieren">
	</form>
  </body>
</html>



