<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$destination = getOneEntity("destination", $id);
$sejours = getAllSejoursByPays($id);

getHeader("Accueil", "Site internet Aztrek");
?>

    <section class="section-circuit">

        <h2>Nos Séjours au : <?= $destination["titre"]; ?></h2>

        <div class="circuit">

            <?php foreach ($sejours as $sejour) : ?>
                <article id="premiere-place">
                    <p class="circuit-name"><?= $sejour["titre"]; ?></p>
                    <a href="page_sejour.php?id=<?= $sejour["id"]; ?>" class="photo-concours">
                        <img src="uploads/<?= $sejour["image"]; ?>" alt="Sejour">
                    </a>
                </article>
            <?php endforeach; ?>

        </div>
        <a href="page_sejour.php" class="bouton">JE DECOUVRE</a>
    </section>


<?php getFooter(); ?>