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
    <title>O autorkama</title>
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
<div class="container bg-light" style="width: 80%">
    <div class="row text-right">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h1 align="center">Upoznajte naše slamarke</h1></div>
        <div class="col-12" style="height: 50px"></div>
        <div class="col-12  bg-light">
        <table>
            <?php
            require "db_config.php";

            $sql = "SELECT * FROM authors";
            $query = mysqli_query($connection,$sql);

            while ($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td align=\"center\" rowspan='2'><img class=\"img-fluid\" src=\"admin/" . $row['author_image'] . "\" style=\"width: 100%; height: auto;\"></td>";
                echo "<td rowspan='2' width='15px'></td>";
                echo "<td align=\"center\" width='60%'><h2><b>" . $row['author_name'] . " " . $row['author_surname'] ."</b></h2></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td align=\"justify\" style='font-size: large; vertical-align:top '>" . $row['author_bio'] ."</td>";
                echo "</tr>";
                echo "<td colspan='3' height='100px'></td>";
            }
            ?>
        </table>
        </div></div></div>
            <br><br><br>
</body>
</html>
