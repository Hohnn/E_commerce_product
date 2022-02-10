<?php

require '../vendor/autoload.php';


use App\models\Cart_model;
use App\models\Order_model;
use App\models\Product_model;

$Order = new Order_model();
$Cart= new Cart_model();
$desc = 'These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they’ll withstand everything the weather can offer.';
$product = new Product_model('sneakers', 'Fall Limited Edition', '125', $desc);
var_dump($product->getType());