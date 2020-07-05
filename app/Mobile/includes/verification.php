<?php
if(isset($_GET['vkey'])) {

    require_once '../db_config.php';
    $vkey = mysqli_real_escape_string($connection,$_GET['vkey']);
    $sql = "SELECT id FROM customers WHERE cust_vkey = '$vkey'";
    $query = mysqli_query($connection,$sql);
    $user = mysqli_fetch_assoc($query);

    if(!$user) {
        header('Location: index.php');
        exit;
    }

    $sql = "UPDATE customers SET cust_verified=1 WHERE id={$user['id']}";
    $query = mysqli_query($connection,$sql);

    if ($query){
        header('Location: ../login.php?login=verified');
        exit;
    }

    else {
        header('Location: ../login.php?login=verificationfailed');
        exit;
    }

} else {
    header('Location: ../index.php');
    exit;
}
