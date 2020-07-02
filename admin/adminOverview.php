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
    <link type="text/css" rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Galerija slika od slame - Admin mode</title>
</head>
<body style="font-family: Calibri; background-color: dimgrey;">

<div class="container-fluid bg-light fixed-top">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 bg-light"><h1 align="center">Admin strana</h1></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-2 col-lg-2 bg-light"><a href="adminOverview.php">Pregled</a></div>
        <div class="col-3 col-lg-2 bg-light"><a href="adminOrders.php">Porudžbine</a></div>
        <div class="col-2 col-lg-2 bg-light"><a href="adminProducts.php">Suveniri</a></div>
        <div class="col-2 col-lg-2 bg-light"><a href="adminAuthors.php">Autori</a></div>
        <div class="col-3 col-lg-4 bg-light">
            <form method="POST" action="adminIncludes/adminLogout.php">
                <button style="border: none; color: blue; background-color:rgba(0,0,0,0)" type="submit" name="logout" id="logout">Odjava</button>
            </form>
            <div class="col-4" style="height: 5px"></div>
    </div>
</div>
</div>
    <<br><br><br><br><br><br><br><br>
    <!--Imported data from `customers` table-->
    <div class="container bg-light">
        <div class="row text-center">
            <div class="col-12" style="height: 5px"></div>
            <div class="col-12  bg-light"><h3 align="center">Registrovani kupci</h3></div>
            <div class="col-12" style="height: 10px"></div>
            <div class="col-12  bg-light">

            <table border="1" align="center" cellpadding="5px">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Email</th>
                    <th>Telefon</th>

                    <?php
                    require "../db_config.php";

                    $sql = "SELECT * FROM customers";
                    $query = mysqli_query($connection,$sql);

                    while ($row = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td align=\"center\">" . $row['id'] . "</td>";
                        echo "<td align=\"center\">" . $row['cust_username'] . "</td>";
                        echo "<td align=\"center\">" . $row['cust_name'] . "</td>";
                        echo "<td align=\"center\">" . $row['cust_surname'] . "</td>";
                        echo "<td align=\"center\">" . $row['cust_email'] . "</td>";
                        echo "<td align=\"center\">" . $row['cust_phone'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
            </table>
        </div>
            <div class="col-12 bg-light" style="height: 10px"></div>
        </div>
    </div>

<br><br><br>
<!--Imported data from `authors` table-->
<div class="container bg-light">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Autori</h3></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-12  bg-light">

            <table border="1" align="center" cellpadding="5px">
                <tr>
                    <th>ID</th>
                    <th>Slika</th>
                    <th>Ime</th>
                    <th>Prezime</th>

                    <?php
                    require "../db_config.php";

                    $sql = "SELECT * FROM authors";
                    $query = mysqli_query($connection,$sql);

                    while ($row = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td align=\"center\">" . $row['id'] . "</td>";
                        echo "<td align=\"center\"><img src=\"" . $row['author_image'] . "\" style=\"width: 100px; height: 150px;\"></td>";
                        echo "<td align=\"center\">" . $row['author_name'] . "</td>";
                        echo "<td align=\"center\">" . $row['author_surname'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
            </table>
        </div>
        <div class="col-12 bg-light" style="height: 10px"></div>
    </div>
</div>

<br><br><br>
<!--Imported data from `products` table-->
<div class="container bg-light">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Suveniri</h3></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-12  bg-light">

            <table border="1" align="center" cellpadding="5px">
                <tr>
                    <th>ID</th>
                    <th>Tip</th>
                    <th>Naziv</th>
                    <th>Autor</th>
                    <th>Opis</th>
                    <th>Godina</th>
                    <th>Slika</th>
                    <th>Cena</th>

                    <?php
                    require "../db_config.php";

                    $sql = "SELECT p.id, t.product_type_name, p.product_name, a.author_name, a.author_surname, p.product_size_description, p.product_year, p.product_image, p.product_price
                    FROM authors a
                    JOIN products p on p.id_author=a.id
                    JOIN product_type t on t.id = p.id_product_type";
                    $query = mysqli_query($connection,$sql);

                    while ($row = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td align=\"center\">" . $row['id'] . "</td>";
                        echo "<td align=\"center\">" . $row['product_type_name'] . "</td>";
                        echo "<td align=\"center\">" . $row['product_name'] . "</td>";
                        echo "<td align=\"center\">" . $row['author_name'] ." ". $row['author_surname'] ."</td>";
                        echo "<td align=\"center\">" . $row['product_size_description'] . "</td>";
                        echo "<td align=\"center\">" . $row['product_year'] . "</td>";
                        echo "<td align=\"center\"><img src=\"" . $row['product_image'] . "\" style=\"width: 100px; height: 80px;\"></td>";
                        echo "<td align=\"center\">" . $row['product_price'] . " RSD" ."</td>";
                        echo "</tr>";
                    }
                    ?>
            </table>
        </div>
        <div class="col-12 bg-light" style="height: 10px"></div>
    </div>
</div>
</body>
</html>
