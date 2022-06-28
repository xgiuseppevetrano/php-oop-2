<?php
    require_once __DIR__ . '/Product.php';

    class Food extends Product {
        public $expireDate = null;


        public function __construct(string $name, int $price, int $quantity, string $animalType, DateTime $expireDate) {
            parent::__construct($name, $price, $quantity, $animalType);
            $this->expireDate = $expireDate;
        }
    }
?>