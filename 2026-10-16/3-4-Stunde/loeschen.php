<?php 
include 'includes/dbh.inc.php';
/*
 * Fürs Löschen
*/
if(isset($_GET['l_id'])) { // Wenn GET gesetzt dann ...
    $id = $_GET["l_id"]; // ID von GET in Variable speichern
    $abfrage = "SELECT id,vorname,nachname FROM user WHERE id = '$id'"; // Select Abfrage mit passender ID
    /** @disregard P1008 */
    $ergebnis = mysqli_query($db, $abfrage); // Verbindung zur Datenbank und Abfrage machen
    while($row = mysqli_fetch_assoc($ergebnis)) { // Solange ergebnisse kommen ausführen
        $vorname= $row["vorname"]; // Vornamen ausgeben
        $nachname= $row["nachname"]; // Nachnamen ausgeben
    }
}

/*
 * Fürs Bearbeiten
*/
if(isset($_GET['id'])) { // Wenn GET gesetzt dann ...
    $id = $_GET["id"]; // ID von GET in Variable speichern
    $abfrage = "SELECT id,vorname,nachname FROM user WHERE id = '$id'"; // Select Abfrage mit passender ID
    /** @disregard P1008 */
    $ergebnis = mysqli_query($db, $abfrage); // Verbindung zur Datenbank und Abfrage machen
    while($row = mysqli_fetch_assoc($ergebnis)) { // Solange ergebnisse kommen ausführen
        $vorname= $row["vorname"]; // Vornamen ausgeben
        $nachname= $row["nachname"]; // Nachnamen ausgeben
    }
}
?>

<!-- Eine Einfache form -->
<!-- Diese zeigt Vorname, Nachname und einen Button(submit) -->
<form action="" method="POST">
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
    <?php 
    // Löschen Anzeigen
    if(isset($_GET['l_id'])) {
        echo '<input type="submit" value="loeschen" name="loeschen">';
    }
    // Bearbeiten Anzeigen
    elseif(isset($_GET['id'])) {
        echo '<input type="submit" value="speichern" name="bearbeiten">';
    }
        
        
    ?>
</form>

<?php 

/*
 * Code um einen Datensatz zu löschen 
 */
if (isset($_POST['loeschen'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM user WHERE id = '$id'";
    /** @disregard P1008 */
    mysqli_query($db, $sql);
    header("Location: index.php");
}

/*
 * Code um einen Datensatz zu bearbeiten 
 */
if (isset($_POST['bearbeiten'])) {
    $id = $_POST['id'];
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];

    $sql = "UPDATE user SET vorname = '$vorname', nachname = '$nachname' WHERE id = '$id'";
    /** @disregard P1008 */
    mysqli_query($db, $sql);
    header("Location: index.php");
}