<?php

session_start();

define('LOG_FUN', dirname(__FILE__) . '/../');
$baselogfun = __DIR__ . '/../';
echo "C:\Users\junej\Documents\NSCC\INET2005_WepApp\INET2005_Project3_W0454918\W0454918JuneMan_INET2005_Project3\W0454918JuneMan-INET2005-Project3_update\MyCheatSheetEditor\php\function\login_fun.php";

include('dbconnect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$password = md5($password);
$query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (isset($row)) {
    $_SESSION["id"] = $row["id"];
    $_SESSION['logged'] = true;
    $_SESSION['username'] = $username;
    header('Location: ../../write.php');
} else {
    echo "Wrong username/password";
}

exit();
