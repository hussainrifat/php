<?php

//Write a program to reverse a string.

$string = "This is a code";
$n = strlen($string);


for($i=1;$i<=$n;$i++)
{
    $rev = $string[-$i];
    echo $rev;
}

