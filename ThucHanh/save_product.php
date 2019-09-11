<?php
// 1. Connect to Database
require_once "database.php";

// 2. Collect Data from FORM

$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];

// var_dump($name, $price, $image, $description, $category_id);die;
$sql = "INSERT INTO products(name, description, category_id, price, image) VALUES(:name, :description, :category_id, :price, :image)";

?>

<?php 




?>