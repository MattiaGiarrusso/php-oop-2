<?php
class Products {
    public $name;
    public $brand;
    public $type;
    public $image;

    public function __construct($_name, $_brand,$_type,string $_image) {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->type = $_type;
        $this->image = $_image;
    }

}
?>