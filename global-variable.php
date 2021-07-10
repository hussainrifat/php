<?php

$i =10;
$name = 'Hussain';


 function check(){
   // print_r($GLOBALS['i']);

   global $name;
   $name = "rifat";
   echo $name;
 }

 check();
