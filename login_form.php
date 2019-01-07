<!DOCTYPEhtml>
<html>
    <head>
        <title>Log-in</title>
        <link rel="stylesheet" href="css/login_style.css"/>
    </head>
    <body class="container">
        <div class="a">
            <div class="a1">
                <div class="a11">
                    <a href="login_form.php">
                        <img class="logo" src="img/logo.png" alt="logo of the site"/>
                    </a>
                </div>
                <div class="a12">
                    <h1 class="sideh1">Existing User <br/> Log-in</h1>
                    <a class="anchor" href="register_form.php">New User Create Account</a>
                </div>
            </div>
            <div class="a2">
                <div class="a21">
                </div>
                <div class="a22">
                    <h1 class="mainh1">Log-in</h1>
                </div>
                <div class="a23">
                    <div class="a231">
                        <div class="a2311">
                            <p class="des">Email</p>
                        </div>
                        <div class="a2312">
                            <p class="des">Password</p>
                        </div>
                    </div>
                    <div class="a232">
                        <form method="post" action="login_submit.php">
                            <div class="a2321">
                                <input class="form_element" type="text" name="email"/>
                            </div>
                            <div class="a2322">
                                <input class="form_element" type="password" name="password"/>
                            </div>
                            <div class="a2323">
                                <button class="createbtn" type="submit" name="submit" value="Submit">Log-in</button>
                            </div>
                            <div class="a2324">
                                <a class="anchor1" href="register_form.php">New User Create Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="b">
        </div>
        <script type="text/javascript" src="js/login_script.js"></script>
    </body>
</html>
