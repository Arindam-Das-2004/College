<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <form action="name.php" method="POST">
        <label for="first"><b>
        Enter your details</b>
        </label>
        <br>
        <input type="text" name="first_name" id="first_name" placeholder="Enter Your First name:">
        <br><br>

        <input type="text" name="middle_name" id="middle_name" placeholder="Enter Your middle name:">
        <br>
        <br>
        
        <input type="text" name="last_name" id="last_name" placeholder="Enter Your last name:">
        <br>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">

    </form>
    </body>
</html>