<?php
class Product
{
    public $name;
    public $price;
    public $category;

    public function setName($name)
    {
        $this->name = strtolower($name);
    }

    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }

    public function showSalesPrice()
    {
        $salesPrice = $this->price * 1.09; // 9% BTW toevoegen
        return number_format($salesPrice, 2); // Met 2 cijfers achter de komma
    }
}

$game1 = new Product;
$game1->setName("fifa" );
$game1->price = 60;
$game1->setCategory("sport");

$game2 = new Product();
$game2->name = "hollow knight";
$game2->price = 15;
$game2->setCategory("exploration");


$game3 = new Product();
$game3->name = "pokemon";
$game3->price = 60;
$game3->setCategory("rpg");


echo $game1->name. " - €" . $game1->showSalesPrice() . " " . $game1->category .'<br>';
echo $game2->name . " - €" . $game2->showSalesPrice() . " " . $game2->category . '<br>';
echo $game3->name . " - €" . $game3->showSalesPrice() . " " . $game3->category .  '<br>';
?>
