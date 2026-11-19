<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
</head>
<body>

<?php

$name = $_POST['name'];

$DELD = $_POST['DELD'];
$maths = $_POST['maths'];
$OOPS = $_POST['OOPS'];
$WT = $_POST['WT'];
$OS = $_POST['OS'];

$total = $DELD + $maths + $OOPS + $WT + $OS;

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
        <td>DELD</td>
        <td><?php echo $DELD; ?></td>
    </tr>

    <tr>
        <td>Maths</td>
        <td><?php echo $maths; ?></td>
    </tr>

    <tr>
        <td>OOPS</td>
        <td><?php echo $OOPS; ?></td>
    </tr>

    <tr>
        <td>WT</td>
        <td><?php echo $WT; ?></td>
    </tr>

    <tr>
        <td>OS</td>
        <td><?php echo $OS; ?></td>
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