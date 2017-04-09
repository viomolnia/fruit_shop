<?php

class CountedItem extends PurchaseItem {
    private $_count;

    public function __defaultConstruct()
    {
        $this->_count = 0;
    }

    public function __construct($_name, $_unitPrice, $_count)
    {
        parent::__construct($_name, $_unitPrice);
        $this->_count = $_count;
    }

    public function getCount()
    {
        return $this->_count;
    }

    public function setCount($count)
    {
        $this->_count = $count;
    }

    public function getUnitPrice()
    {
        return $this->getCount() * parent::getUnitPrice();
    }

    function __printInCheque()
    {
        echo sprintf($this->getCount()
                            ." pieces of "
                            .$this->getName()
                            ." were bought for "
                            .number_format ( $this->getUnitPrice(), 2)
                            ." euros \n");
    }
}