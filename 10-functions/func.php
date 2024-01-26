<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sayHi($name){
        echo "Hello $name <br>";
    }

    function add($num1, $num2){
        return $num1 + $num2;
    }

    echo "sum: " . add(123123, 45323234);
    ?>
</body>
</html>