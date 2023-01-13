<?php
include('php/function/dbconnect.php');

$success = '';
$error = '';

if ($_GET['id']) {

    $id = $_GET['id'];
    $query = "SELECT * FROM `mycheatbook` WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $cheat = $row['cheat'];
        }
    }
} else {
    header('Location: write.php');
}

if (isset($_POST['submit'])) {

    if (isset($_POST['cheat']) && !empty($_POST['cheat'])) {
        $cheat = $_POST['cheat'];
    } else {

        echo "Input can not be empty " . "<br />";
        $empty_error = '<b class="text-danger text-center>Input can not be empty</b>';
    }

    if (isset($cheat) && !empty($cheat)) {
        $query = "UPDATE `mycheatbook` SET cheat = '$cheat' 
        WHERE id = '$id'";

        if (mysqli_query($conn, $query)) {
            $success .= '<div class="alert alert-success" role="alert">
            Edit successfully
          </div>';

?>


<?php
        } else {
            echo "Submittion error, please try again." . "<br />";
            $submit_error = '<b class="text-danger text-center>Submittion error, please try again.</b>';
        }
    }
}

$conn->close();

?>



<?php include "php/include/header.php"; ?>

<div class="main-container d-flex">
    <?php include "php/include/sidebar.php"; ?>
    <div class="content">
        <?php include "php/include/topbar.php"; ?>
        <div class="dashboard-content px-3 pt-4">
            <div class="container">
                <h2 class="fs-5">Edit your cheat</h2>
                <br>
                <a class="btn btn-info" href="write.php">Write new</a>
                <a class="btn btn-info" href="cheatplace.php">Read the record</a>
                <br><br>

                <?php echo $success ?>

                <?php if (isset($submit_error)) {
                    echo $submit_error;
                } ?>
                <?php if (isset($empty_error)) {
                    echo $empty_error;
                } ?>



                <form action="" method="POST" enctype="multipart/form-data">
                    <textarea class="ckeditor" name="cheat"><?php if (isset($cheat)) {
                                                                echo $cheat;
                                                            } ?></textarea>

                    <br>
                    <button type="submit" name="submit" class="btn btn-success">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <section>
        <p>© 2022 by June Man</p>
    </section>
</footer>