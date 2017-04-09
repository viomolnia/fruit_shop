<?php

class PurchaseItem {
    private $_name;
    private $_unitPrice;

    public function __defaultConstruct()
    {
        $this->_name = "no item";
        $this->_unitPrice = 0;
    }
    public function __construct($name, $unitPrice)
    {
        $this->_name = $name;
        $this->_unitPrice = $unitPrice;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getUnitPrice()
    {
        return $this->_unitPrice;
    }
}