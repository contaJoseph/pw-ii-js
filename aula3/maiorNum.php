<?php

$nums = array(20, 45, 70, 86, 49);
$result = $nums[0];

foreach ($nums as $num)
{
    if ($num > $result)
    {
        $result = $num;
    }
}

echo "Maior numero: " . $result;