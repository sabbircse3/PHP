<?php
class Calculator
{
    function sum($num1=10, $num2=40){
        $sum = $num1 + $num2;
        // $min = $num1 - $num2;
        // $mul = $num1 * $num2;
        // $div = $num1 / $num2;
        // $mod = $num1 % $num2;
        return $sum;
    }
    // return $sum;
    // return $min;
    // return $mul;
    // return $div;
    // return $mod;
    /** 
    function min($num1, $num2){
        $min $num1 - $num2;
        return $min;
    }
    function mul($num1, $num2){
        return $num1 * $num2;
        return $mul;
    }
    function div($num1, $num2){
        return $num1 / $num2;
        return $div;
    }
    function mod($num1, $num2){
        return $num1 % $num2;
        return $mod;
    }
    */
}

$obj = new Calculator();
echo $obj->sum();
?>