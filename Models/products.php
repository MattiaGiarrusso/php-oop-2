<?php
class Products {
    public $name;
    public $brand;
    public $type;
    public $specie;
    public $image;
    public $price;

    public function __construct($_name, $_brand, $_type, Specie $_specie, $_image, $_price) {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->type = $_type;
        $this->specie = $_specie;        
        $this->image = $_image;
        $this->price = $_price;
    }
}
?>