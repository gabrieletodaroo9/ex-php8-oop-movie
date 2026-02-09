<?php
// METODO PER PRENDERE IL NOME DEL FILE IN CUI CI TROVIAMO DALL`URL
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="navbar navbar-expand navbar-dark bg-dark header-shadow sticky-top py-2">
    
        <a class="navbar-brand fw-bold ms-3" href="home.php">
            <img src="../assets/img/logo-phpflix.png" alt="logo phpflix" style="height:45px">
        </a>

        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == 'home.php') ? 'active' : '' ?>" href="./home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == 'aboutus.php') ? 'active' : ''; ?>" href="./aboutus.php">Chi siamo</a>
            </li>
        </ul>

</header>