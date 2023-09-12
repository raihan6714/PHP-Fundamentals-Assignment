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
        <h1>Temperature Conversion</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="temperature">Enter Temperature:</label>
                <input type="number" id="temperature" name="temperature" placeholder="Enter temperature" required>
            </div>
            <br>
            <div class="form-group">
                <label for="conversionType">Conversion Type:</label>
                <select id="conversionType" name="conversionType" required>
                    <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
                    <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
                </select>
            </div>
            <br>
            <input type="submit" value="Convert">
        </form>

    </div>

    <?php
        // Check if the form has been submitted
        if($_SERVER["REQUEST_METHOD"] === "POST")
        {
            $temperature = floatval($_POST["temperature"]);
            $conversionType = $_POST["conversionType"];
            $convertedTemperature = 0 ;

            // Perform the temperature conversion
            if ($conversionType == "celsiusToFahrenheit")
            {
                $convertedTemperature = ($temperature * 9/5) + 32;
            }elseif ($conversionType == "fahrenheitToCelsius")
            {
                $convertedTemperature = ($temperature - 32) * 9/5 ;
            }
            echo "<h2 class='text-center mt-2'>Converted Temperature: </h2>";
            echo "<p class='text-center'> 
                    {$temperature} degrees ". ($conversionType === "celsiusToFahrenheit" ? "Celsius" : "Fahrenheit")
                    . "is approximately {$convertedTemperature} degrees " .($conversionType === "celsiusToFahrenheit" ? "Fahrenheit" : "Celsius") . " 
                  </p>";
        }

    ?>
</body>
</html>