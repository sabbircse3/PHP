<?php
class Calculator
{
    function sum($num1, $num2){
         $sum = $num1 + $num2;
         $min = $num1 - $num2;
         $mul = $num1 * $num2;
         $div = $num1 / $num2;
         $mod = $num1 % $num2;
         return $sum.'-'.$min.'-'.$mul.'-'.$div.'-'.$mod;
    }
    /** 
    // return $sum;
    // return $min;
    // return $mul;
    // return $div;
    // return $mod;
    */
  
    function min($num1, $num2){
        $min = $num1 - $num2;
        return $min;
    }
    function mul($num1, $num2){
        $mul = $num1 * $num2;
        return $mul;
    }
    function div($num1, $num2){
        $div = $num1 / $num2;
        return $div;
    }
    function mod($num1, $num2){
        $mod = $num1 % $num2;
        return $mod;
    }
    
}

$obj = new Calculator();
$sum = $obj->sum(40, 10);
$explode = explode('-',$sum);
var_dump($explode);//array dekhano hoyese
//echo $explode[1];
// echo $obj->min(10, 20);
// echo $obj->mul(10, 20);
// echo $obj->div(10, 20);
// echo $obj->mod(10, 20);
?>