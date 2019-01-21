<?php
require_once "model/database.php";
require_once "functions.php";


getHeader("Accueil", "Site internet Aztrek");
?>
    <section class="section-circuit">

        <h2>Nos Séjours au Mexique</h2>
        <h4>MEXIQUE</h4>
        <div class="circuit">
            <article id="premiere-place">
                <p class="circuit-name">Les trésors du yucatan</p>

                <a href="page_sejour.php" class="photo-concours"> <img src="./uploads/photo-2eme-place.jpg" alt="">
                </a>

            </article>

            <article id="deuxieme-place">
                <p class="circuit-name">Les mystérieuse cités d'or</p>

                <a href="page_sejour.php" class="photo-concours"> <img src="./uploads/photo-1-concours-ok.jpg" alt="">
                </a>

            </article>

<!--            <article id="troisieme-place">-->
<!--                <p class="circuit-name">Circuit Découverte</p>-->
<!---->
<!--                <a href="page_sejour.php" class="photo-concours"> <img src="./images/3eme-place-ok.jpg" alt="">-->
<!--                </a>-->
<!--            </article>-->


        </div>
        <a href="page_sejour.php" class="bouton">JE DECOUVRE</a>
    </section>


<?php getFooter(); ?>