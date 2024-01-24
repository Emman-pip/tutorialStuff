<?php 
# operator precedence
# always group with parenthesis to prevent precedence hugs
    $num  = 2;
    $num2  = 3;
# arithmetic
    echo $num + $num2 . ("\n");
    echo $num - $num2  . ("\n");
    echo $num * $num2  . ("\n");
    echo $num / $num2  . ("\n");
    echo $num % $num2  . ("\n");
    echo $num ** $num2  . ("\n");
# increment decrement
    echo  $num++ . ("\n");
    echo ++$num . ("\n");
    echo  $num-- . ("\n");
    echo --$num . ("\n");
# references
    $c = &$num2;
    echo "this is referenced value: " . $c;
/* 
  comparison operators
    == , ===
    >=, <=
    !=, <>
    <=>
*/
?>