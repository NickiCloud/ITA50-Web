<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>DB-Untericht</title>
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
            include 'header.php';        
        ?>

        <main>

            <form action="insert.php" method="GET">
                <div class="mb-3">
                    <label class="form-label">Vorname</label>
                    <input
                        type="text"
                        name="vorname"
                        class="form-control"
                    />
                    <label class="form-label">Nachname</label>
                    <input
                        type="text"
                        name="nachname"
                        class="form-control"
                    />
                    <input
                        type="submit"
                        name="submit"
                        class="btn btn-primary mx-2 my-2"
                    >
                    
                    
                </div>
            </form>
            
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
