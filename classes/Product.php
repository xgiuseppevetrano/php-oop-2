<?php
    class Product {
        public $name;
        public $price;
        public $quantity;
        public $animalType;

        public function __construct(string $name, int $price, int $quantity, string $animalType)
        {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->animalType = $animalType;
        }
    }
?>
    