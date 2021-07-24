<?php

$ar1 = [1,2,3,4];
$ar2 = [ 4,3,1,1,1];


    function isSubset( array $ar1, array $ar2)
    {
        $ar3 = [];


        foreach($ar1 as $item1)
        {

            foreach($ar2 as $item2)
            {
                if($item1==$item2)
                {
                    $ar3[] = $item1;
                }
                else continue;
            }
        }
        return array_unique($ar3);
    }

    $result = isSubset($ar1,$ar2);
    

    print_r($result);