<?php
class Customer {

    private $id;
    private $firstname;
    private $lastname;
    private $age;
    private $money;




    public function __construct($id,$firstname,$lastname,$age,$money)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->money = $money;
    }


public function __toString()
{
        return " Customer $this->firstname $this->lastname purchased merchandise for {$this->money}din <br>";
}



}






?>