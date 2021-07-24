<?php


$primeNumber = function(int $number) :bool{

    if($number<=1)
    return false;

    for($i=1, $max = sqrt($number);$i<=$max;$i++){
        if($number%$i==0)
        {
            return false;
        }
    }

    return true;
};

$numbers = [1,2,4,7,12,21,13];

foreach($numbers as $number)
{
    echo "{$number} is: ";
    echo $primeNumber($number) ? 'Prime' : 'Not Prime';
   echo nl2br(PHP_EOL);
}