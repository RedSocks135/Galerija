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

    <h1><a href="adminOverview.php">Pregled podataka</a></h1>
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
            <p>Pregled porudžbina</p>
        </header>
    </div>
</section>

<!--Orders table-->
<section>
    <div class="container">

                <?php
                require "../db_config.php";

                $sql = "SELECT distinct o.id, o.sending_method, o.order_date, cu.cust_name, cu.cust_surname
                    FROM orders o
                    JOIN customers cu on o.id_customers=cu.id
                    ";
                $query = mysqli_query($connection,$sql);

                while ($row = mysqli_fetch_array($query)){

                    echo "<div class=\"table-wrapper\">";
                    echo "<table class=\"alt\" style=\"text-align: center; width: 100%;\"><tr>";
                    echo "<th colspan='4'>ID Porudžbine</th>";
                    echo "</tr><tr>";
                    echo "<td colspan='4' style='vertical-align: middle; font-weight: bold'>" . $row['id'] . "</td>";
                    echo "</tr><tr>";
                    echo "<th colspan='4'>Poručilac</th>";
                    echo "</tr><tr>";
                    echo "<td colspan='4' style='vertical-align: middle; font-weight: bold'>" . $row['cust_name'] . " " . $row['cust_surname']. "</td>";
                    echo "</tr><tr>";
                    echo "<th colspan='4'>Datum i vreme porudžbine</th>";
                    echo "</tr><tr>";
                    echo "<td colspan='4' style='vertical-align: middle; font-weight: bold'>" . $row['order_date'] . "</td>";
                    echo "</tr><tr>";
                    echo "<th colspan='4'>Način slanja</th>";
                    echo "</tr><tr>";
                    echo "<td colspan='4' style='vertical-align: middle; font-weight: bold'>" . $row['sending_method'] . "</td>";
                    echo "</tr><tr>";
                    echo "<th>Suveniri</th>";
                    echo "<th>Količina</th>";
                    echo "<th>Status</th>";
                    echo "<th>Izmena statusa</th>";
                    echo "</tr><tr>";
                    $sql2 = "SELECT oi.id, p.product_name, oi.quantity, oi.order_status 
                    FROM ordered_items oi
                    JOIN products p on oi.id_product=p.id
                    WHERE id_order={$row['id']}
                    ";
                    $query2 = mysqli_query($connection,$sql2);
                    while ($row2 = mysqli_fetch_array($query2)) {
                        $wait = $row2['order_status'] == 'Na čekanju' ? 'selected' : '';
                        $sent = $row2['order_status'] == 'Poslato' ? 'selected' : '';
                        $declined = $row2['order_status'] == 'Odbijeno' ? 'selected' : '';
                        echo "<tr>";
                        echo "<td style='vertical-align: middle; font-weight: bold'>" . $row2['product_name'] . "</td>";
                        echo "<td style='vertical-align: middle; font-weight: bold'>" . $row2['quantity'] ."</td>";
                        echo "<td style='vertical-align: middle; font-weight: bold'>" . $row2['order_status'] . "</td>";
                        echo "<td style='vertical-align: middle; font-weight: bold'>";
                        echo "<form name='choose' id='choose' method='POST' action='adminIncludes/adminOrders_inc.php'>";
                        echo "<div class=\"select-wrapper\"><select name=\"status\">";
                        echo "<option value=\"Na čekanju\"". $wait ."\">Na čekanju</option>";
                        echo "<option value=\"Poslato\" ". $sent .">Poslato</option>";
                        echo "<option value=\"Odbijeno\" ". $declined .">Odbijeno</option>";
                        echo "</select>";
                        echo "<input type='hidden' name='id' value='{$row2['id']}'>";
                        echo "<button type='submit' name='changeStatus' class=\"button alt fit small\">Izmeni status</button>";
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

