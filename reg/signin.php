<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">

</head>

<body>




    <div class="login-wrap">
        <form action="login_handler.php" onsubmit="return isvalid()" method="POST">
            <div class="login-html">
                <div class="login-form">
                    <h1 class="word title"><span id="text">Welcome!</span></h1>
                    <h3 class="title and">Login form</h3>

                    <?php
                    session_start();
                    if (isset($_SESSION['error_message'])) {
                        echo '<div style="color: red; margin-bottom: 15px;font-size: 12px;margin-left: 10px;">' . $_SESSION['error_message'] . '</div>';
                        unset($_SESSION['error_message']);
                    }
                    if (isset($_SESSION['username_error'])) {
                        echo '<div style="color: red;margin-bottom: 10px;font-size: 12px;margin-left: 10px;">' . $_SESSION['username_error'] . '</div>';
                        unset($_SESSION['username_error']);
                    }
                    if (isset($_SESSION['password_error'])) {
                        echo '<div style="color: red;margin-bottom: 10px;font-size: 12px;margin-left: 10px;">' . $_SESSION['password_error'] . '</div>';
                        unset($_SESSION['password_error']);
                    }
                    ?>
                    <div class="group">
                        <form method="post" action="">
                            <input id="user" type="text" name="username" class="input" placeholder="Username" required>
                    </div>
                    <div class="group">
                        <input id="pass" type="password" name="password" class="input" data-type="password"
                            placeholder="Password" required>
                    </div>
                    <div class="group"><input id="check" name="check" type="checkbox" class="check" checked required>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" name="submit" class="button" value="Sign In">
        </form>
    </div>
    <div class="hr"></div>
    <div class="foot-lnk">
        <h4>Or</h4>
        <a class="reg" href="signup.php" id="sign-up-link">Sign Up</a>
    </div>
    </div>
    </div>
    </form>

    <div class="switch-form">

    </div>
    </div>


    <script src="js/sw.js" defer></script>
</body>

</html>