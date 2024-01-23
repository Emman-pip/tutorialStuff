<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $phrase = "Hello po";
        echo "<p>" . strtoupper($phrase) . "</p>" ;
        echo "<p>" .strtolower($phrase) . "</p>";
        echo "<p>" . var_dump($phrase) . "</p>";
        echo "<p>" .  str_replace("Hello", "Jello",  $phrase)  . "</p>";
        echo "<p>" .  substr($phrase, 0, 5)  . "</p>";
        // echo ($phrase[0]);

    ?>
</body>
</html>