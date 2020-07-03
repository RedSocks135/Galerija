<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "gallery";

$connection = mysqli_connect("$host", "$username", "$password","$db") or die(mysqli_error($connection));

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
