<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student Information</h2>
    <form action="/FORM_SUBMIT_ASSIGNMENT/PHP/Test.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" placeholder="First Name" name="first_name" required>
        <br><br>
        <label for="Age">Enter Age</label>
        <input type="number" id="Age" placeholder="Age" name="Age" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['first_name'];
        $age = $_POST['Age'];
        echo "<h3>Student Information</h3>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age;
    }
    ?>
</body>
</html>
