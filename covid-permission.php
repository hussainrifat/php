<?php

//  Write a program that gives you access to a building only if
// - You are wearing a mask
// - You are Covid Negative
// - You do not have body temperature higher than 98 degree celsius 

 $isWearingMask = true;
 $isCovidNegative = false;
 $bodyTemperature = 98;

 if ($isWearingMask && $isCovidNegative && $bodyTemperature <100 )
 {
     echo "You have the access to enter";
 }

 else 
 echo "Sorry You are not allowed";