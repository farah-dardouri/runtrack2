<?php
$db = mysqli_connect ("localhost", "root", "", "jour 8");
$requete = "SELECT * FROM etudiants";
$query = mysqli_query ($db, $requete);
$resultats = mysqli_fetch_all ($query);
// echo  $requete;
// var_dump ($resultats);
$MAX = count($resultats);
$MAX = $MAX - 1;
?>