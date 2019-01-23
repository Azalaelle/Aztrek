<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
//$image = $_POST['image'];
$duree = $_POST['duree'];
$description = $_POST['description'];
$difficulte_id = $_POST['difficulte_id'];
$destination_id = $_POST['destination_id'];
$prix_indicatif= $_POST['prix_indicatif'];






// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertSejour($titre, $filename, $duree, $description, $difficulte_id, $destination_id, $prix_indicatif);

header('Location: index.php');