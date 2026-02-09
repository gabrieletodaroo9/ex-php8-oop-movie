<?php require __DIR__ . "/../db/db.php" ?>

<h1 class="py-5 text-uppercase text-center text-white fw-bold">Catalogo Film</h1>

<div class="row row-cols-1 row-cols-lg-2 g-3 g-lg-5 pb-5">
    <?php foreach ($movies as $movie) { ?>

        <div class="col">
            <?php include __DIR__ . "/HomeCard.php" ?>
        </div>
    <?php
    }
    ?>

</div>