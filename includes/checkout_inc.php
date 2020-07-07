<?php
session_start();
require_once '../db_config.php';
$idUser = $_SESSION['custID'];
$sendingMethod = $_POST['shipping'];

$sql = "INSERT INTO orders(id_customers,sending_method) VALUES ($idUser,'$sendingMethod')";
$query = mysqli_query($connection,$sql);
$id=mysqli_insert_id($connection);

foreach ($_SESSION['cart'] as $item) {
    $idProduct = $item['id'];
    $quantity = $item['amount'];

    $sql2 = "INSERT INTO ordered_items(id_product,id_order,quantity,order_status) VALUES ($idProduct,$id,$quantity,'Na čekanju')";
    $query2 = mysqli_query($connection,$sql2);
}
$_SESSION['cart'] = [];
header('Location: ../checkout.php?sent=1');
exit;
