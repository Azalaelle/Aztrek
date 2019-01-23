<?php

function getAllSejour(int $limit = 999)
{
    global $connection;

    $query = "
    SELECT
    sejour.*,
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

function getAllDepartBySejour($id)
{

    global $connection;
    $query = "
    SELECT
        sejour.*,
        DATE_FORMAT(depart . date_depart, '%d-%m-%Y') AS date_depart_format,
        depart.date_depart AS date_depart,
        depart.prix AS prix,
        DATE_FORMAT(ADDDATE(depart.date_depart, sejour.duree), '%d-%m-%Y') AS date_retour_format
        
      
    FROM sejour
    LEFT JOIN depart ON sejour.id = depart.sejour_id
    LEFT JOIN depart_has_utilisateur dhu on depart.id = dhu.depart_id 
    WHERE sejour.id = :id  
  
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();

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

