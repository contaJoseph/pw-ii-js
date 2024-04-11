<?php 

function contaPrimo($x, $y)
{
    print "Primeiro: $x <br>";
    print "Segundo: $y <br>";
    return $x % 2 == 0 && $y % 2 == 0 ? 'Par' : 'impar'; 
}

$ans = contaPrimo(10, 10);

print_r($ans);