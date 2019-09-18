<?php 

// 1. Connect to Database
require_once "database.php";

$product_id = $_GET['id'];

$sql1 = "Select from products where id = $product_id";

$stmt1 = $conn->prepare($sql1);

$stmt1->execute();

$product = $stmt1->fetch();

unlink($product->image);

$sql = "DELETE from products where id = $product_id ";
// step 2.2. query
$stmt = $conn->prepare($sql); 

// step 4;
$stmt->execute();
header('Location: index.php');
?>
