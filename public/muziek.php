<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <?php
    // Controleer of er een album-ID is meegegeven in de URL
    if (isset($_GET['id'])) {
        $albumId = $_GET['id'];

        // Zoek het geselecteerde album op basis van de ID
        include '../source/albums.php';

        $selectedAlbum = null;
        foreach ($musicAlbums as $albums) {
            if ($albums['id'] == $albumId) {
                $selectedAlbum = $albums;
                break;
            }
        }
        ?>

        <article class="info">
            <section>

                <?php
                if ($selectedAlbum) {
                    echo '<div">';
                    echo '<img src="' . $selectedAlbum["image"] . '" alt="' . $selectedAlbum["title"] . '">';
                    echo '<h3>' . $selectedAlbum["title"] . '</h3>';
                    echo '<p>Artiest: ' . $selectedAlbum["artist"] . '</p>';
                    echo '<p>Genre: ' . $selectedAlbum["genre"] . '</p>';
                    echo '<p>Datum: ' . $selectedAlbum["datum"] . '</p>';
                    echo '<p>Lengte: ' . $selectedAlbum["lengte"] . '</p>';
                    echo '</div>';
                } else {
                    echo 'Album niet gevonden.';
                }
    } else {
        echo 'Geen album-ID meegegeven.';
    }
    ?>

        </section>
    </article>



</body>

</html>