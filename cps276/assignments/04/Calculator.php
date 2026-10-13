<?php
class Calculator{
    function calc($operator = null,$num1 = null,$num2 = null){
        $result = "";
        $errror = false;
        $ans = 0;
        if(is_numeric($num1) &&is_numeric($num2)){
            switch($operator){
                case "+":
                    $result.="<p>The calculation is $num1 + $num2. The answer is";
                    $ans = $num1+$num2;
                    $result.=" $ans. </p>";
                    break;
                case "-":
                    $result.="<p>The calculation is $num1 - $num2. The answer is";
                    $ans = $num1-$num2;
                    $result.=" $ans. </p>";
                    break;
                case "/":
                    $result.="<p>The calculation is $num1 / $num2. The answer is";
                    if($num2 == 0){
                    $result.=" cannot divide a number by zero.</p>";
                    }
                    else{
                    $ans = $num1/$num2;
                    $result.=" $ans. </p>";
                    }
                    break;
                case "*":
                    $result.="<p>The calculation is $num1 * $num2. The answer is";
                    $ans = $num1*$num2;
                    $result.=" $ans. </p>";
                    break;
                default:
                    $errror= true;
                    break;
        }}
        
        else{$errror = true;}
        if($errror){
            $result = "<p>Cannot perform operation. You must have three arguments. A string for the operator (+,-,*,/) and two integers or floats for the numbers.</p>";
        }
        return $result;
    }
}
?>