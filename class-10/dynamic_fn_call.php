<?php

function giveMeSq(int $number)
{
    return $number*$number;
}

//echo giveMeFive();
//$result = call_user_func('giveMeSq',5);
$result = call_user_func_array('giveMeSq',[5,10] );
echo $result;