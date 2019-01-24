<?php

function getAllSejour(int $limit = 999)
{
    global $connection;

    $query = "
SELECT
sejour.*,
/*DATE_FORMAT(sejour.date_depart,'%d-%m-%Y') AS date_depart_format,*/
destination.titre AS destination
FROM sejour
INNER JOIN destination ON sejour.destination_id = destination.id

";


    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();

}

function getOneSejour(int $id): array
{
    global $connection;


    $query = "
    SELECT
        sejour.*,
        destination.titre AS destination,
        difficulte.niveau AS difficulte_niveau,
        difficulte.libelle AS difficulte_libelle
    FROM sejour
    INNER JOIN destination ON sejour.destination_id = destination.id
    INNER JOIN difficulte ON sejour.difficulte_id = difficulte.id
  
    WHERE sejour.id = :id
    ";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();

}



function insertSejour(string $titre, string $image,int $duree, string $description,  int $difficulte_id, int $destination_id,  int $prix_indicatif)
{
    global $connection;

    $query = "
    INSERT INTO sejour (titre, image, duree, description, difficulte_id, destination_id, prix_indicatif)
    VALUES (:titre, :image, :duree, :description, :difficulte_id, :destination_id, :prix_indicatif)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":destination_id", $destination_id);
    $stmt->bindParam(":prix_indicatif", $prix_indicatif);

    $stmt->execute();
}


function updateSejour(int $id, string $titre, string $image, string $description, int $destination_id)
{
    global $connection;

    $query = "
    UPDATE sejour
    SET titre = :titre, image = :image, description = :description, destination_id = :destination_id
    WHERE id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":destination_id", $destination_id);

    $stmt->execute();
}
