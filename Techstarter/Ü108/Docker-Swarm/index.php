<?php
// Setzen Sie die gewünschte Zeitzone (z.B. Berlin)
date_default_timezone_set('Europe/Berlin');

// Aktuelles Datum und Uhrzeit ermitteln
$aktuelleZeit = date("Y-m-d H:i:s");

// Neue Willkommensnachricht
$willkommensNachricht = "Herzlich willkommen! From Mohanad";

// Ausgabe der Willkommensnachricht und aktuellen Zeit
echo "<h1>$willkommensNachricht</h1>";
echo "Aktuelles Datum und Uhrzeit: $aktuelleZeit";

// Fügen Sie das Bild ein
echo '<img src="./Berlin.jpg.jpg" alt="Berlin">';
?>
