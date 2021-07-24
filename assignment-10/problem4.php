<?php

class  person {

    public function __construct(
        protected string $name,
        protected int $age)
    {
       
    }


    public function display()
    {
        return [
            $this->name,
            $this->age,
        ];
    }
}

class student extends person {

    public function __construct(
        protected string $name,
        protected int $age,
        protected string $section)
    {
       
    }

  
    public function displayStudent()
    {
        return [
            $this->name,
            $this->age,
            $this->section,
        ];
    }

}

$personObj = new person('Hussain',26);
$personObj->display();

$stdObj = new student("Hussain",21,"A");

list($name,,$section22) = $stdObj->displayStudent();
// $stdObj->displayStudent();
var_dump($name);