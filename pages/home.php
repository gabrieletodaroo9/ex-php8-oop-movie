<?php require_once("../db/db.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Movies</title>
</head>

<body>
    <header>

    </header>

    <main>

        <div class="row">
            <?php foreach ($movies as $movie) { ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary fw-bold">
                                <?php echo $movie->TitleUpperCase(); ?>
                            </h5>

                            <h6 class="card-subtitle mb-3 text-muted">
                                <?php echo $movie->director; ?> • <?php echo $movie->year; ?>
                            </h6>

                            <div class="mb-3">
                                <?php foreach ($movie->genres as $genre) : ?>
                                    <span class="badge rounded-pill bg-light text-dark border">
                                        <?php echo $genre->name; ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                            <p class="card-text text-secondary small mb-4" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                <?php echo $movie->trama; ?>
                            </p>

                            <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                <span class="text-dark fw-bold small">
                                    <i class="bi bi-clock"></i> <?php echo $movie->getDurationinHours(); ?>
                                </span>
                                <a href="#" class="btn btn-primary btn-sm">Guarda ora</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

    </main>

    <footer>

    </footer>
</body>

</html>