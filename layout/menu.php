<?php
require_once __DIR__ . "/../config/parameters.php";
require_once __DIR__ . "/../model/database.php";

$destinations = getAllEntities("destination");
?>

<nav class="main-nav">
    <ul class="navigation-principale">
        <li><a href="index.php">Accueil</a></li>
        <li>
            <a href="">DESTINATION</a>
            <ul>
                <?php foreach ($destinations as $destination) : ?>
                    <li>
                        <a href="page_pays.php?id=<?= $destination["id"]; ?>">
                            <?= $destination["titre"]; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li> <a href="#">Communauté</a></li>
        <li><a href="#">Check-list</a></li>
    </ul>
</nav>