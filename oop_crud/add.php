<?php 
require_once "Product.php";

$product = new Product();

$product->name = $_POST['name'];
$product->price = $_POST['price'];
$product->description = $_POST['description'];
$product->image = $_POST['image'];
$product->status = $_POST['status'];
$product->category_id = $_POST['category_id'];
$product->slug = $_POST['slug'];


$product->save();

header('location: index.php');

?>