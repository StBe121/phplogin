<?php
session_start();

if (isset($_POST['submit'])) {
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
  {
    $file = fopen("guestbook.txt", "a");
    $name = $_SESSION['username'];
    $message = $_POST['message'];
    $date = date("d.m.y \u\m H:i:s");
    $data = "$date   $name: $message\n";
    fwrite($file, $data);
    fclose($file);
  } 
  else 
  {
    echo "Du musst angemeldet sein um eine Nachricht zu schreiben.";
  }
}

if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: guestbook.php");
}
?>

<html>
  <head>
    <title>Gaestebuch Informatik Brink</title>
  </head>
  <body>
  	<h1>Gästebuch Informatik FTE21</h1>
  	</br>
    <?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true): ?>
      Um eine Nachricht in das Gästebuch schreiben zu können, musst Du Dich erst anmelden oder neu registrieren:<br>
      <form action="login.php" method="post">
        <input type="submit" name="login" value="Anmelden">
      </form>
      <form action="registration.php" method="post">
        <input type="submit" name="registration" value="Registrierung">
      </form>
    
    <?php else: ?>
      <form action="guestbook.php" method="post">
        <label for="message">Schreibe eine Nachricht:</label>
        <br>
        <textarea name="message" rows="5" cols="30"></textarea>
        <br>
        <input type="submit" name="submit" value="Abschicken">
        <input type="submit" name="logout" value="Abmelden">
      </form>
    <?php endif; ?>
    <h2>Messages:</h2>
      <pre>
      	<?php
        	$entry =file('guestbook.txt');
			for($i =count($entry)-1; $i>=0; $i--)
			{
				echo "$entry[$i]<br>";
			}
		?>
      </pre>
  </body>
</html>

