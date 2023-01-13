<?php

require_once "addbookmark.php";
$query_bookmark = "SELECT * FROM bookmark";
$all_bookmark = mysqli_query($conn, $query_bookmark);

?>

<div class="main-container d-flex">
    <?php include('dbconnect.php'); ?>

    <div class="content">
        <div class="dashboard-content px-3 pt-4">

            <div class="container">
                <h2 class="fs-5"><?php echo mysqli_num_rows($all_bookmark); ?> Bookmarks</h2>

                <br><br>

                <table class="table table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Function</th>
                        <th>Language</th>
                        <th>Cheat</th>


                    </tr>
                    <!-- //while row book mark id match cheatbook id, echo data from table cheatbook-->
                    <?php

                    while ($row_bookmark = mysqli_fetch_assoc($all_bookmark)) {
                        $query = "SELECT * FROM `mycheatbook` WHERE id =" . $row_bookmark["id"];
                        $all_cheat = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($all_cheat)) {


                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["fun"] . "</td>";
                            echo "<td>" . $row["language"] . "</td>";
                            echo "<td>" . $row["cheat"] . "</td>";
                        }
                    }

                    ?>
                </table>
            </div>
        </div>
    </div>
</div>