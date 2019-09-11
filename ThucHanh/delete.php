<?php 

// 1. Connect to Database
require_once "database.php";

$product_id = $_GET['id'];


$sql = "DELETE from products where id = $product_id ";
// step 2.2. query
$stmt = $conn->prepare($sql); 

// step 4;
$stmt->execute();
header('Location: index.php');
?>
