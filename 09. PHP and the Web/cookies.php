<?php 



$name = "timm";
$value = 100;
$expire = time() + (60*60*24*7); // 60x60x24x7 is a week

setcookie($name, $value, $expire);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if(isset($_COOKIE["timm"])) {
    $someOne = $_COOKIE["timm"];
    echo $someOne;
}
else {
    $someOne = "";
}

?>

</body>
</html>