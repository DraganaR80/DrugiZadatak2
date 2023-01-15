<?php

require "Customer.php";
require "Product.php";


$c1 = new Customer(1, "Pera", "Peric", 30, 1500);
$c2 = new Customer(2, "Ana", "Bojcic",25, 2000);
$c3 = new Customer(3, "Zarko", "Zec",16, 800);
$c4 = new Customer(4, "Jelena", "Babic",70, 1000);


$p1 = new Product(1, "Blic", " newspapers", 50, 450);
$p2 = new Product(2, "Marlboro", " cigarettes", 400, 800);
$p3 = new Product(3, "Milka", " chocolate", 150, 1000);
$p4 = new Product(4, "Rosa", " mineral water", 60, 1200);
$p5 = new Product(5, "Bermet", " wine", 650, 400);



echo $c1;
echo $p1;
$c1->buy($p1, 4);
echo "<br>" . $p1->getAmount() . "<br>";
$c1->buy($p3);
echo $c1->getMoney();