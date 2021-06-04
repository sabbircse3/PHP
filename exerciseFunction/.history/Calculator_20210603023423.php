<?php
class Calculator
{
    function s($num1, $num2){
        return $num1 + $num2;
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
echo $obj->add();
?>