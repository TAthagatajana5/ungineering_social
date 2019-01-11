<?php

$hostname = "localhost";
$username = "root";
$db_password = "123456";
$db_name = "social_media";

$response = array();
$conn = mysqli_connect($hostname, $username, $db_password, $db_name);
if (!$conn) {
    $response['success'] = false;
    $response['message'] = "Connection failed: " . mysqli_connect_error();
    echo json_encode($response);
    exit();
}


$name = $_POST['name'];
$name=mysqli_real_escape_string($conn,$name);
$email = $_POST['email'];
$email=mysqli_real_escape_string($conn,$email);
$password = $_POST['password'];
$password=mysqli_real_escape_string($conn,$password);
$confirm_password = $_POST['confirm_password'];
$confirm_password=mysqli_real_escape_string($conn,$confirm_password);

if (strlen($name) == 0 || strlen($email) == 0 || strlen($password) == 0) {
    $response['success'] = false;
    $response['message'] = "Fill all the required fields";
    echo json_encode($response);
    exit();
}

if ($password != $confirm_password) {
    $response['success'] = false;
    $response['message'] = "Password not matched";
    echo json_encode($response);
    exit();
}

$fetch = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_num_rows(mysqli_query($conn, $fetch));

if ($result == 0) {
    $insert = "INSERT INTO users(name,email,password)VALUES('$name','$email','$password')";
    if (!mysqli_query($conn, $insert)) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    $response['success'] = true;
    $response['message'] = "Registration successful";
    echo json_encode($response);
    mysqli_close($conn);
} else {
    $response['success'] = false;
    $response['message'] = "This email is already register";
    echo json_encode($response);
    exit();
}
?>

