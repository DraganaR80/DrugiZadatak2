<?php

class Product{
    private $id;
    private $productName;
    private $productType;
    private $price;
    private $amount;

    public function __construct($id,$productName,$productType,$price,$amount)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->productType = $productType;
        $this->price = $price;
        $this->amount = $amount;
    }

    
public function __toString()
{
        return "Product $this->productName is $this->productType.Price of this product is {$this->price}din<br>";
}





}




?>