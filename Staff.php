<?php


class Staff
{
    public $id;
    public $name;
    public $age;
    public $phone;

    public function __construct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

}