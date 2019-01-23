<?php
require_once '../../../model/database.php';

$destinations = getAllEntities("destination");
$difficulte = getAllEntities("difficulte");


require_once '../../layout/header.php';
?>

    <h1>Ajout d'une photo</h1>

    <form action="create_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <label>Destination</label>
            <select name="destination_id" class="form-control">
                <?php foreach ($destinations as $destination) : ?>
                    <option value="<?php echo $destination["id"]; ?>">
                        <?php echo $destination["titre"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Durée</label>
            <input type="number" name="duree" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Difficulté</label>
            <select name="difficulte_id" class="form-control">
                <?php foreach ($difficulte as $difficulte) : ?>
                    <option value="<?php echo $difficulte["id"]; ?>">
                        <?php echo $difficulte["niveau"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <div class="form-group">
                <label>Prix</label>
                <input type="number" name="prix_indicatif" class="form-control" required>
            </div>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>