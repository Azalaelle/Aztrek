<?php
function insertDestination(string $titre) {
    global $connection;

    $query  = "INSERT INTO destination (titre) VALUES (:titre)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->execute();
}
function updateDestination(int $id, string $titre) {
    global $connection;

    $query  = "UPDATE destination SET titre = :titre WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->execute();
}