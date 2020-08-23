<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

function init(){
    saySomething();
    echo "<br>";
    calculate();
}

function saySomething(){
    echo "Hello";
}

//saySomething();

function calculate(){
    echo 5 * 5;
}

init();

?>

</body>
</html>