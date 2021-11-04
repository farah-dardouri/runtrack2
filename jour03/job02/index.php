<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$i= str_split($str);
foreach($i as $in=>$v){
    if($in %2!==1)
      echo $v;
}
?>

