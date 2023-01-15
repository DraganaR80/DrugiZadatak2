<?php

class Product
{
    private $id;
    private $productName;
    private $productType;
    private $price;
    private $amount;

    public function __construct($id, $productName, $productType, $price, $amount)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->productType = $productType;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getPrice()
    {

        return $this->price;
    }

public function getProductName()
{
        return $this->productName;

}

public function getAmount(){

        return $this->amount;
}
    public function reduceAmount($quantity)
    {
        if ($this->amount >=$quantity) { //ne moze da izvrsi kupovinu kolicine koja ne postoj, mozemo da kupimo kao je amount >= sa quantity
            $this->amount-=$quantity;    //oduzima se od pocetne kolicine , ako nije >= ne moze da se kupi
            return TRUE;// vraca true kad je uspesna kupovina tj odabrali smo kolicinu proizvoda koliko ima na stanj
        } else {

            return FALSE;// vraca false kada nema na stanju ta kolicina, kupovina nije uspesna
        }
    }
    public function __toString()
    {
        return "Product $this->productName is $this->productType.Price of this product is {$this->price}din<br>";
    }

}




	




?>