<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$destination_id = $_POST['destination_id'];
$description = $_POST['description'];
$description_courte = $_POST['description_courte'];

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertRecette($titre, $destination_id, $filename, $description, $description_courte, ["id"]);

header('Location: index.php');