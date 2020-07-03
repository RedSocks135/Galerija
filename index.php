<?php
session_start();
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
                echo '<li>Prijavljeni ste kao <span style="color: #cee8d8;">'.$_SESSION['custUsername'].'</span></li>';
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
            <p>Saznajte više o umetnosti u tehnici slame, i našim umetnicama.</p>
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
                <a href="kolonija.php"><img class="image fit" src="images/kolonija.png" alt="Kolonija" /></a>
                <p><a href="kolonija.php">Kolonija naive u tehnici slame</a></p>
            </section>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2 align-center">
    <div class="container">
        <header>
            <h2>Lorem ipsum dolor sit</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, autem.</p>
        </header>
        <div class="row">
            <section class="feature 6u 12u$(small)">
                <img class="image fit" src="images/pic01.jpg" alt="" />
                <h3 class="title">Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa voluptate, quae quibusdam. Doloremque similique, reiciendis sit quibusdam aperiam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </section>
            <section class="feature 6u$ 12u$(small)">
                <img class="image fit" src="images/pic02.jpg" alt="" />
                <h3 class="title">Esse, fugiat, in</h3>
                <p>Natus perspiciatis fugit illum porro iusto fuga nam voluptas minima voluptates deserunt, veniam reiciendis harum repellat necessitatibus. Animi, adipisci qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </section>
            <section class="feature 6u 12u$(small)">
                <img class="image fit" src="images/pic03.jpg" alt="" />
                <h3 class="title">Voluptates, repudiandae, dolor</h3>
                <p>Voluptatibus repellendus tempora, quia! Consequuntur atque, rerum quis, ullam labore officiis ipsa beatae dolore, assumenda eos harum repudiandae, qui ab! Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </section>
            <section class="feature 6u$ 12u$(small)">
                <img class="image fit" src="images/pic04.jpg" alt="" />
                <h3 class="title">Eveniet, reiciendis, veniam</h3>
                <p>Rem nulla molestiae inventore quibusdam repudiandae doloremque eveniet ullam, qui autem possimus saepe laudantium numquam sapiente vel. Repudiandae, nihil tempore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </section>
        </div>
        <footer>
            <ul class="actions">
                <li>
                    <a href="#" class="button alt big">Learn More</a>
                </li>
            </ul>
        </footer>
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
