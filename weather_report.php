<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>

<?php
// Define a variable temperature
$temperature = 10;


if ($temperature <= 0) {
    $message = "It's freezing!";
} elseif ($temperature > 0 && $temperature <= 15) {
    $message = "It's cool.";
} elseif ($temperature > 15 && $temperature <= 30) {
    $message = "It's warm.";
} else {
    $message = "It's hot!";
}
?>

<h1>Weather Report</h1>

<p>The current temperature is <?php echo $temperature; ?> degrees.</p>
<p><?php echo $message; ?></p>

</body>
</html>
