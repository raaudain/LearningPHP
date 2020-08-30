<?php 

class Car {

    static $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels() {
        Car::$wheels = 10;
    }

    function CreateDoors() {
        $this->doors = 6;
    }
    
}


$bmw = new Car();

Car::MoveWheels();
// Calling static
echo Car::$wheels;


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