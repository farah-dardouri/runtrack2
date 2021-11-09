<?php
    define('_TAILLE_TABLEAU_X_',3);
    define('_TAILLE_TABLEAU_Y_',3);
     
    $affichageCase = "&nbsp;";
    if (!empty($_GET)) {
        if (isset($_GET['case'],$_GET['joueur'])) {
            if (intval($_GET['joueur']) == 1) {
                echo "X";
            } else {
                echo "O";
            }
        }
    }
    $joueur = 1;
    echo '<table border="1">'.PHP_EOL;
    for ($x=0; $x<_TAILLE_TABLEAU_X_;$x++) {
        echo '<tr>'.PHP_EOL;
        for ($y=0; $y<_TAILLE_TABLEAU_Y_;$y++) {
            echo '<td width="30" height="30" align="center" valign="center"><a href="tic_tac_toe.php?case='.$x.'_'.$y.'&joueur='.$joueur.'">'.(((isset($_GET['case'])) && ($_GET['case'] == $x.'_'.$y)) ? $affichageCase : "&nbsp;").'</a></td>';
            '<td width="30" height="30" align="center" valign="center"><a href="tic_tac_toe.php?case='.$x.'_'.$y.'&joueur='.$joueur.'">'.(((isset($_GET['case'])) && ($_GET['case'] == $x.'_'.$y)) ? $affichageCase : "&nbsp;").'</a></td>';
            '<td width="30" height="30" align="center" valign="center"><a href="tic_tac_toe.php?case='.$x.'_'.$y.'&joueur='.$joueur.'">'.(((isset($_GET['case'])) && ($_GET['case'] == $x.'_'.$y)) ? $affichageCase : "&nbsp;").'</a></td>';
            '<td width="30" height="30" align="center" valign="center"><a href="tic_tac_toe.php?case='.$x.'_'.$y.'&joueur='.$joueur.'">'.(((isset($_GET['case'])) && ($_GET['case'] == $x.'_'.$y)) ? $affichageCase : "&nbsp;").'</a></td>';
            '<td width="30" height="30" align="center" valign="center"><a href="tic_tac_toe.php?case='.$x.'_'.$y.'&joueur='.$joueur.'">'.(((isset($_GET['case'])) && ($_GET['case'] == $x.'_'.$y)) ? $affichageCase : "&nbsp;").'</a></td>';
            '<td width="30" height="30" align="center" valign="center"><a href="tic_tac_toe.php?case='.$x.'_'.$y.'&joueur='.$joueur.'">'.(((isset($_GET['case'])) && ($_GET['case'] == $x.'_'.$y)) ? $affichageCase : "&nbsp;").'</a></td>';
            '<td width="30" height="30" align="center" valign="center"><a href="tic_tac_toe.php?case='.$x.'_'.$y.'&joueur='.$joueur.'">'.(((isset($_GET['case'])) && ($_GET['case'] == $x.'_'.$y)) ? $affichageCase : "&nbsp;").'</a></td>';
            '<td width="30" height="30" align="center" valign="center"><a href="tic_tac_toe.php?case='.$x.'_'.$y.'&joueur='.$joueur.'">'.(((isset($_GET['case'])) && ($_GET['case'] == $x.'_'.$y)) ? $affichageCase : "&nbsp;").'</a></td>';
            '<td width="30" height="30" align="center" valign="center"><a href="tic_tac_toe.php?case='.$x.'_'.$y.'&joueur='.$joueur.'">'.(((isset($_GET['case'])) && ($_GET['case'] == $x.'_'.$y)) ? $affichageCase : "&nbsp;").'</a></td>';
        }
        echo '</tr>'.PHP_EOL;
    }
    echo '</table>'.PHP_EOL;
?>