<?php 
//echo "hello";
// 1. mysql -> canceled
// 2. mysqli -> oop, functional
// 3. pdo -> oop

// Step 1. connect to database
try {
    $conn = new PDO('mysql:host=localhost;dbname=demo','root','mysql');
} catch(PDOException $e){
    echo $e->getMessage();die;
}

?>