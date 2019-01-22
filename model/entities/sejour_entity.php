<?php

function getAllSejour(int $limit = 999)
{
    global $connection;

    $query = "
SELECT
sejour.*,
DATE_FORMAT(sejour.date_depart,'%d-%m-%Y') AS date_depart_format,
destination.titre AS destination
FROM sejour
INNER JOIN destination ON sejour.destination_id = destination.id
INNER JOIN utilisateur  ON sejour.utilisateur_id = utilisateur.id



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
        difficulte.niveau AS difficulte
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

function insertSejour(string $titre, int $destination_id, string $image, string $description, string $description_courte, int $couverts, string $temps_prepa, string $temps_cuisson, int $publie, int $utilisateur_id)
{
    global $connection;

    $query = "
    INSERT INTO sejour (titre, image, duree, description, niveau, libelle,prix_indicatif) 
    VALUES (:titre, :image, :description, :sejour, :difficulte_id, :difficulte_id, :destination_id,:prix_indicatif)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":duree", $description);
    $stmt->bindParam(":description", $sejour);
    $stmt->bindParam(":niveau", $difficulte_id);
    $stmt->bindParam(":libelle", $difficulte_id);
    $stmt->bindParam(":libelle", $difficulte_id);
    $stmt->bindParam(":destination_id", $destination_id);
    $stmt->bindParam(":prix_indicatif", $prix_indicatif);

    $stmt->execute();
}