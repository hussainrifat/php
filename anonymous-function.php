<?php

$array = [
    'myKey' => function($number)
    {
        return $number + $number;
    }
];

echo $array['myKey'](23);