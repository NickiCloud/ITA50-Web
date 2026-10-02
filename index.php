<?php
// Scannt das aktuelle Verzeichnis nach Ordnern
$dirs = array_filter(glob('*'), 'is_dir');
// Sortiert die Ordner absteigend
rsort($dirs);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Unterricht - Übersicht</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121215;
            color: #e0e0e0;
            padding: 2rem;
            max-width: 900px;
            margin: 0 auto;
        }
        h1 { color: #ffffff; }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background: #1e1e24;
            border: 1px solid #333;
            color: #fff;
            border-radius: 8px;
            margin-bottom: 2rem;
            outline: none;
            transition: border-color 0.2s;
        }
        input[type="text"]:focus {
            border-color: #9d4edd; /* Violetter Akzent */
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }
        .card {
            background: #1a1a20;
            border: 1px solid #2a2a35;
            padding: 20px;
            border-radius: 8px;
            text-decoration: none;
            color: #c77dff; /* Violetter Text */
            text-align: center;
            font-weight: bold;
            font-size: 1.1rem;
            transition: transform 0.2s, background 0.2s;
        }
        .card:hover {
            background: #23232d;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <h1>Web Unterricht</h1>
    
    <input type="text" id="searchInput" placeholder="Ordner suchen (z. B. Datum eingeben)..." onkeyup="filterFolders()">

    <div class="grid" id="folderGrid">
        <?php foreach($dirs as $dir): ?>
            <a href="<?= htmlspecialchars($dir) ?>/" class="card"><?= htmlspecialchars($dir) ?></a>
        <?php endforeach; ?>
    </div>

    <script>
        // JS für die Echtzeit-Suche
        function filterFolders() {
            const query = document.getElementById('searchInput').value.toLowerCase();
            const cards = document.querySelectorAll('.card');
            
            cards.forEach(card => {
                const folderName = card.textContent.toLowerCase();
                if (folderName.includes(query)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>