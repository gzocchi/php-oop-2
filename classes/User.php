<?php
class User
{
    protected $name;
    protected $surname;
    protected $mail;
    protected $address;
    protected $payment_method;
    protected $discount;

    function __construct($name, $surname, $mail, $discount = 0)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->setDiscount($discount);
    }

    public function getFullName()
    {
        return $this->name . " " . $this->surname;
    }

    public function setDiscount($val)
    {
        $this->discount = $val;
    }
}

class LoyalCustomer extends User
{
    public function setDiscount($val)
    {
        parent::setDiscount($val);
        $this->discount += 10;
    }
}
