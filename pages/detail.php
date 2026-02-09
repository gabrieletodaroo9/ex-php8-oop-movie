<?php
require_once "../db/db.php";
$slug_richiesto = $_GET['slug'] ?? null;

$currentmovie = [];
foreach ($movies as $item) {
    if ($item->slug === $slug_richiesto) {
        $currentmovie = $item;
        break;
    }
}
if (!$currentmovie) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../components/layout/head.php'; ?>


<body>
    <?php include '../components/layout/header.php'; ?>


    <main class="bg-main">

        <div class="container p-5">

            <div class="row">

                <div class="col-md-5 p-5">
                    <img src="<?php echo $currentmovie->url_img; ?>"
                        alt="<?php echo $currentmovie->title; ?>"
                        class="img-fluid rounded shadow">
                </div>

                <div class="col-md-7 text-white p-5 d-flex flex-column justify-content-center">

                    <h1 class="display-2 fw-bold"><?php echo $currentmovie->title; ?></h1>

                    <p class="text-white small fs-5 mb-3">
                        <strong>Anno:</strong> <?php echo $currentmovie->year; ?>
                    </p>

                    <p class="text-white small fs-5 mb-3">
                        <strong>Regista:</strong> <?php echo $currentmovie->director; ?>
                    </p>

                    <div class="mb-4">
                        <strong class="d-block mb-2">Generi:</strong>
                        <?php foreach ($currentmovie->genres as $genre) : ?>
                            <span class="badge rounded-pill bg-dark">
                                <?php echo $genre->name; ?>
                            </span>
                        <?php endforeach; ?>
                    </div>

                    <div class="mb-4">
                        <h3>Trama</h3>
                        <p class="lead"><?php echo $currentmovie->trama; ?></p>
                    </div>
                    <div class="border-top pt-1 mt-2">
                        <span class="small fw-bold"><i class="bi bi-clock me-2"></i> Durata: <?php echo $currentmovie->getDurationinHours(); ?></span>
                    </div>

                    <div class="mt-auto mb-3 d-flex justify-content-center">
                        <a href="home.php" class="btn btn-dark w-50 fw-bold">Torna alla Home</a>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <?php include '../components/layout/footer.php'; ?>
</body>

</html>