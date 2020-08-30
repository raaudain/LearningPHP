<?php 

class Car {

    function MoveWheels() {
        echo "Wheels move";
    }
    
}

if (method_exists("Car", "MoveWheels")) {
    echo "Method exists";
}
else {
    echo "Method doesn't exist";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>