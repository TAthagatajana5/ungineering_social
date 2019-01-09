<?php
    session_destroy();
    if(!isset($_SESSION['id'])){
         header('location:home.php');
    } 
?>

