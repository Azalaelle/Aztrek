<?php
require_once __DIR__ . "/../functions.php";

$user = getCurrentUser();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="...">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AZTREK | <?= $title; ?></title>
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="./css/jquery.sidr.light.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/main.css">

    <?php foreach ($stylesheets as $stylesheet) : ?>
        <link rel="stylesheet" href=$stylesheet; ?>">
    <?php endforeach; ?>

</head>

<body class="home">

<header id="header">


    <!-- Mettre la photo en background -->
    <div class="container" id="top-bar">
        <div id="header-logo"><a href="index.php" title="Accueil"><img src="./images/logo-header.png" alt="Logo"></a>
        </div>

        <div id="nav-top">
            <nav>
                <ul>
                    <li>
                        <form class="search-form" action="#" method="get">
                            <input type="text" name="keywords" value="" placeholder="Rechercher">
                            <input id="valider" type="submit" name="submit-btn" value="">
                        </form>
                    </li>

<!--                    <li><a href="--><?//= SITE_ADMIN; ?><!--" id="profil"><img src="./images/icone-connexion.png" alt=""></a></li>-->
                    <li><a href="#" id="brochure"><img src="./images/icone-brochure.png" alt=""></a></li>
                    <li><a href="#" id="contact"><img src="./images/icone-contact.png" alt=""></a></li>
                    <?php if (isset($user)) : ?>
                        <li><a href="#"><i class="fa fa-user"></i> <?= $user["email"]; ?></a></li>
                        <li><a href="<?= SITE_ADMIN . "logout.php"; ?>"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
                    <?php else: ?>
                        <li><a href="<?= SITE_ADMIN; ?>"><i class="fa fa-sign-in"></i><img src="./images/icone-connexion.png" alt=""></a></a></li>
                        <li><a href="<?= SITE_URL . "create_account.php"; ?>"><i class="fa fa-user-plus"></i></a></li>

                    <?php endif; ?>
                </ul>
            </nav>
        </div>

    </div>
    <h1>Un nouveau <span class="monde">MONDE</span> à chaque PAS</h1>
    <nav class="nav-reseaux">
        <ul class="container">
            <li><a href="#" id="btn-fb"><img src="./images/icone-facebook.png" alt=""></a></li>
            <li><a href="#" id="btn-in"><img src="./images/icone-insta.png" alt=""></a></li>
            <li><a href="#" id="btn-pi"><img src="./images/icone-pinterest.png" alt=""></a></li>
            <li><a href="#" id="btn-vi"><img src="./images/icone-youtube.png" alt=""></a></li>
        </ul>
    </nav>
</header>
<div id="main-nav-wrapper">
    <a class="burger" href="#sidr-main"> <i class="fa fa-bars" aria-hidden="true"></i>Menu</a>
    <?php getMenu(); ?>
</div>
<main>