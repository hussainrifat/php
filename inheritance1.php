<?php


class fruit {

    public function __construct(
        protected string $name,
        protected string $color,
    )
    {
    }

    protected function intro(){
        return "The fruit is {$this->name} and color is {$this->color}";
    }
}


class strawberry extends fruit{

    public function viewMessage(){
        echo parent::intro();
    }
}

$obj1 = new strawberry("Jackfruit","Yellow");
$obj1->viewMessage();