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
    <title>Prijava - Galerija suvenira od slame Tavankut</title>
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
            <li><a href="checkout.php"><i class="fa fa-shopping-cart"></i><span style="position: relative; right: -10px;background-color: #3ba666;border-radius: 50%;padding: 4px"><?= $amount ?></span></a></li>
            <li><a href="index.php">Početna</a></li>
            <li><a href="register.php">Registracija</a></li>
        </ul>
    </nav>
</header>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Prodavnica suvenira</h2>
            <p>Najlepši izbor raznih vrsta suvenira od slame</p>
        </header>
    </div>
</section>


<section id="main" class="wrapper">
    <div class="container">
        <?php
        require "db_config.php";

        $sql = "SELECT p.id, t.product_type_name, p.product_name, a.author_name, a.author_surname, p.product_size_description, p.product_year, p.product_image, p.product_price
                    FROM authors a
                    JOIN products p on p.id_author=a.id
                    JOIN product_type t on t.id = p.id_product_type";
        $query = mysqli_query($connection,$sql);
        $counter = 1;
        while ($row = mysqli_fetch_array($query)){
            ?>
            <div class='row'>
                <div class='4u 12u(small) 12u(medium)'>
                    <img style='width: 100%' src='admin/<?=$row['product_image']?>'>
                </div>
                <div class='3u 12u(small) 12u(medium)'>
                    <ul>
                        <li style='vertical-align: middle; font-weight: bold'>Tip: <?=$row['product_type_name']?></li>
                        <li style='vertical-align: middle; font-weight: bold'>Naziv: <?=$row['product_name']?></li>
                        <li style='vertical-align: middle; font-weight: bold'>Autor: <?=$row['author_name']." ". $row['author_surname']?></li>
                        <li style='vertical-align: middle; font-weight: bold'>Opis: <?=$row['product_size_description']?></li>
                        <li style='vertical-align: middle; font-weight: bold'>Godina: <?=$row['product_year']?></li>
                        <li style='vertical-align: middle; font-weight: bold'>Cena: <?=$row['product_price']?> RSD</li>
                    </ul>
                    <div class="row">
                        <div class="10u 12u(small)">
                            <form action='includes/cart_inc.php' method='POST'>
                                <input type='hidden' value='<?=$row['id']?>' name='id'>
                                <button type='submit' name='cartAdd' class='button alt fit small'>Dodaj u korpu</button>
                                <input class="form-control" type='number' min="1" value='1' name='amount'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border: 1px #c3c3c3 solid">


            <?php
        }
        ?>

    </div>
    </tbody>
    </table>
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
