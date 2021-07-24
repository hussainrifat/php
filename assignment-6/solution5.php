<?php

$array = range(1,50);

foreach($array as $item)
{
    if($item%3==0 && $item%5==0)
    {
        echo "FizzBuzz";
    }
    elseif($item%3==0)
    {
        echo "Fizz";
    }

    elseif($item%5==0)
    {
        echo "Buzz";
    }
    else

    {
        echo $item;
    }
    echo nl2br(PHP_EOL);
}