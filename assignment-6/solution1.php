<?php

$arr1 = ["apple", "dell", "hp", "microsoft", "lenovo",
"fujitsu"];

$n = count($arr1);



for($i=0;$i<$n;$i++)
{
    $rev = strrev($arr1[$i]);
    echo $rev;
    echo nl2br(PHP_EOL);
}


