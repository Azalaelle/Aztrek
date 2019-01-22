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

            <p><?= $recipe["description"]; ?>

                // Le Mexique, et en particulier le Yucatán, est une terre de rêve. Elle y mêle quelques-uns des plus
                // beaux sites mayas, riche patrimoine culturel, et des trésors naturels, comme la mer des Caraïbes ou
                // les cenotes, ces puits souterrains ou à ciel ouvert, trous d’eau qui parsèment le plateau calcaire
                // du Yucatán. L'âme indienne y est bien vivante, celle de la civilisation raffinée des Mayas à leur
                // grande époque et bien sûr, mais également celle des Mayas d’aujourd’hui, qui ont gardé leurs us et
                // coutumes. Des sites mayas incontournables et hors sentiers battus, un délicieux cocktail
                // d’écotourisme et de
                // découverte culturelle. Palenque et les sites de la forêt lacandone au Chiapas, un itinéraire
                // ponctué de baignades en mer, en cenote et en lagune.
            </p>
            <ul class="description-sejour">


                <ul class="description-sejour">
                    <li><a href="#"><i class="far fa-calendar-alt"></i></a><?= $sejour["date_depart"]; ?></li>
                    <li><a href="#"><i class="fas fa-euro-sign"></i></a><?= $sejour["prix"]; ?></li>
                    <li><a href="#"><i class="fas fa-signal"></i></a><?= $sejour["niveau"]; ?></li>
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
                <th>Du</th>
                <th>Au</th>
                <th>Prix</th>
                <th>Départ Assuré<br> à partir de</th>
                <th>Description de l'exemple</th>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>

        </table>
    </section>

<?php getFooter(); ?>