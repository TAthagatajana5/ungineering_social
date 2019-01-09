<?php
    session_start();
    
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
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if(strlen($email)==0 || strlen($password)==0)
    {
        $response['success'] = false;
        $response['message'] = "Fill all the required fields";
        echo json_encode($response);
        exit();
    }
    
    
    $fetch="SELECT * FROM users";
    $result=mysqli_query($conn,$fetch);
    
    if (!$result) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    
    $flag=0;
    while ($row=mysqli_fetch_array($result)) {
        if($email==$row['email'] && $password==$row['password']){
            $flag=1;
            break;
        }
    }
    
    if($flag==0){
        $response['success'] = false;
        $response['message'] = "Login failed email and password not matched";
    } 
    else{
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $response['success'] = true;
        $response['message'] = "Welcome " . $row['name'];
     }  

    echo json_encode($response);
    mysqli_close($conn);


?>

