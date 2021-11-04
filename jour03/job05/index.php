<!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job05</title>
    <body>
        <?php
            $str = "On n est pas le meilleur quand on le croit mais quand on le sait.";
            $dic =['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];
            $dic1 = ['a', 'e', 'i', 'o','0', 'u' ,'y'];
            
           /* $i = 0;
            
            while (isset($str[$i])) {
            $m = 0;
                while (isset($dic[$m])) {
                    if ($str[$i] == $dic[$m]) 
                        echo $str[$i] .'<br>';
                        $m = $m + 1;
                    }
                    $i = $i+ 1;
                
            }
            $nb = 0;
            
            while (isset($str[$nb])) {
            $nbr = 0;
                while (isset($dic1[$nbr])) {
                    if ($str[$nb] == $dic1[$nbr]) 
                        echo $str[$nb] .'<br>';
                        $nbr = $nbr+ 1;
                    }
                    $nb = $nb+ 1; 
            }*/
           
                    
        ?>

        <table>
                <thead>
                    <tr>
                        <th>Consonnes</th>
                        <th>Voyelles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php $i = 0;
            
            while (isset($str[$i])) {
            $m = 0;
                while (isset($dic[$m])) {
                    if ($str[$i] == $dic[$m]) 
                        echo $str[$i] .'<br>';
                        $m = $m + 1;
                    }
                    $i = $i+ 1;
                
            } ?></td>
                        <td><?php $nb = 0;
            
            while (isset($str[$nb])) {
            $nbr = 0;
                while (isset($dic1[$nbr])) {
                    if ($str[$nb] == $dic1[$nbr]) 
                        echo $str[$nb] .'<br>';
                        $nbr = $nbr+ 1;
                    }
                    $nb = $nb+ 1; 
            }?></td>
                    </tr>
                </tbody>
            </table>
    </body>        
</html>














