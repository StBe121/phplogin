<?php
session_start();

// Überprüfen Sie, ob das Formular übermittelt wurde
if (isset($_POST["login"])) {
    // Überprüfen Sie die Benutzereingaben auf Gültigkeit
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo "Bitte geben Sie einen Benutzernamen und ein Passwort ein";
        exit();
    }
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

    // Verwenden Sie einen sicheren Passwort-Hash-Algorithmus
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Überprüfen Sie, ob der Benutzername und das Passwort in der Datenbank vorhanden sind
    $db = mysqli_connect("localhost", "database_user", "database_password", "database_name");
    if (!$db) {
        echo "Fehler bei der Verbindung mit der Datenbank: " . mysqli_connect_error();
        exit();
    }
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            echo "Hallo " . $username;
        } else {
            echo "Benutzername oder Passwort falsch";
        }
    } else {
        echo "Benutzername oder Passwort falsch";
    }
    mysqli_close($db);
}

