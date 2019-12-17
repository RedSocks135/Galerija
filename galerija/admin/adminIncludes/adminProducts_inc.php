<?php
require "../../db_config.php";

//Add a new product type
if(isset($_POST['productTypeAdd'])) {
    $productTypeName = mysqli_real_escape_string($connection, trim($_POST['productTypeName']));

    $sql = "INSERT INTO `product_type` (product_type_name) VALUES('$productTypeName');";
    $query = mysqli_query($connection, $sql);

    header("Location: ../adminProducts.php?addedsuccessfully");
    exit;
}

//Delete product type
if(isset($_POST['productTypeDel'])) {
    $productTypeSelected = $_POST['productTypeSelected'];

    $sql = "DELETE FROM `product_type` WHERE product_type.id= '$productTypeSelected';";
    $query = mysqli_query($connection,$sql);
    header("Location: ../adminProducts.php?successfulydeleted");
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

    if (exif_imagetype($fileTmpName)) {
        if ($fileError === 0) {
            if ($fileSize < 2000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../images/products/'.$fileNameNew;
                $fileDestinationDB = 'images/products/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "INSERT INTO `products` (id_product_type,product_name,id_author,product_size_description,product_year,product_image,product_price) VALUES('$productTypeSelected','$productName','$authSelected','$productSizeDescription','$productYear','$fileDestinationDB','$productPrice');";
                $query = mysqli_query($connection, $sql);
                header("Location: ../adminProducts.php?uploadsuccess");
                exit;

            } else {
                "Slika je previše velika!";
            }


        } else {
            echo "Greška prilikom otpremanja slike!";
        }

    } else {
        echo "Vaš fajl mora biti ekstenzije .jpg, .jpeg ili .png!";
    }

}