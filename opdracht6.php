<?php
class Product
{
    public $name;
    public $price;
    public $category;
    private $description;
    public $rating;

    public function __construct($name, $description, $category = "dranken", $rating = 3)
    {
        $this->name = strtolower($name);
        $this->description = strtolower($description);
        $this->category = strtoupper($category);
        $this->rating = $rating;
    }

    public function showSalesPrice()
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }

    public function showDescription()
    {
        return ucfirst($this->description) . " - Rating: " . $this->rating . "/5";
    }
}

$game1 = new Product(name: "fifa", description: "it's a game about football where you play as a team");
$game1->price = 60;

$game2 = new Product(name: "hollow knight", description: "explore the world of hallownest and unravel the mysteries plaguing these lands", category: "exploration");
$game2->price = 15;

$game3 = new Product(name: "pokemon", description: "a magical world full of mysterious creatures", rating: 5);
$game3->price = 60;

echo $game1->name . " - €" . $game1->showSalesPrice() . " " . $game1->category . " - " . $game1->showDescription() . '<br>';
echo $game2->name . " - €" . $game2->showSalesPrice() . " " . $game2->category . " - " . $game2->showDescription() . '<br>';
echo $game3->name . " - €" . $game3->showSalesPrice() . " " . $game3->category . " - " . $game3->showDescription() . '<br>';
?>
