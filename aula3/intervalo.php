<?php 

function interval($n)
{
    return $n % 2 == 0 ? print" Par " : print" Impar " ;
}

$int = interval(11);

echo "<pre>";
var_dump($int);
echo "</pre>";