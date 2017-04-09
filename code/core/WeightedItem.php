<?php

class WeightedItem extends PurchaseItem {
    private $_weight;

    public function __defaultConstruct()
    {
        $this->_weight = 0.000;
    }

    public function __construct($_name, $_unitPrice, $_weight)
    {
        parent::__construct($_name, $_unitPrice);
        $this->_weight = $_weight;
    }

    public function getWeight()
    {
        return $this->_weight;
    }

    public function setWeight($weight)
    {
        $this->_weight = $weight;
    }

    public function getUnitPrice()
    {
        return $this->getWeight() * parent::getUnitPrice();
    }

    function __printInCheque()
    {
        echo sprintf($this->getWeight()
                            ." kgs of "
                            .$this->getName()
                            ." were bought for "
                            .number_format ( $this->getUnitPrice(), 2)
                            ." euros \n");
    }
}