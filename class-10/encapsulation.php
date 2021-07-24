<?php

class account{
    private $balance;

    public function __construct($balance)

    {
        $this->balance = $balance;    
    }

    public function credit( int $balance)
    {
        $this->balance +=$balance;
    }

    public function debit(int $balance)
    {
        if( $balance<= $this->balance)
        {
            $this->balance -=$balance;

        }

        else {
            echo " Insufficient balance";
        }

        
    }

    public function getBalance()
    {
        echo PHP_EOL;
        echo "Account Balance Is " .$this->balance;
    }
}

$obj = new account(100);

$obj->debit(5004);
$obj->getBalance();


