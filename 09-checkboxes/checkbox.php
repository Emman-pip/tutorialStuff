<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="POST">
        <label>Apple</label>
        <input type="checkbox" name="fruits[]" value="apple">
        <br>
        <label>orange</label>
        <input type="checkbox" name="fruits[]" value = "orange">
        <br>
        <label>grapes</label>
        <input type="checkbox" name="fruits[]" value="grapes">
        <br>
        <input type="submit">
    </form>
    <?php
    $data = $_POST["fruits"]; 
    echo count($data) . "<br>"; 
    foreach($data as $value){
        echo $value . "<br>";
    }
    ?>
</body>
</html>