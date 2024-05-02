<?php
	session_start();
	session_destroy();

	$username = $_POST["username"];
	$passwort = $_POST["passwort"];
 
	$pass = sha1($passwort);
	$timestamp = time();
?>

<html>
  <head>
    <title>Gaestebuch Informatik Brink</title>
  </head>
  <body>
  	<h1>Gästebuch Informatik FTE21</h1>
  	<br>
  	<?php if( strpos(file_get_contents("./password.txt"),$username) !== false): ?>
  		Benutzername existiert bereits!!<br>
  		<form action="registration.php"><input type="submit" value="Zurück zur Registrierung"></form><br>
	<?php else:
		$zeile = "$username,$pass,$timestamp,\r\n";
		file_put_contents("./password.txt", $zeile, FILE_APPEND);
	?>
	User wurde registriert<br><br>
	<form action="login.php"><input type="submit" value="Anmeldung"></form><br>
	<?php endif; ?>	
  </body>
</html>

