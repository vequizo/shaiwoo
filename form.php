<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry Form</title>
</head>
<body>
    <h2>Enter Your Information</h2>
    <form action="index.php" method="POST">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" required><br><br>
        
        <label for="mname">Middle Name:</label><br>
        <input type="text" id="mname" name="mname"><br><br>
        
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname" required><br><br>
        
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="address">Address:</label><br>
        <textarea id="address" name="address" required></textarea><br><br>
        
        <label for="course_and_sec">Course and Section:</label><br>
        <input type="text" id="cas" name="course_and_sec" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
