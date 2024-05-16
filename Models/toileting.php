<?php
include_once __DIR__.'/services.php';
require_once __DIR__ . '/../Traits/quantities.php';

class Toileting extends Services {


    use Quantities;

    public function __construct($_name, $_type, $_price, $_quantities) {
        parent::__construct ($_name, $_type, $_price);
        $this->setQuantities($_quantities);
    }}
?>