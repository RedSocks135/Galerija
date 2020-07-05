<?php
session_start();
$amount = 0;
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
foreach ($_SESSION['cart'] as $item) {
    $amount += $item['amount'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galerija suvenira od slame Tavankut</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="handmade straw souvenirs made by creative rural women" />
    <meta name="keywords" content="tourism, souveniers, straw, rural lifestyle, straw art, straw artists, museums" />
    <meta name="robots" content="index, follow">
    <meta name="author" content="Nenad Vojnić, Dubravko Bilinović">
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body class="landing">

<!-- Header -->
<header id="header">
    <h1><a href="index.html">Tavankutska galerija radova od slame</a></h1>
    <nav id="nav">
        <ul>
            <?php

            if (isset($_SESSION['custID'])) {
                echo '<li><a href="checkout.php"><i class="fa fa-shopping-cart"></i><span style="position: relative; right: -10px;background-color: #3ba666;border-radius: 50%;padding: 4px">'.$amount.'</span></a></li>';
                echo '<li>Prijavljeni ste kao <span style="color: #cee8d8;">'.$_SESSION['custUsername'].'</span></li>';
                echo '<li><a href="shop.php">Prodavnica</a></li>';
            echo '<li><a href="includes/logout_inc.php">Odjava</a></li>';}
            else {
                echo '<li><a href="login.php">Prijava</a></li>
            <li><a href="register.php">Registracija</a></li>';
            }
                ?>
        </ul>
    </nav>
</header>

<!-- Banner -->
<section id="banner">
    <h2>Suveniri od slame</h2>
    <p>Posetite onlajn prodavnicu najlepših suvenira od slame</p>
    <ul class="actions">
        <li>
            <a href="shop.php" class="button big">Poseti</a>
        </li>
    </ul>
</section>

<!-- One -->
<section id="one" class="wrapper style1 align-center">
    <div class="container">
        <header>
            <h2>Naša tradicija</h2>
            <p>Saznajte više o umetnosti u tehnici slame i našim umetnicama.</p>
        </header>
        <div class="row 200%">
            <section class="4u 12u$(small)">
                <a href="history.php"><img class="image fit" src="images/oldPicture.png" alt="Stara slika" </a>
                <p><a href="history.php">Istorija umetnosti u tehnici slame</a></p>
            </section>
            <section class="4u 12u$(small)">
                <a href="artists.php"><img class="image fit" src="images/jozefa.png" alt="Jozefina Skenderović" /></a>
                <p><a href="artists.php">Naše umetnice</a></p>
            </section>
            <section class="4u$ 12u$(small)">
                <a href="colony.php"><img class="image fit" src="images/kolonija.png" alt="Kolonija" /></a>
                <p><a href="colony.php">Kolonija naive u tehnici slame</a></p>
            </section>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2 align-center">
    <div class="container">
        <header>
            <h2>Galerija Prve kolonije naive u tehnici slame Tavankut
            </h2>
            <p>O našem udruženju</p>
        </header>
        <div class="row">
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/straw.jpg" style="border-radius: 30px" alt="Slika od slame" />
                <h3 class="title">Ciljevi udruženja</h3>
                <p style="text-align: justify">Galerija Prve kolonije naive u tehnici slame  sa sedištem u Tavankutu  je dobrovoljno, nevladino i neprofitno udruženje, osnovano radi ostvarivanja ciljeva u oblasti očuvanja i unapređenja naivne likovne umetnosti u tehnici slame, organizovanja izložbi slika nastalih u tehnici slame, kolonija i drugog umetničkog stvaralaštva, narodnih rukotvorina temeljenih na tradicionalnom načinu pletenja slame, razvoja ruralnog turizma, afirmacije vrednosti i ideja civilnog društva, socijalnih vrednosti, multikulturalizma, zaštite životne sredine i drugih aktivnosti u cilju razvoja lokalne zajednice.</p>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/gallery.jpg" style="border-radius: 30px" alt="Izložba" />
                <h3 class="title">Naša Galerija:</h3>
                <ul style="text-align: left">
                    <li>Prikuplja i obrađuje naučnu i stručnu literaturu iz oblasti naivne likovne umetnosti</li>
                    <li>Organizuje, samostalno ili sa drugim institucijama kulture (muzej, biblioteka, škola…) likovne kolonije, izložbe, stručne skupove, savetovanja, tribine, seminare, kreativne radionice, kulturno-umetničke projekte i druge oblike aktivnosti vezane za likovno naivno stvaralaštvo</li>
                    <li>Prati rad naivnih likovnih stvaralaca u tehnici slame</li>
                    <li>Objavljuje izložbene kataloge, brošure, pedagoške sveske za likovne radionice  i druge multimedijalne publikacije</li>
                    <li>Organizuje prosvetne radnike i druge stručnjake iz oblasti pedagogije, etnologije i istorije umetnosti za rad na edukaciji dece i omladine</li>
                    <li>Organizuje volonterske akcije i druge aktivnosti</li>
                    <li>Surađuje sa univerzitetima, muzejima, školama, stručnim udruženjima i drugim organizacijama u zemlji i inostranstvu</li>
                    <li>Organizuje projekte edukativnog, kulturno-umetničkog i istraživačkog karaktera</li>
                    <li>Pokreće razvojne inicijative, aktivnosti i projekte</li>


                </ul>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <section class="4u$ 12u$(medium) 12u$(small)">
                <h3>Kontaktirajte nas:</h3>
                <ul class="icons">
                    <li><a href="https://www.facebook.com/Galerija-Prve-kolonije-naive-u-tehnici-slame-1651640418409676/?ref=page_internal" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
                </ul>
                <ul class="tabular">
                    <li>
                        <h3>Adresa</h3>
                        Marka Oreškovića 3<br>
                        24214 Donji Tavankut, Srbija
                    </li>
                    <li>
                        <h3>Mail</h3>
                        galerijatavankut@gmail.com
                    </li>
                    <li>
                        <h3>Telefon</h3>
                        064 1484144
                    </li>
                </ul>
            </section>
</footer>

</body>
</html>
