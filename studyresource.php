<?php include "php/include/header.php"; ?>

<body>
    <div class="main-container d-flex">
        <?php include "php/include/sidebar.php"; ?>
        <div class="content">
            <?php include "php/include/topbar.php"; ?>
            <?php include "php/function/resource.php"; ?>
            <br><br>
            <div class="main-container d-flex">
                <?php include('php/function/dbconnect.php'); ?>

                <?php
                $query_resources = "SELECT * FROM studyresource";
                $all_resources = mysqli_query($conn, $query_resources);

                ?>

                <div class="content">
                    <div class="dashboard-content px-3 pt-4">

                        <div class="container">
                            <h2 class="fs-5">My saved resources</h2>
                            <br>

                            <?php echo $removeMessage ?>
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Resource</th>
                                    <th>Language</th>
                                    <th>About</th>
                                    <th>URL</th>
                                    <th>DELETE</th>

                                </tr>

                                <!-- //while row book mark id match cheatbook id, echo data from table cheatbook-->

                                <?php
                                //if (!isset($_POST['submit']))

                                if (!isset($_POST['submit'])) {

                                    $query = "SELECT * FROM `studyresource`";
                                    $result = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($result) > 0) {
                                        // read data in each table row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row["id"] . "</td>";
                                            echo "<td>" . $row["resource"] . "</td>";
                                            echo "<td>" . $row["language"] . "</td>";
                                            echo "<td>" . $row["about"] . "</td>";
                                            echo "<td>" . $row["url"] . "</td>";

                                            echo '<td><button class="remove" data-id=' . $row['id'] . '>Remove</button></td>';

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
            <script>
                var remove = document.getElementsByClassName("remove");
                for (var i = 0; i < remove.length; i++) {
                    remove[i].addEventListener("click", function(event) {
                        var target = event.target;
                        var id = target.getAttribute("data-id");

                        var xml = new XMLHttpRequest();
                        xml.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                taret.innerHTML == this.responseText;
                                target.style.opacity = .3;
                                //<<<<
                                // stop at here still in process 
                                // document.getElementById("")
                            }
                        }

                        xml.open("GET", "studyresource.php?id=" + id, true);
                        xml.send();

                    })
                }
            </script>
            <?php
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $query = "DELETE FROM studyresource WHERE id=" . $id;

                if ($conn->query($query) === TRUE) {
                    $removeMessage = "Resources removed";
                    echo "Resources removed";
                }
            }

            ?>


        </div>
    </div>
</body>
<footer>
    <section>
        <p>© 2022 by June Man</p>
    </section>
</footer>