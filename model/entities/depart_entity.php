<?php

function getAllDepartBySejour($id)
{

    global $connection;
    $query = "
    SELECT
        sejour.*,
        DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart_format,
        depart.date_depart AS date_depart,
        depart.prix AS prix,
        DATE_FORMAT(ADDDATE(depart.date_depart, sejour.duree), '%d-%m-%Y') AS date_retour_format,
        depart.nb_places - SUM(dhu.nb_personnes) AS places
    FROM depart
    INNER JOIN sejour ON sejour.id = depart.sejour_id
    LEFT JOIN depart_has_utilisateur dhu on depart.id = dhu.depart_id 
    WHERE sejour.id = :id  
    GROUP BY depart.id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();

}