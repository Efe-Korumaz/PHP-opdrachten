<?php
class Product
{
    public $name;
    public $price;
    public $category;

    private $description;




    public  function __construct($name, $category, $description)
    {
        $this->name = strtolower($name);
        $this->description = strtolower($description);
        $this->category = strtoupper($category);
    }


    public function showSalesPrice()
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }
}

$game1 = new Product("fifa", "sport", "it's a game about football where you play as a team");
$game1->price = 60;

$game2 = new Product("hollow knight", "exploration", "Explore the world of hallownest and unravel the mysteries plaging these lands" );
$game2->price = 15;


$game3 = new Product("pokemon", "rpg", "ä magical world full of mysterious creatures" );
$game3->price = 60;



echo $game1->name. " - €" . $game1->showSalesPrice() . " " . $game1->category .'<br>';
echo $game2->name . " - €" . $game2->showSalesPrice() . " " . $game2->category . '<br>';
echo $game3->name . " - €" . $game3->showSalesPrice() . " " . $game3->category .  '<br>';
?>
