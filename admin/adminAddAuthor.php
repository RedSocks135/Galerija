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
    <title>Admin - dodavanje umetnice</title>
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
<header id="header" style="position: fixed">

    <h1><a href="adminOverview.php">Pregled podataka</a></h1>
    <nav id="nav">
        <ul>
            <?php

            if (isset($_SESSION['u_id'])) {
                echo '<li>Prijavljeni ste kao <span style="color: #cee8d8;">'.$_SESSION['u_id'].'</span></li>';
                echo '<li><a href="adminIncludes/adminLogout.php">Odjava</a></li>';}
            ?>
        </ul>
    </nav>
    </div>
</header>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Admin strana</h2>
            <p>Dodavanje nove umetnice</p>
        </header>
    </div>
</section>

<!--Edit table-->
<section>
    <div class="container">
        <div class="table-wrapper">
            <table align="center" cellpadding="10px">
                <form name="addAuthor" method="POST" action="adminIncludes/adminAuthors_inc.php"
                      enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <tbody>
                        <tr>
                            <td>
                                <div class="input-group-prepend">
                                    <input type="text" name="authName" class="form-control" placeholder="Ime umetnice"
                                           aria-label="authName" aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group-prepend">
                                    <input type="text" name="authSurname" class="form-control"
                                           placeholder="Prezime umetnice" aria-label="authSurname"
                                           aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Biografija:</span>
                                    </div>
                                    <textarea class="form-control" name="authBio" rows="5" cols="30"
                                              aria-label="authBio" style="resize: none"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Fotografija:</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input"
                                               id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Izaberite
                                            sliku</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td align="center">
                                    <ul class="actions">
                                        <li><button type="submit" href="adminIncludes/adminAuthors_inc.php" class="button" name="authAdd">Dodaj</button></li>
                                    </ul></td></tr>
                    </div>
                </form>
            </tfoot>
            </table>

        </div>
        </div>

</section>





<!-- Overview -->
<section class="wrapper style1 align-center">
    <div class="container">
        <div class="row 200%">
            <section class="3u 12u$(small)">
                <a href="adminSouvenirsOverview.php"><i class="fa icon big rounded fa-image"></i>
                    <p>Suveniri u prodavnici</p></a>
            </section>
            <section class="3u 12u$(small)">
                <a href="adminAuthorsOverview.php"><i class="fa icon big rounded fa-paint-brush"></i>
                    <p>Umetnice</p></a>
            </section>
            <section class="3u 12u$(small)">
                <a href="adminCustomersOverview.php"><i class="fa icon big rounded fa-users"></i>
                    <p>Registrovani kupci</p></a>
            </section>
            <section class="3u 12u$(small)">
                <a href="adminOrdersOverview.php"><i class="fa icon big rounded fa-truck"></i>
                    <p>Porudžbine</p></a>
            </section>
        </div>
    </div>
</section>

</body>
</html>
