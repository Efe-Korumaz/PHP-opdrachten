<?php
class Product
{
    public $name;
    public $price;

    public function showSalesPrice()
    {
        $salesPrice = $this->price * 1.09; 
        return number_format($salesPrice, 2); 
    }
}

$game1 = new Product;
$game1->name = "fifa";
$game1->price = 60;

$game2 = new Product();
$game2->name = "hollow knight";
$game2->price = 15;

$game3 = new Product();
$game3->name = "pokemon";
$game3->price = 60;

echo $game1->name . " - €" . $game1->showSalesPrice() . '<br>';
echo $game2->name . " - €" . $game2->showSalesPrice() . '<br>';
echo $game3->name . " - €" . $game3->showSalesPrice() . '<br>';
?>
