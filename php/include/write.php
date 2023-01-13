<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCSE</title>

    <!--=============== BOOTSTRAP - Style ===============-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.litera.min.css">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <!--=============== CKEDITOR ===============-->
    <script src="ckeditor4/ckeditor/ckeditor.js"></script>
    <!--=============== JQUERY ===============-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/menu_control.js"></script>
</head>

<body>
    <div class="main-container d-flex">
        <?php include "sidebar.php"; ?>
        <div class="content">
            <?php include "topbar.php"; ?>
            <?php include "php/function/writetestagain.php"; ?>
        </div>
    </div>
</body>

</html>