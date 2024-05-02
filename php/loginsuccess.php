<html>
  <head>
    <title>Gaestebuch Informatik Brink</title>
  </head>
  <body>
  	<h1>Gästebuch Informatik FTE21</h1>
  	<br>
  </body>
</html>

<?php
	session_start();
	if (isset($_POST["login"])) 
	{
		if (empty($_POST["username"]) || empty($_POST["password"])) 
		{
        	echo "Bitte geben Sie einen Benutzernamen und ein Passwort ein<br>";
			echo "<form action='login.php'><input type='submit' value='Zurück zur Anmeldung'></form><br>";
			echo "Neu hier? Dann kannst Du Dich hier registrieren:";
			echo "<form action='registration.php'><input type='submit' value='Registrierung'></form><br>";

        	exit();
    	}
    	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
		
		$pass = sha1($password);
		$exists = false;
 
		$users = file("password.txt");
		foreach($users AS $line)  
		{
			$user_array = explode(",", $line);
   			if($user_array[0] == $username AND $user_array[1] == $pass) 
   			{
    	   		$exists = true;
    	   		$_SESSION['loggedin'] = true;
    			$_SESSION['username'] = $username;
    			echo "Hallo ".$user_array[0]." Du hast Dich erfolgreich angemeldet.<br>";
    			echo "Hier geht's zum Gästebuch.";
    			echo "<form action='guestbook.php'><input type='submit' value='zum Gästebuch'></form><br>";	
   			}
		}
		if ($exists != true)
		{
			echo "Benutzername oder Passwort falsch <br>";
			echo "Zurück zur Anmeldung:<br>";
			echo "<form action='login.php'><input type='submit' value='Anmelden'></form><br>";
			echo "Zur Registrierung:";
			echo "<form action='registration.php'><input type='submit' value='Registrierung'></form><br>";			
		}
	}
?>

