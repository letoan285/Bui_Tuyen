<?php 
class Computer {
    public function __construct(){
        $this->name = 'HP';
    }
    public static $price = 888;


    public $address = "Viet Nam";

    public static $color = 'Yellow';


    public static function getPrice(){
        $x = new static;
        return $x;
    }

    public static function getAddress(){
        // return self->$address;
        // $n = new self();
        $n = new Computer();
        return $n->address;
    }

    public function getAddress1()
    {
        return 'Co Nhue, Hanoi';
    }

    public function getColor(){
        return self::$color;
    }
    function setAddress(){
        $this->address = $this;
    }
}
// Scope Resolution
// echo Computer::getPrice();
// $p = new Computer();
// echo $p::$price;
$x = new Computer();

$x->setAddress();
// var_dump($x->getPrice()->address);

echo $x->address->getAddress1();

// di cho mua do
//5 kg gao(rice), gia 15k/kg;
//4 kg ca(fish), gia 50k/kg
//6kg xoai(mango), gia 18k/kg
//14kg thit(meat), gia 80k/kg
// Cau hoi, viet class (BIll, ....);
//so tien phai tra $bill === getGiago()->getGiaC()->getMango()->getMeat(); tong so tien phai tra 