<?php
    require_once __DIR__ . '/Product.php';

    class Toy extends Product {
        public $size;

        public function __construct(string $name, int $price, int $quantity, string $animalType, string $size) {
            parent::__construct($name, $price, $quantity, $animalType);
            $this->size = $size;
        }
    }
?>