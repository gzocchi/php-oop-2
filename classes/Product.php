<?php
class Product
{
    protected $name;
    protected $price;
    protected $quantity;
    protected $min_order;

    function __construct($name, $price, $quantity = 1, $min_order = 1)
    {
        $this->name = $name;
        $this->price = number_format($price, 2);
        $this->quantity = intval($quantity);
        $this->min_order = intval($min_order);
    }


    public function setPrice($val)
    {
        $this->price = number_format($val, 2);
    }
    public function getPrice()
    {
        return $this->price . " $";
    }

    public function setQuantity($val)
    {
        $this->quantity = intval($val);
    }
    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setMinOrder($val)
    {
        $this->min_order = $val;
    }
    public function getMinOrder()
    {
        return $this->min_order;
    }

    public function iCanBuyIt()
    {
        return $this->quantity >= $this->min_order ? true : false;
    }
}
