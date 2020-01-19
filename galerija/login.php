<?php

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
    <title>Prijava</title>
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
            <div class="col-6 col-lg-2 bg-light"><a href="">Odjavi me</a></div>
            <div class="col-4" style="height: 5px"></div>';
        }
        ?>


    </div>
</div>
<br><br><br><br><br><br><br><br>
<div class="container bg-light" style="width: 70%">
    <div class="row text-right">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Prijava</h3></div>
        <div class="col-12" style="height: 25px"></div>
        <div class="col-12  bg-light">
            <table align="center">
                <form method="post" action="includes/login_inc.php">
                    <tr><td colspan="3">
                            <div class="input-group mb">
                                    <label class="input-group-text" for="inputGroupSelect01" style="width: 200px">Korisničko ime ili email:</label>
                                </div>
                                    <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <?php
                                        if (isset($_GET['cust_unmail'])){
                                            $cust_unmail = $_GET['cust_unmail'];
                                            echo '<input type="text" name="cust_unmail" class="form-control" style="width: 200px"
                                               aria-label="cust_unmail" aria-describedby="basic-addon1" value="'.$cust_unmail.'">';
                                        }
                                        else {
                                            echo '<input type="text" name="cust_unmail" class="form-control" style="width: 200px"
                                               aria-label="cust_unmail" aria-describedby="basic-addon1">';
                                        }
                                        ?>
                                    </div>
                                </div>
                        </td></tr>
                    <tr><td colspan="3">
                            <div class="input-group mb">
                                <label class="input-group-text" for="inputGroupSelect01" style="width: 200px">Lozinka:</label>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <input type="password" name="cust_password" class="form-control" style="width: 200px"
                                           aria-label="cust_password" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </td></tr>
                    <tr><td colspan="3" align="center">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <button class="btn btn-outline-secondary" name="custlogin_submit" type="submit">Log in
                                </button>
                                <button class="btn btn-outline-secondary" name="custlogin_reset" type="reset">
                                    Poništi
                                </button>
                            </div>
        </div>


                        </td></tr>
                </form>
            </table>
        </div>
        <div class="col-12 bg-light" style="height: 10px"></div>

    <div class="col-12 text-center">
        <?php
        require 'db_config.php';

        if (!isset($_GET['login'])) {
            exit();
        }
        else {
            $signupCheck = $_GET['login'];

            if ($signupCheck == "emptyfields"){
                echo "<p style='color: red'>Niste popunili sva polja.</p>";
                exit();
            }
            elseif ($signupCheck == "wrongpwd"){
                echo "<p style='color: red'>Greška prilikom unosa lozinke. Pokušajte ponovo.</p>";
                exit();
            }
            elseif ($signupCheck == "sqlerror"){
                echo "<p style='color: red'>Greška sa bazom podataka.</p>";
                exit();
            }
            elseif ($signupCheck == "nouser"){
                echo "<p style='color: red'>Greška prilikom unosa korisničkog imena ili email-adrese. Pokušaj ponovo.</p>";
                exit();
            }

            }
        ?>
    </div>

    </div>
</div>

</body>
</html>
