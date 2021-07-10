<?php


 function sum($num) {

    $sum = 0;
    for($i=0;$i<$num;$i++)
    {
        $sum+=$i;
    }

    return $sum;
 }

 $result = sum(10);
 echo $result;