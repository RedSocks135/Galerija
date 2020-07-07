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
    <title>Admin - dodavanje suvenira</title>
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
            <p>Dodavanje suvenira</p>
        </header>
    </div>
</section>

<!--Add souvenir table-->
<section>
    <div class="container">
        <div class="table-wrapper">
            <table align="center" cellpadding="10px">
                <thead>
                <form name="addProduct" method="POST" action="adminIncludes/adminProducts_inc.php"
                      enctype="multipart/form-data">
                        <tr>
                            <td align="center">

                                <?php
                                require_once '../db_config.php';

                                $sql = "SELECT id, product_type_name FROM product_type";
                                $query = mysqli_query($connection, $sql);
                                $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                echo "<div class=\"12u$\">
                                    <label class=\"input-group-text bg-secondary text-white\" for=\"inputGroupSelect01\" style='width: 128px'>Tip suvenira:</label>";
                                echo "<div class=\"select-wrapper\"><select id='selectProductType' class='custom-select' name='selectProductType' style='font-weight:bold'>";
                                foreach ($results as $result) {
                                    echo "<option name='productTypeSelected' value='{$result['id']}'>{$result['product_type_name']}</option>";
                                }
                                echo "</select></div></div></td></tr>";
                                ?>

                                    </div>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <form name="selectAuthor" method="POST" action="adminIncludes/adminProducts_inc.php">

                                    <?php
                                    require_once '../db_config.php';

                                    $sql = "SELECT id, author_name, author_surname FROM authors";
                                    $query = mysqli_query($connection, $sql);
                                    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                    echo "<div class=\"12u$\">
                                    <label class=\"input-group-text bg-secondary text-white\" for=\"inputGroupSelect01\">Umetnica:</label>
                                </div>";
                                    echo "<div class=\"select-wrapper\"><select id='selectAuthor' class='custom-select' name='selectAuthor' style='font-weight:bold;'>";
                                    foreach ($results as $result) {


                                        echo "<option name='authSelected' value='{$result['id']}'>{$result['author_name']} {$result['author_surname']}</option>";
                                    }
                                    echo "</select></div></td></tr>";
                                    ?>
                            </td>
                        </tr>
    <tr>
        <td style="height: 100px">
        </td>
    </tr>
</thead>
    <tbody>
                        <tr>
                            <td align="center">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-secondary text-white" for="inputGroupSelect01">Naziv suvenira:</label>
                                    <input type="text" name="productName" class="form-control" placeholder="Naziv suvenira"
                                           aria-label="productName" aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-secondary text-white" for="inputGroupSelect01">Opis:</label>
                                    <input type="text" name="productSizeDescription" class="form-control" placeholder="Veličina i/ili opis"
                                           aria-label="productSizeDescription" aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-secondary text-white" for="inputGroupSelect01">Godina:</label>
                                    <input type="text" name="productYear" class="form-control" placeholder="Godina"
                                           aria-label="productYear" aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-secondary text-white" for="inputGroupSelect01">Cena u RSD:</label>
                                    <input type="text" name="productPrice" class="form-control" placeholder="Cena u RSD">
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
                                    <li><button type="submit" href="adminIncludes/adminProducts_inc.php" class="button" name="productAdd">Dodaj</button></li>
                                </ul>
                                </div></td></tr>
                    </div>
                </form>
    </tfoot>
            </table>

        </div>
    </div>

</section>

<br><br><br><br><br>

<!--Add souvenir type table-->
<section>
    <div class="container">
        <div class="table-wrapper">
<table align="center" cellpadding="10px">

    <form name="addProductType" method="POST" action="adminIncludes/adminProducts_inc.php"
          enctype="multipart/form-data">
        <thead>
        <tr><th><h3>Dodavanje novog tipa suvenira</h3></th></tr>
        <tr>
            <td align="center">
                <label class="input-group-text bg-secondary text-white" for=\inputGroupSelect01">Tip suvenira:</label>
                <input type="text" name="productTypeName" class="form-control" placeholder="Naziv tipa suvenira" >
            </td></tr></thead>
        <tfoot>
        <tr>
            <td align="center">
                <ul class="actions">
                    <li><button type="submit" class="button" name="productTypeAdd">Dodaj</button></li>
                </ul>


            </td>
        </tr>
        </tfoot>
    </form>
</table>
        </div>
    </div>
</section>

<br><br><br><br><br>

<!--Delete souvenir type table-->
<section>
    <div class="container">
        <div class="table-wrapper">
            <table align="center" cellpadding="10px">
                <thead>
                <tr><th><h3>Brisanje tipa suvenira</h3></th></tr>
                <tr>
                    <td align="center">

                <form name="DelProductType" method="POST" action="adminIncludes/adminProducts_inc.php"
                      enctype="multipart/form-data">

                    <?php
                    require_once '../db_config.php';

                    $sql = "SELECT id, product_type_name FROM product_type";
                    $query = mysqli_query($connection, $sql);
                    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
                    echo "<div class=\"12u$\">
                                    <label class=\"input-group-text bg-secondary text-white\" for=\"inputGroupSelect01\" style='width: 128px'>Tip suvenira:</label>";
                    echo "<div class=\"select-wrapper\"><select id='selectProductType2' class='custom-select' name='selectProductType2' style='font-weight:bold'>";
                    foreach ($results as $result) {
                        echo "<option name='productTypeSelected2' value='{$result['id']}'>{$result['product_type_name']}</option>";
                    }
                    echo "</thead>";
                    echo "<tfoot>
                <tr>
                    <td align=\"center\">";
                    echo "<a onclick='return confirm(\"Da li ste sigurni da želite da obrišete? (Svi suveniri ovog tipa će biti obrisani!)\")' href='adminIncludes/adminProducts_inc.php?id={$result['id']}&productTypeDel=1' name='ProductTypeDel' class=\"button\">Obriši</a></td>";
                    ?>

                    </td>
                </tr>
                </tfoot>
                </form>
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

