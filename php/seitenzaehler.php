<?php
// Name des Cookies für die Besuchererkennung
$cookie_name = "besucher_count";

// Überprüfen, ob der Cookie bereits gesetzt ist
if(!isset($_COOKIE[$cookie_name])) {
    // Pfad zur Datei mit dem Zähler
    $counter_file = 'counter.txt';
    
    // Zähler erhöhen und speichern
    $counter = (file_exists($counter_file)) ? (int)file_get_contents($counter_file) : 0;
    $counter++;
    file_put_contents($counter_file, $counter);
    
    // Cookie setzen, um den Benutzer zu markieren
    setcookie($cookie_name, 1, time() + (86400 * 30), "/"); // Cookie für 30 Tage
    
    // Ausgabe des Zählerwertes
    echo "Diese Seite wurde $counter Mal besucht.";
} else {
    echo "Willkommen zurück! Du hast diese Seite bereits besucht.";
}
?>
