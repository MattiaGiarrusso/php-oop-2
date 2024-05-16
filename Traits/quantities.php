<?php
trait Quantities {
    protected $quantities;

    public function getQuantities() {
        return $this->quantities;
    }

    public function setQuantities($newQuantities) {
        $this->quantities = $newQuantities;
    }
}
?>