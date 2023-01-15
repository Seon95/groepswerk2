<?php


include './login/db.php';




$sql = "SELECT id,title,price,img,category_id FROM product";
$result = $mysqli->query($sql);

$product = [];
if ($result && $result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $product[] = $row;
  }
}


$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="/css/shop.css" />




  <title>Shop</title>
</head>

<body>
  <div class="container">
    <nav>
      <div class="links">
        <a href="./index.php"><img class="logoo" src="/images/futshirt_logo_gimp.png" alt="logo" /></a>
      </div>

      <div class="rechts">
        <ul>
          <li>
            <a href="index.php"><i class="bi bi-house-door"></i>Home</a>
          </li>

          <li><i class="bi bi-cart3"></i>Cart</li>

        </ul>
      </div>
    </nav>
    <hr />





    <main>

      <!-- <div class="stripes">
        <img align="left" src="./images/stripystripe2.png" alt="stripes">
      </div> -->


      <h1 class="title">OUR PRODUCTS</h1>
      <div class="filters-wrapper">

        <div id="filter-buttons">
          <button class="button-value active" onclick="filterSelection('all')"> Show all</button>
          <button class="button-value" onclick="filterSelection('1')">Premier league</button>
          <button class="button-value" onclick="filterSelection('2')">La Liga</button>
          <button class="button-value" onclick="filterSelection('3')">Bundesliga</button>
          <button class="button-value" onclick="filterSelection('4')">Serie A</button>
          <button class="button-value" onclick="filterSelection('5')"> Ligue 1</button>
        </div>
      </div>


      <section id="grid">
        <?php
        $counter = 1;
        foreach ($product as $key => $produkt) {
        ?>



          <div class="product-container <?= $produkt["category_id"] ?>">
            <div class="product-img">
              <img class="p-image-class" id="P-img" src="/images/<?= $produkt["img"] ?>" alt="Product" />
            </div>
            <div id="myModal" class="modal">
              <!-- The Close Button -->
              <span class="close">&times;</span>

              <!-- Modal Content (The Image) -->
              <img class="modal-content" id="img01">

              <!-- Modal Caption (Image Text) -->
              <div class="caption"></div>
            </div>

            <div class="product-info">
              <span class="product-seller">FUTSHIRT</span>
              <h3 class="product-title"><?= $produkt["title"] ?> </h3>
              <!-- <h3 class="product-description"><?= $produkt["description"] ?></h3> -->
              <h3 class="product-price">€<?= $produkt["price"] ?></h3>
            </div>

          </div>




        <?php
          $counter++;
        }
        ?>

        <script src="./js/filter.js" defer></script>
      </section>

      <h1 class="sale">You might also like</h1>

      <div class="slider">
        <div class="slide-track">
          <div class="slide">
            <img src="./images/Product_example_liverpool.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example_chelsea.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example_atletico.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example_astonVilla.jpeg" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example9.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example8.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example4.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/png_webshop_juventus.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example_copia.jpg" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>

          <!-- same slides copied  -->

          <div class="slide">
            <img src="./images/Product_example_liverpool.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example_chelsea.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example_atletico.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example_astonVilla.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example9.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example8.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example4.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/png_webshop_juventus.png" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
          <div class="slide">
            <img src="./images/product_example_copia.jpg" alt="productImage" onclick="onClick(this)" class="modal-hover-opacity" />
          </div>
        </div>


        <div id="modal01" class="modal2" onclick="this.style.display='none'">
          <span class="close2">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <div class="modal-content2">
            <img id="img02" style="max-width:100%">
          </div>
        </div>
      </div>




    </main>


    <footer>
      <div class="footer-content">
        <h3>Futshirt</h3>
        <!--add all information -->
        <p>Futshirt inc.</p>
      </div>
      <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>

      <div class="footer-bottom">
        <!-- add all information -->
        <p>copyright &copy;2021 <a href="#">Futshirt</a> </p>
        <div class="footer-menu">
          <ul class="f-menu">
            <li><a href="./index.html">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Blog</a></li>
          </ul>
        </div>
      </div>


    </footer>

    <script src="./js/modalImg.js"></script>
    <script src="./js/shopModal.js"></script>
  </div>

</body>