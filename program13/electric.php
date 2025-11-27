<?php
$message = "";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $units = $_POST['units'];

    if (empty($name) || empty($units)) {
        $message = "All fields are required!";
    } elseif (!is_numeric($units) || $units < 0) {
        $message = "Please enter valid units!";
    } else {

        $units = (int)$units;
        $bill = 0;

        // Tariff Calculation
        if ($units <= 100) {
            $bill = $units * 5;
        } elseif ($units <= 200) {
            $bill = (100 * 5) + (($units - 100) * 7);
        } else {
            $bill = (100 * 5) + (100 * 7) + (($units - 200) * 10);
        }

        $message  = "Electricity Bill<br><br>";
        $message .= "Name: $name <br>";
        $message .= "Units Consumed: $units <br>";
        $message .= "Total Amount: ₹" . number_format($bill, 2);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
<center>
<h2>Electricity Bill Form</h2>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Units Consumed: <input type="text" name="units"><br><br>
    <input type="submit" name="submit" value="Generate Bill">
</form>

<!-- OUTPUT AT THE BOTTOM -->
<div style="margin-top: 40px; font-weight: bold;">
    <?php 
        if (!empty($message)) {
            echo $message;
        }
    ?>
</div>
</center>
</body>
</html>

