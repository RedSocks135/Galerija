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

<div class="container-fluid bg-light fixed-top">
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
<br><br><br><br><br><br><br><br><br><br>
<div class="container bg-light" style="width: 70%">
    <div class="row text-right">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Registracija</h3></div>
        <div class="col-12" style="height: 25px"></div>
        <div class="col-12  bg-light">

            <table align="center">
        <form method="post" action="includes/register_inc.php">
            <tr>
                <td colspan="5">
                    <div class="input-group mb-1">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01" style="width: 120px">Vaše ime:</label>
                        <div class="input-group-prepend">
                            <input type="text" name="cust_name" class="form-control" placeholder="Upišite Vaše ime"
                                   aria-label="cust_name" aria-describedby="basic-addon1">
                        </div>
                    </div>

            </tr>
            <tr>
                <td colspan="5">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 120px">Vaše prezime:</label>
                            <div class="input-group-prepend">
                                <input type="text" name="cust_surname" class="form-control" placeholder="Upišite Vaše prezime"
                                       aria-label="cust_surname" aria-describedby="basic-addon1">
                            </div>
                        </div>

            </tr>
            <tr>
                <td colspan="5">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 120px">E-mail:</label>
                            <div class="input-group-prepend">
                                <input type="email" name="cust_email" class="form-control" placeholder="Upišite Vaš e-mail"
                                       aria-label="cust_email" aria-describedby="basic-addon1">
                            </div>
                        </div>

            </tr>
            <tr>
                <td colspan="5">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 120px">Telefon:</label>
                            <div class="input-group-prepend">
                                <input type="text" name="cust_phone" class="form-control" placeholder="Upišite Vaš broj telefona"
                                       aria-label="cust_phone" aria-describedby="basic-addon1">
                            </div>
                        </div>

            </tr>
            <tr>
                <td colspan="5">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 120px">Korisničko ime:</label>
                            <div class="input-group-prepend">
                                <input type="text" name="cust_username" class="form-control" placeholder="Upišite korisničko ime"
                                       aria-label="cust_username" aria-describedby="basic-addon1">
                            </div>
                        </div>

            </tr>
            <tr>
                <td colspan="5">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 120px;">Lozinka:</label>
                            <div class="input-group-prepend">
                                <input type="password" name="cust_password" class="form-control" placeholder="Upišite lozinku"
                                       aria-label="cust_password" aria-describedby="basic-addon1">
                            </div>
                        </div>

            </tr>
            <tr><td align="center">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <button class="btn btn-outline-secondary" name="cust_submit" type="submit">Registruj se
                        </button>
                        <button class="btn btn-outline-secondary" name="cust_reset" type="reset">
                            Poništi
                        </button>
                    </div>
        </div>




                </td></tr>

        </form>
        </table>
        </div>
        <div class="col-12 bg-light" style="height: 10px"></div>

    </div>
</div>




</body>
</html>
