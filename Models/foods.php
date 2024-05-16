<?php
include_once __DIR__.'/products.php';
require_once __DIR__ . '/../Traits/quantities.php';

class Foods extends Products {

    use Quantities;

    public $ingredient;
    public $expiryDate;

    public function __construct($_name, $_brand, $_type, Specie $_specie, $_image, $_price, $_ingredient, $_expiryDate, $_quantities) {
        parent::__construct($_name, $_brand, $_type, $_specie, $_image, $_price);
        $this->setQuantities($_quantities);
        $this->ingredient = $_ingredient;
        $this->expiryDate = $_expiryDate;
    }

}
?>