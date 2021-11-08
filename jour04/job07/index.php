<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack 2 Jour 4 Job 01</title>
</head>
<body>
<form method="post" action="index.php">
 <fieldset>
     <legend>Vos coordonnées</legend>
     <label for="hauteur">Hauteur</label>
     <input type="text" name="hauteur" id="hauteur" />
     <label for="largeur"> largeur </label>
     <input type="text" name="largeur" id="largeur" />
 </fieldset>
 <input type="submit" value="Envoyer" />
</form>
</body>
</html>
<?php
echo "<center>/\</br>";
for ($hauteur = $_POST['hauteur']; $hauteur > 0 ; $hauteur--)
{
    $largeur = $_POST['hauteur'];
    $largeur = $largeur - $hauteur;
echo "/";
    for ($wcenter = 0; $wcenter <= $largeur; $wcenter++)
    {
        echo "_";
    }
echo "\ " ;
echo "</br>";
}
for ($hauteur = $_POST['hauteur'] - 1; $hauteur > 0 ; $hauteur--)
{
    $largeur = $_POST['hauteur'];
    $largeur = $largeur * 2;
echo "|&#160;";

    for ($wcenter = 0; $wcenter <= $largeur; $wcenter++)
    {
        echo "&#160;";
    }
echo "|" ;
echo "</br>";
}
echo "|_";
$largeur = $_POST['hauteur'];
$largeur = $largeur - 1;
for ($wcenter = 0; $wcenter <= $largeur; $wcenter++)
    {
        echo "_";
    }
echo "|" ;
echo "</br>";
?>