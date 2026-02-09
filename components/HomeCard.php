<div class="col">
    <div class="card mb-3 shadow-sm" style="height: 250px; overflow: hidden;">
        <div class="row g-0 h-100">
            <div class="col-4 h-100">
                <img src="<?php echo $movie->url_img; ?>" 
                     class="img-fluid h-100 w-100" 
                     style="object-fit: cover;" 
                     alt="Poster">
            </div>

            <div class="col-8 h-100">
                <div class="card-body d-flex flex-column h-100">
                    <h5 class="card-title text-truncate"><?php echo $movie->TitleUpperCase() ?></h5>
                    <p class="card-text mb-1 small text-muted"><?php echo $movie->year; ?> - <?php echo $movie->director; ?></p>
                    
                    <div class="mb-2 text-truncate">
                        <?php foreach ($movie->genres as $genre){ ?>
                            <span class="badge bg-dark"><?php echo $genre->name; ?></span>
                        <?php } ?>
                    </div>

                    <p class="card-text small text-secondary overflow-hidden mb-0" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                        <?php echo $movie->trama; ?>
                    </p>
                    
                    <div class="border-top pt-1 mt-auto">
                        <span class="small fw-bold"><i class="bi bi-clock"></i>Durata: <?php echo $movie->getDurationinHours(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>