<?php


 $isPrime = function(int $number) :bool {

    if($number <=1)
        return false;

    for($i=2, $max = sqrt($number); $i<=$max;$i++)
    {
        if($number % $i ==0)
            return false;
    }

    return true;
 };

 $numbers = [1,5,7,12,13,15,27];

 foreach($numbers as $number)
 {
     echo $number. " is: ";
     echo $isPrime($number) ? 'Prime' : 'Not Prime';
     echo nl2br(PHP_EOL);
 }
 
