<?php

include "farm.php";
include "fruit.php";

$farm = new Farm(
    "Dědečkova farma",
    True,
    "Ovoce"
);

$jahoda = new Fruit(
    "Jahody",
    True,
    125
);

$boruvky = new Fruit(
    "Borůvky",
    False,
    250
);

$jahoda->grow();
$boruvky->grow();
$farm->grow();

$farm->addProduct($jahoda);
$farm->addProduct($boruvky);

echo "Farma: {$farm->name} </br>";
echo "Produkty: {$farm->productsType} </br>";
echo "Zásoby: " . ($farm->products ? "Ano" : "Ne") . "<br></br>";


foreach ($farm->products as $fruit) {
    echo "Product: {$fruit->name} </br>";
    echo "Čerstvost: " . ($fruit->freshness ? "Ano" : "Ne") . "</br>";
    echo "Balení: {$fruit->packageGrams} <br></br>";
}