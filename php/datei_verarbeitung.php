
# Einlesen und auf der seite ausspucken
$file_content = file_get_contents("dateiname.txt");
echo $file_content;

#daten in dateiname.txt ersetzen
$data = "Hallo Welt!";
file_put_contents("dateiname.txt", $data);

#daten an dateiname.txt anhängen
$data_to_append = "Weitere Daten";
file_put_contents("dateiname.txt", $data_to_append, FILE_APPEND);

#löschen
unlink("dateiname.txt");

#rename

rename("alte_datei.txt", "neue_datei.txt");


if (file_exists("dateiname.txt")) {
    echo "Die Datei existiert.";
} else {
    echo "Die Datei existiert nicht.";
}

#Verzeichnis prüfen und ausgeben
$files = scandir("/pfad/zum/verzeichnis");
foreach($files as $file) {
    echo $file . "<br>";
}

<?php
// Datei öffnen
$file = fopen("dateiname.txt", "r");

// Datei lesen, schreiben usw.

// Datei schließen
fclose($file);
?>

