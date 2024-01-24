<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            width: fit-content;
        }
    </style>
</head>
<body>
    <main>
        <section class="calcu">
            <form action="simpleCalcu.php" method="get">
                <label for="number1">Enter num1: </label>
                <input type="number" name="number1">
                <label for="number1">Enter num2: </label>
                <input type="number" name="number2">
                <select name="operation" id="operation">
                    <option value="+">Addition</option>
                    <option value="-">Subtraction</option>
                    <option value="*">Multiplication</option>
                    <option value="/">Division</option>
                </select>
                <input type="Submit" text="SUBMIT">
            </form>
        </section>
    </main>
    
    <?php
    if (isset($_GET["operation"]) && isset($_GET["number1"]) && isset($_GET["number2"] ))
    {
        $operation = $_GET["operation"];
        $num1 = $_GET["number1"];
        $num2 = $_GET["number2"];
        echo "Answer: ";
        if ($operation == "+")
        { 
            echo $num1 + $num2;
        }
        else if ($operation == "-")
        {
            echo $num1 - $num2;
        }
        else if ($operation == "*")
        {
            echo $num1 * $num2;
        }
        else if ($operation == "/")
        {
            echo $num1 / $num2;
        }
    }
    ?>
</body>
</html>