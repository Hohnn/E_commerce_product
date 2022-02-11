<?php

require '../vendor/autoload.php';
session_start();


use App\models\Cart_model;
use App\models\Order_model;
use App\models\Product_model;
$Cart = new Cart_model();

$desc = 'These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they’ll withstand everything the weather can offer.';
$product = new Product_model('sneakers', 'Fall Limited Edition', '125', $desc, 'Sneaker Company');

// Ajouter au panier
if (isset($_POST['quantity'])) {
    $Order = new Order_model($_POST['quantity'], $product);
    $Order = serialize($Order);
    $_SESSION['order'][] = $Order;
    $Cart = new Cart_model();
}

// Supprimer
if(isset($_POST['deleteItem'])) {
    $Cart->deleteItem($_POST['deleteItem']);
    $Cart = new Cart_model();
}