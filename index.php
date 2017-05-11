<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="index.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>De vliegende bezem</title>
</head>

<body>

<!--Titelvak-->
<section class="titelvak">
    <img class="titellogo1" src="img/speelgoedbezem.png">
    <p class="titel">DE VLIEGENDE BEZEM</p>
    <img class="titellogo2" src="img/heksenketel1.png">
</section>
<!--Einde titelvak-->

<!--Begin Navbar-->
<nav class="navbar">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="shop.php">SHOP</a></li>
        <li><a href="toverboek.php">TOVERBOEK</a></li>
        <li><a href="heksen.php">BEROEMDE HEKSEN</a></li>

    </ul>
</nav>
<!--Einde Navbar-->

<!--Image met tekst-->
<section>
    <img class="heks" src="img/heks.png">
    <p class="welkombericht">
        Welkom in De Vliegende Bezem, hier kunnen heksen hun bezems kopen of
        nieuwe ketels bestellen omdat de oude veroest is..<br> Kijk even rond en misschien
        zie je nog wat leuks.
    </p>
</section>


<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/witch1.jpg" class="witch123" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/witch2.jpg" class="witch123" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/witch3.jpg" class="witch123" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

</body>

<!--Footer Start-->
<footer>© Copyright 2017/2018 Made by Kevin, Erwin, Patrick en Jasper</footer>
<!--Footer Einde-->
</html>