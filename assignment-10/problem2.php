<?php

class product {



    public function __construct(
        protected string $name, 
        protected string $description, 
        protected float $price)
    {   
        // $this->name = $name;
        // $this->description = $description;
        // $this->price = $price;
     
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDes(): string
    {
        return $this->description;
    }

    public function getPrice():float
    {
        return $this->price;
    }

   public function getDetails(): array
   {
       return [
        "name"          => $this->name,
        'Description'   => $this->description,
        'Price'         => $this->price,

       ];
   }

}

$product1 = new product("Iphone 12","This is iphone 12",90000); 
//$product1->getVal();
$productDetails = $product1->getDetails();

print_r($productDetails);
echo nl2br(PHP_EOL);

$product2 = new product("Iphone 12 Pro","This is iphone 12",120000); 
//$product2->getVal();
echo $product2->getName();


