<?php
$str="Les loups se reveillent";
$char= "e";
function occurrences ($str, $char) {
return substr_count ($str,$char); }
echo occurrences ($str,$char);
?>