<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-Jour04-Job05</title>
</head>
<body>
<form method="post" action="index.php">
 <fieldset>
     <legend>Vos coordonnées</legend>  
     <label for="username"> identifiant</label>
     <input type="text" name="username" id="username" />
     <label for="password"> mot de passe </label>
     <input type="text" name="password" id="password" />
 </fieldset>
 <input type="submit" value="Envoyer" />
</form>
</body>
</html>
<?php
if ($_POST['username'] == "John" AND $_POST['password'] == "Rambo")
{
    echo "C'est Pas Ma Guerre";
}
else
{
    echo "Votre Pire Cauchemar";
}
?>
