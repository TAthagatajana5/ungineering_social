<?php
    session_start();
    
    $hostname="localhost";
    $username="root";
    $db_password="123456";
    $db_name="social_media";
    
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if(strlen($email)==0 || strlen($password)==0)
    {
        echo "log-in failed: fill all the required fields and try again<br/>";
        die("<a href='login_form.php'>Click Here</a>To Continue");
    }
    
    
    $fetch="SELECT * FROM users";
    $result=mysqli_query($conn,$fetch);
    
    if (!$result) {
        die("Error: " . $fetch . "<br>" . mysqli_error($conn));
    }
    
    $flag=0;
    while ($row=mysqli_fetch_array($result)) {
        if($email==$row['email'] && $password==$row['password']){
            $flag=1;
            break;
        }
    }
    
    if($flag==0){
        echo  "log-in unsuccessful try again";
        die("<a href='login_form.php'>Click Here</a>To Continue");
    } 
    else{
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        header('location:home_login.php');
     }    	

    mysqli_close($conn);


?>

