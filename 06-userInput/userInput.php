<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="userInput.php" method="get">
        <label for="name">Name: </label>
        <input type="text" name="name">
        <label for="name">Age: </label>
        <input type="text" name="age">
        <hr>
        <input type="submit">
    </form>
    <?php 
    echo $_GET["name"] ."<br>" .  $_GET["age"];
    ?>
</body>
</html>