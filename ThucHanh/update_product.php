<?php
// 1. Connect to Database
require_once "database.php";

// 2. Collect Data from FORM
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['image'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];

$file = $image['name'];


$sql1 = "SELECT * FROM products WHERE id = :id";
$stmt1 = $conn->prepare($sql1);
$stmt1->bindValue(":id", $id);
$stmt1->execute();

$product = $stmt1->fetch();

if(!$product){
    echo "San pham khong ton tai"; die;
}
if($image['size'] > 0){
    $sql = "UPDATE products set name =:name, price =:price, image=:image, description=:description, category_id=:category_id WHERE id=:id";
    
} else {
    $sql = "UPDATE products set name =:name, price =:price, description=:description, category_id=:category_id WHERE id=:id";
}
$stmt =  $conn->prepare($sql);

$stmt->bindValue(":name", $name);
$stmt->bindValue(":price", $price);
if($image['size'] > 0){    
    $fileName = 'uploads/'.time().'-'.$file;
    $stmt->bindValue(":image", $fileName);
    move_uploaded_file($image['tmp_name'], $fileName);

    $stmt->bindValue(":image", $fileName);
}
$stmt->bindValue(":description", $description);
$stmt->bindValue(":category_id", $category_id);
$stmt->bindValue(":id", $id);

if($stmt->execute()){
    header("location: index.php");
} else {
    echo "Update that bai"; die;
}