<?php 

if(isset($_POST["submit"])) {
    
    // $username = $_POST["username"];
    // $password = $_POST["password"];

    // if ($username && $password) {

    //     echo $username . "<br>";
    //     echo $password;

    // }
    // else {
    //     echo "NOOOO!";
    // }

    // Connect to server
    // myqli_connect("Server_URL", "username", "password", "name_of_database")
    $connection = mysqli_connect("localhost", "root", "", "loginapp");

    if ($connection) {
        echo "We are connected";
    }
    else {
        // Error message
        die("Database connection failed");
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="col-xs-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

</body>
</html>