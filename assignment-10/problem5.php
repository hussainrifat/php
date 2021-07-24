<?php

class BankAccount{

    private CONST MINIMUM_DEPOSIT = 100;
    

    public function __construct(
        protected string $accountNumber,
        protected string $name,
        protected float $balance)
    {
        
    }

    public function deposit(float $amount)
    {
        if ($amount < (self::MINIMUM_DEPOSIT))
        {
            throw new Exception("Deposit Amonut is Very Small");
        }
        $this->balance += $amount;
    }


    public function withdrawal(float $amount)
    {

        if($this->balance>=$amount)
        {
            $this->balance -= $amount;
        }

        else {
                throw new Exception(' Insufficient Balance For new withdrawal');
         
        }
       
    }

    public function bankFees()
    {
       $this->balance = $this->balance - ($this->balance * (5/100));
    }

    public function display()
    {
        echo nl2br(PHP_EOL);
        return "Account Holder Name: " .$this->name. " Account Number : ".$this->accountNumber." Current Balance: " . $this->balance;
    }


}



    try{
        $obj1 = new BankAccount(12345,"Hussain","200");
        //echo $obj1->display();
        $obj1->deposit(20);
        echo $obj1->display();
    }

    catch(Exception $e)
    {
        echo $e->getMessage();
    }
