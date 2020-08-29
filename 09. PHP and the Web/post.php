<?php 

echo $_POST["name"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="post.php" method="post">
    <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>