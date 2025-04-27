<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $num = $_POST['num'];
  
    if ($num < 2) {
        echo "$num is not a prime number.";
    } else {
        $is_prime = true;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $is_prime = false;
                break;
            }
        }
        
        if ($is_prime) {
            echo "$num is a prime number.";
        } else {
            echo "$num is not a prime number.";
        }
    }
?>

</body>
</html>