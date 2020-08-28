<?php


// Connect to server
// myqli_connect("Server_URL", "username", "password", "name_of_database")
$connection = mysqli_connect("localhost", "root", "", "loginapp");

if ($connection) {
    echo "We are connected";
} else {
    // Error message
    die("Database connection failed");
}

// Inserts into columns in users table
$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed" . mysqli_error());
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
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <pre>
                        <?php
                        print_r($row);
                        ?>
                    </pre>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>