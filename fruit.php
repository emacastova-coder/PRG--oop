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

    public function action(): string {
        return "I ask DOES this work?";
    }
   
}

class Berry extends Fruit {

    private string $type;

    public function __construct(string $name, bool $freshness, int $packageGrams, string $type) {
    parent::__construct($name, $freshness, $packageGrams);
    $this->type = $type;
    }

    public function action(): string {
        return "They fly by your side!";
    }
}

class Tropical extends Fruit {

    private string $type;

    public function __construct(string $name, bool $freshness, int $packageGrams, string $type) {
    parent::__construct($name, $freshness, $packageGrams);
    $this->type = $type;
    }

    public function action(): string {
        return "They can swim in the lava!";
    }
}