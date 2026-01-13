<?php

include "farm.php";
include "fruit.php";

$farm = new Farm(
    "Dědečkova farma",
    True,
    "Ovoce"
);

$jahoda = new Tropical(
    "Jahody",
    True,
    125,
    "tropical fruit"
);

$boruvky = new Berry(
    "Borůvky",
    False,
    250,
    "a berry"
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
    echo "Balení: {$fruit->packageGrams} <br>";
    echo "Specialita: {$fruit->action()} <br></br>";
}