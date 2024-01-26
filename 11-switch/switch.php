<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $grade = 1.2;

    switch($grade){
        case 1.25:
            echo "GOOD!";
            break;
        default:
            echo "Okay";
            break;
    }
    ?>
    
</body>
</html>