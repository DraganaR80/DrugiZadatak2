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


public function buy (Product $p, $quantity=1){ //racuna se ako kupi da je to 1 proizvod,,iyvrsi kupovinu ako mozes da smanjis za ovoliko

        if ($this->money < $p->getPrice()*$quantity) //cena puta kolicina, da li imamo dovoljno novca da kupimo
            echo " Not enough money";
        else {
            if($p->reduceAmount($quantity)) //ako u prudct vratz TRUE, ulazimo u ovaj if smanjuje s ekolicina novca za br proizvoda koji je kupljen
            $this->money -= $p->getPrice()* $quantity;
            else
                echo " We are out of {$p->getProductName()}s";// u suprotnom nemamo proizvoda na stanju
        }
}


public function getMoney(){

        return $this->money;
}

public function __toString()
{
        return " Customer $this->firstname $this->lastname purchased merchandise for {$this->money}din <br>";
}



}






?>