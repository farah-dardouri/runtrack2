<?php

$sql = @mysqli_connect('localhost', 'root' , '', 'jour08');
$request = @mysqli_query($sql, "SELECT SUM(`superficie`) FROM etage");
$resultat = @mysqli_num_rows($request);
  
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title></title>
<body>
    <table>
        <thead>
            <tr>
                <td>superficie_total</td>
            </tr>
        </thead>
        <tbody>
        <?php   
            while ($row = @mysqli_fetch_array($request)) {
                echo "<tr><td>$row[0]</td></tr>";
            }
        ?>
        </tbody>
    </table>
</body>