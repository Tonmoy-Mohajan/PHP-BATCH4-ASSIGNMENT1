<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

//finding largest number
if($num1>$num2 && $num1>$num3){
    printf("%d is greater than %d and %d",$num1,$num2,$num3);
}else if($num2>$num1 && $num2>$num3){
    printf("%d is greater than %d and %d",$num2,$num1,$num3);
}else if($num3>$num1 && $num3>$num2){
    printf("%d is greater than %d and %d",$num3,$num1,$num2);
}else{
    printf("All numbers are equal");
}