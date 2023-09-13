<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    // Check the number is even or odd
    if ($number % 2 == 0) {
        $result = "Even";
    } else {
        $result = "Odd";
    }
}
?>

<h1>Even or Odd Checker</h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Enter a number:
    <input type="text" name="number" required>
    <br>
    <input type="submit" value="Check">
</form>

<?php
if (isset($result)) {
    echo "<h2>Result:</h2>";
    echo "<p>The number $number is $result.</p>";
}
?>

</body>
</html>
