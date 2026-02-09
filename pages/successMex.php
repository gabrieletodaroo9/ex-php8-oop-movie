<!DOCTYPE html>
<html lang="it">
<?php require __DIR__ . "/../partials/layout/Head.php" ?>

<body class="d-flex flex-column" style="min-height: 100vh;">

<?php require("../partials/layout/Header.php") ?>

    <main class="bg-main montserrat flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="container text-center py-5">
            <div class="card shadow-sm mx-5 py-4 border-0 bg-dark rounded-4">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                </div>
                
                <h1 class="fw-bold mb-3 text-white">Grazie mille!</h1>
                <p class="lead mb-4 text-white">
                    Il tuo consiglio è stato inviato con successo.<br>
                    Apprezziamo molto il tuo contributo per migliorare il nostro database.
                </p>
                
                <div class="mt-4">
                    <a href="home.php" class="btn btn-light btn-lg px-5 shadow-sm rounded-5">
                        Torna alla Home
                    </a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>