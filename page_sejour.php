<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$sejour = getOneSejour($id);
$departs = getAllDepartBySejour($id);

getHeader("Accueil", "Site internet Aztrek");
?>
    <section class="main-circuit" id="presentation">
        <article class="presentation">
            <!--            <h2>Trésors du Yucatán</h2>-->
            <h2><a href="page_sejour.php?id=<?= $sejour["id"]; ?>"><?= $sejour["titre"] ?></a></h2>

            <p><?= $sejour["description"]; ?>


            </p>
            <ul class="description-sejour">


                <ul class="description-sejour">
                    <li><a href="#"><i class="far fa-calendar-alt"></i></a> <?= $sejour["duree"]; ?></li>
                    <li><a href="#"><i class="fas fa-euro-sign"></i> </a> <?= $sejour["prix_indicatif"]; ?></li>
                    <li><a href="#"><i class="fas fa-signal"></i> </a> <?= $sejour["difficulte_libelle"]; ?> (<?= $sejour["difficulte_niveau"]; ?> / 5)</li>
                </ul>

            </ul>
        </article>


        <aside class="img-sejour-1 container">
            <img src="./images/photo-jour-3-page-volcans.png" alt="">

        </aside>
    </section>

    <section class="depart">
        <h2>Nos Départs</h2>


        <?php if (count($departs) > 0) : ?>
            <table class="sejour_dispo">
                <tr>
                    <th>Date de départ</th>
                    <th>Date de retour</th>
                    <th>Prix</th>
                    <th>Places restantes</th>
                    <th>Réservez dès maintenant</th>
                </tr>
                <?php foreach ($departs as $depart) : ?>
                    <tr>
                        <td><?= $depart["date_depart_format"]; ?></td>
                        <td><?= $depart["date_retour_format"]; ?></td>
                        <td><?= $depart["prix"]; ?> €</td>
                        <?php if ($depart["places"] > 5): ?>
                            <td><?= $depart["places"]; ?></td>
                        <?php elseif ($depart["places"] <= 5 & $depart["places"] > 0): ?>
                            <td>Plus que <?= $depart["places"]; ?> places</td>
                        <?php else : ;?>
                            <td>plus de place</td>
                        <?php endif; ?>
                        <?php if ($depart["places"] > 0): ?>
                            <td ><a class="btn" href="#">S'INSCRIRE</a></td>
                        <?php else : ;?>
                            <td ><a href="#">EPUISE</a></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <h4>Plus de séjour disponible pour cette destination</h4>
        <?php endif; ?>



    </section>

<?php getFooter(); ?>