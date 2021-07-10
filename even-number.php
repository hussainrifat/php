<?php


 function giveMeEvenNumbers($start,$end)
 {
     $evenNumbers= [];

     for($i=$start;$i<=$end;$i++)
     {
         if($i%2==0)
         {
             $evenNumbers[] =$i;
         }
     }
     return $evenNumbers;
 }


 $even = giveMeEvenNumbers(1,100);
 print_r($even);