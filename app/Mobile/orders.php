<?php
session_start();
if(!isset($_SESSION['custID']))
{
    header("Location: login.php");
    exit;
}

$amount = 0;
if (!isset($_SESSION['cart'])) {
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
    <title>Admin - pregled porudžbina</title>
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

    <h1><a href="index.php">Galerija</a></h1>
    <nav id="nav">
        <ul>
                    <li><a href="checkout.php"><i class="fa fa-shopping-cart"></i><span style="position: relative; right: -10px;background-color: #3ba666;border-radius: 50%;padding: 4px"><?= $amount ?></span></a></li>
                    <li><a href="shop.php">Prodavnica</a></li>
                    <li><a href="index.php">Početna</a></li>
                </ul>

    </nav>
    </div>
</header>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Porudžbine</h2>
            <p>Pregled porudžbina</p>
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
                    <th>Suvenir</th>
                    <th>Količina</th>
                    <th>Pošiljka</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require "db_config.php";
                $id = $_SESSION['custID'];
                $sql = "SELECT o.id, cu.cust_username, p.product_name, o.quantity, o.sending_method, o.order_status
                    FROM customers cu
                    JOIN orders o on o.id_customer=cu.id
                    JOIN products p on o.id_product=p.id
                    WHERE cu.id = $id";
                $query = mysqli_query($connection,$sql);

                while ($row = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['product_name'] . "</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['quantity'] ."</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['sending_method'] . "</td>";
                    echo "<td style='vertical-align: middle; font-weight: bold'>" . $row['order_status'] . "</td>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
</html>

