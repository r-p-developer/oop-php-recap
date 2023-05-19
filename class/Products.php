<?php

class Products {
    // Proprietà pubbliche
    public $brand;
    public $color;

    // Proprietà private
    private $name;
    private $price;
    private $discount;
    private $categories = [];

    // Proprietà protette
    private $type = "Prodotto generico";

    public function __construct($name, $brand, $price, $discount = 0, $color = null)
    {
        $this->setPrice($price);

        $this->name = $name;
        $this->brand = $brand;
        $this->discount = $discount;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function addCategory($category)
    {
        if (empty($category)) {
            throw new Exception("La categoria non può essere vuota");
        }

        if (in_array($category, $this->categories)) {
            throw new Exception("La categoria è già stata assegnata a questo prodotto");
        }

        $this->categories[] = $category;

        return $this;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function getPrice($formattedPrice = false)
    {
        if ($formattedPrice) {
            return $this->formattedPrice($this->price);
        }
        
        return $this->price;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function discountPrice($formattedPrice = false)
    {
        $discountPrice = $this->price - round(($this->price * $this->discount / 100), 2);
        if ($formattedPrice) {
            return $this->formattedPrice($discountPrice);
        }

        return $discountPrice;
    }

    private function formattedPrice($price)
    {
        return number_format($price, 2, ",", ".") . " &euro;";
    }

    public function setPrice($price)
    {
        if ($price <= 0) {
            throw new Exception("Il prezzo deve essere maggiore di 0.");
        }

        $this->price = $price;
    }

    public function hasImei()
    {
        return false;
    }

    public function hasScreenSize()
    {
        return false;
    }

    public function hasRam()
    {
        return false;
    }

    protected function setType($type)
    {
        $this->type = $type;
    }
}