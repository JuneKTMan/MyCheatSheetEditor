<section class="contsubmit-section">
    <div class="container">
        <div class="row">
            <?php
            include('dbconnect.php');

            // extract($_POST);
            $fun = $_POST['fun'] ?? '';
            $language = $_POST['language'] ?? '';
            $cheat = $_POST['cheat'] ?? '';


            if (!isset($_POST['submit'])) {

                // $fun = $_POST['fun'];
                // $language = $_POST['language'];
                // $cheat = $_POST['cheat'];

                $fun = !isset($_POST['fun']) ? "" : $_POST['fun'];
                $language = !isset($_POST['language']) ? "" : $_POST['language'];
                $cheat  = !isset($_POST['cheat']) ? "" : $_POST['cheat'];


                if (isset($fun) && !empty($fun)) {
                    $insert_q = "INSERT INTO mycheatbook (fun, language, cheat)
                    VALUES('$fun','$language','$cheat')";

                    if (mysqli_query($conn, $insert_q)) {

            ?>
                        <h4 class="title-text">Yo! You save a new cheat!</h4>
            <?php
                    } else {
                        echo "Error: " . $insert_q . "<br>" . $conn->error;
                        // $submit_error = '<b class="text-danger text-center>Submittion error, please try again.</b>';
                    }
                }


                $conn->close();
            }

            //print_r($_POST);
            ?>
        </div>
    </div>
</section>

<div class="dashboard-content px-3 pt-4">
    <div class="container">
        <h2 class="fs-5">Write some cheats...</h2>
        <br><br>
        <form action="" method="post">
            <div class="form-group mb-3">
                <label for="fun">Function</label>
                <input type="text" name="fun" id="fun" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="language">Language</label>
                <select name="language" class="form-control" required>
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

            <div class="form-group mb-3">
                <label for="cheat">Cheat</label>
                <textarea class="ckeditor" name="cheat"></textarea>
            </div>
            <div class="form-group mb-3">

                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>
    </div>
</div>