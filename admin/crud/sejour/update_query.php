<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneEntity("sejour", $id);

$titre = $_POST['titre'];
$description = $_POST['description'];
$destination_id = $_POST['destination_id'];


// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["image"];
}

updateSejour($id, $titre, $filename, $description, $destination_id);

header('Location: index.php');
