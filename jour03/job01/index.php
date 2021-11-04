<?php 
   $i = array(200, 204, 173, 98, 171, 404, 159);
   foreach($i as $v)
    {
        if ($v%2==0){
        echo $v." Est Pair <br />";
    }
        elseif($v%1==0){
        echo $v." Est Impair <br />";}
    }
?>