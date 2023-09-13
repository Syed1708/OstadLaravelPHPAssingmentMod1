<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    //operation
    switch ($operation) {
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero is not allowed.";
            }
            break;
        default:
            $result = "Invalid operation.";
    }
}
?>

<h1>Simple Calculator</h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Enter the first number:
    <input type="text" name="num1" required>
    <br>
    Enter the second number:
    <input type="text" name="num2" required>
    <br>
    Select the operation:
    <select name="operation">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select>
    <br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($result)) {
    echo "<h2>Result:</h2>";
    echo "<p>The result of the operation is: $result</p>";
}
?>

</body>
</html>
