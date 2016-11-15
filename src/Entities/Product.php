<?php

namespace Rafael\Cart\Entities;

class Product implements ProductInterface
{
    protected $name;
    protected $description;
    protected $price;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        if (!is_numeric($price)) {
            throw new \InvalidArgumentException;
        }
        $this->price = $price;
    }
}

?>
