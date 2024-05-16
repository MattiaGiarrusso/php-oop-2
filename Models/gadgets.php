<?php
include_once __DIR__.'/products.php';

class Gadjets extends Products {
    public $materials;
    public $color;

    public function __construct($_name, $_brand, $_type, Specie $_specie,$_image, $_price, array $_materials, array $_color) {
        parent::__construct($_name, $_brand, $_type, $_specie,$_image, $_price);
        $this->materials = $_materials;
        $this->color = $_color;
    }

}
?>