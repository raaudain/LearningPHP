<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

function addNums($num1, $num2){
    $sum = $num1 + $num2;

    return $sum;
}

$result = addNums(2,3);
echo $result;

?>

</body>
</html>