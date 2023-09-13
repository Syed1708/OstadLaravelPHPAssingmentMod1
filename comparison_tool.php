<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    // Use the ternary operator
    $largerNumber = ($number1 > $number2) ? $number1 : $number2;
}
?>

<h1>Comparison Tool</h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Enter the first number:
    <input type="text" name="number1" required>
    <br>
    Enter the second number:
    <input type="text" name="number2" required>
    <br>
    <input type="submit" value="Compare">
</form>

<?php
if (isset($largerNumber)) {
    echo "<h2>Result:</h2>";
    echo "<p>The larger number is: $largerNumber</p>";
}
?>

</body>
</html>
