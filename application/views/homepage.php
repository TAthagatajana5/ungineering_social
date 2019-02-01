<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="/static/css/home.css"/>
    </head>
    <body>
        <div>
            <div class="a">
                <div class="a1">
                    <div class="logo">
                        <a href="home.php">
                        <img src="/static/img/ungineering_logo.svg" id="s6"/> </a>
                    </div>
                    <div class="txt">

                        <div class="txt1">
                            <span id="un">un</span>
                            <span id="gin">gineering</span> 
                        </div>

                        <div class="txt2">
                            <h2 id="bit">
                                A <span id="bit1">bit</span> of knowledge is good</br>

                                A <span id="byte">byte</span> is better.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="a1">
                    <div class="nothing">
                    </div>
                    <?php
                    if (isset($_SESSION['id'])){
                    ?>
                    <div class="a11">
                        <a id="dash" href="dashboard.php" >My dashboard</a>
                    </div>
                    <div class="a12">
                      <a href="logout.php" >
                        <button id="logout" >logout</button></a>
                    </div>
                    
                    <?php }
                    else{ 
                    ?>
                     <div class="a11">
                        <a href="login_form.php" >
                        <button id="s4" >login</button></a>
                    </div>
                    <div class="a12">
                        <a href="register_form.php" >
                        <button id="s5" >New user</button></a>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="b">
                <?php
                if (isset($_SESSION['id'])) {
                    //echo $_SESSION['id'];
                    ?>
                    <div class="b1"><br></br>

                        <h1 id="write">Write something here</h1>
                        <form method=POST action="status_submit.php" id="status_form">
                            <textarea id="area" name="area" rows="15" cols="75"></textarea>
                            <input type="submit" name="submit" value="Submit" id="sub"/></br>
                        </form>
                        
                        <hr></hr>
                      
                    </div>
                    <?php
                }
                ?>
                <div class ="b2">
                    <?php
                        foreach($data as $row){
                    ?>
                        
                        <p class="p1">
                            </br>
                            <span class="name"><b>Name <?php echo $row['name'] ?></b></span></br></br>

                            <span class="stat"><?php echo $row['status'] ?></span></br></br>                               

                            <span class="time">TIME: <?php echo $row['date_time'] ?></span></br></br>

                        </p>
                    <?php }
                    ?>



                      <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
                      <script type="text/javascript" src="/static/js/submit.js"></script>
                </div>
            </div>
        </div>
    </body>
</html>

