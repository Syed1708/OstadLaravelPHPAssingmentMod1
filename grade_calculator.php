<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs
    $test1 = $_POST["test1"];
    $test2 = $_POST["test2"];
    $test3 = $_POST["test3"];

    // Calculate the average
    $average = ($test1 + $test2 + $test3) / 3;

    // Determine letter grade
    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }
}
?>

<h1>Grade Calculator</h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Enter score Bangla:
    <input type="text" name="test1" required>
    <br>
    Enter score English:
    <input type="text" name="test2" required>
    <br>
    Enter score Math:
    <input type="text" name="test3" required>
    <br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($average) && isset($grade)) {
    echo "<h2>Result:</h2>";
    echo "<p>Average Score: $average</p>";
    echo "<p>Letter Grade: $grade</p>";
}
?>

</body>
</html>
