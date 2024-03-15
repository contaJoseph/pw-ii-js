<?php 

function fibonacci($n)
{
    $arr = [0, 1];

    for ($i = 1; $i < $n; $i++)
    {
        array_push($arr, $arr[$i] + $arr[$i-1]);
    }

    return $arr;
}

print_r(fibonacci(10));