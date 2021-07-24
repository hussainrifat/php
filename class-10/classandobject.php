<?php

 class account{

    public $balance = 0;

    public function __construct()
    {
        echo "I am working here from constructor";
    }

 }

 $obj1 = new account();