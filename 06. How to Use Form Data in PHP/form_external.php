

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter username">
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <!-- "name" needed for super global $_POST -->
        <input type="submit" name="submit">
    </form>

</body>
</html>