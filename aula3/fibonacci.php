<?php 

function fibonacci($num)
{
    $arr = [0, 1];

    for ($i = 1; $i < $num; $i++)
    {
        array_push($arr, $arr[$i] + $arr[$i - 1]);
    }

    return $arr;
}

$f  = fibonacci(10);

echo "<pre>";
print_r( $f );
echo "</pre>";
