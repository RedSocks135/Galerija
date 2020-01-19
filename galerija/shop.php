<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="handmade straw souvenirs made by creative rural women">
    <meta name="keywords" content="tourism, souveniers, straw, rural lifestyle, straw art, straw artists, museums">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Nenad Vojnić, Dubravko Bilinović">
    <link type="text/css" rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Prodavnica</title>
</head>
<body style="font-family: Calibri; background-color: dimgrey;">

<div class="container-fluid bg-light fixed-top">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 bg-light"><h1 align="center">Galerija slika od slame</h1></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-4 col-lg-2 bg-light"><a href="index.php">Početna</a></div>
        <div class="col-4 col-lg-2 bg-light"><a href="authors.php">O autorkama</a></div>
        <div class="col-4 col-lg-2 bg-light"><a href="contact.php">Kontakt</a></div>
        <?php
        if (!isset($_SESSION['custID'])) {
            echo '<div class="col-4 col-lg-2 bg-light" ><a href = "login.php" > Prijava</a ></div >
            <div class="col-4 col-lg-2 bg-light" ><a href = "register.php" > Registracija</a ></div > 
            <div class="col-4 col-lg-2 bg-light"><a href="shop.php">Prodavnica</a></div>
            <div class="col-4" style="height: 5px"></div>';
        }
        else {
            echo '<div class="col-6 col-lg-4 bg-light"><a href="shop.php">Prodavnica</a></div>
            <div class="col-6 col-lg-2 bg-light">
            <form method="POST" action="includes/logout_inc.php">
            <button style="border: none; color: blue; background-color:rgba(0,0,0,0)" type="submit" name="logout" id="logout">Odjavi me</button>
            </form>
            <div class="col-4" style="height: 5px"></div></div>';
        }
        ?>


    </div>
</div>

<br><br><br><br><br><br><br><br><br><br>

<div class="container bg-light">
    <div class="row text-center">
        <div class="col-12" style="height: 30px"></div>
        <?php
        require "db_config.php";

        $sql = "SELECT p.id, t.product_type_name, p.product_name, a.author_name, a.author_surname, p.product_size_description, p.product_year, p.product_image, p.product_price
                    FROM authors a
                    JOIN products p on p.id_author=a.id
                    JOIN product_type t on t.id = p.id_product_type";
        $query = mysqli_query($connection,$sql);

        while ($row = mysqli_fetch_array($query)){
            echo "<div class='col-12'><h3><b>\"".$row['product_name']."\" - ".$row['author_name'] ." ". $row['author_surname']."</b></h3></div>";
            echo "<div class='col-12' style='height: 20px'></div>";
            echo "<div class='col-lg-4 col-md-4 col-12'><img class=\"img-fluid\" src=\"admin/" . $row['product_image'] . "\"></div>";
            echo "<div class='col-lg-2 col-md-2 col-3'><h3>Tip</h3><h5>" .$row['product_type_name']."</h5></div>";
            echo "<div class='col-lg-2 col-md-2 col-3'><h3>Opis</h3><h5>" .$row['product_size_description']."</h5></div>";
            echo "<div class='col-lg-2 col-md-2 col-3'><h3>Godina</h3><h5>" .$row['product_year']."</h5></div>";
            echo "<div class='col-lg-2 col-md-2 col-3'><h3>Cena</h3><h5>" .$row['product_price']." RSD</h5></div>";
            echo "";
            echo "<div class='col-12' style='height: 30px'></div>";
            echo "<div class='col-12'><hr></div>";
            echo "<div class='col-12' style='height: 30px'></div>";


        }
        ?>



        <div class="col-2"></div>









    </div></div>


</body>
</html>
