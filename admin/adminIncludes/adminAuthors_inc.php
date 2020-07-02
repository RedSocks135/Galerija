<?php
require "../../db_config.php";

//Add a new author
if(isset($_POST['authAdd'])) {
    $authName = mysqli_real_escape_string($connection,trim($_POST['authName']));
    $authSurname = $_POST['authSurname'];
    $authBio = $_POST['authBio'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    if (exif_imagetype($fileTmpName)){
        if ($fileError === 0) {
            if ($fileSize < 2000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/authors/'.$fileNameNew;
                $fileDestinationDB = 'images/authors/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "INSERT INTO `authors` (author_name,author_surname,author_bio,author_image) VALUES('$authName','$authSurname','$authBio','$fileDestinationDB');";
                $query = mysqli_query($connection,$sql);

                header("Location: ../adminAuthors.php?uploadsuccess");
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

//Delete author
if(isset($_POST['authDel'])) {
    $authSelected = $_POST['authSelected'];

    $sql = "DELETE FROM `authors` WHERE authors.id= '$authSelected';";
    $query = mysqli_query($connection,$sql);
    header("Location: ../adminAuthors.php?successfulydeleted");
}

//Edit author atributes
if(isset($_POST['authChange'])) {

    $authSelected = $_POST['authSelected'];

    $authNameNew = $_POST['authNameNew'];
    $authSurnameNew = $_POST['authSurnameNew'];
    $authBioNew = $_POST['authBioNew'];

    $fileNameNew = $_FILES['file']['name'];
    $fileTmpNameNew = $_FILES['file']['tmp_name'];
    $fileSizeNew = $_FILES['file']['size'];
    $fileErrorNew = $_FILES['file']['error'];
    $fileTypeNew = $_FILES['file']['type'];
    $fileExtNew = explode('.', $fileNameNew);
    $fileActualExtNew = strtolower(end($fileExtNew));

    if (exif_imagetype($fileTmpNameNew)){
        if ($fileErrorNew === 0) {
            if ($fileSizeNew < 2000000){
                $fileNameNew = uniqid('', true).".".$fileActualExtNew;
                $fileDestination = '../images/authors/'.$fileNameNew;
                $fileDestinationDB = 'images/authors/'.$fileNameNew;
                move_uploaded_file($fileTmpNameNew, $fileDestination);

                    $sqlNewName = "UPDATE authors SET author_name = '$authNameNew' WHERE authors.id = '$authSelected';";
                    $queryNewName = mysqli_query($connection,$sqlNewName);

                    $sqlNewSurname = "UPDATE authors SET author_surname = '$authSurnameNew' WHERE authors.id = '$authSelected';";
                    $queryNewSurname = mysqli_query($connection,$sqlNewSurname);

                    $sqlNewBio = "UPDATE authors SET author_bio = '$authBioNew' WHERE authors.id = '$authSelected';";
                    $queryNewBio = mysqli_query($connection,$sqlNewBio);

                    $sqlNewImage = "UPDATE authors SET author_image = '$fileDestinationDB' WHERE authors.id = '$authSelected';";
                    $queryNewImage = mysqli_query($connection,$sqlNewImage);

                $query = mysqli_query($connection,$sql);

                header("Location: ../adminAuthors.php?successfulyedited");
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

header("Location:../adminAuthors.php");
exit();
?>
