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
    <title>Naše umetnice - Galerija suvenira od slame Tavankut</title>
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
            <li>
            </li>
            <li><a href="index.php">Početna</a></li>
            <li><a href="register.php">Registracija</a></li>
            <li><a href="login.php">Prijava</a></li>
        </ul>
    </nav>
</header>


<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Naše umetnice</h2>
            <p>Inspirisane tradicijom, one stvaraju najlepše suvenire od slame</p>
        </header>
    </div>
</section>

<!--Authors table-->

<section>
    <div class="container">


<?php
require "db_config.php";

$sql = "SELECT * FROM authors";
$query = mysqli_query($connection,$sql);

while ($row = mysqli_fetch_array($query)) {
    echo "<div class='row'>";
    echo "<div class='6u 12u(small)'>
          <img src='admin/" . $row['author_image'] . "' style='width: 100%; border-radius: 30px'>";
    echo "</div>";
    echo "<div class='6u 12u(small)'>";
    echo "<h3 align='center'>" . $row['author_name'] ." ". $row['author_surname'] . "</h3>";
    echo "<p style='text-align: justify'>".$row['author_bio']."</p>";
    echo "</div>";
    echo "</div>";
    echo "<hr style='border: 1px #c3c3c3 solid'>";
        }
        ?>
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

