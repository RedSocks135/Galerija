<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prijava - Galerija suvenira od slame Tavankut</title>
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
            <li><a href="register.php">Registracija</a></li>
        </ul>
    </nav>
</header>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Prijava</h2>
            <p>Prijavite se na Vaš profil kako biste kupili suvenire</p>
        </header>

        <!-- Security messages -->
        <section style="text-align: center">
            <?php
            if (isset($_GET['login'])){
                $message=$_GET['login'];

                switch ($message){

                    case 'emptyfields':
                        echo "<b style='color: #b0192e'>Morate popuniti sva polja!</b>";
                        break;

                    case 'sqlerror':
                        echo "<b style='color: #b0192e'>Došlo je do greške! Pokušajte ponovo.</b>";
                        break;

                    case 'wrongpwd':
                        echo "<b style='color: #b0192e'>Uneli ste pogrešne podatke! Pokušajte ponovo.</b>";
                        break;

                    case 'nouser':
                        echo "<b style='color: #b0192e'>Uneli ste pogrešne podatke! Pokušajte ponovo.</b>";
                        break;

                    case 'notverified':
                        echo "<b style='color: #b0192e'>Vaš nalog nije verifikovan. Proverite Vaš mail.</b>";
                        break;

                    case 'required':
                        echo "<b style='color: #b0192e'>Molim Vas da se prijavite ukoliko želite da dodate proizvod u korpu</b>";
                        break;

                    case 'success':
                        echo "<b style='color: #93e87d'>Uspešno ste se prijavili na sajt!</b>";
                        break;

                    case 'verified':
                        echo "<b style='color: #93e87d'>Nalog je uspešno verifikovan! Možete se prijaviti.</b>";
                        break;
                }
            }
            ?>
        </section>

        <!-- Registration table -->
        <section>
            <div class="table-wrapper">
                <table class="alt">
                    <form method="post" action="includes/login_inc.php">
                    <tbody>
                    <tr>
                        <td align="right"><label class="input-group-text" for="inputGroupSelect01">Korisničko ime ili e-mail:</label></td>
                        <td>                                      <?php
                            if (isset($_GET['cust_unmail'])){
                                $cust_unmail = $_GET['cust_unmail'];
                                echo '<input type="text" name="cust_unmail" class="form-control" style="width: 200px"
                                               aria-label="cust_unmail" aria-describedby="basic-addon1" value="'.$cust_unmail.'">';
                            }
                            else {
                                echo '<input type="text" name="cust_unmail" class="form-control"
                                               aria-label="cust_unmail" aria-describedby="basic-addon1">';
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td align="right"><label class="input-group-text" for="inputGroupSelect01">Lozinka:</label></td>
                        <td>  <input type="password" name="cust_password" class="form-control"
                                     aria-label="cust_password" aria-describedby="basic-addon1"></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2" align="center">
                            <div class="6u$ 12u$(small)">
                                <ul class="actions fit small">
                                    <li><button class="button fit small" name="custlogin_submit" type="submit">Prijavi se</button></li>
                                    <li><button class="button alt fit small"  name="login" type="reset">Poništi</button></li>

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
