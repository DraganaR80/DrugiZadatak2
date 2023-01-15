<?php

class Order {
private $products;
    private $totalPrice ;

    public function __construct()
    {
        $this->products = array();
        $this->totalPrice = 0;

    }

    public function addToCart(Product $p, $quantity=1){
        if( $p->reduceAmount($quantity)){ //ako imamo proizvoda na stanju trebamo da dodamo u niz i smanjuje se amount,vraca true
        $i=0;
        while ($i<$quantity){ //dodajemo u niz koliko ima quantity
            $this->products[] = $p;
                $i++;
        }
       
        $this->totalPrice += $p->getPrice()* $quantity;
    }
    else 
        echo "We are out of {$p->getProductName()}s";
    
    }
public function __toString()
{
        return " Total price: $this-> totalPrice";
}


}







?>