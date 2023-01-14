<?php

//Heroku database
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["us-cdbr-east-06.cleardb.net"];
// $cleardb_username = $cleardb_url["be6e84249c1257"];
// $cleardb_password = $cleardb_url["cdfe3ce6"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// // Connect to DB
// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


$cleardb_host = $cleardb_url["us-cdbr-east-06.cleardb.net"];
$cleardb_username = $cleardb_url["be6e84249c1257"];
$cleardb_password = $cleardb_url["cdfe3ce6"];
$cleardb_dbname = $cleardb_dbname["heroku_bbc518307663 "];

// Connect to DB
$conn = mysqli_connect($cleardb_host, $cleardb_username, $cleardb_password, $cleardb_dbname) or die("database connection error");



//orginal local database
// $servername = "localhost";
// $username = "root";
// $password = "Password01";
// $dbname = "mcse";

// $conn = mysqli_connect($servername, $username, $password, $dbname) or
//     die("Cannot connect Database" . mysqli_connect_error());
