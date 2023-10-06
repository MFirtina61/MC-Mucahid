<div class="albums">
<a href="muziek.php?id=<?= $albums["id"] ?>" class="single">
        <img src="<?= $albums["image"] ?>" alt="<?= $albums["title"] ?>">
        <h3>
            <?= $albums["title"] ?>
        </h3>
        <p>Artiest:
            <?= $albums["artist"] ?>
        </p>
        <p>Genre:
            <?= $albums["genre"] ?>
        </p>
</div>