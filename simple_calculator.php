<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperature Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="text-center mt-5">
    <h1>Calculator</h1>

    <form method="post" action="">
        <label for="num1">Enter Number 1:</label>
        <input type="number" id="num1" name="num1" required><br>

        <label for="num2">Enter Number 2:</label>
        <input type="number" id="num2" name="num2" required><br>

        <label for="operation">Select Operation:</label>
        <select id="operation" name="operation" required>
            <option value="addition">Addition (+)</option>
            <option value="subtraction">Subtraction (-)</option>
            <option value="multiplication">Multiplication (*)</option>
            <option value="division">Division (/)</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

</div>

<?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        $operation = $_POST["operation"];
        $result = 0;

        // Perform the selected operation
        if ($operation === "addition") {
            $result = $num1 + $num2;
        } elseif ($operation === "subtraction") {
            $result = $num1 - $num2;
        } elseif ($operation === "multiplication") {
            $result = $num1 * $num2;
        } elseif ($operation === "division") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "<p class='error'>Division by zero is not allowed.</p>";
            }
        }

        // Display the result
        echo "<h2>Result:</h2>";
        echo "<p>{$num1} {$operation} {$num2} = {$result}</p>";
    }
?>

</body>
</html>