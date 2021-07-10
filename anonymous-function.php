<?php

$array = [
    'myKey' => function($number)
    {
        return $number + $number;
    }
];

echo $array['myKey'](20,21,22,23);