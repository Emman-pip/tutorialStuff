<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main {
            display: flex;
            justify-content:center;
            align-items: center;
            flex-direction:column;
            min-height: 100lvh;
            gap:2rem
        }
        form {
            display: grid;
            grid-template-columns: auto auto;
            gap: 1rem;
            width: fit-content;
        }
    </style>
</head>
<body>
    <main>
        <form action="madlibs.php" action="get">
            <label for="noun1">Enter noun#1: </label>
            <input type="text" require name="noun1">
            <label for="noun2">Enter noun#2: </label>
            <input type="text" name="noun2">
            <label for="name">Enter name: </label>
            <input type="text" name="name">
            <label for="color1">Enter color1: </label>
            <input type="text" name="color1">
            <label for="color2">Enter color2: </label>
            <input type="text" name="color2">
            <input type="submit">
        </form>
        <?php 
        if (
            isset($_GET["noun1"]) &&
            isset($_GET["noun2"]) &&
            isset($_GET["name"]) &&
            isset($_GET["color2"]) &&
            isset($_GET["color1"])
        ){
            echo "<div>";
            echo $_GET['noun1'] . " are " . $_GET["color1"] . "<br>";
            echo $_GET['noun2'] . " are " . $_GET["color2"] . "<br>";
            echo "I love " . $_GET["name"] . "<br>";
            echo "</div>";
        }
        
        ?>

    </main>
</body>
</html>