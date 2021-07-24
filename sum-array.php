<?php

// Write a function that takes two arrays of numbers and of the same length. Sum those
// elements one by one and return a new array of summed items.
// ● For example, you receive two arrays like [1, 2, 3, 4, 5] and [10, 8, 7, 2, 1].
// ● You have to sum the same index numbers and return [11, 10, 10, 6, 6].
// ● First items are summed up and added as the first item of the resulting array.


function addArrayElements (array $array1,array $array2) : bool | array
{
    if(count($array1) != count($array2))
    {
        
        return throw new Exception("Both Array Size Are Not Same");
    }

    $result = [];
    for($i=0, $max = count($array1); $i<$max;$i++)
    {
        $result [] = $array1[$i] + $array2[$i];
    }

    return $result;
}

try{
    print_r(addArrayElements([1, 2, 3, 4, 5,7],[10, 8, 7, 2, 1,5]));
}
catch(Exception $e)
{
    echo $e->getMessage();
}
