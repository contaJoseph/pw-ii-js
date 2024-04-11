<?php 

function Sum($a, $b)
{
    $ans = $a + $b;

    if ($ans < 0)
    {
        return 0;
    }

    return $ans;
}

$answer = "Resposta: " . Sum($x, $y) . "<br>";

echo "<h1>$answer</h1>";

