<?php
declare(strict_types=1);


    function sum(){

        $args = func_get_args();
        $sum = 0;

        foreach($args as $item)
        {
            $sum +=$item;
        }

        return $sum;
        
    }

    function getArg( string $operator,...$args)
    {
 
        $result =0;
        foreach($args as $item)
        {
            if($operator=="sum")
            {
                $result +=$item;
            }

            else{
                $result -=$item;

            }

                }
        return $result;
    }

    echo getArg("sum",15,3);


