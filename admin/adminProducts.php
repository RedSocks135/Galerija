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

<div class="container-fluid bg-light fixed-top">
    <div class="row text-center">
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

<div class="container bg-light">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Dodavanje tipa suvenira</h3></div>
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light">

            <fieldset>
                <table align="center" cellpadding="10px">
                    <form name="addProductType" method="POST" action="adminIncludes/adminProducts_inc.php">
                        <div class="input-group mb-3">

                            <tr>
                                <td>
                                    <div class="input-group-prepend">
                                        <input type="text" name="productTypeName" class="form-control" placeholder="Naziv tipa suvenira"
                                               aria-label="productTypeName" aria-describedby="basic-addon1">
                                    </div>
                                </td>
                            </tr>
                            <tr><td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <button class="btn btn-outline-secondary" name="productTypeAdd" type="submit">Dodaj
                                    </button>
                                    <button class="btn btn-outline-secondary" name="productTypeCancel" type="reset">
                                        Odbaci
                                    </button>
                                </div></td></tr>

                        </div>
                    </form>
                </table>
            </fieldset>
        </div>
    </div>
</div>

<br><br><br>

<div class="container bg-light">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Brisanje tipa suvenira</h3></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-12  bg-light">

            <fieldset>
                <table align="center" cellpadding="10px">
                    <form name="deleteProductType" method="POST" action="adminIncludes/adminProducts_inc.php">

                        <?php
                        require_once '../db_config.php';

                        $sql = "SELECT id, product_type_name FROM product_type";
                        $query = mysqli_query($connection, $sql);
                        $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
                        echo "<tr><td>";
                        echo "                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text bg-secondary text-white\" for=\"inputGroupSelect01\">Izaberite tip</label>
                                </div>";
                        echo "<select id='selectProductType' class='custom-select' name='productTypeSelected' style=' width:250px; font-weight:bold;'>";
                        foreach ($results as $result) {


                            echo "<option name='productTypeSelected' value='{$result['id']}'>{$result['product_type_name']}</option>";
                        }
                        echo "</select></div></td></tr>";
                        ?>

                        <tr>
                            <td colspan="2">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <button class="btn btn-outline-secondary" name="productTypeDel" type="submit">Izbriši
                                    </button>
                                </div></td></tr>


        </div>
    </div>
</div>
</form>
</table>
</fieldset>
</div>
</div>
</div>

<br><br><br>
<div class="container bg-light">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Dodavanje suvenira</h3></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-12  bg-light">

            <fieldset>
                <table align="center" cellpadding="10px">
                    <form name="addProduct" method="POST" action="adminIncludes/adminProducts_inc.php"
                          enctype="multipart/form-data">
                        <div class="input-group mb">
                            <tr>
                                <td>
                                    <?php
                                    require_once '../db_config.php';

                                    $sql = "SELECT id, product_type_name FROM product_type";
                                    $query = mysqli_query($connection, $sql);
                                    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                    echo "                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text bg-secondary text-white\" for=\"inputGroupSelect01\" style='width: 128px'>Izaberite tip</label>
                                </div>";
                                    echo "<select id='selectProductType' class='custom-select' name='selectProductType' style=' width:250px; font-weight:bold;'>";
                                    foreach ($results as $result) {


                                        echo "<option name='productTypeSelected' value='{$result['id']}'>{$result['product_type_name']}</option>";
                                    }
                                    echo "</select></div></td></tr>";
                                    ?>


                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form name="selectAuthor" method="POST" action="adminIncludes/adminProducts_inc.php">

                                        <?php
                                        require_once '../db_config.php';

                                        $sql = "SELECT id, author_name, author_surname FROM authors";
                                        $query = mysqli_query($connection, $sql);
                                        $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                        echo "                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text bg-secondary text-white\" for=\"inputGroupSelect01\">Izaberite autora</label>
                                </div>";
                                        echo "<select id='selectAuthor' class='custom-select' name='selectAuthor' style=' width:250px; font-weight:bold;'>";
                                        foreach ($results as $result) {


                                            echo "<option name='authSelected' value='{$result['id']}'>{$result['author_name']} {$result['author_surname']}</option>";
                                        }
                                        echo "</select></div></td></tr>";
                                        ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="input-group-prepend">
                                        <input type="text" name="productName" class="form-control" placeholder="Naziv"
                                               aria-label="productName" aria-describedby="basic-addon1">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group-prepend">
                                        <input type="text" name="productSizeDescription" class="form-control" placeholder="Veličina i/ili opis"
                                               aria-label="productSizeDescription" aria-describedby="basic-addon1">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group-prepend">
                                        <input type="text" name="productYear" class="form-control" placeholder="Godina proizvodnje"
                                               aria-label="productYear" aria-describedby="basic-addon1">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group-prepend">
                                        <input type="text" name="productPrice" class="form-control" placeholder="Cena"
                                               aria-label="productPrice" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text bg-secondary text-white" for="inputGroupSelect01">RSD</label>

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
                            <tr>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <button class="btn btn-outline-secondary" name="productAdd" type="submit">Dodaj
                                        </button>
                                        <button class="btn btn-outline-secondary" name="productCancel" type="reset">
                                            Odbaci
                                        </button>
                                    </div></td></tr>
                        </div>
                    </form>
                </table>
            </fieldset>
        </div>
    </div>
</div>

<br><br><br>
</body>
</html>
