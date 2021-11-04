<?php
$str="I'm sorry Dave I'm afraid I can't do that";
$i_array= str_split($str) ;
    foreach($i_array as $voyelles){
        if($voyelles=="a" ||$voyelles== "e" ||$voyelles== "i" ||$voyelles== "o" ||$voyelles== "u" ||$voyelles== "y" ||$voyelles== "A" ||$voyelles== "E" ||$voyelles== "I" ||$voyelles== "O" ||$voyelles== "U" ||$voyelles== " Y" )
        echo $voyelles .'<br>';
}
?>