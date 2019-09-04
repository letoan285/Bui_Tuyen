<?php
// Get Login Information
session_start();

$user_name = $_REQUEST['username'];
$password = $_REQUEST['password'];
// var_dump($user_name, $password);die;

// Check session

if($user_name === $_SESSION['user_name'] && $password === $_SESSION['password'])  {
    header('Location: home.php');
}
else {
    header('Location: error.php');
}
?>