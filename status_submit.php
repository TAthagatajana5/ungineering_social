<?php
    session_start();   
    if(isset($_SESSION['id'])&&$_SESSION['id']!=NULL){
        $user_id=$_SESSION['id'];
    }

    $hostname="localhost";
    $username="root";
    $db_password="123456";
    $db_name="social_media";
    
    $response = array();
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();

    }

    $status=$_POST['area'];
    //echo"Your status:".$status;
    $sql="INSERT INTO statuses(status,user_id) VALUES ('$status',$user_id)";
    if(!mysqli_query($conn,$sql)){
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    //echo"Your status:".$status;
     $response['success'] = true;
     echo json_encode($response);
    mysqli_close();
    
?>
