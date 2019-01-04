<!DOCTYPEhtml>
<html>
    <head>
        <title> LOGIN</title>
        <link rel="stylesheet" href="css/login_style.css"/>
    </head>
    <body class="container">
        <div class="a">
            <div class="a1">
                <div class="a11">
                    <a href="http://127.0.0.1/social_media/register_form.php">
                        <img class="logo" src="img/logo.png" alt="logo of the site"/>
                    </a>
                </div>
                <div class="a12">
                    <h1 class="sideh1">Existing User <br/>Log-in</h1>
                    <a class="anchor1" href="http://127.0.0.1/social_media/login_form.php">New User Create Account</a>
                </div>
            </div>
            <div class="a2">
                <h1 class="mainh1">Create Account</h1>
                <form method="post" action="register_submit.php">
                    Email<input class="form_element" type="text" name="email"/><br/>
                    Password<input class="form_element" type="password" name="password"/><br/>
                    <button class="createbtn" type="submit" name="submit" value="Submit">Log-in</button><br/><br/>
                </form>
                <a class="anchor1" href="http://127.0.0.1/social_media/login_form.php">New User Create Account</a>
            </div>
        </div>
        <div class="b">
        </div>
        <script type="text/javascript" src="js/login_script.js"></script>
    </body>
</html>
