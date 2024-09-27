<?php
class Product
{
    public $name;
    public $price;
    public $category;
    private $description;
    public $rating;
    public $currency = '€';

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

    public function getProduct()
    {
        return "Product: " . ucfirst($this->name) . "<br>" .
            "Prijs: " . $this->currency . number_format($this->price, 2) . "<br>" .
            "Categorie: " . $this->category . "<br>" .
            "Beschrijving: " . ucfirst($this->description) . "<br>" .
            "Rating: " . $this->rating . "/5<br>";
    }
}

$game1 = new Product(name: "fifa", description: "it's a game about football where you play as a team");
$game1->price = 60;

$game2 = new Product(name: "hollow knight", description: "explore the world of hallownest and unravel the mysteries plaguing these lands", category: "exploration");
$game2->price = 15;

$game3 = new Product(name: "pokemon", description: "a magical world full of mysterious creatures", rating: 5);
$game3->price = 60;

echo $game1->getProduct() . '<br>';
echo $game2->getProduct() . '<br>';
echo $game3->getProduct() . '<br>';
?>
