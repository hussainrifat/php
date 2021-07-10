<?php

// closure 
// when we want to use a variable in function we need to use use keyword in function
// it will known as closure otherwise it will be lamda

$val1= 10;
$val2 =4;
$sq = function (int $num1) use($val1, $val2) {
    $sum = $num1 + $val1 +$val2;
    return $sum;
};

echo $sq(6);