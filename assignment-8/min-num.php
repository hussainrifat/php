<?php


function minimum( array $arr1)
{
    $n = $arr1[0];

    foreach($arr1 as $item)
    {
       
        if($n>=$item)
        {
            $n = $item;
         
        }
        else
        {
            continue;
        }

    }
    return $n;
}


$arr2 = minimum([5,3,10,25,6]);

echo $arr2;

