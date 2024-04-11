<?php

function average($n1, $n2)
{
    $avg = ($n1 + $n2) / 2;

    if ($avg >= 6)
    {
        
        echo "<h1>Aluno Aprovado</h1>";
    }
    else if ($avg >= 4)
    {
        echo "<h1>Aluno Recuperacao</h1>";
    }
    else 
    {
        echo "<h1>Aluno Reprovado</h1>";
    }

}

$avg = average($n1, $n2);


