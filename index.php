<!DOCTYPE html>
<header>
    <link rel="stylesheet" href="/bootstrap/css/login.css">

</header>

<body class="loginBackground">

    <div class="main-container d-flex">
        <div class="form">
            <h1 class="login_h1" style="text-align: center;">My Cheat Book</h1>
            <p class="login_p" style="text-align: center;">Make your own study resources</p>
            <form action="/php/function/login_fun.php" method="post">

                <div class="container">
                    <label class="login_label" for="username">Username</label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" class="form-control" required>

                    <label class="login_label" for="password">Password</label>
                    <input type="text" placeholder="Enter Password" name="password" id="password" class="form-control" required>
                    <button type="log_user" class="btn btn-primary ">Login</button>
                    <label class="login_label">
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container">
                    <span class="psw">New User? <a href="/php/include/register.php" class="regbtn">Register</a></span>
                </div>
            </form>

        </div>
    </div>
</body>
<footer>
    <section>
        <p>© 2022 by June Man Photo by Cathryn Lavery on Unsplash</p>
    </section>
</footer>

</html>