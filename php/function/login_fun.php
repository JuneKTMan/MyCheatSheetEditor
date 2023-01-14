<?php

session_start();

define('LOG_FUN', dirname(__FILE__) . '/../');
$baselogfun = __DIR__ . '/../';
echo "seem that the heroku database cannot connected";

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
    header('Location: write.php');
    //header('Location: ../../write.php');
} else {
    echo "Wrong username/password";
}

exit();
