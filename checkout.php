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
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span style="position: relative; right: -10px;background-color: #3ba666;border-radius: 50%;padding: 4px; text-align: center"><?= $amount ?></span></a></li>
            <li><a href="shop.php">Prodavnica</a></li>
            <li><a href="index.php">Početna</a></li>
        </ul>
    </nav>
</header>

<!-- Security messages -->
<br><section style="text-align: center">
    <?php
    if (isset($_GET['sent'])){
        $message=$_GET['sent'];

        switch ($message){

            case '1':
                echo "<b style='color: #93e87d'>Kupovina je uspešno obavljena!</b>";
                break;

        }
    }
    ?>
</section>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">
        <table class="alt" style="text-align: center; width: 100%;">

            <?php
            require "db_config.php";
            $counter = 1;
            $total = 0;
            foreach ($_SESSION['cart'] as $item) {
                $sql = "SELECT p.id, t.product_type_name, p.product_name, a.author_name, a.author_surname, p.product_size_description, p.product_year, p.product_image, p.product_price
                    FROM authors a
                    JOIN products p on p.id_author=a.id
                    JOIN product_type t on t.id = p.id_product_type
                    WHERE p.id = {$item['id']}";
                $query = mysqli_query($connection,$sql);
                $row = mysqli_fetch_assoc($query);
                $total = $total + str_replace('.','',$row['product_price']) * $item['amount'];
                    echo "            
            <thead>
            <tr>
                <th>#</th>
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
            <tbody>";
                echo "<tr>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $counter++ . "</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_type_name'] . "</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_name'] . "</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['author_name'] ." ". $row['author_surname'] ."</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_size_description'] . "</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_year'] . "</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'><img src=\"admin/" . $row['product_image'] . "\" style=\"width: 200px; height: 160px;\"></td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_price'] . " RSD" ."</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>
                <form action='includes/cart_inc.php' method='POST'>
                    <input type='hidden' value='{$row['id']}' name='id'>
                    <button type='submit' name='cartRemove' class='button alt fit small'>Izbriši iz korpe</button>
                </form>
                 <form action='includes/cart_inc.php' method='POST'>
                    <input type='hidden' value='{$row['id']}' name='id'>
                    <input type='number' value='{$item['amount']}' name='amount'>
                    <button type='submit' name='cartEdit' class='button alt fit small'>Izmeni</button>
                </form>
                ";
                    echo "</tr>";
            }

            ?>
            <tr>
                <td colspan="8">
                    <form action="includes/checkout_inc.php" method="POST">
                        <button type="submit" class="button small">Kupi</button>&nbsp&nbsp&nbspUkupno: <?=$total?>
                        <br><br>
                        <label><b>Način preuzimanja:</b></label>
                        <div class="select-wrapper"><select name="shipping">
                            <option value="Pošta">Pošta</option>
                            <option value="Post ekspres">Post ekspres</option>
                            <option value="Lično preuzimanje">Lično preuzimanje</option>
                        </select>
                        </div>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
