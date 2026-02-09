<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . "/../partials/layout/Head.php" ?>

<body>

    <?php require_once __DIR__ . "/../partials/layout/Header.php" ?>

    <main class="bg-main montserrat">
        <?php require_once("../partials/Jumbotron.php") ?>
        <div class="container">
            <?php require_once __DIR__ . "/../partials/MoviesCatalogue.php" ?>
        </div>

    </main>

    <?php require_once __DIR__ . "/../partials/layout/Footer.php" ?>

</body>

</html>