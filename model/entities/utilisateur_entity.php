<?php

function getUtilisateurByEmailMotDePasse(string $email, string $passeword) {
global $connection;

$query = "
SELECT *
FROM utilisateur
WHERE email = :email
AND mot_de_passe = SHA1(:passeword)
";

$stmt = $connection->prepare($query);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":passeword", $passeword);
$stmt->execute();

return $stmt->fetch();
}

