<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Music libary</title>
    <script src="js/main.js" defer></script>
</head>

<body>
    <nav>
        <ul>
            <p>M</p>
            <div>
                <?php
                $menuItems = array("HOME", "ALBUMS", "CONTACT");
                for ($i = 0; $i < 3; $i++) {
                    echo '<li><a href="#">' . $menuItems[$i] . '</a></li>';
                }
                ?>
            </div>
        </ul>
    </nav>

 


    <div class="Titel">
        <h2>
            Artiesten
        </h2>
    </div>
    <article class="artiesten">
        <section>
            <?php
            include '../source/singels.php';

            foreach ($musicSingles as $single) {
                include "../source/views/card.php";
            }
            ?>
        </section>
    </article>




    <article class="search">
        <section>
            <input type="search" id="searchInput" placeholder="Zoek artiest...">
            <div>
                <button id="searchButton"><img src="/img/search2.png" alt=""></button>
            </div>

        </section>
    </article>

    <div id="musicList">


    </div>


    <div class="Titel">
        Singles
    </div>
   <article class="album">
        <section>
            <?php
        include '../source/albums.php';


        foreach ($musicAlbums as $albums) {
                include "../source/views/albums1.php";
            }
            ?>
        </section>
    </article> 
    





</body>

</html>