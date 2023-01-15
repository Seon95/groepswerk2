<?php
$title = "<h1>een <span>titel</span></h1>";
//we requiren de json file. (bekijk hem eens. hij bevat de output van de door vite gegenereerde bestanden)
$manifest = file_get_contents("./dist/manifest.json");
//we lezen hem in als associatieve array
$manifestObject = json_decode($manifest, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <title>Home</title>
  <?php
  //hieronder printen we de link-href en de script-src uit. met <?= doe je automatisch een echo.
  ?>
  <link rel="stylesheet" href="./dist/<?= $manifestObject["js/index.js"]["css"][0] ?>">
  <script src="./dist/<?= $manifestObject["js/index.js"]["file"] ?>"></script>
  <link rel="stylesheet" href="./css/style.css">

  <title>Home</title>
</head>

<body>
  <div class="container">
    <header>
      <nav>
        <div class="links">
          <img class="logoo" src="/images/futshirt_logo_gimp.png" alt="" />
        </div>

        <div class="rechts">
          <ul>
            <li><a href="/login/auth.php"> <img src="/images/icons8-male-user-32.png" alt=""> Inloggen </a></li>
            <li><a href="shop.php"> <img src="/images/icons8-shirt-shopping-32.png" alt=""> Shop</a></li>
            <li><a href="index.php"> <img src="/images/icons8-business-32.png" alt="">Contact</a></li>
          </ul>
        </div>
      </nav>
      <hr />
    </header>

    <main>
      <section>
        <h1>
          NEW KITS 2022-2023 SEASON OUT NOW!
        </h1>
        <br>
        <h1>
          BUY RETRO Cr. RONALDO REAL MADRID
        </h1>


        <aside>
          <article class="carousel-container">
            <div class="carousel">
              <figure>
                <h3>BEST SELLERS</h3>
                <div class="container2">
                  <button id="left-btn"><i class="arrow"></i></button>
                  <img id="carousel" src="" alt="" />
                  <button id="right-btn"><i class="arrow"></i></button>
                </div>
              </figure>
              <article>
                <button class="button-64" role="button">
                  <span class="text"><a href="shop.php">SHOP NOW</a></span>
              </article>
            </div>

            <script src="/js/carousel.js"></script>
            <h2>
              ALL SHIRTS ALL COMPETITIONS
            </h2>
          </article>
        </aside>
      </section>







      <figure class="ronaldo">
        <img id=cristiano src="/images/1b60d4075bc1a01a0454405004c40387.png" alt="" />
      </figure>
    </main>

    <div class="line2"></div>
    <hr />
    <div class="footer-logo">
      <img src="images/futshirt_logo_gimp.png" alt="">
    </div>

    <footer>
      <div class="footer-content">
        <h3>Futshirt</h3>
        <p>Futshirt inc.</p>
      </div>
      <ul class="socials">
        <li>
          <a href="#"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-google-plus"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-linkedin-square"></i></a>
        </li>
      </ul>

      <div class="footer-bottom">
        <p>copyright &copy;2021 <a href="#">Futshirt</a></p>
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
  </div>
</body>

</html>