<?php

$servername = "localhost";
$username = "root";
$password = "Password01";
$dbname = "mcse";

$conn = mysqli_connect($servername, $username, $password, $dbname) or
    die("Cannot connect Database" . mysqli_connect_error());
