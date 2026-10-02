<?php 
include 'includes/dbh.inc.php';

if(isset($_GET['l_id'])) { // Wenn GET gesetzt dann ...
    $id = $_GET["l_id"]; // ID von GET in Variable speichern
    $abfrage = "SELECT id,vorname,nachname FROM user WHERE id = '$id'"; // Select Abfrage mit passender ID
    $ergebnis = mysqli_query($db, $abfrage); // Verbindung zur Datenbank und Abfrage machen
    while($row = mysqli_fetch_assoc($ergebnis)) { // Solange ergebnisse kommen ausführen
        $vorname= $row["vorname"]; // Vornamen ausgeben
        $nachname= $row["nachname"]; // Nachnamen ausgeben
    }
}
?>

<!-- Eine Einfache form -->
<!-- Diese zeigt Vorname, Nachname und einen Button(submit) -->
<form action="loeschen.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <table border="1">
        <tr>
            <td>
                <label>Vorname:</label>
                <input type="text" name="vorname" required value="<?php echo $vorname; ?>">
            </td>
            <td>
                <label>Nachname:</label>
                <input type="text" name="nachname" required value="<?php echo $nachname; ?>">
            </td>
        </tr>
    </table>
    <input type="submit" value="loeschen" name="loeschen">
</form>

<?php 

/*
 * Code um einen Datensatz zu löschen 
 */
if (isset($_POST['loeschen'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM user WHERE id = '$id'";
    mysqli_query($db, $sql);
    header("Location: index.php");
}
?>