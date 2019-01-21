<?php
require_once "model/database.php";
require_once "functions.php";


getHeader("Accueil", "Site internet Aztrek");
?>


<section id="section-destination">

    <h2>NOUVELLES DESTINATIONS</h2>
    <h4>Découvrez nos nouveaux circuits</h4>
    <div class="pen">
        <div class="stage">
            <article class="element michael">

                <p>A partir de 2400€</p>
                <h3>Costa rica</h3>
                <p>Cuircuit trek</p>
            </article>
            <article class="element franklin">

                <p>A partir de 2400€</p>
                <h3>Honduras</h3>
                <p>Circuit découverte</p>
            </article>
            <article class="element trevor">

                <p>A partir de 2400€</p>
                <h3>Guatemala</h3>
                <p>Circuit immersion</p>
            </article>
        </div>
    </div>

    <a href="#" class="bouton">NOS DESTINATIONS</a>

</section>
<section id="section-coup-de-coeur">
    <h2>SEJOUR COUP DE COEUR DES AZTREKKERS</h2>
    <article id="coup-de-coeur">
        <div id="volcan">
            <img src="./images/volcans-section-coup-de-coeur.jpg">
            <p id="apartir">à partir de 2400€</p>
            <div class="infos-1">
                <h5>DES SOMMETS MAGESTUEUX </h5>
                <p>Dépaysement total au coeur des volcans.</p>
            </div>
        </div>
        <a href="#" class="bouton">JE DECOUVRE</a>

    </article>
</section>


<section class="section-choix">
    <h2>3 BONNES RAISONS DE CHOISIR AZTREK</h2>
    <div class="choix">
        <article class="icone">
            <img src="./images/icone-voyages-execption.png" alt="">
            <p>Des voyages d'exception</p>
        </article>
        <article class="icone">
            <img src="./images/icone-communaute-section-choisir.png" alt="">
            <p>Une communauté active</p>
        </article>
        <article class="icone">
            <img src="./images/icone-conseil-section-choisir.png" alt="">
            <p>Des conseils sur mesure</p>
        </article>
    </div>
</section>


<?php getFooter(); ?>
