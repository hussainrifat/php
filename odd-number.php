<?php


 function giveMeOddNumbers($start,$end)
 {
     $oddNumbers= [];

     for($i=$start;$i<=$end;$i++)
     {
         if($i%2==1)
         {
             $oddNumbers[] =$i;
         }
     }
     return $oddNumbers;
 }


 $odd = giveMeOddNumbers(1,100);
 print_r($odd);