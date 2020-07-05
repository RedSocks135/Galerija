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
    <title>Saziv prve kolonije naive u tehnici slame - Galerija suvenira od slame Tavankut</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="handmade straw souvenirs made by creative rural women">
    <meta name="keywords" content="tourism, souveniers, straw, rural lifestyle, straw art, straw artists, museums">
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
<body>

<!-- Header -->
<header id="header">
    <h1><a href="index.php">Galerija slika od slame</a></h1>
    <nav id="nav">
        <ul>
            <?php

            if (isset($_SESSION['custID'])) {
                echo '<li><a href="checkout.php"><i class="fa fa-shopping-cart"></i><span style="position: relative; right: -10px;background-color: #3ba666;border-radius: 50%;padding: 4px">'.$amount.'</span></a></li>';
                echo '<li>Prijavljeni ste kao <span style="color: #cee8d8;">'.$_SESSION['custUsername'].'</span></li>';
                echo '<li><a href="index.php">Početna</a></li>';
                echo '<li><a href="shop.php">Prodavnica</a></li>';
                echo '<li><a href="includes/logout_inc.php">Odjava</a></li>';}
            else {
                echo 'echo \'<li><a href="index.php">Početna</a></li>\';
<li><a href="login.php">Prijava</a></li>
            <li><a href="register.php">Registracija</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>

<!-- Title -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Saziv Prve kolonije naive u tehnici slame</h2>
            <p>Događaj kada se stvaraju najlepša dela</p>
        </header>
    </div>
</section>

<hr style='border: 1px #c3c3c3 solid;'>

<!-- Main -->
<section id="two" class="wrapper style2 align-center">
    <div class="container">
        <div class="row">
            <section class="feature 12u 12u(small)">
                <p style="text-align: justify"> Svake godine, u Sazivu Prve kolonije naive u tehnici slame, učestvuje oko 40 umetnika-naivaca, koji deset dana, rade u OŠ „Matija Gubec“ i čiji se radovi kasnije izlažu u Tavankutu i Subotici u okviru gradske Dužijance. Danas Društvo poseduje preko 400 slika od slame, koje su smeštene u župnom dvoru u Tavankutu, Osnovnoj školi i Galeriji. U okviru Kolonije se predstavljaju tradicionalni stari zanati, na kojima izlaže oko 10 izlagača.</p>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/colony.jpg" style="border-radius: 30px" alt="Kolonija" />
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/colony2.jpg" style="border-radius: 30px" alt="Slika od slame" />
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/colony3.jpg" style="border-radius: 30px" alt="Slika od slame" />
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/colony4.jpg" style="border-radius: 30px" alt="Slika od slame" />
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/colony5.jpg" style="border-radius: 30px" alt="Slika od slame" />
            </section>
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
