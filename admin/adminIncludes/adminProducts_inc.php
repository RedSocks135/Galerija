<?php
require "../../db_config.php";

//Add a new product type
if(isset($_POST['productTypeAdd'])) {
    $productTypeName = mysqli_real_escape_string($connection, trim($_POST['productTypeName']));

    $sql = "INSERT INTO `product_type` (product_type_name) VALUES('$productTypeName');";
    $query = mysqli_query($connection, $sql);

    header("Location: ../adminAddProduct.php?product=typeaddedsuccessfully");
    exit;
}

//Delete product type
if(isset($_GET['productTypeDel'])) {
    $id=$_GET['id'];

    $sql = "DELETE FROM `product_type` WHERE product_type.id=$id;";
    $query = mysqli_query($connection,$sql);
    header("Location: ../adminAddProduct.php?product=typesuccessfulydeleted");
}

//Add a new product
if (isset($_POST['productAdd'])) {
    $productTypeSelected =(int)$_POST['selectProductType'];
    $authSelected = (int)$_POST['selectAuthor'];
    $productName = $_POST['productName'];
    $productSizeDescription = $_POST['productSizeDescription'];
    $productYear = $_POST['productYear'];
    $productPrice = $_POST['productPrice'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    if (is_numeric($productPrice)) {
        if (exif_imagetype($fileTmpName)) {
            if ($fileError === 0) {
                if ($fileSize < 2000000) {
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = '../images/products/'.$fileNameNew;
                    $fileDestinationDB = 'images/products/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $sql = "INSERT INTO `products` (id_product_type,product_name,id_author,product_size_description,product_year,product_image,product_price) VALUES('$productTypeSelected','$productName','$authSelected','$productSizeDescription','$productYear','$fileDestinationDB','$productPrice');";
                    $query = mysqli_query($connection, $sql);
                    header("Location: ../adminSouvenirsOverview.php?product=uploadsuccess");
                    exit;

                } else {
                    header("Location: ../adminSouvenirsOverview.php?product=imagetoolarge");
                    exit;
                }


            } else {
                header("Location: ../adminSouvenirsOverview.php?product=unknownerror");
                exit;

            }

        } else {
            header("Location: ../adminSouvenirsOverview.php?product=fileisnotimage");
            exit;
        }
    } else {
        header("Location: ../adminSouvenirsOverview.php?product=priceisnan");
        exit;
    }
}

//Delete product
if(isset($_GET['productDel'])) {
    $id=$_GET['id'];

    $sql = "DELETE FROM `products` WHERE products.id= $id;";
    $query = mysqli_query($connection,$sql);
    header("Location: ../adminSouvenirsOverview.php?product=successfullydeleted");
}

//Edit product atributes
if(isset($_POST['productChange'])) {

    $id = $_POST['id'];

    $productNewTypeSelected = (int)$_POST['productNewTypeSelected'];
    $authNewSelected = (int)$_POST['authNewSelected'];

    $productNewName = $_POST['productNewName'];
    $productNewSizeDescription = $_POST['productNewSizeDescription'];
    $productNewYear = $_POST['productNewYear'];
    $productNewPrice = $_POST['productNewPrice'];

    $fileNameNew = $_FILES['file']['name'];
    $fileTmpNameNew = $_FILES['file']['tmp_name'];
    $fileSizeNew = $_FILES['file']['size'];
    $fileErrorNew = $_FILES['file']['error'];
    $fileTypeNew = $_FILES['file']['type'];
    $fileExtNew = explode('.', $fileNameNew);
    $fileActualExtNew = strtolower(end($fileExtNew));
    if($fileTmpNameNew!="") {
        if (exif_imagetype($fileTmpNameNew)) {
            if ($fileErrorNew === 0) {
                if ($fileSizeNew < 2000000) {
                    $fileNameNew = uniqid('', true) . "." . $fileActualExtNew;
                    $fileDestination = '../images/products/' . $fileNameNew;
                    $fileDestinationDB = 'images/products/' . $fileNameNew;
                    move_uploaded_file($fileTmpNameNew, $fileDestination);
                    if (is_numeric($productNewPrice) && is_numeric($productNewYear)) {
                        $sqlNewName = "UPDATE products SET id_product_type = '$productNewTypeSelected', product_name = '$productNewName', id_author = '$authNewSelected', product_size_description = '$productNewSizeDescription', product_year = '$productNewYear', product_image = '$fileDestinationDB', product_price = '$productNewPrice' WHERE products.id = $id;";
                    } else {
                        header("Location: ../adminSouvenirsOverview.php?product=priceoryearisnan");
                        exit;
                    }
                } else {
                    header("Location: ../adminSouvenirsOverview.php?product=imagetoolarge");
                    exit;
                }
            } else {
                header("Location: ../adminSouvenirsOverview.php?product=unknownerror");
                exit;
            }
        } else {
            header("Location: ../adminSouvenirsOverview.php?product=fileisnotimage");
            exit;
        }
    } else {
        if (is_numeric($productNewPrice) && is_numeric($productNewYear)) {

            $sqlNewName = "UPDATE products SET id_product_type = '$productNewTypeSelected', product_name = '$productNewName', id_author = '$authNewSelected', product_size_description = '$productNewSizeDescription', product_year = '$productNewYear', product_price = '$productNewPrice' WHERE products.id = $id;";
        } else {
            header("Location: ../adminSouvenirsOverview.php?product=priceoryearisnan");
            exit;
        }
    }

    $queryNewName = mysqli_query($connection, $sqlNewName);
    header("Location: ../adminSouvenirsOverview.php?product=successfulyedited");
    exit;

}
