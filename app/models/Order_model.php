<?php

namespace App\models;

use DateTime;

class Order_model {
    public $quantity;
    public $product;
    public $date;
    
    public function __construct($quantity, $product, $Cart)
    {
        $this->quantity = $quantity;
        $this->product = $product;
        $this->date = new DateTime();

        $Cart->setTotalPrice($this->quantity * $this->product->price);
    }

    /**
     * Get the value of qauntity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of qauntity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of product
     */ 
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */ 
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}