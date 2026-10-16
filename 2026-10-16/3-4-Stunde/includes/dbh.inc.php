<?php 

$host = "db"; // Eigenen Host angeben z.B localhost
$username = "root"; // Eigenen Nutzer angeben z.B. root
$passwort = "schule"; // Eigenes Passwort angeben. Wenn keins vorhanden leerlassen
$database = "testdb"; // Eigene Datenbank angeben z.B. ITA50

$db = mysqli_connect($host, $username, $passwort, $database); // Verbindung zur Datenbank


// Fehler ausgeben wenn die verbindung nicht geht.
if (!$db) {
    exit ("Verbindungsfehler" . mysqli_connect_error());
}

echo '<script>console.log("Erfolgreich");</script>'; // "Erfogreich" in die Console schreiben