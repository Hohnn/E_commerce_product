<?php
  require '../app/controllers/Controllers.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/assets/css/style.css">
  <title>Frontend Mentor | E-commerce product page</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
  </style>
</head>
<body>
  <div class="container-xl">
    <header>
      <div class="burger" id="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <a class="brand_logo" href="/"><img src="../public/assets/images/logo.svg" alt="brand logo"></a>
      <nav class="closed" id="nav">
        <ul class="nav">
          <div class="close" id="closeNav"><img src="../public/assets/images/icon-close.svg" alt="close"></div>
          <li class="nav-item">
            <a class="nav-link active" href="#">Collections</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </nav>
      <div class="panierProfil">
        <div class="cart" id="cart">
          <img src="../public/assets/images/icon-cart.svg" alt="cart">
          <div class="item-number">1</div>
        </div>
        <a href="#" class="profil"><img src="../public/assets/images/image-avatar.png" alt="avatar"></a>
      </div>
      <div class="cart-card" id="cart-card">
        <div class="title"><strong>Cart</strong></div>
        <div class="card-content">
          <a href="#">
            <section>
              <img src="assets/images/image-product-1-thumbnail.jpg" alt="product thumbnail">
              <div class="desc">
                <div class="desc-title"><?= $product->name ?></div>
                <div class="price">$125.00 x 3 <span>$375.00</span></div>
              </div>
              <img class="delete" src="assets/images/icon-delete.svg" alt="delete">      
            </section>
          </a>
          <button type="button" class="">Checkout</button>
        </div>
      </div>
    </header>
  </div>

  <div class="preview" id="preview">
    <div class="carouselContainer" id="carouselContainer">
      <div class="close" id="closePreview"><img src="../public/assets/images/icon-close.svg" alt="close btn"></div>
      <div class="carousel">
        <div class="prev" id="prev"><img src="../public/assets/images/icon-previous.svg" alt="previous button"></div>
        <div class="next" id="next"><img src="../public/assets/images/icon-next.svg" alt="next button"></div>
        <div class="item active" data-carousel="1">
          <img src="../public/assets/images/image-product-1.jpg" alt="product image">
        </div>
        <div class="item" data-carousel="2">
          <img src="../public/assets/images/image-product-2.jpg" alt="product image">
        </div>
        <div class="item" data-carousel="3">
          <img src="../public/assets/images/image-product-3.jpg" alt="product image">
        </div>
        <div class="item" data-carousel="4">
          <img src="../public/assets/images/image-product-4.jpg" alt="product image">
        </div>
      </div>
      <div class="itemPreview">
        <div class="item active" data-preview="1">
          <img src="../public/assets/images/image-product-1-thumbnail.jpg" alt="product image">
        </div>
        <div class="item" data-preview="2">
          <img src="../public/assets/images/image-product-2-thumbnail.jpg" alt="product image">
        </div>
        <div class="item" data-preview="3">
          <img src="../public/assets/images/image-product-3-thumbnail.jpg" alt="product image">
        </div>
        <div class="item" data-preview="4">
          <img src="../public/assets/images/image-product-4-thumbnail.jpg" alt="product image">
        </div>
      </div>
    </div>
  </div>

  <div class="container-xl">
    <main class="row">
      <div class="col-0 col-md-6">
        <div class="productImage">
          <div class="mainImage" id="mainImage">
            <img src="../public/assets/images/image-product-1.jpg" alt="product image">
          </div>
          <div class="thumbnail">
            <div class="active" data-thumbnail='1'><img  src="../public/assets/images/image-product-1-thumbnail.jpg" alt="product image"></div>
            <div data-thumbnail='2'><img src="../public/assets/images/image-product-2-thumbnail.jpg" alt="product image"></div>
            <div data-thumbnail='3'><img src="../public/assets/images/image-product-3-thumbnail.jpg" alt="product image"></div>
            <div data-thumbnail='4'><img src="../public/assets/images/image-product-4-thumbnail.jpg" alt="product image"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="productDesc">
          <h3><?= $product->company ?></h3>
          <h1><?= $product->name ?> <?= $product->type ?></h1>
          <p class="desc"><?= $product->description ?></p>
          <div class="pricing">
            <div class="flex">
              <div class="price">$<?= number_format($product->price, 2, '.', ' ') ?></div>
              <div class="promo">50%</div>
            </div>           
            <div class="oldPrice">$250.00</div>
          </div>
          <form action="" method="POST">
            <div class="quantity">
              <div class="minus"></div>
              <input type="number" name="quantity" id="" class="number" min="1" value="1">
              <div class="plus"></div>
            </div>
            <button type="submit" >Add to cart</button>
          </form>
        </div>


      </div>
    </main>

  </div>
  
  <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="#">Your Name Here</a>.
  </div>
  <script src="../public/assets/js/navbar.js"></script>
  <script src="../public/assets/js/carousel.js"></script>
</body>
</html>