<?php
$students = []; 
$ascending = [];
$descending = [];

if (isset($_POST['submit'])) {
    $input = $_POST['names'];

    if (!empty($input)) {
     
        $students = array_map('trim', explode(",", $input)); 
 $ascending = $students;
        sort($ascending);
        $descending = $students;
        rsort($descending);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Names Input</title>
</head>
<body>

<h2>Enter Student Names </h2>

<form method="post" action="">
    <input type="text" name="names" size="50" placeholder="">
    <input type="submit" name="submit" value="Submit">
</form>

<?php if (!empty($students)): ?>

    <h3>Original List:</h3>
    <ul>
        <?php foreach ($students as $name) {
            echo "<li>$name</li>";
        } ?>
    </ul>

    <h3>Ascending Order :</h3>
    <ul>
        <?php foreach ($ascending as $name) {
            echo "<li>$name</li>";
        } ?>
    </ul>

    <h3>Descending Order :</h3>
    <ul>
        <?php foreach ($descending as $name) {
            echo "<li>$name</li>";
        } ?>
    </ul>

<?php endif; ?>

</body>
</html>

