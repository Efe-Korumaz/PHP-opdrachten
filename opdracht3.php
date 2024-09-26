<?php

class Product
{
public $name;
public $price;

    public function formatPrice()
    {
        return number_format( $this->price, 2);
    }

}

$game1 = new product;
$game1->name = "fifa";
$game1->price = 70;

$game2 = new product();
$game2 ->name = "hollow knight";
$game2->price = 15;


$game3 = new product();
$game3->name = "pokemon";
$game3->price = 60;


echo $game1-> name . $game1->formatPrice(). '<br>' ;
echo $game2->name . '<br>';
echo $game3->name . '<br>';