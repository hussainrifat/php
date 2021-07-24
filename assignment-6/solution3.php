<?php

$array = range(1,10);
$n = count($array);
$arr2=[];

for($i=0;$i<$n;$i++)
{
    $m= $array[$i];
    $arr2[] = $m*$m;
    echo $arr2[$i];
    echo nl2br(PHP_EOL);

}

