<?php

require '../vendor/autoload.php';
session_start();


use App\models\Cart_model;
use App\models\Order_model;
use App\models\Product_model;
$Cart = new Cart_model();

$desc = 'These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they’ll withstand everything the weather can offer.';
$product = new Product_model('sneakers', 'Fall Limited Edition', '125', $desc, 'Sneaker Company');



if (isset($_POST['quantity'])) {
    var_dump('ok');
    $Order = new Order_model($_POST['quantity'], $product, $Cart);
    empty($_SESSION['order']) ? $_SESSION['order'] = $Order : $_SESSION['order'] += $Order;

}

var_dump($Cart->getTotalPrice());
