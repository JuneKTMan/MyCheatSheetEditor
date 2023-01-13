<!DOCTYPE html>
<header>
    <link rel="stylesheet" href="../../bootstrap/css/login.css">

</header>



<body>

    <div class="main-container d-flex">
        <div class="form">
            <h1 class="reg_h1" style="text-align: center;">Register</h1>
            <p class="reg_p" style="text-align: center;">Create new user account</p>
            <form action="/php/function/accountserver.php" method="post">
                <div class="imgcontainer">
                    <img src="/img/brett-jordan-MHS7g_q-6mE-unsplash.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label class="reg_label" for="username">Username</label>
                    <input type="text" name="username" placeholder="username" id="username" class="form-control" required>

                    <label class="reg_label" for="password">Password</label>
                    <input type="text" name="password_1" placeholder="password" id="password_1" class="form-control" required>

                    <label class="reg_label" for="password">Confirm Password</label>
                    <input type="text" name="password_2" placeholder="confirm password" id="password_2" class="form-control" required>

                    <button type="reg_user" class="btn btn-primary ">Register</button>

                </div>

                <div class="container">
                    <a href="../../index.php" target="blank" class="cancelbtn">Cancel</a>
                    <span class="psw">Already have account? <a href="../../index.php">Login</a></span>
                </div>
            </form>

        </div>
    </div>
</body>
<footer>
    <section>
        <p>© 2022 by June Man Photo by Brett Jordan on Unsplash</p>
    </section>
</footer>

</html>