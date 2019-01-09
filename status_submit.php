<?php
    session_start();   
    if(isset($_SESSION['id'])&&$_SESSION['id']!=NULL){
        $user_id=$_SESSION['id'];
    }

    $hostname="localhost";
    $username="root";
    $db_password="123456";
    $db_name="social_media";

    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }

    $status=$_POST['area'];
    //echo"Your status:".$status;
    $sql="INSERT INTO statuses(status,user_id) VALUES ('$status',$user_id)";
    if(!mysqli_query($conn,$sql)){
        die("Error:".$sql."<br/>".mysqli_error($conn));
    }
    //echo"Your status:".$status;
    mysqli_close();
?>
