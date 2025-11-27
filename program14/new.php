<?php
$message = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($mobile) || empty($password)) {
        $message = "All fields are required!";
    } else {
        $message  = "Registration Successful!<br>";
        $message .= "Name: " . $name . "<br>";
        $message .= "Email: " . $email . "<br>";
        $message .= "Mobile: " . $mobile;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Registration</title>
</head>
<body>
<center>
<h2>Registration Form</h2>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Mobile No: <input type="text" name="mobile"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Register">
</form>

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

