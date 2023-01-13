<?php
include('dbconnect.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // echo "Test addbookmark.php connection id = $id";
    $query = "SELECT * FROM `bookmark` WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $total_bookmark = "SELECT * FROM `bookmark`";
    $total_bookmark_result = mysqli_query($conn, $total_bookmark);
    $bookmark_num = mysqli_num_rows($total_bookmark_result);

    if (mysqli_num_rows($result) > 0) {
        $in_bookmark = "already marked";

        echo json_encode(["num_bookmark" => $bookmark_num, "in_bookmark" => $in_bookmark]);
    } else {
        $insert = "INSERT INTO bookmark(id) VALUES($id)";
        if ($conn->query($insert) === true) {
            $in_bookmark = "added bookmark";
            echo json_encode(["num_bookmark" => $bookmark_num, "in_bookmark" => $in_bookmark]);
        } else {
            echo "<script>alert(Insert bookmark failed)</script>";
        }
    }
}
