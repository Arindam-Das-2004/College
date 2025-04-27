<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Checker</title>
</head>
<body>


<form action="" method="POST">
  <label for="name">Enter your name:</label>
  <input type="text" name="name" placeholder="Enter your name here:">
  <br><br>
  <label for="email">Enter your Email:</label>
  <input type="email" name="email" placeholder="Enter your email here:">
  <br><br>
  <input type="submit" value="Check">
  <input type="reset" value="Reset the form">
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];

  if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
    echo "Welcome Mr/Mrs {$name}, and your email is {$email}";
  } else {
    echo "404: Invalid input. Please enter a proper email.";
  }
}
?>

</body>
</html>
