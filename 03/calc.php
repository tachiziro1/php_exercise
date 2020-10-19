<?php

use PhpParser\Node\Stmt\Echo_;

$num1=$_GET['num1'];
$num2=$_GET['num2'];
$operator=$_GET['operator'];

$num1;
$num2;
$operator;


switch ($operator) {
    case 'addition':
        $ans = $num1 + $num2;
        echo $num1.'+'. $num2.'='. $ans;
        break;
    case 'subtraction':
        $ans = $num1 - $num2;
        echo $num1.'-'. $num2.'='. $ans;
        break;
    case 'multiplication':
        $ans = $num1 * $num2;
        echo $num1.'×'. $num2.'='. $ans;
        break;
    case 'division':
        $ans = $num1 / $num2;
        echo $num1.'÷'. $num2.'='. $ans;
        break;
    default:
        echo '正しい演算子を指定して下さい';
        break;
}




?>