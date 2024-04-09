<head>
    <link rel="stylesheet" href="login.css">
</head>
<form id="sign-up-form" action="signup_handler.php" method="POST">
    <div class="login-wrap">
        <div class="login-html">
            <div class="login-form">
                <h1 class="word title"><span id="text">Welcome!</span></h1>
                <h3 class="title and">Registeration form</h3>
                <div class="group">

                    <?php 
if(isset($user_error)){

echo '<p style="color: red;margin-left: 10px;font-size: 12px;margin: 0;">* Invalid username</p>';

}
?>
                    <input id="user2" type="text" name="signup_username" class="input" placeholder="Username">
                </div>
                <div class="group">
                    <?php 
if(isset($pass_error)){
    echo '<p style="color: red;margin-left: 10px;font-size: 12px;margin: 0;"> * Invalid password</p>';
}
?>
                    <input id="pass2" type="password" name="signup_password" class="input" data-type="password"
                        placeholder="Password">
                </div>
                <div class="group">

                    <?php
                if(isset($email_error)){
echo '<p style="color: red;margin-left: 10px;font-size: 12px;margin: 0;"> * Invalid email</p>';
}
?>
                    <input id="email" type="text" class="input" name="email" placeholder="Email Address">
                </div>
                <div class="group">
                    <input type="submit" name="submit" class="button" value="Sign Up">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1"><a class="reg" href="signin.php">Already Member?</a></label>
                </div>
            </div>
        </div>
    </div>
</form>