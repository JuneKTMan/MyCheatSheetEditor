<body>
    <div class="main-container d-flex">
        <?php include "php/include/header.php" ?>
        <?php include "php/include/sidebar.php"; ?>
        <div class="content">
            <?php include "php/include/topbar.php"; ?>
            <div class="dashboard-content px-3 pt-4">
                <div class="container">

                    <?php include('php/function/dbconnect.php');

                    if (isset($_GET['delid'])) {
                        $deluser = $_GET['delid'];

                        $alertMessage = "<div class='alert alert-warning'>
    Confirm to delete this record?<br>
    <form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "?id=$deluser' method='post'>
        <input type='submit' class='btn btn-danger btn-sm'
        name='confirm-delete' value='Yes' delete!>
        <a href='/cheatplace.php' class='close' data-dismiss='alert' aria-label='close'> <button class='btn btn-primary btn-sm'>No</button> </a>
    </from>
    </div>";
                    }

                    // Get id then delete
                    if (isset($_GET['id'])) {

                        $id = $_GET['id'];

                        include "dbconnect.php";

                        $query = "DELETE FROM `mycheatbook` WHERE id = '$id'";
                        $result = mysqli_query($conn, $query);


                        if ($result) {
                            header('Location: cheatplace.php');
                        } else {
                            echo "I don't know what happen!";
                        }
                    }

                    ?>

                    <?php include "header.php"; ?>


                    <?php
                    if (isset($alertMessage)) {
                        echo $alertMessage;
                    }

                    ?>
                    <h2 class="fs-5">My Cheat Book</h2>

                    <?php include "php/function/searchbox.php" ?>

                    <br><br>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Search by language</label>
                            <select name="language" class="form-control">
                                <option value="">--Select Language--</option>
                                <option value="C++">C++</option>
                                <option value="C#">C#</option>
                                <option value="Python">Python</option>
                                <option value="PHP">PHP</option>
                                <option value="SQL">SQL</option>
                                <option value="Java">Java</option>
                                <option value="JavaScript">JavaScript</option>
                                <option value="HTML">HTML</option>
                                <option value="Css">Css</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group mb-3">
                            <button type="search" class="btn btn-primary ">Search</button>
                        </div>
                    </form>
                    <br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Function</th>
                            <th>Language</th>
                            <th>Cheat</th>
                            <th>Update</th>
                            <th>Delete</th>
                            <th>Bookmark</th>

                        </tr>
                        <?php

                        if (!isset($_POST['search'])) {
                            $language = $_POST['language'];
                            $query = "SELECT * FROM `mycheatbook` WHERE language = '$language'";
                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) {
                                // read data in each table row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row["fun"] . "</td>";
                                    echo "<td>" . $row["language"] . "</td>";
                                    echo "<td>" . $row["cheat"] . "</td>";

                                    echo '<td><a href="editCS.php?id=' . $row['id'] . '"
                    type ="button" class = "btn btn-primary btn-sm">
                    <span class="fa fa-edit">edit</span>
                    </a></td>';

                                    echo '<td><a href="/cheatplace.php?delid=' . $row['id'] . '"
                    type ="button" class = "btn btn-danger btn-sm">
                    <span class="fa fa-trash">del</span>
                    </a></td>';

                                    echo '<td><button class="add" data-id=' . $row['id'] . '>Add</button></td>';


                                    echo "</tr>";
                                }
                            } else {
                        ?>
                                <tr>
                                    <td colspan="4">No result</td>
                                </tr>

                        <?php
                            }
                        }

                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>


</body>
<footer>
</footer>



<script>
    var id = document.getElementsByClassName("add");
    for (var i = 0; i < id.length; i++) {
        id[i].addEventListener("click", function(event) {
            var target = event.target;
            var id = target.getAttribute("data-id");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    target.innerHTML = data.in_bookmark;
                    // stop at here still in process
                    // document.getElementById("")
                }
            }

            xml.open("GET", "/php/function/addbookmark.php?id=" + id, true);
            xml.send();

        })
    }
</script>