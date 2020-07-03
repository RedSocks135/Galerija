<?php

session_start();

if(isset($_POST['log'])) {

    require '../../db_config.php';

    $username = mysqli_real_escape_string($connection, $_POST['adminUsername']);
    $password = mysqli_real_escape_string($connection, $_POST['adminPassword']);

    //Check if inputs are empty
    if (empty($username) || empty($password)) {
        header("Location:../adminLogin.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM admins WHERE username='$username';";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){
            header("Location:../adminLogin.php?login=error");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)){
                //De-hashing the password
                $hashedPwdCheck = password_verify($password, $row['password']);
                if ($hashedPwdCheck == false) {
                    header("Location:../adminLogin.php?login=error");
                    exit();
                } elseif ($hashedPwdCheck == true){
                    //Log in here
                    $_SESSION['u_id'] = $row['username'];
                    header("Location:../adminOverview.php?login=success");
                    exit();
                }
            }
        }
    }
}

else {
    header("Location:../adminLogin.php?login=error");
    exit();
}
?>
