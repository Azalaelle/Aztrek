<?php
function getAllingredientsByRecette(int $id): array
{
global $connection;

$query = "
SELECT
ingredient.*,
rhi.qte,
unite.libelle AS unite
FROM ingredient
INNER JOIN recette_has_ingredient rhi ON ingredient.id = rhi.ingredient_id
LEFT JOIN unite ON rhi.unite_id = unite.id
";

$stmt = $connection->prepare($query);
$stmt->bindParam(":id", $id);
$stmt->execute();

return $stmt->fetchAll();
}
