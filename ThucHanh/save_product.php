<?php
// 1. Connect to Database
require_once "database.php";

// 2. Collect Data from FORM

$name = $_POST['name'];
$price = $_POST['price'];
$file = $_FILES['image'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$image = $file['name'];

// dd($image);
// Write and prepare sql
$sql = "INSERT INTO products(name, description, category_id, price, image) VALUES(:name, :description, :category_id, :price, :image)";

$stmt = $conn->prepare($sql);
// Bind value
$stmt->bindValue(":name", $name);
$stmt->bindValue(":description", $description);
$stmt->bindValue(":category_id", $category_id);
$stmt->bindValue(":price", $price);
if($file['size'] > 0){
    $fileName = 'uploads/'.time().'-'.$image;
    $stmt->bindValue(":image", $fileName);
    move_uploaded_file($file['tmp_name'], $fileName);
} else {
    $stmt->bindValue(":image", 'noimage.png');
}
//Execute
$stmt->execute();
// Redirect to other page
header("location: index.php");

?>

<?php 




?>