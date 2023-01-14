<div class="dashboard-content px-3 pt-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                    echo $_GET['search'];
                                                                } ?>" class="form-control" placeholder="Search cheat by keyword">
                        <botton type="submit" class="btn btn-primary">Search</botton>
                    </div>
                </form>
            </div>

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
                include "dbconnect.php";
                if (isset($_GET['search'])) {
                    $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM `mycheatbook` WHERE CONCAT(fun, language, cheat) LIKE '%$filtervalues%' ";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["fun"] . "</td>";
                            echo "<td>" . $row["language"] . "</td>";
                            echo "<td>" . $row["cheat"] . "</td>";

                            echo '<td><a href="editCS.php?id=' . $row['id'] . '"
                    type ="button" class = "btn btn-primary btn-sm">
                    <span>edit</span>
                    </a></td>';

                            echo '<td><a href="/cheatplace.php?delid=' . $row['id'] . '"
                    type ="button" class = "btn btn-danger btn-sm">
                    <span>del</span>
                    </a></td>';

                            echo '<td><a href="/bookmark.php?id=' . $row['id'] . '"
                                type ="button" class = "btn btn-warning btn-sm"><span>mark</span></a>
                                </td>';

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