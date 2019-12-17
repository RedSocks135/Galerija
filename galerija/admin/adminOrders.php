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

<div class="container-fluid bg-light">
    <div class="row text-center" fixed-top>
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
<br><br><br><br><br><br><br><br>


</body>
</html>
