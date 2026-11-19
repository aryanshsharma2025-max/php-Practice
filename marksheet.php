<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
</head>
<body>

<?php

$name = $_POST['name'];

$english = $_POST['english'];
$maths = $_POST['maths'];
$science = $_POST['science'];
$computer = $_POST['computer'];
$hindi = $_POST['hindi'];

$total = $english + $maths + $science + $computer + $hindi;

$percentage = $total / 5;

if($percentage >= 90)
    $grade = "A+";
elseif($percentage >= 75)
    $grade = "A";
elseif($percentage >= 60)
    $grade = "B";
elseif($percentage >= 40)
    $grade = "C";
else
    $grade = "F";

?>

<h2>Student Marksheet</h2>

<p><b>Name:</b> <?php echo $name; ?></p>

<table border="1" cellpadding="10">
    <tr>
        <th>Subject</th>
        <th>Marks</th>
    </tr>

    <tr>
        <td>English</td>
        <td><?php echo $english; ?></td>
    </tr>

    <tr>
        <td>Maths</td>
        <td><?php echo $maths; ?></td>
    </tr>

    <tr>
        <td>Science</td>
        <td><?php echo $science; ?></td>
    </tr>

    <tr>
        <td>Computer</td>
        <td><?php echo $computer; ?></td>
    </tr>

    <tr>
        <td>Hindi</td>
        <td><?php echo $hindi; ?></td>
    </tr>
</table>

<br>

<b>Total Marks:</b> <?php echo $total; ?> / 500
<br><br>

<b>Percentage:</b> <?php echo $percentage; ?>%
<br><br>

<b>Grade:</b> <?php echo $grade; ?>

</body>
</html>