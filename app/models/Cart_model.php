<?php

namespace App\models;


class Cart_model {
    public $totalPrice = 0;
    public $totalItem = 0;
    public $status;
    public $items = [];

    const STATUS_PENDING = "En attente";
    const STATUS_VALIDATED = "Validé";

    public function __construct()
    {
        $this->status = self::STATUS_PENDING;

        if(isset($_SESSION['order'])) {
            $this->totalItem = count($_SESSION['order']);
            foreach ($_SESSION['order'] as $key => $item) {
                $item = unserialize($item);
                $this->items[] = array("item" => $item, "key" => $key);
                $this->totalPrice += $item->product->price * $item->quantity;
            }
        }
    }

    public function deleteItem($key)
    {
        unset($_SESSION['order'][$key]);
    }

    public function isEmpty()
    {
        return $this->totalItem == 0 ? true : false;
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

    /**
     * Get the value of items
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @return  self
     */ 
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }
}