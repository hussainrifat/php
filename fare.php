<?php

// Create a Vehicle class with name, max_speed,mileage and seating_capacity attributes.
// The default fare charge of any vehicle is seating capacity * 100. Create a child class Bus
// that will inherit all of the variables and methods of the Vehicle class.
// ● If Vehicle is Bus instance, we need to add an extra 10% on full fare as a
// maintenance charge. So total fare for bus instances will become the final amount =
// total fare + 10% of the total fare.
// ● Note: The bus seating capacity is 50. so the final fare amount should be 5500. You
// need to override the fare() method of a Vehicle class in Bus class.

class vehicle {

    protected const CHARGE = 100;
    public function __construct(
        protected string $name,
        protected float $max_speed,
        protected float $mileage,
        protected int $seating_capacity,

    )
    {  
    }

    public function fare():float {
        return $this->seating_capacity*self::CHARGE;
    }
}

class bus extends vehicle {

    private const FUEL_FARE_PARCENT = 10;
    private const MAX_SEATING_CAPACITY = 50;

    public function __construct(
        protected string $name,
        protected float $max_speed,
        protected float $mileage,
        protected int $seating_capacity,

    )
    {  
        if ($seating_capacity > self::MAX_SEATING_CAPACITY)
        {
            throw new Exception('Seat Capacity Is Over');
        }
    }



    public function fare():float {
       // $fare = $this->seating_capacity*self::CHARGE;
        $fare = parent::fare();
        $charge = $fare * (Self::FUEL_FARE_PARCENT/100);
        return $fare + $charge;
    }

}

try{
    $obj1 = new bus("Bus",200,1000,100);
    var_dump($obj1->fare());
}

catch (Exception $e)
{
    var_dump($e->getMessage());
}


