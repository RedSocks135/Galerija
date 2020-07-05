<?php
session_start();
require_once '../db_config.php';
foreach ($_SESSION['cart'] as $item) {
    $idUser = $_SESSION['custID'];
    $idProduct = $item['id'];
    $quantity = $item['amount'];
    $sendingMethod = $_POST['shipping'];
    $sql = "INSERT INTO orders(id_customer,id_product,quantity,sending_method,order_status) VALUES ($idUser,$idProduct,$quantity,'$sendingMethod','Na čekanju')";
    $query = mysqli_query($connection,$sql);
}
$_SESSION['cart'] = [];
header('Location: ../checkout.php?sent=1');
exit;
