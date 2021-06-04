<?php
class Calculator
{
    function sum($num1, $num2){
        $sum = $num1 + $num2;
        $min = $num1 - $num2;
        $mul = $num1 - $num2;
        
    }
    }
    function min($num1, $num2){
        return $num1 - $num2;
    }
    function mul($num1, $num2){
        return $num1 * $num2;
    }
    function div($num1, $num2){
        return $num1 / $num2;
    }
    function mod($num1, $num2){
        return $num1 % $num2;
    }
}

$obj = new Calculator();
echo $obj->sum(10, 20);
?>