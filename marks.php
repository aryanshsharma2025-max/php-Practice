<!DOCTYPE html>
<html>
<head>
    <title>Enter Marks</title>
</head>
<body>

    <h2>Enter Student Marks</h2>

    <form action="marksheet.php" method="post">

        Name:
        <input type="text" name="name" required><br><br>

        English:
        <input type="number" name="english" required><br><br>

        Maths:
        <input type="number" name="maths" required><br><br>

        Science:
        <input type="number" name="science" required><br><br>

        Computer:
        <input type="number" name="computer" required><br><br>

        Hindi:
        <input type="number" name="hindi" required><br><br>

        <input type="submit" value="Generate Marksheet">

    </form>

</body>
</html>