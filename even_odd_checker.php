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
    <h1>Even Or Odd Checker</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="given_number">Enter Number:</label>
            <input type="number" id="given_number" name="given_number" placeholder="Enter number" required>
        </div>
        <br>
        <input type="submit" value="Check">
    </form>

</div>

<?php
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $given_number = $_POST["given_number"];
        if( $given_number % 2 == 0) {
            echo "<h2 class='text-center mt-3'>$given_number is <span class='text-success'>Even</span> number.</h2>";
        }else{
            echo "<h2 class='text-center mt-3'>$given_number is <span class='text-danger'>Odd</span> number.</h2>";
        }
    }
?>

</body>
</html>