<?php

$arr1 = [7,23,20,13,2,4];
$n= count($arr1);

for($i=0;$i<$n;$i++)
{
    $m = $arr1[$i];
    $flag = 0;
    for($j=2;$j<$m/2;$j++)
    {
        if($m%$j==0)
        {
            $flag= 1;
            
        }
    }
    if($flag ==0)
    {
        echo "Prime";
        echo nl2br(PHP_EOL);
    }

    else echo "Not Prime";
    echo nl2br(PHP_EOL);

}

