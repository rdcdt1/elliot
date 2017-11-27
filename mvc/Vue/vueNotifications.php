<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <?php include("header.php"); ?>
    <?php include("iconBar.php"); ?>

    <title>Notification</title>

    <style>
        table
        {
            border-collapse: collapse;
        }
        td
        {
            border: 1px solid black;
    </style>
</head>
<body>
<?php include("sidebar.php"); ?>
<p> Vous avez <?php $notfi; ?> notifications</p>
<table>
    <tr>
        <th>Dates</th>
        <th>Objet</th>
        <th>Message</th>
    </tr>

    <tr>
        <td><?php $insertdate; ?></td>
        <td><?php $insertobjet; ?></td>
        <td><?php $insertmessage; ?></td>
    </tr>
</table>

<form>
    <div>
        <p>Voulez-vous recevoir les notifications par sms ?</p>
        <input type="checkbox" id="Oui" name="Oui" value="notification">
        <label for="Oui">Oui</label>
        <input type="checkbox" id="Non" name="Non" value="notification">
        <label for="Non">Non</label>
        <br />
        <input type="image" name="modification" value="modification" src="../img/Enregistrer_les_modifications.png">
    </div>
</form>
</body>
</html>