<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['cust_submit'])) {


    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';
   require '../db_config.php';

   $cust_name = $_POST['cust_name'];
   $cust_surname = $_POST['cust_surname'];
   $cust_email = $_POST['cust_email'];
   $cust_phone = $_POST['cust_phone'];
   $cust_username = $_POST['cust_username'];
   $cust_password = $_POST['cust_password'];

   if (empty($cust_name) || empty($cust_surname) || empty($cust_email) || empty($cust_phone) || empty($cust_username) || empty($cust_password)) {
      header("Location: ../register.php?signup=emptyfields&cust_name=".$cust_name."&cust_surname=$cust_surname&cust_email=$cust_email&cust_phone=$cust_phone&cust_username=$cust_username");
      $message="Morate popuniti sva polja!";
      exit();
   }
   elseif (!filter_var($cust_email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $cust_username)) {
       header("Location: ../register.php?signup=invalidmailcust_name&cust_name=$cust_name&cust_surname=$cust_surname&cust_phone=$cust_phone");
       exit();
   }
   elseif (!filter_var($cust_email, FILTER_VALIDATE_EMAIL)) {
       header("Location: ../register.php?signup=invalidmail&cust_name=$cust_name&cust_surname=$cust_surname&cust_phone=$cust_phone&cust_username=$cust_username");
       exit();
   }
   elseif (!preg_match("/^[a-zA-Z0-9]*$/", $cust_username)) {
       header("Location: ../register.php?signup=invalidcust_username&cust_name=$cust_name&cust_surname=$cust_surname&cust_phone=$cust_phone&cust_email=$cust_email");
       exit();
   }
   else {
       $sql = "SELECT cust_username FROM customers WHERE cust_username=?";
       $stmt = mysqli_stmt_init($connection);
       if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("Location: ../register.php?signup=sqlerror");
           exit();
       }
       else {
           mysqli_stmt_bind_param($stmt, "s", $cust_username);
           mysqli_stmt_execute($stmt);
           mysqli_stmt_store_result($stmt);
           $resultCheck = mysqli_stmt_num_rows($stmt);
           if($resultCheck > 0) {
               header("Location: ../register.php?signup=usertaken&cust_name=$cust_name&cust_surname=$cust_surname&cust_phone=$cust_phone&cust_email=$cust_email");
               exit();
           }
           else {
               $vkey=hash('sha256',$cust_username.bin2hex(random_bytes(32)));
               $sql = "INSERT INTO customers (cust_name, cust_surname, cust_email, cust_phone, cust_username, cust_password, cust_vkey) VALUES (?, ?, ?, ?, ?, ?, ?)";
               $stmt = mysqli_stmt_init($connection);
               if (!mysqli_stmt_prepare($stmt, $sql)) {
                   header("Location: ../register.php?signup=sqlerror");
                   exit();
               }
               else {
                   $hashedPwd = password_hash($cust_password, PASSWORD_DEFAULT);

                   mysqli_stmt_bind_param($stmt, "sssssss", $cust_name, $cust_surname, $cust_email, $cust_phone, $cust_username, $hashedPwd, $vkey);
                   mysqli_stmt_execute($stmt);

                   try {
                       $mail = new PHPMailer();
                       $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                       $mail->isSMTP();
                       $mail->Host = 'mail.vardump.me';
                       $mail->SMTPAuth = true;
                       $mail->Username = 'nenad@galerija.vardump.me';
                       $mail->Password = 'duncoskaboca69';
                       
                       $mail->setFrom('nenad@galerija.vardump.me', 'Galerija');
                       $mail->addAddress($cust_email);

                       $mail->isHTML(true);
                       $mail->Subject = "Verifikujte email";
                       $mail->Body    = "<a href=\"http://galerija.vardump.me/includes/verification.php?vkey=$vkey\">Kliknite ovde kako biste se registrovali</a>";

                       $mail = $mail->send();
                       if($mail) {
                           header("Location: ../register.php?signup=success");
                       } else {
                           header("Location: ../register.php?signup=mailfail");
                       }

                   } catch (Exception $e) {
                       header("Location: ../register.php?signup=mailfail");
                   }
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