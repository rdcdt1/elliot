<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <?php include("header.php"); ?>
    <?php include("iconBar.php"); ?>

    <title>UserPage</title>
</head>
<body>
    <?php include("sidebar.php"); ?>
    <p>Utilisateur</p>
    <label for="Name">Nom : </label><input type="text" name="Name" id="Name">
    <label for="Prenom">Prénom : </label><input type="text" name="Prenom" id="Prenom">
    <label for="Telephone">Numéro de téléphone : </label><input type="text" name="Telephone" id="Telephone">
    <input type="image" name="modification" value="modification" src="../img/Enregistrer_les_modifications.png">
</body>
</html>