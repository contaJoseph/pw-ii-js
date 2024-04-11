<?php 


function numPrime($num)
{
    return $num % 2 == 0 ? 'Par' : 'Impar';
}

$prime = numPrime($num);

echo "<h1>Número: $prime</h1>";