<?php
class Services {
    public $name;
    public $type;
    public $price;

    public function __construct($_name, $_type, $_price) {
        $this->name = $_name;
        $this->type = $_type;       
        $this->price = $_price;
    }
}
?>