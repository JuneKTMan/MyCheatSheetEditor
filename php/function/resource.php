<section class="contsubmit-section">
    <div class="container">
        <div class="row">
            <?php
            include('dbconnect.php');

            // extract($_POST);

            if (!isset($_POST['submit'])) {

                //$fun = !isset($_POST['fun']) ? "" : $_POST['fun'];
                // $resource = $_POST['resource'];
                // $language = $_POST['language'];
                // $about = $_POST['about'];
                // $url = $_POST['url'];

                $resource = !isset($_POST['resource']) ? "" : $_POST['resource'];
                $language = !isset($_POST['language']) ? "" : $_POST['language'];
                $about = !isset($_POST['about']) ? "" : $_POST['about'];
                $url = !isset($_POST['url']) ? "" : $_POST['url'];


                if (isset($resource) && !empty($resource)) {
                    $insert_q = "INSERT INTO studyresource (resource, language, about, url)
                    VALUES('$resource','$language','$about', '$url')";

                    if (mysqli_query($conn, $insert_q)) {
                        $successMessage = "You have saved some new resources.";
                        echo $successMessage;

            ?>
                        <!-- <h4>You have saved some new resources.</h4> -->
            <?php
                    } else {
                        echo "Error: " . $insert_q . "<br>" . $conn->error;
                        // $submit_error = '<b class="text-danger text-center>Submittion error, please try again.</b>';
                    }
                }
            }

            $conn->close();

            //print_r($_POST);
            ?>
        </div>
    </div>
</section>

<div class="dashboard-content px-3 pt-4">
    <div class="container">
        <h2 class="fs-5">Save your own study resources</h2>
        <br>
        <form action="" method="POST">
            <div class="form-group mb-3">
                <label for="resource">Resource from</label>
                <select name="resource" class="form-control" required>
                    <option value="">--Select resources--</option>
                    <option value="stackoverflow">stackoverflow</option>
                    <option value="w3schools">W3Schools</option>
                    <option value="geeksforgeeks">geeksforgeeks</option>
                    <option value="github">Github</option>
                    <option value="youtube">Youtube</option>
                    <option value="other">Other</option>
                </select>

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
                    <option value="Css">Other</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="about">About</label>
                <input type="text" name="about" id="about" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="url">URL</label>
                <input type="text" name="url" id="url" class="form-control" required>
            </div>

            <div class="form-group mb-3">

                <button type="submit" class="btn btn-primary ">Save</button>
            </div>
        </form>

    </div>
</div>