<?php

namespace App\models;

class Order_model {
    public $qauntity;
    public $product;
    public $date;
    
    public function __construct()
    {
        var_dump('Order model');
    }

    /**
     * Get the value of qauntity
     */ 
    public function getQauntity()
    {
        return $this->qauntity;
    }

    /**
     * Set the value of qauntity
     *
     * @return  self
     */ 
    public function setQauntity($qauntity)
    {
        $this->qauntity = $qauntity;

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