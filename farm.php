<?php

class Farm {

    public string $name;
    public bool $haveProducts;
    public string $productsType;
    public array $products;

    public function __construct(string $name, bool $haveProducts, string $productsType) {
        $this->name = $name;
        $this->haveProducts = true;
        $this->productsType = $productsType;
        $this->products = [];
    }

    public function grow(): void {
        $this->haveProducts = false;
    }

    public function addProduct(Fruit $fruit): void {
        $this->products[] = $fruit;
    }
}

