<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$sejour = getOneSejour($id);

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
                    <li><a href="#"><i class="far fa-calendar-alt"></i></a><?= $sejour["date_depart"]; ?></li>
                    <li><a href="#"><i class="fas fa-euro-sign"></i></a><?= $sejour["prix"]; ?></li>
                    <li><a href="#"><i class="fas fa-signal"></i></a><?= $sejour["difficulte"]; ?></li>
                </ul>

            </ul>
        </article>


        <aside class="img-sejour-1 container">
            <img src="./images/photo-jour-3-page-volcans.png" alt="">

        </aside>
    </section>

    <section class="depart">
        <h2>Nos Départs</h2>
        <table>
            <tr>
                <th>Date de départ</th>
                <th>Date de retour</th>
                <th>Prix</th>
                <th>Places restantes</th>
                <th>Réservez dès maintenant</th>
            </tr>
            <tr>
                <td>15/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>14</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>15/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>7</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
        </table>
    </section>

<?php getFooter(); ?>