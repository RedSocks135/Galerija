<?php
if (isset($_POST['custlogin_submit'])) {

    require '../db_config.php';

    $cust_unmail = $_POST['cust_unmail'];
    $cust_password = $_POST['cust_password'];

    if (empty($cust_unmail || $cust_password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM customers WHERE cust_username=? OR cust_email=?;";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $cust_unmail, $cust_unmail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($cust_password, $row['cust_password']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
                elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['custID'] = $row['id'];
                    $_SESSION['custUsername'] = $row['cust_username'];

                    header("Location: ../index.php?login=success");
                    exit();

                }

            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../index.php");
    exit();
}
?>