<?php

$hostname = "localhost";
$username = "root";
$db_password = "123456";
$db_name = "social_media";

$conn = mysqli_connect($hostname, $username, $db_password, $db_name);
if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if (strlen($name) == 0 || strlen($email) == 0 || strlen($password) == 0) {
    echo "Registation failed: fill all the required fields and try again<br/>";
    die("<a href='register_form.php'>Click Here</a>To Continue");
}

if ($password != $confirm_password) {
    echo "Registation failed: password not matched<br/>";
    die("<a href='register_form.php'>Click Here</a>To Continue");
}

$fetch = "SELECT * FROM users WHERE BINARY email='$email'";
$result = mysqli_num_rows(mysqli_query($conn, $fetch));

if ($result == 0) {
    $insert = "INSERT INTO users(name,email,password)VALUES('$name','$email','$password')";
    if (!mysqli_query($conn, $insert)) {
        die("Error:" . $sql . "<br/>" . mysqli_error($conn) . "<br/><a href='register_form.php'>Click Here</a>To Continue");
    }
    echo "Registration successful";
    mysqli_close($conn);
    header('location:login_form.php');
} else {
    echo "Registration failed: $email This email is already registered<br/>try with another email<br/>";
    die("<a href='register_form.php'>Click Here</a>To Continue");
}
?>

