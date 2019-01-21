<?php require_once __DIR__ . "/../config/parameters.php"; ?>
<nav class="main-menu">

    <a href="index.php">
        <img src="images/logo.png" alt="Cooking Chef" class="logo-nav">
    </a>

    <ul>
        <li><a href="#"><i class="fa fa-cutlery"></i> Recettes</a></li>
        <li><a href="#"><i class="fa fa-video-camera"></i> Vidéos</a></li>
        <li><a href="<?= SITE_ADMIN; ?>"><i class="fa fa-sign-in"></i> Log in</a></li>
    </ul>
</nav>