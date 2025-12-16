<?php

class Fruit {

    public string $name;
    public bool $freshness;
    public int $packageGrams;

    public function __construct(string $name, bool $freshness, int $packageGrams) {
        $this->name = $name;
        $this->freshness = true;
        $this->packageGrams = $packageGrams;
    }

    public function grow(): void {
        $this->freshness = false;
    }
}