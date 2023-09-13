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
<div class="text-center my-5">
    <h1>Weather Report</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" id="temperature" name="temperature" placeholder="Enter temperature" required>
        </div>
        <br>
        <input type="submit" value="Report">
    </form>

</div>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $temperature = $_POST["temperature"];
    if ($temperature <= 0) {
        echo "<h2 class='text-center'> Given temperature  <span class='text-danger'>{$temperature}</span> and <span class='text-danger'>It's freezing!</span></h2>";
    } elseif ($temperature < 20) {
        echo "<h2 class='text-center'> Given temperature  <span class='text-primary'>{$temperature}</span> and <span class='text-primary'>It's cool.</span></h2>";
    } elseif ($temperature >= 20) {
        echo "<h2 class='text-center'> Given temperature  <span class='text-success'>{$temperature}</span> and <span class='text-success'>It's warm.</span></h2>";
    }
}
?>

</body>
</html>