<!DOCTYPEhtml>
<html>
    <head>
        <title>REGISTER</title>
        <link rel="stylesheet" href="css/register_style.css"/>
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
                    <h1 class="sideh1">New User <br/> Create <br/> Account</h1>
                    <a class="anchor" href="http://127.0.0.1/social_media/login_form.php">Existing User Log-in</a>
                </div>
            </div>
            <div class="a2">
                <div class="a21">
                </div>
                <div class="a22">
                    <h1 class="mainh1">Create Account</h1>
                </div>
                <div class="a23">
                    <div class="a231">
                        <div class="a2311">
                            <p class="des">Name</p>
                        </div>
                        <div class="a2312">
                            <p class="des">Email</p>
                        </div>
                        <div class="a2313">
                            <p class="des">Password</p>
                        </div>
                        <div class="a2314">
                            <p class="des">Password</p>
                        </div>
                    </div>
                    <div class="a232">
                        <form method="post" action="register_submit.php">
                            <div class="a2321">
                                <input class="form_element" type="text" name="name"/>
                            </div>
                            <div class="a2322">
                                <input class="form_element" type="text" name="email"/>
                            </div>
                            <div class="a2323">
                                <input class="form_element" type="password" name="password"/>
                            </div>
                            <div class="a2324">
                                <input class="form_element" type="password" name="confirm_password"/>
                            </div>
                            <div class="a2325">
                                <button class="createbtn" type="submit" name="submit" value="Submit">Create Account</button>
                            </div>
                            <div class="a2326">
                                <a class="anchor1" href="http://127.0.0.1/social_media/login_form.php">Existing User Log-in</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="b">
        </div>
        <script type="text/javascript" src="js/register_script.js"></script>
    </body>
</html>
