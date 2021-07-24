<?php



$arr1 = ([2,5,4,3,23,5,6,5]);


    function unique(array $inputArray)
    {
        $outputArray = array();

        foreach($inputArray as $inputArrayItem)
        {
            foreach($outputArray as $outputArrayItem)
            {
                if($inputArrayItem == $outputArrayItem) {
                    continue 2;
                }
            }
            $outputArray[] = $inputArrayItem;
        }
        return $outputArray;
    }

    print_r(unique($arr1));

