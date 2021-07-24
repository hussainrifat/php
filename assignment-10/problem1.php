<?php

class product {
    public $name, $description, $price;

    public function getVal($name, $des, $pr)
    {
        $this->name = $name;
        $this->description = $des;
        $this->price = $pr;

        echo "Mobile Name : " .$this->name . " Description: " . $this-> description . " Price: " . $this->price;
        echo nl2br(PHP_EOL);

    }

}

$product1 = new product(); 
$product1->getVal("Iphone 12","This is iphone 12","90,000 BDT");

$product2 = new product(); 
$product1->getVal("Iphone 12 Pro","This is iphone 12 Pro","1,20,000 BDT");

