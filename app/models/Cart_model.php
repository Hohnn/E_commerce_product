<?php

namespace App\models;


class Cart_model {
    public $totalPrice = 0;
    public $totalItem = 0;
    public $status;

    const STATUS_PENDING = "En attente";
    const STATUS_VALIDATED = "Validé";

    public function __construct()
    {
        $this->status = self::STATUS_PENDING;
    }

    /**
     * Get the value of totalPrice
     */ 
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set the value of totalPrice
     *
     * @return  self
     */ 
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice += $totalPrice;

        return $this;
    }

    /**
     * Get the value of totalItem
     */ 
    public function getTotalItem()
    {
        return $this->totalItem;
    }

    /**
     * Set the value of totalItem
     *
     * @return  self
     */ 
    public function setTotalItem($totalItem)
    {
        $this->totalItem = $totalItem;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}