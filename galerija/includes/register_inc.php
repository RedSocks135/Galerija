<?php
if (isset($_POST['cust_submit'])) {

   require '../db_config.php';

   $cust_name = $_POST['cust_name'];
   $cust_surname = $_POST['cust_surname'];
   $cust_email = $_POST['cust_email'];
   $cust_phone = $_POST['cust_phone'];
   $cust_username = $_POST['cust_username'];
   $cust_password = $_POST['cust_password'];

   if (empty($cust_name) || empty($cust_surname) || empty($cust_email) || empty($cust_phone) || empty($cust_username) || empty($cust_password)) {
      header("Location: ../register.php?error=emptyfields&cust_name=".$cust_name."&cust_surname=".$cust_surname."&cust_email=".$cust_email."&cust_phone=".$cust_phone."&cust_username=".$cust_username);
      exit();
   }
   elseif (!filter_var($cust_email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $cust_username)) {
       header("Location: ../register.php?error=invalidmailcust_name&cust_name=".$cust_name."&cust_surname=".$cust_surname."&cust_phone=".$cust_phone);
       exit();
   }
   elseif (!filter_var($cust_email, FILTER_VALIDATE_EMAIL)) {
       header("Location: ../register.php?error=invalidmail&cust_name=".$cust_name."&cust_surname=".$cust_surname."&cust_phone=".$cust_phone."&cust_username=".$cust_username);
       exit();
   }
   elseif (!preg_match("/^[a-zA-Z0-9]*$/", $cust_username)) {
       header("Location: ../register.php?error=invalidcust_username&cust_name=".$cust_name."&cust_surname=".$cust_surname."&cust_phone=".$cust_phone."&cust_email=".$cust_email);
       exit();
   }
   else {
       $sql = "SELECT cust_username FROM customers WHERE cust_username=?";
       $stmt = mysqli_stmt_init($connection);
       if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("Location: ../register.php?error=sqlerror");
           exit();
       }
       else {
           mysqli_stmt_bind_param($stmt, "s", $cust_username);
           mysqli_stmt_execute($stmt);
           mysqli_stmt_store_result($stmt);
           $resultCheck = mysqli_stmt_num_rows($stmt);
           if($resultCheck > 0) {
               header("Location: ../register.php?error=usertaken&cust_name=".$cust_name."&cust_surname=".$cust_surname."&cust_phone=".$cust_phone."&cust_email=".$cust_email);
               exit();
           }
           else {
               $sql = "INSERT INTO customers (cust_name, cust_surname, cust_email, cust_phone, cust_username, cust_password) VALUES (?, ?, ?, ?, ?, ?)";
               $stmt = mysqli_stmt_init($connection);
               if (!mysqli_stmt_prepare($stmt, $sql)) {
                   header("Location: ../register.php?error=sqlerror");
                   exit();
               }
               else {
                   $hashedPwd = password_hash($cust_password, PASSWORD_DEFAULT);

                   mysqli_stmt_bind_param($stmt, "ssssss", $cust_name, $cust_surname, $cust_email, $cust_phone, $cust_username, $hashedPwd);
                   mysqli_stmt_execute($stmt);
                   header("Location: ../register.php?rigistration=success");
                   exit();

               }
           }
       }
    }
   mysqli_stmt_close($stmt);
   mysqli_close($connection);

}
else {
    header("Location: ../register.php");
    exit();
}





?>