<?php
//Write a program to find the length of a string. 
$string = "This Is A String";

$i= 0;
while (@$string[$i])
{
    $i++;
}

echo $i;