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
        <form action="login_handler.php" method="POST">
            <div class="login-html">
                <div class="login-form">
                    <h1 class="word title"><span id="text">Welcome!</span></h1>
                    <h3 class="title and">Login form</h3>
                    <div class="group"><input id="user" type="text" name="username" class="input" placeholder="Username"
                            required></div>
                    <div class="group"><input id="pass" type="password" name="password" class="input"
                            data-type="password" placeholder="Password" required></div>
                    <div class="group"><input id="check" name="check" type="checkbox" class="check" checked required>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" name="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <h4>Or</h4>
                        <a href="signup.php" id="sign-up-link">Sign Up</a>
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