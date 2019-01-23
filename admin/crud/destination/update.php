<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$destination = getOneEntity("destination", $id);

require_once '../../layout/header.php';
?>

<h1>Modification d'une destination</h1>

<form action="update_query.php" method="POST">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" value="<?php echo $destination["titre"]; ?>" class="form-control" placeholder="titre" required>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>