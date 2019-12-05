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
    <title>Registracija</title>
</head>
<body style="font-family: Calibri; background-color: dimgrey;">

<div class="container-fluid bg-light">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 bg-light"><h1 align="center">Galerija slika od slame</h1></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-4 col-lg-2 bg-light"><a href="index.php">Početna</a></div>
        <div class="col-4 col-lg-2 bg-light"><a href="authors.php">O autorkama</a></div>
        <div class="col-4 col-lg-2 bg-light"><a href="contact.php">Kontakt</a></div>
        <div class="col-4 col-lg-2 bg-light"><a href="login.php">Prijava</a></div>
        <div class="col-4 col-lg-2 bg-light"><a href="register.php">Registracija</a></div>
        <div class="col-4 col-lg-2 bg-light"><a href="shop.php">Prodavnica</a></div>
        <div class="col-4" style="height: 5px"></div>

    </div>
</div>
<br><br><br><br><br>
<div class="container bg-light" style="width: 70%">
    <div class="row text-right">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Registracija</h3></div>
        <div class="col-12" style="height: 25px"></div>
        <div class="col-12  bg-light">

            <table align="center">
        <form method="post">
            <tr>
                <td><label>Vaše ime: </label></td>
                <td style="width: 5px"></td>
                <td><input type="text" name="cust_name" id="cust_name"></td>
            </tr>
            <tr>
                <td><label>Vaše prezime: </label></td>
                <td style="width: 5px"></td>
                <td><input type="text" name="cust_surname" id="cust_surname"></td>
            </tr>
            <tr>
                <td><label>Email: </label></td>
                <td style="width: 5px"></td>
                <td><input type="email" name="cust_email" id="cust_email"></td>
            </tr>
            <tr>
                <td><label>Telefon: </label></td>
                <td style="width: 5px"></td>
                <td><input type="text" name="cust_phone" id="cust_phone"></td>
            </tr>

            <tr>
                <td style="height: 10px"></td>
            </tr>

            <tr>
                <td><label>Korisničko ime: </label></td>
                <td style="width: 5px"></td>
                <td><input type="text" name="cust_username" id="cust_username"></td>
            </tr>
            <tr>
                <td><label>Lozinka: </label></td>
                <td style="width: 5px"></td>
                <td><input type="password" name="cust_password" id="cust_password"></td>
            </tr>
            <tr>
                <td style="height: 25px"></td>
            </tr>
            <tr>
                <td></td>
                <td style="width: 5px"></td>
                <td>
                    <button type="submit" name="cust_submit" id="cust_submit">Registruj se</button>
                    <button type="reset" name="cust_reset" id="cust_reset">Poništi</button>
                </td>
            </tr>

        </form>
        </table>
        </div>
        <div class="col-12 bg-light" style="height: 10px"></div>

    </div>
</div>




</body>
</html>
