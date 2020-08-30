<?php 

class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty() {
        echo $this->hood;
    }

    function CreateDoors() {
        $this->doors = 6;
    }
    
}

// Object
$bmw = new Car();
echo $bmw->showProperty();

class Semi extends Car {
    private $engine = 1;

}

$semi = new Semi();
echo $semi->showProperty();


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