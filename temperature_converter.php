<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>


<?php

// convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// convert Fahrenheit to Celsius
function fahrenheitToCelsius($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $conversionDirection = $_POST["conversionDirection"];

    if ($conversionDirection == "celsiusToFahrenheit") {
        $result = celsiusToFahrenheit($temperature);
        $originalUnit = "Celsius";
        $convertedUnit = "Fahrenheit";
    } elseif ($conversionDirection == "fahrenheitToCelsius") {
        $result = fahrenheitToCelsius($temperature);
        $originalUnit = "Fahrenheit";
        $convertedUnit = "Celsius";
    }
}
?>

<h1>Temperature Converter</h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Enter temperature:
    <input type="text" name="temperature" required>
    <br>
    Select conversion direction:
    <select name="conversionDirection" required>
        <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
        <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
    </select>
    <br>
    <input type="submit" value="Convert">
</form>

<?php
if (isset($result)) {
    echo "<h2>Result:</h2>";
    echo "<p>{$temperature} {$originalUnit} is equal to {$result} {$convertedUnit}.</p>";
}
?>

</body>
</html>



