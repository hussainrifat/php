<?php

$array = range(1,150);


foreach($array as $item)
{
    if($item%2===1)
    {
        echo $item;
        echo nl2br(PHP_EOL);
    }
}