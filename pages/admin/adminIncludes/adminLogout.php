<?php

//This page is made for Log Out button in administrator page

    session_start();
    session_unset();
    session_destroy();
    header("Location:../adminLogin.php?logout=success");
    exit();
?>
