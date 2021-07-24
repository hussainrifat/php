<?php

$odds = function($num)
{
    for($i=1;$i<=$num;$i++)
    {
        if($i%2==1)
        {
            yield $i;
        }
    }
};

$numbers = $odds(100);

//var_dump($numbers);
foreach($numbers as $number)
{
    echo $number;
    echo nl2br(PHP_EOL);
}