<?php
namespace MyWorkA;

$str = "This is home page";

  function strlen($str)
{
    return 10;
}

//echo strlen($str);

namespace MyWorkB;

 function strlen($str)
 {
     return 5;
 }

 echo \MyWorkA\strlen($str);
