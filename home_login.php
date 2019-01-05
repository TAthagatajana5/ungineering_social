<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/home_login.css"/>
    </head>
    <body>
        <div>
            <div class="a">
                <div class="a1" >
                    <div class="logo">
                        <img src="img/ungineering_logo.svg" id="s6"/> 
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
                    <div class="a11">
                        <input type="submit" name="submit" value="My Dashboard" id="s4"/>
                    </div>
                    <div class="a12">
                      
                        <input type="submit" name="submit" value="logout" id="s5"/>
                    </div>
                </div>
            </div>
            <div class="b">
                
                    <div class="b1"><br></br>
                
                    <h1 id="write">Write something here</h1>
                    <form method=POST action="status_submit.php">
                    <textarea id="area" name="area" rows="15" cols="75"></textarea>
                    <input type="submit" name="submit" value="Submit" id="sub"/></br>
                    </form>
                    <hr></hr>
                    
                </div>
                 <div class ="b2">
                <?php
                $hostname = "localhost";
                $username = "root";
                $db_password = "123456";
                $database = "social_media";

                $conn = mysqli_connect($hostname, $username, $db_password, $database);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
               
                $sql = "SELECT * FROM statuses";

                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Error: " . $sql . "<br>" . mysqli_error($conn));
                }
                $c=0;
                while ($row=mysqli_fetch_array($result)) {
                    $c++;
                }

                for($i=$c-1;$i>=0;$i--)
                {
                ?>
                <p class="p1">
                    </br>
                    <?php
                        

                        $sql = "SELECT
                                     users.name, statuses.status, statuses.date_time
                                FROM
                                     statuses
                                INNER JOIN
                                    users
                                ON
                                    statuses.user_id=users.id
                                AND
                                    users.id=$i+1"
                                
                               ;    
                                
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            die("Error: " . $sql . "<br>" . mysqli_error($conn));
                        }

                        while ($row=mysqli_fetch_array($result)) {?>
                    <span class="name"><b>Name <?php echo $row['name']?></b></span></br></br>
                
                    <span class="stat"><?php echo $row['status']?></span></br></br>                               
                
                    <span class="time">TIME: <?php echo $row['date_time']?></span></br></br>
                    <?php } ?>
                </p>
                <?php }?>
                
                
                
               
            </div>
            </div>
        </div>
    </body>
</html>
                
