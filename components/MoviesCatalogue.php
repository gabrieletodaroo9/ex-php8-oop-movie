<?php require_once("../db/db.php") ?>

<h1 class="my-5 text-uppercase text-center">Catalogo Film</h1>

<div class="row row-cols-1 row-cols-lg-2 g-3 g-lg-5">
    <?php foreach ($movies as $movie) { ?>

        <div class="col">
            <?php include("../components/HomeCard.php") ?>
        </div>
    <?php
    }
    ?>

</div>