<?php
session_start();

if(!isset($_SESSION['custID'])) {
    header('Location: ../login.php?login=required');
    exit;
}
if(isset($_POST['cartAdd'])) {
    $id = (int)$_POST['id'];
    $amount = (int)$_POST['amount'];
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $item_array_id = array_column($_SESSION['cart'],'id');
    if(!in_array($id,$item_array_id)) {
        $_SESSION['cart'][$id] = ['id' => $id, 'amount' => $amount];
    } else {
        $_SESSION['cart'][$id] = ['id' => $id, 'amount' => $_SESSION['cart'][$id]['amount']+$amount];
    }

    header('Location: ../shop.php');
    exit;
}

if(isset($_POST['cartEdit'])) {
    $id = (int)$_POST['id'];
    $amount = (int)$_POST['amount'];
    foreach ($_SESSION['cart'] as $key => $value) {
        if($key == $id) {
            $_SESSION['cart'][$id] = ['id' => $id, 'amount' => $amount];
        }
    }
    header('Location: ../checkout.php');
    exit;
}

if(isset($_POST['cartRemove'])) {
    $id = (int)$_POST['id'];
    foreach ($_SESSION['cart'] as $key => $value) {
        if($key == $id) {
            unset($_SESSION['cart'][$key]);
        }
    }

    header('Location: ../checkout.php');
    exit;
}

