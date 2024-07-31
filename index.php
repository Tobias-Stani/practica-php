<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

// Obtener el contenido de la URL
$result = file_get_contents(API_URL);

// Decodificar el JSON a un array asociativo
$data = json_decode($result, true);

?>

<?php
// URL de la API para obtener un chiste de cualquier categoría en español
$jokeApiUrl = "https://v2.jokeapi.dev/joke/Any?lang=es";

// Obtener el contenido de la URL
$jokeResponse = file_get_contents($jokeApiUrl);

// Decodificar la respuesta JSON a un array asociativo
$jokeData = json_decode($jokeResponse, true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas con APIs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        main {
            text-align: center;
        }
        img {
            border-radius: 16px;
            margin-bottom: 1rem;
        }
        section {
            margin: 1rem;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <img src="<?= $data["poster_url"]; ?>" alt="Poster de la película" width="300"/>
            <h2>La próxima película es: <?= $data["title"]; ?> </h2>
            <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        </section>

        <section>
            <h1>Acá un chiste</h1>
            <?php
                if ($jokeData['type'] == 'single') {
                    // Chiste de una sola línea
                    echo "<p>{$jokeData['joke']}</p>";
                } elseif ($jokeData['type'] == 'twopart') {
                    // Chiste de dos partes (pregunta y respuesta)
                    echo "<p>{$jokeData['setup']}</p>";
                    echo "<p>{$jokeData['delivery']}</p>";
                }
            ?>
        </section>
    </main>
</body>
</html>
