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
            <li><a href="checkout.php"><i class="fa fa-shopping-cart"></i><span style="position: relative; right: -10px;background-color: #3ba666;border-radius: 50%;padding: 4px; text-align: center"><?= $amount ?></span></a></li>
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

        <?php
        require "db_config.php";

        $sql = "SELECT distinct o.id, o.sending_method, o.order_date, cu.cust_name, cu.cust_surname
                    FROM orders o
                    JOIN customers cu on o.id_customers=cu.id
                    WHERE o.id_customers={$_SESSION['custID']}
                    ";
        $query = mysqli_query($connection,$sql);

        while ($row = mysqli_fetch_array($query)){

            echo "<div class=\"table-wrapper\">";
            echo "<table class=\"alt\" style=\"text-align: center; width: 100%;\"><tr>";
            echo "<th colspan='3'>Poručilac</th>";
            echo "</tr><tr>";
            echo "<td colspan='3' style='vertical-align: middle; font-weight: bold'>" . $row['cust_name'] . " " . $row['cust_surname']. "</td>";
            echo "</tr><tr>";
            echo "<th colspan='3'>Datum i vreme porudžbine</th>";
            echo "</tr><tr>";
            echo "<td colspan='3' style='vertical-align: middle; font-weight: bold'>" . $row['order_date'] . "</td>";
            echo "</tr><tr>";
            echo "<th colspan='3'>Način slanja</th>";
            echo "</tr><tr>";
            echo "<td colspan='3' style='vertical-align: middle; font-weight: bold'>" . $row['sending_method'] . "</td>";
            echo "</tr><tr>";
            echo "<th>Suveniri</th>";
            echo "<th>Količina</th>";
            echo "<th>Status</th>";
            echo "</tr><tr>";
            $sql2 = "SELECT oi.id, p.product_name, oi.quantity, oi.order_status 
                    FROM ordered_items oi
                    JOIN products p on oi.id_product=p.id
                    WHERE id_order={$row['id']}
                    ";
            $query2 = mysqli_query($connection,$sql2);
            while ($row2 = mysqli_fetch_array($query2)) {

                echo "<tr>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row2['product_name'] . "</td>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row2['quantity'] ."</td>";
                echo "<td style='vertical-align: middle; font-weight: bold'>" . $row2['order_status'] . "</td>";
                echo "<form name='choose' id='choose' method='POST' action='adminIncludes/adminOrders_inc.php'>";
                echo "<input type='hidden' name='id' value='{$row2['id']}'>";
                echo "</form>";
                echo "</td></tr>";
            }
            echo "</table>";
            echo "</div>";
            echo "<div style='height: 100px'></div>";

        }
        ?>
    </div>
</section>

</body>
</html>

