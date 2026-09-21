<?php 
include 'includes/dbh.inc.php';

$abfrage = "SELECT id, vorname, nachname FROM `user`";
$ergebnis = mysqli_query($db, $abfrage);

?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Index</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <?php 
        include 'header.php'; // Header anfügen
        ?>
        <main>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Vorname</td>
                    <td>Nachname</td>
                </tr>
                <?php 
                    while ($row = mysqli_fetch_assoc($ergebnis)) 
                    {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["vorname"]; ?></td>
                        <td><?php echo $row["nachname"]; ?></td>
                    </tr>
                <?php 
                    }
                ?>
            </table>

        </main>

        <footer>
        </footer>
        
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
