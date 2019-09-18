<?php
// $productName = 'Iphone 11';
// $price = 2000;
// $stock = 90;
// $year = 2019;
// define('name', 'value');
// function getYear(){
//     return 2019;
// }

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html> -->

<?php 

class Animal {
    // Thuoc tinh
    public $name = 'Cho';
    protected $age = 10;
    public $aa = 999;
    private $account = 10000000;
    // var $xx = ;
    // public function Animal(){
        
    // }
    // -----------------
    public function getInfo()
    {
        return 'Ham info';
    }

    public function __construct(){
        $this->name = 'Con Meo';
        $this->info = 'Dummy info';
    }

    public function withDraw($acc){
        if($acc > $this->account){
             return $this->account;
        }
        return $acc;
    }

    // Phuong thuc
    function getAge(){
        // $a = 999;
        $this->aa = 9;
        return $this->aa;
    }
    // pht 2
    // pht 3
    // public function __destruct(){
    //     $this->age = 50;
    // }
}
// Instance
$milu = new Animal();
// $milu->address = 'Hanoi';
// // echo $milu->name;

// $milu->getAge();

// echo $milu->aa;

// var_dump($milu->age);die;
// Huong doi tuong (OOP);

//1. Tinh Ke Thua (inheritance);
//2. Tinh Dong goi(encapsulation);
//3. Tinh Truu tuong(Abstraction);
//4. Tinh Da hinh(polymophism);
$rut_tien = $milu->withDraw(9999999999999999999999999);
echo $rut_tien;