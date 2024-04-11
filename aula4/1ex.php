<?php

function Sum($x, $y)
{
    $ans = $x + $y;

   if ($ans < 0)
   {
        return 0;
   }

   return $ans;
}

$s = Sum(13, 13);

echo "Resposta: $s";