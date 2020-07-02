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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin mode</title>
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
                <button style="border: none; color: blue; background-color:rgba(0,0,0,0)" type="submit" name="logout"
                        id="logout">Odjava
                </button>
            </form>
            <div class="col-4" style="height: 5px"></div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br>

<div class="container bg-light">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Dodavanje autora</h3></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-12  bg-light">

                <table align="center" cellpadding="10px">
                    <tbody>
                    <form name="addAuthor" method="POST" action="adminIncludes/adminAuthors_inc.php"
                          enctype="multipart/form-data">
                        <div class="input-group mb-3">

                            <tr>
                                <td>
                                    <div class="input-group-prepend">
                                        <input type="text" name="authName" class="form-control" placeholder="Ime autora"
                                               aria-label="authName" aria-describedby="basic-addon1">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group-prepend">
                                        <input type="text" name="authSurname" class="form-control"
                                               placeholder="Prezime autora" aria-label="authSurname"
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
                                                  aria-label="authBio"></textarea>
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
                                        <button class="btn btn-outline-secondary" name="authAdd" type="submit">Dodaj
                                        </button>
                                        <button class="btn btn-outline-secondary" name="authCancel" type="reset">
                                            Odbaci
                                        </button>
                                    </div></td></tr>
                        </div>
                    </form>
                    </tbody>
                </table>
            </fieldset>
        </div>
    </div>
</div>

<br><br><br>

<div class="container bg-light">
    <div class="row text-center">
        <div class="col-12" style="height: 5px"></div>
        <div class="col-12  bg-light"><h3 align="center">Brisanje autora</h3></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-12  bg-light">

            <fieldset>
                <table align="center" cellpadding="10px">
                    <form name="deleteAuthor" method="POST" action="adminIncludes/adminAuthors_inc.php">

                        <?php
                        require_once '../db_config.php';

                        $sql = "SELECT id, author_name, author_surname FROM authors";
                        $query = mysqli_query($connection, $sql);
                        $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
                        echo "<tr><td>";
                        echo "                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text bg-secondary text-white\" for=\"inputGroupSelect01\">Izaberite autora</label>
                                </div>";
                        echo "<select id='selectAuthor' class='custom-select' name='authSelected' style=' width:250px; font-weight:bold;'>";
                        foreach ($results as $result) {


                            echo "<option name='authSelected' value='{$result['id']}'>{$result['author_name']} {$result['author_surname']}</option>";
                        }
                        echo "</select></div></td></tr>";
                        ?>

                        <tr>
                            <td colspan="2">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <button class="btn btn-outline-secondary" name="authDel" type="submit">Izbriši
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
        <div class="col-12  bg-light"><h3 align="center">Izmena</h3></div>
        <div class="col-12" style="height: 10px"></div>
        <div class="col-12  bg-light">

            <fieldset>
                <table align="center" cellpadding="10px">
                    <form name="changeAuthor" method="post" action="adminIncludes/adminAuthors_inc.php"
                          enctype="multipart/form-data">
                        <tr>

                            <?php
                            require_once '../db_config.php';

                            $sql = "SELECT id, author_name, author_surname FROM authors";
                            $query = mysqli_query($connection, $sql);
                            $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            echo "<tr><td colspan='2'>";
                            echo "                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text bg-secondary text-white\" for=\"inputGroupSelect01\" >Izaberite autora</label>
                                </div>";
                            echo "<select id='selectAuthor' class='custom-select' name='authSelected' style=' width:250px; font-weight:bold;'>";
                            foreach ($results as $result) {


                                echo "<option name='authSelected' value='{$result['id']}'>{$result['author_name']} {$result['author_surname']}</option>";
                            }
                            echo "</select></div></td></tr>";
                            ?>
                        </tr>
                        <tr>
                            <td colspan="3" height="20px"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="input-group-prepend">
                                    <input type="text" name="authNameNew" class="form-control"
                                           placeholder="Novo ime autora" aria-label="authNameNew"
                                           aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="input-group-prepend">
                                    <input type="text" name="authSurnameNew" class="form-control"
                                           placeholder="Novo prezime autora" aria-label="authSurnameNew"
                                           aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Biografija:</span>
                                    </div>
                                    <textarea class="form-control" name="authBioNew" rows="5" cols="30"
                                              aria-label="authBioNew"></textarea>
                                </div>

                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Fotografija:</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Nova fotografija</label>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <button class="btn btn-outline-secondary" name="authChange" type="submit">Izmeni
                                    </button>
                                    <button class="btn btn-outline-secondary" name="authChangeCancel" type="reset">
                                        Odbaci
                                    </button>
                                </div>
        </div>
        </td></tr>

        </form>
        </table>
        </fieldset>
    </div>
</div>
</div>
<br><br><br>

<script>

    var input = document.querySelector('option[name="authSelectedNew"]');
    var authName = document.querySelector('input[name="authNameNew"]');
    var authSurname = document.querySelector('input[name="authSurnameNew"]');
    var authBioNew = document.querySelector('textarea[name="authBioNew"]');

    input.addEventListener('keyup', function () {

        var search = {
            "search": input.value
        };

        if (input.value == '') {
            authName.value = '';
            authSurname.value = '';
            authBioNew.value = '';
            authFile.value = '';
            return false;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var responseJSON = JSON.parse(xhttp.responseText);
                    console.log(responseJSON);

                    authName.value = responseJSON.author_name;
                    authSurname.value = responseJSON.author_surname;
                    authBioNew.value = responseJSON.author_bio;

                }
            };

            xhttp.open("POST", "adminIncludes/SearchAuthor.php", true);
            xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhttp.send('search=' + JSON.stringify(search));

        }
    )

</script>

</body>
</html>
