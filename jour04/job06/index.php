<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-Jour04-Job01</title>
</head>
<body>
<form method="post" action="index.php">
 <fieldset>
     <legend>Vos coordonnées</legend>
     <label for="number">Votre numero</label>
     <input type="text" name="number" id="number" />
 </fieldset>
 <input type="submit" value="Envoyer" />
</form>
</body>
</html>
<?php
$nom = $_POST['number'];
if ($_POST['number']%2 == 1)
echo "$nom est impair";
else
echo "$nom est pair";