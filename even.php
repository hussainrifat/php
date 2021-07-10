<?php

 $isEven = function(int $num) : bool {

    if($num%2==0)
    {
        return true;
    }

    else
    return false;
 };

$numbers = [1,4,7,9,12,16,10];


foreach($numbers as $num)
{
    echo $num . " is ";
    echo $isEven($num) ? "Even" : "Odd";
    echo nl2br(PHP_EOL);
}