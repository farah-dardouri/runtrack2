<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Runtrack2Jour04-Job03</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <fieldset>
                <legend>Vos coordonnées</legend>  
                <label for="nom">nom</label>
                <input type="text" name="nom" id="nom" />
                <br>
                <label for="prenom">prenom</label>
                <input type="text" name="prenom" id="prenom" />
                <br>
                <label for="email">mail</label>
                <input type="email" name="email" id="email" />
                <legend>Votre message </legend>
                <p>
                    <label for="precisions"></label>
                    <textarea name="precisions" id="precisions" cols="40" rows="4"></textarea>
                </p>
            </fieldset>
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>
<?php
$i= count($_POST);
echo "Le Nombre D'Arguments est de $i"
?>