<?php

class Smartphone extends Products {

    private $imei;
    private $screenSize;

    public function __construct($name, $brand, $price, $imei, $screenSize, $discount = 0, $color = null)
    {
        $this->setType("Smartphone");
        parent::__construct($name, $brand, $price, $discount, $color);

        $this->imei = $imei;
        $this->screenSize = $screenSize;
    }

    public function getImei()
    {
        return $this->imei;
    }

    public function getScreenSize()
    {
        return $this->screenSize;
    }

    public function hasImei()
    {
        return true;
    }

    public function hasScreenSize()
    {
        return true;
    }
}