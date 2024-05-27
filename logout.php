<?php 

session_start();

if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
}

if(isset($_SESSION['is_admin'])){
    unset($_SESSION['is_admin']);
}

header("Location: login.php");
die;
