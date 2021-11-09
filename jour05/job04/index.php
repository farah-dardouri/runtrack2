<?php 
    function calcule($a , $operation , $b)
    {
        if ($operation == "+")
        {
        $result = $a + $b;
        }
        if ($operation == "-")
        {
        $result = $a - $b;
        }
        if ($operation == "*")
        {
        $result = $a * $b;
        }
        if ($operation == "/")
        {
        $result = $a / $b;
        }
        if ($operation == "%")
        {
        $result = $a % $b;
        }
        return $result;
    }
    $a = 12;
    $b = 2;
    $operation = "+";
    echo calcule($a , $operation , $b);
?>