<?php

class Computers extends Products {

    private $screenSize;
    private $ram;

    public function __construct($name, $brand, $price, $screenSize, $ram, $discount = 0, $color = null)
    {
        parent::__construct($name, $brand, $price, $discount, $color);

        $this->screenSize = $screenSize;
        $this->ram = $ram;
    }

    public function getScreenSize()
    {
        return $this->screenSize;
    }

    public function hasScreenSize()
    {
        return true;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function hasRam()
    {
        return true;
    }
}