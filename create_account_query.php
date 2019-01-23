<?php
require_once "model/database.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mot_de_passe = $_POST["mot_de_passe"];

$result = insertUtilisateur($nom, $prenom, $email, $mot_de_passe);

if ($result) {
    header("location: admin/");

}else{
    header("location: create_account.php");
}
