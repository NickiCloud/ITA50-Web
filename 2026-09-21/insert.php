<?php 
include 'includes/dbh.inc.php';
/* -----------
 * Hier werden die gesendeten Daten aufgenommen,
 * und in die MySQL Datenbank geschrieben. ;D
*/
if(isset($_GET["submit"])) {
    $vorname = $_GET["vorname"]; // Empfang und speichern in var.
    $nachname = $_GET["nachname"]; // Empfang und speichern in var.
    $sql = "INSERT INTO user (vorname, nachname) VALUES ('$vorname', '$nachname');"; // Bereitet den SQL Befehl vor.
    mysqli_query($db, $sql); // Senden an die Datenbank
    header("Location: index.php"); // Leitet nach erhalt der Daten zu index.php weiter.
}
?>