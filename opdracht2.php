<?php
class product
{
    public $name = 'een bepaald spel';
}

$game1 = new product;
$game1-> name = "fifa";

$game2 = new product();
$game2 -> name = "hollow knight";

$game3 = new product();
$game3->name = "pokemon";

echo $game1->name . '<br>' ;
echo $game2->name . '<br>';
echo $game3->name . '<br>';


?>