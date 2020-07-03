<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prijava Admin - Galerija suvenira od slame Tavankut</title>
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
</header>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Prijava - administrator</h2>
        </header>

        <!-- Security messages -->
        <section style="text-align: center">
            <?php
            if (isset($_GET['login'])){
                $message=$_GET['login'];

                switch ($message){

                    case 'empty':
                        echo "<b style='color: #b0192e'>Morate popuniti sva polja!</b>";
                        break;

                    case 'error':
                        echo "<b style='color: #b0192e'>Uneli ste pogrešne podatke! Pokušajte ponovo.</b>";
                        break;

                        case 'success':
                        echo "<b style='color: #93e87d'>Uspešno ste se prijavili na sajt!</b>";
                        break;
                }
                }
            ?>
        </section>

        <!-- Registration table -->
        <section>
            <div class="table-wrapper">
                <table class="alt">
                    <form name="createLog" method="post" action="adminIncludes/adminLogin_inc.php">
                        <tbody>
                        <tr>
                            <td align="right"><label>Korisničko ime:</label></td>
                            <td><input type="text" name="adminUsername"></td>
                        </tr>
                        <tr>
                            <td align="right"><label>Lozinka:</label></td>
                            <td> <input type="password" name="adminPassword"></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2" align="center">
                                <div class="6u$ 12u$(small)">
                                    <ul class="actions fit small">
                                        <li><button class="button fit small" name="log" id="button" type="submit">Prijavi se</button></li>
                                        <li><button class="button alt fit small"  name="reset" id="button" type="reset">Poništi</button></li>

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
</body>
</html>

