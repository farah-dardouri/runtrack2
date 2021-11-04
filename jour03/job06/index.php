<?php
$str="Certaines choses changent, et d'autres ne changeront jamais.";
$i=0;
$length=strlen($str);
  for($i=$length-1;$i >=0;$i--){
      echo $str[$i];
  }
?>