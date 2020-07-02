<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registracija - Galerija suvenira od slame Tavankut</title>
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
<header id="header">
    <h1><a href="index.php">Galerija slika od slame</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="index.php">Početna</a></li>
            <li><a href="login.php">Prijava</a></li>
        </ul>
    </nav>
</header>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Registracija</h2>
            <p>Registracija je neophodna ukoliko želite porudžbu suvenira.</p>
        </header>

        <!-- Security messages -->
        <section style="text-align: center">
            <?php
            if (isset($_GET['signup'])){
                $message=$_GET['signup'];

                switch ($message){

                    case 'emptyfields':
                        echo "<b style='color: #b0192e'>Morate popuniti sva polja!</b>";
                        break;

                    case 'invalidmail':
                        echo "<b style='color: #b0192e'>Niste uneli validnu e-mail adresu!</b>";
                        break;

                    case 'sqlerror':
                        echo "<b style='color: #b0192e'>Došlo je do greške! Pokušajte ponovo.</b>";
                        break;

                    case 'usertaken':
                        echo "<b style='color: #b0192e'>Korisničko ime je zauzeto. Pokušajte uneti nešto drugo.</b>";
                        break;

                    case 'success':
                        echo "<b style='color: #93e87d'>Registracija je uspešna! Poslat Vam je e-mail za verifikaciju naloga.</b>";
                        break;
                }
            }
            ?>
        </section>
            <!-- Registration table -->

        <section>
        <div class="table-wrapper">
            <table class="alt">
                <form method="post" action="includes/register_inc.php">
                <tbody>
                <tr>
                    <td align="right"><label class="input-group-text" for="inputGroupSelect01">Vaše ime:</label></td>
                    <td> <?php
                        if (isset($_GET['cust_name'])){
                            $cust_name = $_GET['cust_name'];
                            echo '<input type="text" name="cust_name" class="form-control" placeholder="Upišite Vaše ime"
                                   aria-label="cust_name" aria-describedby="basic-addon1" value="'.$cust_name.'">';
                        }
                        else {
                            echo '<input type="text" name="cust_name" class="form-control" placeholder="Upišite Vaše ime"
                                   aria-label="cust_name" aria-describedby="basic-addon1">';
                        }
                        ?></td>
                </tr>
                <tr>
                    <td align="right"><label class="input-group-text" for="inputGroupSelect01">Vaše prezime:</label></td>
                    <td> <?php
                        if (isset($_GET['cust_surname'])){
                            $cust_surname = $_GET['cust_surname'];
                            echo '<input type="text" name="cust_surname" class="form-control" placeholder="Upišite Vaše prezime"
                                       aria-label="cust_surname" aria-describedby="basic-addon1" value="'.$cust_surname.'">';
                        }
                        else {
                            echo '<input type="text" name="cust_surname" class="form-control" placeholder="Upišite Vaše prezime"
                                       aria-label="cust_surname" aria-describedby="basic-addon1">';
                        }
                        ?></td>
                </tr>
                <tr>
                    <td align="right"><label class="input-group-text" for="inputGroupSelect01">E-mail:</label></td>
                    <td><?php
                        if (isset($_GET['cust_email'])){
                            $cust_email = $_GET['cust_email'];
                            echo '<input type="email" name="cust_email" class="form-control" placeholder="Upišite Vaš e-mail"
                                       aria-label="cust_email" aria-describedby="basic-addon1" value="'.$cust_email.'">';
                        }
                        else {
                            echo '<input type="email" name="cust_email" class="form-control" placeholder="Upišite Vaš e-mail"
                                       aria-label="cust_email" aria-describedby="basic-addon1">';
                        }
                        ?></td>
                </tr>
                <tr>
                    <td align="right"><label class="input-group-text" for="inputGroupSelect01">Telefon:</label></td>
                    <td>
                        <?php
                        if (isset($_GET['cust_phone'])){
                            $cust_phone = $_GET['cust_phone'];
                            echo '<input type="text" name="cust_phone" class="form-control" placeholder="Upišite Vaš broj telefona"
                                       aria-label="cust_phone" aria-describedby="basic-addon1" value="'.$cust_phone.'">';
                        }
                        else {
                            echo '<input type="text" name="cust_phone" class="form-control" placeholder="Upišite Vaš broj telefona"
                                       aria-label="cust_phone" aria-describedby="basic-addon1">';
                        }
                        ?></td>
                </tr>
                <tr>
                    <td align="right"><label class="input-group-text" for="inputGroupSelect01">Korisničko ime:</label></td>
                    <td>
                        <?php
                        if (isset($_GET['cust_username'])){
                            $cust_username = $_GET['cust_username'];
                            echo '<input type="text" name="cust_username" class="form-control" placeholder="Upišite korisničko ime"
                                       aria-label="cust_username" aria-describedby="basic-addon1" value="'.$cust_username.'">';
                        }
                        else {
                            echo '<input type="text" name="cust_username" class="form-control" placeholder="Upišite korisničko ime"
                                       aria-label="cust_username" aria-describedby="basic-addon1">';
                        }
                        ?></td>
                </tr>
                <tr>
                    <td align="right">  <label class="input-group-text" for="inputGroupSelect01">Lozinka:</label></td>
                    <td>
                        <input type="password" name="cust_password" class="form-control" placeholder="Upišite lozinku"
                               aria-label="cust_password" aria-describedby="basic-addon1"></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="2" align="center">
                        <div class="6u$ 12u$(small)">
                            <ul class="actions fit small">
                                <li><button class="button fit small" name="cust_submit" type="submit">Registruj se</button></li>
                                <li><button class="button alt fit small"  name="cust_reset" type="reset">Poništi</button></li>

                            </ul>
                        </div>



                    </td>

                </tr>
                </tfoot>
                </form>
            </table>
        </div>
        </section>
    </div>
</section>


<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <section class="4u$ 12u$(medium) 12u$(small)">
                <h3>Kontaktirajte nas:</h3>
                <ul class="icons">
                    <li><a href="https://www.facebook.com/Galerija-Prve-kolonije-naive-u-tehnici-slame-1651640418409676/?ref=page_internal" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
                </ul>
                <ul class="tabular">
                    <li>
                        <h3>Adresa</h3>
                        Marka Oreškovića 3<br>
                        24214 Donji Tavankut, Srbija
                    </li>
                    <li>
                        <h3>Mail</h3>
                        galerijatavankut@gmail.com
                    </li>
                    <li>
                        <h3>Telefon</h3>
                        064 1484144
                    </li>
                </ul>
            </section>
</footer>

</body>
</html>
