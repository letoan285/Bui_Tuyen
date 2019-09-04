<?php 
// $x = 1;
// $y = 1;
// // echo $x++;
// // echo ++$y;
// // echo "<br>";
// // echo $x;
// // echo $y;
// // $z = $x > $y ? 4 : 5;
// // echo $z;
// $n = 20;

// $m = $k ?? $n ?? $b ?? 'Nothing';
// $m = 3;
// function getM(){
//     global $m;
//     switch($m){
//         case 3:
//         echo 'm = 3';
//         //return $m;
//         case 9:
//         echo 'm > 9';
//         break;
//         default:
//         echo 'm = 0';
//         break;
//     }
// }
// getM();

// $value = getM();

// function getValue($x){
//     $y = $x*2;
//     return $y;
// }

// $x = getValue(8);

// echo $x + 6;
/**
 *for, foreach
 * while, do while
 *   */
// $names = ["Nguyen", "Van" , 'Troi'];

// // echo "$name";

// for($i = 0; $i < count($names); $i++ ){
//     echo $names[$i];
// }
// $num = [1,2,3,4,5,6,7,8,9];
// $arr = [];
// for($i = 0; $i < count($num); $i++){
//     if($num[$i] % 2 != 0){
//         $arr[] = $num[$i];
//     }
// }

// print_r($arr);

// $arr = array(1,4,6, 'name' => 'Tuyen', 9, 'age' => 40, 'Hello', [2,5,6, [6,8,9]]);
// echo $arr[4][][];
// Math 
// floor, ceil, round, pi, pow, cos, sin, max, min, rand, mt_rand,  
// rand(20,9);
// mt_rand(4,9);
// string function
// 
// $str = "this is my,  string";
// strlen(), str_word_count, trim(), ltrim, rtrim, strpos, str_replace('a', 'b', 'aa agahtoiaoheg'),
// mdt 

// echo md5('123abc');
// echo "<br>";
// echo sha1('123abc');
// ucfirst,
// explode(',', $str), htmlentities, 

// date, time, getdate, gettime, time_format, date_diff, date_add, date_create
// echo time(); 

// moment;

// echo uniqid();

// include, require
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> -->

<?php 
// require "header.php";

?>
    <!-- <div class="container">
    <h1>Day la body</h1>
    </div> -->

<?php 
// echo $xxx;
// require "footer.php";
// require_once "footer.php";
// function getName() {
//     return 3;
// }
?>
<!-- 
<h1>Hello H2</h1>
</body>
</html> -->
<!-- super global variable  -->

<?php 

// $GLOBALS,
// $_SERVER,
// $_REQUEST,
// $_FILES,
// $_ENV, 
// $_GET, 
// $_COOKIE,
// $_SESSION,
// $post 
// $x = 30;
// function getVar(){
//     // global $x;
//    $GLOBALS['z'] = $GLOBALS['x'] + 2;
    
// }

// getVar();
// echo $z;
// echo "<pre>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['SERVER_PROTOCOL'];
// echo "<br>";
// echo $_SERVER['SERVER_ADDR'];
// echo "<br>";
// echo $_SERVER['REQUEST_METHOD'];

// echo "<br>";
// echo $_SERVER['REQUEST_URI'];
// echo "<br>";
// echo $_SERVER['SERVER_PORT'];

// $name = $_GET['name'] ?? 'Tuyen';
// $name1 = $_POST['name'] ?? 'Tuyen';
// $name2 = $_REQUEST['name'];
// $file = $_FILES['avatar'];

// var_dump($file);die;
// $_FILES
// die;
// base64

// $name = 'Bui Tuyen';
// setcookie('name', 'Bui Tuyen', time()+3600);

// echo $_COOKIE['name'];
session_start();
// $_SESSION['name'] = 'Le Van Toan';
// unset($name);
// session_destroy();
// echo $name;
$name = $_SESSION['name'] ?? '404';
// echo $name;
if($name == '404'){
    header('location: notfound.php');
} else {
    header('location: cart.php');
}

?>

<!-- <form action="./" method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="ten co san">
    <input type="file" name="avatar">
    <button type="submit">Send</button>
</form> -->
<!-- php.ini  -->