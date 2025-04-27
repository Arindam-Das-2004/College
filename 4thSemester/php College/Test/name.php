<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fname=strtolower(trim($_POST['first_name']));
    $mname=strtolower(trim($_POST['middle_name']));
    $lname=strtolower(trim($_POST['last_name']));
    $name=$fname;
    if($mname!="")
        $name=$name." ".$mname;
   
    $name= $name." ".$lname;
    $name=ucwords($name);

    echo "My name is : $name";
 

    ?>
</body>
</html>