<?php 

//================= Register Session
session_start();
// ========================= Get Data from Register Form
$userName = $_REQUEST['username'];
$fullName = $_REQUEST['full-name'];
$email = $_REQUEST['email'];
$lang = $_REQUEST['lang'];
$password = $_REQUEST['password'];


var_dump($lang);die;
$_SESSION['user_name'] = $userName ;
$_SESSION['full_name'] = $fullName ;
$_SESSION['email'] = $email ;
$_SESSION['password'] = $password ;

// ================= Success redirect to Login

header('Location: login.php');
exit();
?>