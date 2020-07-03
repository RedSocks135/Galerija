<?php

require "../../db_config.php";

if(isset($_POST['changeStatus'])) {

    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE `orders` SET order_status = '$status' WHERE id=$id";
    $query = mysqli_query($connection,$sql);

    header("Location: ../adminOrdersOverview.php?changed");
    exit;

} else {
    header("Location: ../adminOrdersOverview.php?error");
    exit;
}

?>
