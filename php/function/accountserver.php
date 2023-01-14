<?php
session_start();


echo "seem that the heroku register database cannot connected";
include('dbconnect.php');

$username = "";
$errors = array();

//Register User
if (!isset($_POST['reg_user'])) {
    //get data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    //Validation
    if ($password_1 != $password_2) {
        array_push($errors, "Password do not match!");
    }

    // Check the database to check the user does not exist with the same username
    $user_check_query = "SELECT * FROM `users` WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    // if username exists
    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
    }

    //Checked if the form all collect, no error
    if (count($errors) === 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (username, password) VALUES ('$username','$password')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Login successfully";
        header('Location: write.php');
        //header('Location: ../../write.php');
    }
}
