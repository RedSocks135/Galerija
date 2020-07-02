<?php
session_start();
if(!isset($_SESSION['u_id']))
{
    header("Location:adminLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - pregled Suvenira</title>
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
<header id="header" style="position: fixed">

    <h1><a href="adminOverview.php">Pegled podataka</a></h1>
    <nav id="nav">
        <ul>
            <?php

            if (isset($_SESSION['u_id'])) {
                echo '<li>Prijavljeni ste kao <span style="color: #cee8d8;">'.$_SESSION['u_id'].'</span></li>';
                echo '<li><a href="adminIncludes/adminLogout.php">Odjava</a></li>';}
            ?>
        </ul>
    </nav>
    </div>
</header>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Admin strana</h2>
            <p>Pregled unešenih suvenira</p>
        </header>
    </div>
</section>

<!--Souvenirs table-->
<section>
    <div class="container">
        <div class="table-wrapper">
            <table class="alt" style="text-align: center; width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tip</th>
            <th>Naziv</th>
            <th>Autor</th>
            <th>Opis</th>
            <th>Godina</th>
            <th>Slika</th>
            <th>Cena</th>
            <th></th>
        </tr>
    </thead>
<tbody>
            <?php
            require "../db_config.php";

            $sql = "SELECT p.id, t.product_type_name, p.product_name, a.author_name, a.author_surname, p.product_size_description, p.product_year, p.product_image, p.product_price
                    FROM authors a
                    JOIN products p on p.id_author=a.id
                    JOIN product_type t on t.id = p.id_product_type";
            $query = mysqli_query($connection,$sql);

            while ($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['id'] . "</td>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_type_name'] . "</td>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_name'] . "</td>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['author_name'] ." ". $row['author_surname'] ."</td>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_size_description'] . "</td>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_year'] . "</td>";
                echo "<td style='vertical-align: middle; font-weight: bold'><img src=\"" . $row['product_image'] . "\" style=\"width: 200px; height: 160px;\"></td>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_price'] . " RSD" ."</td>";
                echo "<td style='vertical-align: middle; font-weight: bold'>
                      <a href=\"#\" class=\"button alt fit small\">Izmeni</a>
                      <a href=\"#\" class=\"button alt fit small\">Obriši</a></td>";
                echo "</tr>";
            }
            ?>
</tbody>

                <tfoot>
                <tr><td colspan="9" align="center">
                <div class="6u$ 12u$(small)">
                    <ul class="actions fit small">
                        <li><a href="#" class="button fit small">Dodaj novi suvenir</a></li>
                    </ul>
                </div>
                    </td></tr>
                </tfoot>
    </table>

</table>
        </div>
    </div>
</section>





<!-- Overview -->
<section class="wrapper style1 align-center">
    <div class="container">
        <div class="row 200%">
            <section class="3u 12u$(small)">
                <a href="adminSouvenirsOverview.php"><i class="fa icon big rounded fa-image"></i>
                    <p>Suveniri u prodavnici</p></a>
            </section>
            <section class="3u 12u$(small)">
                <a href="adminAuthorsOverview.php"><i class="fa icon big rounded fa-paint-brush"></i>
                    <p>Umetnice</p></a>
            </section>
            <section class="3u 12u$(small)">
                <a href="adminCustomersOverview.php"><i class="fa icon big rounded fa-users"></i>
                    <p>Registrovani kupci</p></a>
            </section>
            <section class="3u 12u$(small)">
                <a href="adminOrdersOverview.php"><i class="fa icon big rounded fa-truck"></i>
                    <p>Porudžbine</p></a>
            </section>
        </div>
    </div>
</section>

</body>
</html>



