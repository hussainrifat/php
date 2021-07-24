<?php

//4. Write a program that prints the middle character of a string.
$string = "Apple";
$n = strlen($string);

if($n%2==0)
{
    $middle = $string[$n/2];
    echo $middle;
}

else {
    $n= $n-1;
    $middle = $string[$n/2];
    echo $middle;
}


