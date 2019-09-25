<?php 

class Shopping {

    public $bill= 0;

    public function getRice($number){
      
        $this->bill = $this->bill +  $number*15000;
        return $this;
    }
    public function getFish($number){
        
        $this->bill = $this->bill + $number*50000;
        return $this;
    }
    public function getMango($number){
       
        $this->bill = $this->bill +  $number*18000;
        return $this;
    }
    public function getMeat($number){
      
        $this->bill = $this->bill +  $number*80000;
        return $this;
    }
}
$shopping = new Shopping();

$totalMoney  = $shopping->getRice(1)->getFish(2)->getMango(3)->getMeat(4);

echo($totalMoney->bill);