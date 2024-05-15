<?php
include_once __DIR__.'/products.php';

class CatsItem extends Products {
    public $species;
    public $amount;
    public $price;

    public function __construct($_name, $_brand,$_type,string $_image,$_species,$_amount,$_price) {
        parent::__construct($_name, $_brand,$_type,$_image);
        $this->species = $_species;
        $this->amount = $_amount;
        $this->price = $_price;
    }

}
?>