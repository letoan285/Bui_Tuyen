<?php 
//echo "hello";
// 1. mysql -> canceled
// 2. mysqli -> oop, functional
// 3. pdo -> oop

// Step 1. connect to database
try {
    $conn = new PDO("mysql:host=localhost; dbname=bui_tuyen_database; charset=utf8", "root", "");
} catch(PDOException $e){
    echo $e->getMessage();die;
}

function dd($x){
    var_dump($x);die;
}

?>